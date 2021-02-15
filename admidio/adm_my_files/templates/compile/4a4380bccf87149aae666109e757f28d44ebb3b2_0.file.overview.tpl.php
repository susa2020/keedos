<?php
/* Smarty version 3.1.36, created on 2021-02-15 17:37:22
  from '/volume1/web/keedos/admidio/adm_themes/simple/templates/overview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_602a40d2ea94d6_96209154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a4380bccf87149aae666109e757f28d44ebb3b2' => 
    array (
      0 => '/volume1/web/keedos/admidio/adm_themes/simple/templates/overview.tpl',
      1 => 1611361918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602a40d2ea94d6_96209154 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/volume1/web/keedos/admidio/adm_program/system/smarty-plugins/function.load_admidio_plugin.php','function'=>'smarty_function_load_admidio_plugin',),));
?>

<div class="row mb-5">
    <div class="col-sm-6 col-lg-4 col-xl-3" id="admidio-plugin-login-form">
        <div class="card admidio-roles">
            <div class="card-body">
                <?php echo smarty_function_load_admidio_plugin(array('plugin'=>"login_form",'file'=>"login_form.php"),$_smarty_tpl);?>

            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 col-xl-3" id="admidio-plugin-birthday">
        <div class="card admidio-roles">
            <div class="card-body">
                <?php echo smarty_function_load_admidio_plugin(array('plugin'=>"birthday",'file'=>"birthday.php"),$_smarty_tpl);?>

            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 col-xl-3" id="admidio-plugin-calendar">
        <div class="card admidio-roles">
            <div class="card-body">
                <?php echo smarty_function_load_admidio_plugin(array('plugin'=>"calendar",'file'=>"calendar.php"),$_smarty_tpl);?>

            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 col-xl-3" id="admidio-plugin-random-photo">
        <div class="card admidio-roles">
            <div class="card-body">
                <?php echo smarty_function_load_admidio_plugin(array('plugin'=>"random_photo",'file'=>"random_photo.php"),$_smarty_tpl);?>

            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 col-xl-3" id="admidio-plugin-latest-documents-files">
        <div class="card admidio-roles">
            <div class="card-body">
                <?php echo smarty_function_load_admidio_plugin(array('plugin'=>"latest-documents-files",'file'=>"latest-documents-files.php"),$_smarty_tpl);?>

            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 col-xl-3" id="admidio-plugin-sidebar-announcements">
        <div class="card admidio-roles">
            <div class="card-body">
                <?php echo smarty_function_load_admidio_plugin(array('plugin'=>"sidebar_announcements",'file'=>"sidebar_announcements.php"),$_smarty_tpl);?>

            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 col-xl-3" id="admidio-plugin-sidebar-dates">
        <div class="card admidio-roles">
            <div class="card-body">
                <?php echo smarty_function_load_admidio_plugin(array('plugin'=>"sidebar_dates",'file'=>"sidebar_dates.php"),$_smarty_tpl);?>

            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 col-xl-3" id="admidio-plugin-sidebar-online">
        <div class="card admidio-roles">
            <div class="card-body">
                <?php echo smarty_function_load_admidio_plugin(array('plugin'=>"sidebar_online",'file'=>"sidebar_online.php"),$_smarty_tpl);?>

            </div>
        </div>
    </div>
</div>
<?php }
}
