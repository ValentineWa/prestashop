<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-21 08:41:35
  from 'module:otfooterbottomrightblockv' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6009140fb2a7d2_18858304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d14a208d9154a03dc93e314e4885dbf5d396b5f' => 
    array (
      0 => 'module:otfooterbottomrightblockv',
      1 => 1611035175,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6009140fb2a7d2_18858304 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '18410917856009140fb23b14_59244761';
?>


<div class="footerbottomright-outer links">

	<?php if (isset($_smarty_tpl->tpl_vars['cms_footerbottomrightinfos']->value) && $_smarty_tpl->tpl_vars['cms_footerbottomrightinfos']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['cms_footerbottomrightinfos']->value['text'];?>

	<?php } else { ?>
	<div id="footerbottomright-text" class="wrapper  footer-cms col-md-3">
	<div class="title">
		 <h3 class="h3">My Account</h3>
		 <span class="pull-xs-right">
           <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
        </span>
	</div>
	<ul  class="footer-toggle">
	<li><a href="#">Your Orders</a></li>
	<li><a href="#">Your Wishlist</a></li>
	<li><a href="#">Payment Methods</a></li>
	<li><a href="#">Newsletter</a></li>
	<li><a href="#">Infomation</a></li>
	</ul>
	</div>
	<?php }?>


</div><?php }
}
