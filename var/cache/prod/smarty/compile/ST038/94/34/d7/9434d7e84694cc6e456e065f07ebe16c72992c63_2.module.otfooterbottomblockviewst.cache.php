<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-21 08:41:36
  from 'module:otfooterbottomblockviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600914100aa4e7_39627840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9434d7e84694cc6e456e065f07ebe16c72992c63' => 
    array (
      0 => 'module:otfooterbottomblockviewst',
      1 => 1611035175,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600914100aa4e7_39627840 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '508012847600914100a4885_17376431';
?>


<div id="footerbottom-text">
 <div class="footerbottom-text-inner container">
 <div class="row">
	<?php if (isset($_smarty_tpl->tpl_vars['cms_footerbottominfos']->value) && $_smarty_tpl->tpl_vars['cms_footerbottominfos']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['cms_footerbottominfos']->value['text'];?>

	<?php } else { ?>

	<div class="bottom-link bottom-left">
	<ul class="link-inner">
	<li><a href="#">FAQ</a></li>
	<li><a href="#">Orders & Return </a></li>
	<li><a href="#">Shipping Rates & Policie</a></li>
	<li><a href="#">International Shipping</a></li>
	<li><a href="#">Contact Us</a></li>
	</ul>
	</div>
	<?php }?>
	</div>
 </div>
</div>
<?php }
}
