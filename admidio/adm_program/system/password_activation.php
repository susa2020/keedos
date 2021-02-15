<?php
/**
 ***********************************************************************************************
 * Activate new password
 *
 * @copyright 2004-2021 The Admidio Team
 * @see https://www.admidio.org/
 * @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0 only
 *
 * Parameters:
 *
 * aid      ..  Activation id for confirmation of new password
 * usr_id   ..  Id of the user who wants a new password
 ***********************************************************************************************
 */
require_once(__DIR__ . '/common.php');

// Initialize and check the parameters
$getActivationId = admFuncVariableIsValid($_GET, 'aid',    'string', array('requireValue' => true));
$getUserId       = admFuncVariableIsValid($_GET, 'usr_id', 'int',    array('requireValue' => true));

// "systemmail" and "request password" must be activated
if (!$gSettingsManager->getBool('enable_system_mails') || !$gSettingsManager->getBool('enable_password_recovery'))
{
    $gMessage->show($gL10n->get('SYS_MODULE_DISABLED'));
    // => EXIT
}

try
{
    $user = new User($gDb, $gProfileFields, $getUserId);

    if ($user->getValue('usr_activation_code') === $getActivationId)
    {
        // activate the new password
        $user->saveChangesWithoutRights();
        // set new password
        $user->setPassword($user->getValue('usr_new_password'), false, false);
        // reset the column usr_new_password
        $user->setPassword('', true, false);
        $user->setValue('usr_activation_code', '');
        $user->save(false);

        // if user has tried login several times we should reset the invalid counter,
        // so he could login with the new password immediately
        $user->resetInvalidLogins();

        $gMessage->setForwardUrl(ADMIDIO_URL.'/adm_program/system/login.php', 2000);
        $gMessage->show($gL10n->get('SYS_PWACT_PW_SAVED'));
        // => EXIT
    }
    else
    {
        $gMessage->show($gL10n->get('SYS_PWACT_CODE_INVALID'));
        // => EXIT
    }
}
catch(AdmException $e)
{
    $e->showHtml();
    // => EXIT
}
