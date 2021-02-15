<?php
/**
 ***********************************************************************************************
 * Particpation modal window for events
 *
 * @copyright 2004-2021 The Admidio Team
 * @see https://www.admidio.org/
 * @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0 only
 *
 * $getDateId - ID of the date
 * $getUserId - ID of the User whose participation detail shall be set or changed
 ***********************************************************************************************
 */
require_once(__DIR__ . '/../../system/common.php');
require(__DIR__ . '/../../system/login_valid.php');

// Initialize and check the parameters
$getDateId = admFuncVariableIsValid($_GET, 'dat_id', 'int', array('requireValue' => true));
$getUserId = admFuncVariableIsValid($_GET, 'usr_id', 'int', array('defaultValue' => (int) $gCurrentUser->getValue('usr_id')));

// Initialize local variables
$disableAdditionalGuests = HtmlForm::FIELD_HIDDEN;
$disableComments         = HtmlForm::FIELD_HIDDEN;
$gMessage->showThemeBody(false);

// Get the date object
$date = new TableDate($gDb, $getDateId);

// Get the fingerprint of calling user. If is not the user itself check the requesting user whether it has the permission to edit the states
if ((int) $gCurrentUser->getValue('usr_id') === $getUserId)
{
    if(!$date->allowedToParticipate())
    {
        $gMessage->show($gL10n->get('SYS_NO_RIGHTS'));
    }
}
else
{
    if (!$gCurrentUser->isAdministrator() && !$gCurrentUser->isLeaderOfRole((int) $date->getValue('dat_rol_id')))
    {
        $gMessage->show($gL10n->get('SYS_NO_RIGHTS'));
    }
}

// Read participants
$participants = new Participants($gDb, (int) $date->getValue('dat_rol_id'));
$participantsArray = $participants->getParticipantsArray((int) $date->getValue('dat_rol_id'));

// If extended options for participation are allowed then show in form
if ((int) $date->getValue('dat_allow_comments') === 1 || (int) $date->getValue('dat_additional_guests') === 1)
{
    if ((int) $date->getValue('dat_allow_comments') === 1)
    {
        $disableComments = HtmlForm::FIELD_DEFAULT;
    }
    if ((int) $date->getValue('dat_additional_guests') === 1)
    {
        $disableAdditionalGuests = HtmlForm::FIELD_DEFAULT;
    }
}

$member = new TableMembers($gDb);
$member->readDataByColumns(array('mem_rol_id' => (int) $date->getValue('dat_rol_id'), 'mem_usr_id' => $getUserId));

// Write header with charset utf8
header('Content-type: text/html; charset=utf-8');

// Add javascript
echo '<script>
    $("button[id^=btn_attend_]").click(function() {
        // Select current form and action attribute
        var submitParticipationForm = $(this).get(0).form;
        var formAction = $(submitParticipationForm).attr("action");

        // add value 3 to mode attribute in link for participation
        $(submitParticipationForm).attr("action", formAction + 3);
        submitParticipationForm.submit();
    });

    $("button[id^=btn_tentative_]").click(function() {
        var submitParticipationForm = $(this).get(0).form;
        var formAction = $(submitParticipationForm).attr("action");

        $(submitParticipationForm).attr("action", formAction + 7);
        submitParticipationForm.submit();
    });

    $("button[id^=btn_refuse_]").click(function() {
        var submitParticipationForm = $(this).get(0).form;
        var formAction = $(submitParticipationForm).attr("action");

        $(submitParticipationForm).attr("action", formAction + 4);
        submitParticipationForm.submit();
    });
</script>';

// Define form
$participationForm = new HtmlForm('participate_form_'. $getDateId, SecurityUtils::encodeUrl(ADMIDIO_URL.FOLDER_MODULES.'/dates/dates_function.php', array('dat_id' => $getDateId, 'usr_id' => $getUserId, 'mode' => '')), null, array('type' => 'default', 'method' => 'post', 'setFocus' => false));
$participationForm->addHtml('
    <div class="modal-header">
        <h3 class="modal-title">' .$gL10n->get('SYS_EVENTS_CONFIRMATION_OF_PARTICIPATION') . '</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
        <h5>' .$date->getValue('dat_headline'). ': ' .$date->getDateTimePeriod(). '</h5>
    ');
$participationForm->addMultilineTextInput(
    'dat_comment', $gL10n->get('SYS_COMMENT'), $member->getValue('mem_comment'), 6,
    array('class' => 'form-control', 'maxLength' => 1000, 'property' => $disableComments)
);
$participationForm->addInput(
    'additional_guests', $gL10n->get('SYS_SEAT_AMOUNT'), (int) $member->getValue('mem_count_guests'),
    array('class' => 'form-control', 'type' => 'number', 'property' => $disableAdditionalGuests)
);
$participationForm->addHtml('</div><div class="modal-footer">');
$participationForm->openButtonGroup();
$participationForm->addButton(
    'btn_attend_' . $getDateId, $gL10n->get('DAT_ATTEND'),
    array('icon' => 'fa-check-circle', 'class' => 'admidio-event-approval-state-attend')
);

if ($gSettingsManager->getBool('dates_may_take_part'))
{
    $participationForm->addButton(
        'btn_tentative_' . $getDateId, $gL10n->get('DAT_USER_TENTATIVE'),
        array('icon' => 'fa-question-circle', 'class' => 'admidio-event-approval-state-tentative')
    );
}

$participationForm->addButton(
    'btn_refuse_' . $getDateId, $gL10n->get('DAT_CANCEL'),
    array('icon' => 'fa-times-circle', 'class' => 'admidio-event-approval-state-cancel')
);
$participationForm->closeButtonGroup();
$participationForm->addHtml('</div></div>');
// Output form
echo $participationForm->show();
