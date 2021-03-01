<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-21 08:41:34
  from 'module:otheaderrightblockviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6009140eafe336_13921040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d71930d348cd3d13a33aa938365d5d93f498812' => 
    array (
      0 => 'module:otheaderrightblockviewste',
      1 => 1611035175,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6009140eafe336_13921040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13007962216009140eaf74d1_10721806';
?>


<div id="header-right-text">
 <div class="header-right">
	<?php if (isset($_smarty_tpl->tpl_vars['cms_headerrightinfos']->value) && $_smarty_tpl->tpl_vars['cms_headerrightinfos']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['cms_headerrightinfos']->value['text'];?>

	<?php } else { ?>
		<div class="header-call">
			<ul class="header-link-inner">
				<li class="phone-icon">
				<a class="call-dial" href="#">+ 91 0123 456 789</a>
				</li>
			</ul>
		</div>
	<?php }?>
 </div>
</div>
<?php }
}
