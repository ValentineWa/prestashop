<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-21 08:41:51
  from 'module:otshippingblockviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6009141fcde820_53047183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2273288a27b973cf132145203a34c8afc1eafbe' => 
    array (
      0 => 'module:otshippingblockviewstempl',
      1 => 1611035176,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6009141fcde820_53047183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '7196210036009141fcd8b81_08958899';
?>


<div id="shipping-text">
 <div class="shipping-text-inner container">
 <div class="row">
	<?php if (isset($_smarty_tpl->tpl_vars['cms_shippinginfos']->value) && $_smarty_tpl->tpl_vars['cms_shippinginfos']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['cms_shippinginfos']->value['text'];?>

	<?php } else { ?>
	<div class="shipping-outer">
	<div class="shipping-inner">
	<div class="subtitle-part subtitle-part1">
	<div class="subbanner-part-maininnner1">
	<div class="subicon"><span class="hide">icon</span></div>
	<div class="subtitle-part-inner">
	<div class="subtitile">
	<div class="subtitile1">Free Shipping on orders over $99</div>
	</div>
	</div>
	</div>
	</div>
	<div class="subtitle-part subtitle-part2">
	<div class="subbanner-part-maininnner2">
	<div class="subicon"><span class="hide">icon</span></div>
	<div class="subtitle-part-inner">
	<div class="subtitile">
	<div class="subtitile1">Satisfaction 100% on orders over $99</div>
	</div>
	</div>
	</div>
	</div>
	<div class="subtitle-part subtitle-part3">
	<div class="subbanner-part-maininnner3">
	<div class="subicon"><span class="hide">icon</span></div>
	<div class="subtitle-part-inner">
	<div class="subtitile">
	<div class="subtitile1">Opening All Week: 8AM - 10PM</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	<?php }?>
	</div>
 </div>
</div>
<?php }
}
