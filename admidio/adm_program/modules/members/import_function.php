<?php
/**
 ***********************************************************************************************
 * Prepare values of import form for further processing
 *
 * @copyright 2004-2021 The Admidio Team
 * @see https://www.admidio.org/
 * @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0 only
 ***********************************************************************************************
 */
require_once(__DIR__ . '/../../system/common.php');
require(__DIR__ . '/../../system/login_valid.php');

// Initialize and check the parameters
$postImportCoding   = admFuncVariableIsValid($_POST, 'import_coding',    'string', array('requireValue' => true, 'validValues' => array('iso-8859-1', 'utf-8')));
$postRoleId         = admFuncVariableIsValid($_POST, 'import_role_id',   'int');
$postUserImportMode = admFuncVariableIsValid($_POST, 'user_import_mode', 'int', array('requireValue' => true));

$_SESSION['import_request'] = $_POST;
unset($_SESSION['import_csv_request']);

// only authorized users should import users
if(!$gCurrentUser->editUsers())
{
    $gMessage->show($gL10n->get('SYS_NO_RIGHTS'));
    // => EXIT
}

if(strlen($_FILES['userfile']['tmp_name'][0]) === 0)
{
    $gMessage->show($gL10n->get('SYS_FIELD_EMPTY', array($gL10n->get('SYS_FILE'))));
    // => EXIT
}
elseif($_FILES['userfile']['error'][0] === UPLOAD_ERR_INI_SIZE)
{
    // check the filesize against the server settings
    $gMessage->show($gL10n->get('SYS_FILE_TO_LARGE_SERVER', array($gSettingsManager->getInt('max_file_upload_size'))));
    // => EXIT
}
elseif(!file_exists($_FILES['userfile']['tmp_name'][0]) || !is_uploaded_file($_FILES['userfile']['tmp_name'][0]))
{
    // check if a file was really uploaded
    $gMessage->show($gL10n->get('SYS_FILE_NOT_EXIST'));
    // => EXIT
}
elseif($postRoleId === 0)
{
    $gMessage->show($gL10n->get('SYS_FIELD_EMPTY', array($gL10n->get('SYS_ROLE'))));
    // => EXIT
}

// Rolle einlesen und pruefen, ob der User diese selektieren kann und dadurch nicht
// evtl. ein Rollenzuordnungsrecht bekommt, wenn er es vorher nicht hatte
$role = new TableRoles($gDb, $postRoleId);

if(!$gCurrentUser->hasRightViewRole((int) $role->getValue('rol_id'))
|| (!$gCurrentUser->manageRoles() && $role->getValue('rol_assign_roles') == false))
{
    $gMessage->show($gL10n->get('MEM_ROLE_SELECT_RIGHT', array($role->getValue('rol_name'))));
    // => EXIT
}

// read file in an array; auto-detect the line endings of different os
ini_set('auto_detect_line_endings', '1');
$_SESSION['file_lines']       = file($_FILES['userfile']['tmp_name'][0]);
$_SESSION['rol_id']           = (int) $role->getValue('rol_id');
$_SESSION['user_import_mode'] = $postUserImportMode;

if($postImportCoding === 'iso-8859-1')
{
    // Daten der Datei erst einmal in UTF8 konvertieren, damit es damit spaeter keine Probleme gibt
    $_SESSION['file_lines'] = array_map('utf8_encode', $_SESSION['file_lines']);
}

// CSV-Import (im Moment gibt es nur diesen, spaeter muss hier dann unterschieden werden)
admRedirect(ADMIDIO_URL . FOLDER_MODULES.'/members/import_csv_config.php');
// => EXIT
