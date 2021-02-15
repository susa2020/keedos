<?php
/**
 ***********************************************************************************************
 * Show role members list
 *
 * @copyright 2004-2021 The Admidio Team
 * @see https://www.admidio.org/
 * @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0 only
 *
 * Parameters:
 *
 * mode:            Output(html, print, csv-ms, csv-oo, pdf, pdfl)
 * date_from:       Value for the start date of the date range filter (default: current date)
 * date_to:         Value for the end date of the date range filter (default: current date)
 * lst_id:          Id of the list configuration that should be shown.
 *                  If id is null then the default list of the role will be shown.
 * rol_ids:         Id of the role or an integer array of all role ids whose members should be shown
 * show_former_members: 0 - (Default) show members of role that are active within the selected date range
 *                      1 - show only former members of the role
 ***********************************************************************************************
 */
require_once(__DIR__ . '/../../system/common.php');

unset($list);

// Initialize and check the parameters
$editUserStatus       = false;
$getDateFrom          = admFuncVariableIsValid($_GET, 'date_from',           'date', array('defaultValue' => DATE_NOW));
$getDateTo            = admFuncVariableIsValid($_GET, 'date_to',             'date', array('defaultValue' => DATE_NOW));
$getMode              = admFuncVariableIsValid($_GET, 'mode',                'string', array('defaultValue' => 'html', 'validValues' => array('csv-ms', 'csv-oo', 'html', 'print', 'pdf', 'pdfl')));
$getListId            = admFuncVariableIsValid($_GET, 'lst_id',              'int');
$getRoleIds           = admFuncVariableIsValid($_GET, 'rol_ids',             'string'); // could be int or int[], so string is necessary
$getShowFormerMembers = admFuncVariableIsValid($_GET, 'show_former_members', 'bool', array('defaultValue' => false));
$getRelationTypeIds   = admFuncVariableIsValid($_GET, 'urt_ids',             'string'); // could be int or int[], so string is necessary

// check if the module is enabled and disallow access if it's disabled
if (!$gSettingsManager->getBool('groups_roles_enable_module'))
{
    $gMessage->show($gL10n->get('SYS_MODULE_DISABLED'));
    // => EXIT
}

$roleIds = array_map('intval', array_filter(explode(',', $getRoleIds), 'is_numeric'));
$numberRoles = count($roleIds);

if ($numberRoles === 0)
{
    $gMessage->show($gL10n->get('SYS_NO_ROLE_GIVEN'));
    // => EXIT
}

// determine all roles relevant data
$roleName        = $gL10n->get('SYS_VARIOUS_ROLES');
$htmlSubHeadline = '';
$showLinkMailToList = true;
$hasRightViewFormerMembers = true;
$showComment = true;
$showCountGuests = true;

if ($numberRoles > 1)
{
    $sql = 'SELECT rol_id, rol_name, rol_valid
              FROM '.TBL_ROLES.'
             WHERE rol_id IN ('.Database::getQmForValues($roleIds).')';
    $rolesStatement = $gDb->queryPrepared($sql, $roleIds);
    $rolesData      = $rolesStatement->fetchAll();

    foreach ($rolesData as $role)
    {
        $roleId = (int) $role['rol_id'];

        // check if user has right to view all roles
        // only users with the right to assign roles can view inactive roles
        if (!$gCurrentUser->hasRightViewRole($roleId)
        || ((int) $role['rol_valid'] === 0 && !$gCurrentUser->checkRolesRight('rol_assign_roles')))
        {
            $gMessage->show($gL10n->get('SYS_NO_RIGHTS'));
            // => EXIT
        }

        // check if user has right to send mail to role
        if (!$gCurrentUser->hasRightSendMailToRole($roleId))
        {
            $showLinkMailToList = false;
            // => do not show the link
        }

        if (!$gCurrentUser->hasRightViewFormerRolesMembers($roleId))
        {
            $hasRightViewFormerMembers = false;
        }

        $htmlSubHeadline .= ', '.$role['rol_name'];
    }

    $htmlSubHeadline = substr($htmlSubHeadline, 2);
}
else
{
    $role = new TableRoles($gDb, $roleIds[0]);

    // If its an event list and user has right to edit user states then a additional column with edit link is shown
    if ($role->getValue('cat_name_intern') === 'EVENTS')
    {
        $event = new TableDate($gDb);
        $event->readDataByRoleId($roleIds[0]);

        $showComment = $event->getValue('dat_allow_comments');
        $showCountGuests = $event->getValue('dat_additional_guests');

        if ($getMode === 'html' && ($gCurrentUser->isAdministrator() || $gCurrentUser->isLeaderOfRole($roleIds[0])))
        {
            $editUserStatus = true;
        }
    }

    // check if user has right to view role
    // only users with the right to assign roles can view inactive roles
    if (!$gCurrentUser->hasRightViewRole($roleIds[0])
    || ((int) $role->getValue('rol_valid') === 0 && !$gCurrentUser->checkRolesRight('rol_assign_roles')))
    {
        $gMessage->show($gL10n->get('SYS_NO_RIGHTS'));
        // => EXIT
    }

    // check if user has right to send mail to role
    if (!$gCurrentUser->hasRightSendMailToRole($roleIds[0]))
    {
        $showLinkMailToList = false;
        // => do not show the link
    }

    $roleName         = $role->getValue('rol_name');
    $htmlSubHeadline .= $role->getValue('cat_name');
    $hasRightViewFormerMembers = $gCurrentUser->hasRightViewFormerRolesMembers($roleIds[0]);
}

// if user should not view former roles members then disallow it
if(!$hasRightViewFormerMembers)
{
    $getShowFormerMembers = false;
    $getDateFrom = DATE_NOW;
    $getDateTo   = DATE_NOW;
}

// Create date objects and format dates in system format
$objDateFrom = \DateTime::createFromFormat('Y-m-d', $getDateFrom);
if ($objDateFrom === false)
{
    // check if date_from  has system format
    $objDateFrom = \DateTime::createFromFormat($gSettingsManager->getString('system_date'), $getDateFrom);
}
$dateFrom = $objDateFrom->format($gSettingsManager->getString('system_date'));
$startDateEnglishFormat = $objDateFrom->format('Y-m-d');

$objDateTo = \DateTime::createFromFormat('Y-m-d', $getDateTo);
if ($objDateTo === false)
{
    // check if date_from  has system format
    $objDateTo = \DateTime::createFromFormat($gSettingsManager->getString('system_date'), $getDateTo);
}
$dateTo = $objDateTo->format($gSettingsManager->getString('system_date'));
$endDateEnglishFormat = $objDateTo->format('Y-m-d');

if($objDateFrom > $objDateTo)
{
    $gMessage->show($gL10n->get('SYS_DATE_END_BEFORE_BEGIN'));
    // => EXIT
}

// read names of all used relationships for later output
$relationTypeName = '';
$relationTypeIds = array_map('intval', array_filter(explode(',', $getRelationTypeIds), 'is_numeric'));
if (count($relationTypeIds) > 0)
{
    $sql = 'SELECT urt_id, urt_name
              FROM '.TBL_USER_RELATION_TYPES.'
             WHERE urt_id IN ('.Database::getQmForValues($relationTypeIds).')
          ORDER BY urt_name';
    $relationTypesStatement = $gDb->queryPrepared($sql, $relationTypeIds);

    while($relationType = $relationTypesStatement->fetch())
    {
        $relationTypeName .= (empty($relationTypeName) ? '' : ', ').$relationType['urt_name'];
    }
}

// if no list parameter is set then load role default list configuration or system default list configuration
if ($numberRoles === 1 && $getListId === 0)
{
    // set role default list configuration
    $getListId = $role->getDefaultList();

    if ($getListId === 0)
    {
        $gMessage->show($gL10n->get('SYS_DEFAULT_LIST_NOT_SET_UP'));
        // => EXIT
    }
}

// initialize some special mode parameters
$separator   = '';
$valueQuotes = '';
$charset     = '';
$classTable  = '';
$orientation = '';

switch ($getMode)
{
    case 'csv-ms':
        $separator   = ';';  // Microsoft Excel 2007 or new needs a semicolon
        $valueQuotes = '"';  // all values should be set with quotes
        $getMode     = 'csv';
        $charset     = 'iso-8859-1';
        break;
    case 'csv-oo':
        $separator   = ',';  // a CSV file should have a comma
        $valueQuotes = '"';  // all values should be set with quotes
        $getMode     = 'csv';
        $charset     = 'utf-8';
        break;
    case 'pdf':
        $classTable  = 'table';
        $orientation = 'P';
        $getMode     = 'pdf';
        break;
    case 'pdfl':
        $classTable  = 'table';
        $orientation = 'L';
        $getMode     = 'pdf';
        break;
    case 'html':
        $classTable  = 'table table-condensed';
        break;
    case 'print':
        $classTable  = 'table table-condensed table-striped';
        break;
    default:
}

// Array to assign names to tables
$arrColName = array(
    'usr_login_name'       => $gL10n->get('SYS_USERNAME'),
    'usr_photo'            => $gL10n->get('SYS_PHOTO'),
    'mem_begin'            => $gL10n->get('SYS_START'),
    'mem_end'              => $gL10n->get('SYS_END'),
    'mem_leader'           => $gL10n->get('SYS_LEADERS'),
    'mem_approved'         => $gL10n->get('SYS_PARTICIPATION_STATUS'),
    'mem_usr_id_change'    => $gL10n->get('SYS_CHANGED_BY'),
    'mem_timestamp_change' => $gL10n->get('SYS_CHANGED_AT'),
    'mem_comment'          => $gL10n->get('SYS_COMMENT'),
    'mem_count_guests'     => $gL10n->get('SYS_SEAT_AMOUNT')
);

// Array for valid columns visible for current user.
// Needed for PDF export to set the correct colspan for the layout
// Maybe there are hidden fields.
$arrValidColumns = array();

$mainSql = ''; // Main SQL statement for lists
$csvStr = ''; // CSV file as string

try
{
    // create list configuration object and create a sql statement out of it
    $list = new ListConfiguration($gDb, $getListId);

    // remove columns that are not necessary for the selected role
    if(!$showComment)
    {
        $list->removeColumn('mem_comment');
    }
    if(!$showCountGuests)
    {
        $list->removeColumn('mem_count_guests');
    }

    // create the main sql
    $mainSql = $list->getSQL($roleIds, $getShowFormerMembers, $startDateEnglishFormat, $endDateEnglishFormat, $relationTypeIds);
}
catch (AdmException $e)
{
    $e->showHtml();
}
// determine the number of users in this list
$listStatement = $gDb->query($mainSql); // TODO add more params
$numMembers = $listStatement->rowCount();

// get all members and their data of this list in an array
$membersList = $listStatement->fetchAll(\PDO::FETCH_BOTH);

$userIdList = array();
foreach ($membersList as $member)
{
    $user = new User($gDb, $gProfileFields, $member['usr_id']);

    // besitzt der User eine gueltige E-Mail-Adresse? && aktuellen User ausschließen
    if (StringUtils::strValidCharacters($user->getValue('EMAIL'), 'email') && (int) $gCurrentUser->getValue('usr_id') !== (int) $member['usr_id'])
    {
        $userIdList[] = $member['usr_id'];
    }
}

// define title (html) and headline
$title = $gL10n->get('SYS_LIST').' - '.$roleName;
if (strlen($list->getValue('lst_name')) > 0)
{
    $headline = $roleName.' - '.$list->getValue('lst_name');
}
else
{
    $headline = $roleName;
}

if (count($relationTypeIds) === 1)
{
    $headline .= ' - '.$relationTypeName;
}
elseif (count($relationTypeIds) > 1)
{
    $headline .= ' - '.$gL10n->get('SYS_VARIOUS_USER_RELATION_TYPES');
}

// if html mode and last url was not a list view then save this url to navigation stack
if ($getMode === 'html' && !str_contains($gNavigation->getUrl(), 'lists_show.php'))
{
    $gNavigation->addUrl(CURRENT_URL);
}

if ($getMode !== 'csv')
{
    $datatable = false;
    $hoverRows = false;

    if ($getMode !== 'html')
    {
        if ($getShowFormerMembers === 1)
        {
            $htmlSubHeadline .= ' - '.$gL10n->get('SYS_FORMER_MEMBERS');
        }
        else
        {
            if ($getDateFrom === DATE_NOW && $getDateTo === DATE_NOW)
            {
                $htmlSubHeadline .= ' - '.$gL10n->get('SYS_ACTIVE_MEMBERS');
            }
            else
            {
                $htmlSubHeadline .= ' - '.$gL10n->get('SYS_MEMBERS_BETWEEN_PERIOD', array($dateFrom, $dateTo));
            }
        }
    }

    if (count($relationTypeIds) > 1)
    {
        $htmlSubHeadline .= ' - '.$relationTypeName;
    }

    if ($getMode === 'print')
    {
        // create html page object without the custom theme files
        $page = new HtmlPage('admidio-lists-show', $headline);
        $page->setPrintMode();
        $page->setTitle($title);
        $page->addHtml('<h5>'.$htmlSubHeadline.'</h5>');
        $table = new HtmlTable('adm_lists_table', $page, $hoverRows, $datatable, $classTable);
    }
    elseif ($getMode === 'pdf')
    {
        $pdf = new TCPDF($orientation, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Admidio');
        $pdf->SetTitle($headline);

        // remove default header/footer
        $pdf->setPrintHeader(true);
        $pdf->setPrintFooter(false);
        // set header and footer fonts
        $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set auto page breaks
        $pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);
        $pdf->SetMargins(10, 20, 10);
        $pdf->setHeaderMargin(10);
        $pdf->setFooterMargin(0);

        // headline for PDF
        $pdf->setHeaderData('', 0, $headline);

        // set font
        $pdf->SetFont('times', '', 10);

        // add a page
        $pdf->AddPage();

        // Create table object for display
        $table = new HtmlTable('adm_lists_table', null, $hoverRows, $datatable, $classTable);
        $table->addAttribute('border', '1');
    }
    elseif ($getMode === 'html')
    {
        $datatable = true;
        $hoverRows = true;

        // create html page object
        $page = new HtmlPage('admidio-lists-show', $headline);
        $page->setTitle($title);

        // create selectbox with all list configurations
        $sql = 'SELECT lst_id, lst_name, lst_global
                  FROM '.TBL_LISTS.'
                 WHERE lst_org_id = ? -- $gCurrentOrganization->getValue(\'org_id\')
                   AND (  lst_usr_id = ? -- $gCurrentUser->getValue(\'usr_id\')
                       OR lst_global = 1)
                   AND lst_name IS NOT NULL
              ORDER BY lst_global ASC, lst_name ASC';
        $pdoStatement = $gDb->queryPrepared($sql, array((int) $gCurrentOrganization->getValue('org_id'), (int) $gCurrentUser->getValue('usr_id')));

        $listConfigurations = array();
        while($row = $pdoStatement->fetch())
        {
            $listConfigurations[] = array((int) $row['lst_id'], $row['lst_name'], (bool) $row['lst_global']);
        }

        foreach($listConfigurations as &$rowConfigurations)
        {
            if($rowConfigurations[2] == 0)
            {
                $rowConfigurations[2] = $gL10n->get('SYS_YOUR_LISTS');
            }
            else
            {
                $rowConfigurations[2] = $gL10n->get('SYS_GENERAL_LISTS');
            }
        }
        unset($rowConfigurations);

        // add list item for own list
        $listConfigurations[] = array('mylist', $gL10n->get('SYS_EDIT_LISTS'), $gL10n->get('SYS_CONFIGURATION'));

        // add navbar with filter elements and the selectbox with all lists configuraitons
        $filterNavbar = new HtmlNavbar('menu_list_filter', null, null, 'filter');
        $form = new HtmlForm('navbar_filter_form', ADMIDIO_URL.FOLDER_MODULES.'/groups-roles/lists_show.php', $page, array('type' => 'navbar', 'setFocus' => false));
        $form->addSelectBox(
            'list_configurations', $gL10n->get('SYS_CONFIGURATION_LIST'), $listConfigurations,
            array('defaultValue' => $getListId)
        );


        // Only for active members of a role and if user has right to view former members
        if ($hasRightViewFormerMembers)
        {
            // create filter menu with elements for start-/enddate
            $form->addInput('date_from', $gL10n->get('SYS_ROLE_MEMBERSHIP_IN_PERIOD'), $dateFrom, array('type' => 'date', 'maxLength' => 10));
            $form->addInput('date_to', $gL10n->get('SYS_ROLE_MEMBERSHIP_TO'), $dateTo, array('type' => 'date', 'maxLength' => 10));
            $form->addInput('lst_id', '', $getListId, array('property' => HtmlForm::FIELD_HIDDEN));
            $form->addInput('rol_ids', '', $getRoleIds, array('property' => HtmlForm::FIELD_HIDDEN));
            $form->addCheckbox('show_former_members', $gL10n->get('SYS_SHOW_FORMER_MEMBERS_ONLY'), $getShowFormerMembers);
            $form->addSubmitButton('btn_send', $gL10n->get('SYS_OK'));
        }

        $filterNavbar->addForm($form->show());
        $page->addHtml($filterNavbar->show());

        $page->addHtml('<h5>'.$htmlSubHeadline.'</h5>');
        $page->addJavascript('
            $("#list_configurations").change(function() {
                elementId = $(this).attr("id");
                roleId    = elementId.substr(elementId.search(/_/) + 1);

                if ($(this).val() === "mylist") {
                    self.location.href = "' . SecurityUtils::encodeUrl(ADMIDIO_URL . FOLDER_MODULES . '/groups-roles/mylist.php', array('rol_ids' => $getRoleIds)) . '";
                } else {
                    self.location.href = "' . SecurityUtils::encodeUrl(ADMIDIO_URL . FOLDER_MODULES . '/groups-roles/lists_show.php', array('mode' => 'html', 'rol_ids' => $getRoleIds, 'show_former_members' => $getShowFormerMembers, 'date_from' => $getDateFrom, 'date_to' => $getDateTo)) . '&lst_id=" + $(this).val();
                }
            });

            $("#menu_item_mail_to_list").click(function() {
                redirectPost("'.ADMIDIO_URL.FOLDER_MODULES.'/messages/messages_write.php", {lst_id: "'.$getListId.'", userIdList: "'.implode(',', $userIdList).'"});
                return false;
            });

            $("#menu_item_lists_print_view").click(function() {
                window.open("'.SecurityUtils::encodeUrl(ADMIDIO_URL.FOLDER_MODULES.'/groups-roles/lists_show.php', array('lst_id' => $getListId, 'rol_ids' => $getRoleIds, 'mode' => 'print', 'show_former_members' => $getShowFormerMembers, 'date_from' => $getDateFrom, 'date_to' => $getDateTo)).'", "_blank");
            });',
            true
        );

        // link to print overlay and exports
        $page->addPageFunctionsMenuItem('menu_item_lists_print_view', $gL10n->get('SYS_PRINT_PREVIEW'), 'javascript:void(0);', 'fa-print');

        // dropdown menu item with all export possibilities
        $page->addPageFunctionsMenuItem('menu_item_lists_export', $gL10n->get('SYS_EXPORT_TO'), '#', 'fa-file-download');
        $page->addPageFunctionsMenuItem('menu_item_lists_csv_ms', $gL10n->get('SYS_MICROSOFT_EXCEL'),
            SecurityUtils::encodeUrl(ADMIDIO_URL.FOLDER_MODULES.'/groups-roles/lists_show.php', array('lst_id' => $getListId, 'rol_ids' => $getRoleIds, 'show_former_members' => $getShowFormerMembers, 'date_from' => $getDateFrom, 'date_to' => $getDateTo, 'mode' => 'csv-ms')),
            'fa-file-excel', 'menu_item_lists_export');
        $page->addPageFunctionsMenuItem('menu_item_lists_pdf', $gL10n->get('SYS_PDF').' ('.$gL10n->get('SYS_PORTRAIT').')',
            SecurityUtils::encodeUrl(ADMIDIO_URL.FOLDER_MODULES.'/groups-roles/lists_show.php', array('lst_id' => $getListId, 'rol_ids' => $getRoleIds, 'show_former_members' => $getShowFormerMembers, 'date_from' => $getDateFrom, 'date_to' => $getDateTo, 'mode' => 'pdf')),
            'fa-file-pdf', 'menu_item_lists_export');
        $page->addPageFunctionsMenuItem('menu_item_lists_pdfl', $gL10n->get('SYS_PDF').' ('.$gL10n->get('SYS_LANDSCAPE').')',
            SecurityUtils::encodeUrl(ADMIDIO_URL.FOLDER_MODULES.'/groups-roles/lists_show.php', array('lst_id' => $getListId, 'rol_ids' => $getRoleIds, 'show_former_members' => $getShowFormerMembers, 'date_from' => $getDateFrom, 'date_to' => $getDateTo, 'mode' => 'pdfl')),
            'fa-file-pdf', 'menu_item_lists_export');
        $page->addPageFunctionsMenuItem('menu_item_lists_csv', $gL10n->get('SYS_CSV').' ('.$gL10n->get('SYS_UTF8').')',
            SecurityUtils::encodeUrl(ADMIDIO_URL.FOLDER_MODULES.'/groups-roles/lists_show.php', array('lst_id' => $getListId, 'rol_ids' => $getRoleIds, 'show_former_members' => $getShowFormerMembers, 'date_from' => $getDateFrom, 'date_to' => $getDateTo, 'mode' => 'csv-oo')),
            'fa-file-csv', 'menu_item_lists_export');

        if ($numberRoles === 1)
        {
            // link to assign or remove members if you are allowed to do it
            if ($role->allowedToAssignMembers($gCurrentUser))
            {
                $page->addPageFunctionsMenuItem('menu_item_lists_assign_members', $gL10n->get('SYS_ASSIGN_MEMBERS'),
                    SecurityUtils::encodeUrl(ADMIDIO_URL.FOLDER_MODULES.'/groups-roles/members_assignment.php', array('rol_id' => (int) $role->getValue('rol_id'))),
                    'fa-user-plus');
            }
        }

        // link to email-module
        if($showLinkMailToList)
        {
            $page->addPageFunctionsMenuItem('menu_item_mail_to_list', $gL10n->get('SYS_EMAIL_TO_LIST'),
                'javascript:void(0);', 'fa-envelope');
        }

        $table = new HtmlTable('adm_lists_table', $page, $hoverRows, $datatable, $classTable);
        $table->setDatatablesRowsPerPage($gSettingsManager->getInt('groups_roles_members_per_page'));
    }
    else
    {
        $table = new HtmlTable('adm_lists_table', $page, $hoverRows, $datatable, $classTable);
    }
}

// initialize array parameters for table and set the first column for the counter
if ($getMode === 'html')
{
    // in html mode we group leaders. Therefore we need a special hidden column.
    $columnAlign  = array('left', 'left');
    $columnValues = array($gL10n->get('SYS_ABR_NO'), $gL10n->get('INS_GROUPS'));
}
else
{
    $columnAlign  = array('left');
    $columnValues = array($gL10n->get('SYS_ABR_NO'));
}


if ($numMembers === 0)
{
    // Es sind keine Daten vorhanden !
    $page->addHtml('<div class="alert alert-warning" role="alert">' . $gL10n->get('SYS_NO_USER_FOUND') . '</div>');
    $page->show();
    // => EXIT
}

// headlines for columns
for ($columnNumber = 1, $iMax = $list->countColumns(); $columnNumber <= $iMax; ++$columnNumber)
{
    $column = $list->getColumnObject($columnNumber);

    // Find name of the field
    if ($column->getValue('lsc_usf_id') > 0)
    {
        // customs field
        $usfId = (int) $column->getValue('lsc_usf_id');
        $columnHeader = $gProfileFields->getPropertyById($usfId, 'usf_name');

        if ($gProfileFields->getPropertyById($usfId, 'usf_type') === 'CHECKBOX'
        ||  $gProfileFields->getPropertyById($usfId, 'usf_name_intern') === 'GENDER')
        {
            $columnAlign[] = 'center';
        }
        elseif ($gProfileFields->getPropertyById($usfId, 'usf_type') === 'NUMBER'
        ||      $gProfileFields->getPropertyById($usfId, 'usf_type') === 'DECIMAL')
        {
            $columnAlign[] = 'right';
        }
        else
        {
            $columnAlign[] = 'left';
        }
    }
    else
    {
        $usfId = 0;
        $columnHeader = $arrColName[$column->getValue('lsc_special_field')];
        $columnAlign[] = 'left';
    }

    if ($getMode === 'csv' && $columnNumber === 1)
    {
        // add serial
        $csvStr .= $valueQuotes.$gL10n->get('SYS_ABR_NO').$valueQuotes;
    }

    if ($getMode === 'pdf' && $columnNumber === 1)
    {
        // add serial
        $arrValidColumns[] = $gL10n->get('SYS_ABR_NO');
    }

    // show hidden fields only for user with rights
    if ($usfId === 0 || $gProfileFields->isVisible($gProfileFields->getPropertyById($usfId, 'usf_name_intern'), $gCurrentUser->editUsers()))
    {
        if ($getMode === 'csv')
        {
            $csvStr .= $separator.$valueQuotes.$columnHeader.$valueQuotes;
        }
        elseif ($getMode === 'pdf')
        {
            $arrValidColumns[] = $columnHeader;
        }
        elseif ($getMode === 'html' || $getMode === 'print')
        {
            $columnValues[] = $columnHeader;
        }
    }
} // End-For

if ($editUserStatus)
{
    // add column for edit link
    $columnValues[] .= '&nbsp;';
}

if ($getMode === 'csv')
{
    $csvStr .= "\n";
}
elseif ($getMode === 'html' || $getMode === 'print')
{
    $table->setColumnAlignByArray($columnAlign);
    $table->addRowHeadingByArray($columnValues);
}
elseif ($getMode === 'pdf')
{
    $table->setColumnAlignByArray($columnAlign);
    $table->addTableHeader();
    $table->addRow();
    $table->addAttribute('align', 'center');
    $table->addColumn($headline, array('colspan' => count($arrValidColumns)));
    $table->addRow();

    // Write valid column headings
    for ($column = 0, $max = count($arrValidColumns); $column < $max; ++$column)
    {
        $table->addColumn($arrValidColumns[$column], array('style' => 'text-align: '.$columnAlign[$column].'; font-size: 14px; background-color: #c7c7c7;'), 'th');
    }
}
else
{
    $table->addTableBody();
}

$lastGroupHead = null; // Mark for change between leader and member
$listRowNumber = 1;

foreach ($membersList as $member)
{
    $memberIsLeader = (bool) $member['mem_leader'];

    if ($getMode !== 'csv')
    {
        // in print preview and pdf we group the role leaders and the members and
        // add a specific header for them
        if ($memberIsLeader !== $lastGroupHead && ($memberIsLeader || $lastGroupHead !== null))
        {
            if ($memberIsLeader)
            {
                $title = $gL10n->get('SYS_LEADERS');
            }
            else
            {
                // if list has leaders then initialize row number for members
                $listRowNumber = 1;
                $title = $gL10n->get('SYS_PARTICIPANTS');
            }

            if ($getMode === 'print' || $getMode === 'pdf')
            {
                $table->addRowByArray(array($title), null, array('class' => 'admidio-group-heading'), $list->countColumns() + 1);
            }
            $lastGroupHead = $memberIsLeader;
        }
    }

    // if html mode and the role has leaders then group all data between leaders and members
    if ($getMode === 'html')
    {
        // TODO set only once (yet it is set x times as members gets displayed)
        if ($memberIsLeader)
        {
            $table->setDatatablesGroupColumn(2);
        }
        else
        {
            $table->setDatatablesColumnsHide(array(2));
        }
    }

    $columnValues = array();

    // Fields of recordset
    for ($columnNumber = 1, $max = $list->countColumns(); $columnNumber <= $max; ++$columnNumber)
    {
        $column = $list->getColumnObject($columnNumber);

        // in the SQL mem_leader and usr_id starts before the column
        // the Index to the row must be set to 2 directly
        $sqlColumnNumber = $columnNumber + 1;

        $usfId = 0;
        if ($column->getValue('lsc_usf_id') > 0)
        {
            // check if customs field and remember
            $usfId = (int) $column->getValue('lsc_usf_id');
        }

        if ($columnNumber === 1)
        {
            if (in_array($getMode, array('html', 'print', 'pdf'), true))
            {
                // add serial
                $columnValues[] = $listRowNumber;
            }
            else
            {
                // 1st column may show the serial
                $csvStr .= $valueQuotes.$listRowNumber.$valueQuotes;
            }

            // in html mode we add an additional column with leader/member information to
            // enable the grouping function of jquery datatables
            if ($getMode === 'html')
            {
                if ($memberIsLeader)
                {
                    $columnValues[] = $gL10n->get('SYS_LEADERS');
                }
                else
                {
                    $columnValues[] = $gL10n->get('SYS_PARTICIPANTS');
                }
            }
        }

        // hidden fields are only for users with rights
        if ($usfId === 0 || $gProfileFields->isVisible($gProfileFields->getPropertyById($usfId, 'usf_name_intern'), $gCurrentUser->editUsers()))
        {

            // fill content with data of database
            $content = $member[$sqlColumnNumber];

            /*****************************************************************/
            // in some cases the content must have a special output format
            /*****************************************************************/
            if ($usfId > 0 && $usfId === (int) $gProfileFields->getProperty('COUNTRY', 'usf_id'))
            {
                $content = $gL10n->getCountryName($member[$sqlColumnNumber]);
            }
            elseif ($column->getValue('lsc_special_field') === 'usr_photo')
            {
                // show user photo
                if ($getMode === 'html' || $getMode === 'print')
                {
                    $content = '<img src="'.SecurityUtils::encodeUrl(ADMIDIO_URL.FOLDER_MODULES.'/profile/profile_photo_show.php', array('usr_id' => $member['usr_id'])).'" style="vertical-align: middle;" alt="'.$gL10n->get('SYS_USER_PHOTO').'" />';
                }
                if ($getMode === 'csv' && $member[$sqlColumnNumber] != null)
                {
                    $content = $gL10n->get('SYS_USER_PHOTO');
                }
            }
            elseif ($gProfileFields->getPropertyById($usfId, 'usf_type') === 'CHECKBOX')
            {
                if ($getMode === 'csv')
                {
                    if ($content == 1)
                    {
                        $content = $gL10n->get('SYS_YES');
                    }
                    else
                    {
                        $content = $gL10n->get('SYS_NO');
                    }
                }
                elseif($content != 1)
                {
                    $content = 0;
                }
            }
            elseif ($gProfileFields->getPropertyById($usfId, 'usf_type') === 'DATE'
            || $column->getValue('lsc_special_field') === 'mem_begin'
            || $column->getValue('lsc_special_field') === 'mem_end')
            {
                if (strlen($member[$sqlColumnNumber]) > 0)
                {
                    // date must be formated
                    $date = \DateTime::createFromFormat('Y-m-d', $member[$sqlColumnNumber]);
                    $content = $date->format($gSettingsManager->getString('system_date'));
                }
            }
            elseif ($getMode === 'csv'
            &&    ($gProfileFields->getPropertyById($usfId, 'usf_type') === 'DROPDOWN'
                || $gProfileFields->getPropertyById($usfId, 'usf_type') === 'RADIO_BUTTON'))
            {
                if (strlen($member[$sqlColumnNumber]) > 0)
                {
                    // show selected text of optionfield or combobox
                    $arrListValues = $gProfileFields->getPropertyById($usfId, 'usf_value_list', 'text');
                    $content = $arrListValues[$member[$sqlColumnNumber]];
                }
            }
            elseif ($column->getValue('lsc_special_field') === 'mem_approved')
            {
                // Assign Integer to Language strings
                switch ((int) $content)
                {
                    case ModuleDates::MEMBER_APPROVAL_STATE_INVITED:
                        $text = $gL10n->get('DAT_USER_INVITED');
                        $htmlText = '<i class="fas fa-calendar-check admidio-icon-chain"></i>' . $text;
                        break;
                    case ModuleDates::MEMBER_APPROVAL_STATE_ATTEND:
                        $text = $gL10n->get('DAT_USER_ATTEND');
                        $htmlText = '<i class="fas fa-check-circle admidio-icon-chain"></i>' . $text;
                        $buttonClass = 'admidio-event-approval-state-attend';
                        break;
                    case ModuleDates::MEMBER_APPROVAL_STATE_TENTATIVE:
                        $text = $gL10n->get('DAT_USER_TENTATIVE');
                        $htmlText = '<i class="fas fa-question-circle admidio-icon-chain"></i>' . $text;
                        $buttonClass = 'admidio-event-approval-state-tentative';
                        break;
                    case ModuleDates::MEMBER_APPROVAL_STATE_REFUSED:
                        $text = $gL10n->get('DAT_USER_REFUSED');
                        $htmlText = '<i class="fas fa-times-circle admidio-icon-chain"></i>' . $text;
                        $buttonClass = 'admidio-event-approval-state-cancel';
                        break;
                }

                if($getMode === 'csv')
                {
                    $content = $text;
                }
                else
                {
                    if($getMode === 'html')
                    {
                        $content = '<span class="' . $buttonClass . '">' . $htmlText . '</span>';
                    }
                    else
                    {
                        $content = $htmlText;
                    }
                }
            }
            elseif ($column->getValue('lsc_special_field') === 'mem_usr_id_change' && (int) $content)
            {
                // Get User Information
                $user = new User($gDb, $gProfileFields, $content);

                $content = $user->getValue('LAST_NAME').', '.$user->getValue('FIRST_NAME');
            }

            // format value for csv export
            if ($getMode === 'csv')
            {
                $csvStr .= $separator.$valueQuotes.$content.$valueQuotes;
            }
            // create output in html layout
            else
            {
                // firstname and lastname get a link to the profile
                if ($getMode === 'html'
                &&    ($usfId === (int) $gProfileFields->getProperty('LAST_NAME', 'usf_id')
                    || $usfId === (int) $gProfileFields->getProperty('FIRST_NAME', 'usf_id')))
                {
                    $htmlValue = $gProfileFields->getHtmlValue($gProfileFields->getPropertyById($usfId, 'usf_name_intern'), $content, $member['usr_id']);
                    $columnValues[] = '<a href="'.SecurityUtils::encodeUrl(ADMIDIO_URL.FOLDER_MODULES.'/profile/profile.php', array('user_id' => $member['usr_id'])).'">'.$htmlValue.'</a>';
                }
                else
                {
                    // within print mode no links should be set
                    if ($getMode === 'print'
                    &&    ($gProfileFields->getPropertyById($usfId, 'usf_type') === 'EMAIL'
                        || $gProfileFields->getPropertyById($usfId, 'usf_type') === 'PHONE'
                        || $gProfileFields->getPropertyById($usfId, 'usf_type') === 'URL'))
                    {
                        $columnValues[] = $content;
                    }
                    else
                    {
                        // checkbox must set a sorting value
                        if($gProfileFields->getPropertyById($usfId, 'usf_type') === 'CHECKBOX')
                        {
                            $columnValues[] = array('value' => $gProfileFields->getHtmlValue($gProfileFields->getPropertyById($usfId, 'usf_name_intern'), $content, $member['usr_id']), 'order' => $content);
                        }
                        else
                        {
                            $columnValues[] = $gProfileFields->getHtmlValue($gProfileFields->getPropertyById($usfId, 'usf_name_intern'), $content, $member['usr_id']);
                        }
                    }
                }
            }
        }
    }
    if ($editUserStatus)
    {
        // Get the matching event
        $sql = 'SELECT dat_id
                  FROM '.TBL_DATES.'
                 WHERE dat_rol_id = ? -- $roleIds[0]';
        $datesStatement = $gDb->queryPrepared($sql, $roleIds);
        $dateId         = $datesStatement->fetchColumn();
        // prepare edit icon
        $columnValues[] = '<a class="admidio-icon-link openPopup" href="javascript:void(0);"
                                data-href="'.SecurityUtils::encodeUrl(ADMIDIO_URL.FOLDER_MODULES.'/dates/popup_participation.php', array('dat_id' => $dateId, 'usr_id' => $member['usr_id'])) . '">
                                <i class="fas fa-edit" data-toggle="tooltip" title="'.$gL10n->get('SYS_EDIT').'"></i></a>';
    }

    if ($getMode === 'csv')
    {
        $csvStr .= "\n";
    }
    else
    {
        $table->addRowByArray($columnValues, null, array('nobr' => 'true'));
    }

    ++$listRowNumber;
}  // End-While (end found User)

$filename = '';

// Settings for export file
if ($getMode === 'csv' || $getMode === 'pdf')
{
    $filename = $gCurrentOrganization->getValue('org_shortname') . '-' . str_replace('.', '', $roleName);

    // file name in the current directory...
    if (strlen($list->getValue('lst_name')) > 0)
    {
        $filename .= '-' . str_replace('.', '', $list->getValue('lst_name'));
    }

    $filename = FileSystemUtils::getSanitizedPathEntry($filename) . '.' . $getMode;

    header('Content-Disposition: attachment; filename="'.$filename.'"');

    // necessary for IE6 to 8, because without it the download with SSL has problems
    header('Cache-Control: private');
    header('Pragma: public');
}

if ($getMode === 'csv')
{
    // download CSV file
    header('Content-Type: text/comma-separated-values; charset='.$charset);

    if ($charset === 'iso-8859-1')
    {
        echo utf8_decode($csvStr);
    }
    else
    {
        echo $csvStr;
    }
}
// send the new PDF to the User
elseif ($getMode === 'pdf')
{
    // output the HTML content
    $pdf->writeHTML($table->getHtmlTable(), true, false, true);

    $file = ADMIDIO_PATH . FOLDER_DATA . '/' . $filename;

    // Save PDF to file
    $pdf->Output($file, 'F');

    // Redirect
    header('Content-Type: application/pdf');

    readfile($file);
    ignore_user_abort(true);

    try
    {
        FileSystemUtils::deleteFileIfExists($file);
    }
    catch (\RuntimeException $exception)
    {
        $gLogger->error('Could not delete file!', array('filePath' => $file));
        // TODO
    }
}
elseif ($getMode === 'html' || $getMode === 'print')
{
    // add table list to the page
    $page->addHtml($table->show());

    // create a infobox for the role
    if ($getMode === 'html' && $numberRoles === 1)
    {
        $htmlBox = '';

        // only show infobox if additional role information fields are filled
        if ($role->getValue('rol_weekday') > 0
        || strlen($role->getValue('rol_start_date')) > 0
        || strlen($role->getValue('rol_start_time')) > 0
        || strlen($role->getValue('rol_location')) > 0
        || strlen($role->getValue('rol_cost')) > 0
        || strlen($role->getValue('rol_max_members')) > 0)
        {
            $htmlBox = '
            <div class="card admidio-blog" id="adm_lists_infobox">
                <div class="card-header">'.$gL10n->get('SYS_INFOBOX').': '.$role->getValue('rol_name').'</div>
                <div class="card-body">';
            $form = new HtmlForm('list_infobox_items');
            $form->addStaticControl('infobox_category', $gL10n->get('SYS_CATEGORY'), $role->getValue('cat_name'));

            // Description
            if (strlen($role->getValue('rol_description')) > 0)
            {
                $form->addStaticControl('infobox_description', $gL10n->get('SYS_DESCRIPTION'), $role->getValue('rol_description'));
            }

            // Period
            if (strlen($role->getValue('rol_start_date')) > 0)
            {
                $form->addStaticControl('infobox_period', $gL10n->get('SYS_PERIOD'), $gL10n->get('SYS_DATE_FROM_TO', array($role->getValue('rol_start_date', $gSettingsManager->getString('system_date')), $role->getValue('rol_end_date', $gSettingsManager->getString('system_date')))));
            }

            // Event
            $value = '';
            if ($role->getValue('rol_weekday') > 0)
            {
                $value = DateTimeExtended::getWeekdays($role->getValue('rol_weekday')).' ';
            }
            if (strlen($role->getValue('rol_start_time')) > 0)
            {
                $value = $gL10n->get('SYS_FROM_TO', array($role->getValue('rol_start_time', $gSettingsManager->getString('system_time')), $role->getValue('rol_end_time', $gSettingsManager->getString('system_time'))));
            }
            if ($role->getValue('rol_weekday') > 0 || strlen($role->getValue('rol_start_time')) > 0)
            {
                $form->addStaticControl('infobox_date', $gL10n->get('DAT_DATE'), $value);
            }

            // Meeting Point
            if (strlen($role->getValue('rol_location')) > 0)
            {
                $form->addStaticControl('infobox_location', $gL10n->get('SYS_LOCATION'), $role->getValue('rol_location'));
            }

            // Member Fee
            if (strlen($role->getValue('rol_cost')) > 0)
            {
                $form->addStaticControl('infobox_contribution', $gL10n->get('SYS_CONTRIBUTION'), (float) $role->getValue('rol_cost').' '.$gSettingsManager->getString('system_currency'));
            }

            // Fee period
            if (strlen($role->getValue('rol_cost_period')) > 0 && $role->getValue('rol_cost_period') != 0)
            {
                $form->addStaticControl('infobox_contribution_period', $gL10n->get('SYS_CONTRIBUTION_PERIOD'), TableRoles::getCostPeriods($role->getValue('rol_cost_period')));
            }

            // max participants
            if (strlen($role->getValue('rol_max_members')) > 0)
            {
                $form->addStaticControl('infobox_max_participants', $gL10n->get('SYS_MAX_PARTICIPANTS'), (int) $role->getValue('rol_max_members'));
            }
            $htmlBox .= $form->show();
            $htmlBox .= '</div>
            </div>';
        } // end of infobox

        $page->addHtml($htmlBox);
    }

    // show complete html page
    $page->show();
}
