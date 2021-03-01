<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-21 09:11:41
  from 'C:\xampp\htdocs\prestashop\modules\paypal\views\templates\admin\_partials\alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60091b1d4585b6_80663112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9454dcfb7f1173ef22dcb1d470029143adf10d4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\paypal\\views\\templates\\admin\\_partials\\alert.tpl',
      1 => 1611036008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60091b1d4585b6_80663112 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 <?php if (isset($_smarty_tpl->tpl_vars['widthByContent']->value) && $_smarty_tpl->tpl_vars['widthByContent']->value) {?>d-inline-block<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['class']->value) && $_smarty_tpl->tpl_vars['class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 <?php }?>">
    <?php if (isset($_smarty_tpl->tpl_vars['btnClose']->value) && $_smarty_tpl->tpl_vars['btnClose']->value) {?>
        <button type="button" class="close" data-dismiss="alert">×</button>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

</div>
<?php }
}
