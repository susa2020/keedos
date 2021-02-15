<?php
/* Smarty version 3.1.36, created on 2021-02-15 17:13:07
  from '/volume1/web/keedos/admidio/adm_program/installation/templates/message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_602a3b23572e63_47305822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81b6cc1c713d716016e8ed06f8d73a23026a231c' => 
    array (
      0 => '/volume1/web/keedos/admidio/adm_program/installation/templates/message.tpl',
      1 => 1611361918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602a3b23572e63_47305822 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="installation-message">
    <h3><?php echo $_smarty_tpl->tpl_vars['messageHeadline']->value;?>
</h3>

    <?php if ($_smarty_tpl->tpl_vars['outputMode']->value == "error") {?>
        <p><?php echo $_smarty_tpl->tpl_vars['l10n']->value->get("SYS_PROCESSING_ERROR_DESC");?>
</p>
        <p>
            <div class="alert alert-danger alert-small" role="alert">
                <i class="fas fa-exclamation-circle"></i>
                <strong><?php echo $_smarty_tpl->tpl_vars['messageText']->value;?>
</strong>
            </div>
        </p>
    <?php } elseif ($_smarty_tpl->tpl_vars['outputMode']->value == "success") {?>
        <p>
            <div class="alert alert-success alert-small" role="alert">
                <i class="fas fa-check"></i>
                <strong><?php echo $_smarty_tpl->tpl_vars['messageText']->value;?>
</strong>
            </div>
        </p>
    <?php }?>

    <p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
</div>
<?php }
}
