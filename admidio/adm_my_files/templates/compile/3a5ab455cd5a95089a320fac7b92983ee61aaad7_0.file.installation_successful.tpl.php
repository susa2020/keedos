<?php
/* Smarty version 3.1.36, created on 2021-02-15 17:34:15
  from '/volume1/web/keedos/admidio/adm_program/installation/templates/installation_successful.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_602a401795ed95_00765721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a5ab455cd5a95089a320fac7b92983ee61aaad7' => 
    array (
      0 => '/volume1/web/keedos/admidio/adm_program/installation/templates/installation_successful.tpl',
      1 => 1611361918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602a401795ed95_00765721 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="installation-message">
    <h3><?php echo $_smarty_tpl->tpl_vars['l10n']->value->get("SYS_INSTALLATION_SUCCESSFUL");?>
</h3>

    <div class="alert alert-success form-alert">
        <i class="fas fa-check"></i>
        <strong><?php echo $_smarty_tpl->tpl_vars['l10n']->value->get('SYS_INSTALLATION_SUCCESSFUL_SHORT_DESC');?>
</strong>
    </div>

    <p>
        <?php echo $_smarty_tpl->tpl_vars['l10n']->value->get('SYS_INSTALLATION_SUCCESSFUL_DESC');?>
<br /><br />
        <?php echo $_smarty_tpl->tpl_vars['l10n']->value->get('INS_SUPPORT_FURTHER_DEVELOPMENT');?>

    </p>

    <p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
</div>
<?php }
}
