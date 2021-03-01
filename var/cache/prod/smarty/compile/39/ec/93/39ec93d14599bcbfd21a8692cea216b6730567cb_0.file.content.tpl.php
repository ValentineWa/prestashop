<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-21 08:41:50
  from 'C:\xampp\htdocs\prestashop\admin8117005i0\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6009141e0f3b59_92464522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39ec93d14599bcbfd21a8692cea216b6730567cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin8117005i0\\themes\\default\\template\\content.tpl',
      1 => 1606918382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6009141e0f3b59_92464522 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
