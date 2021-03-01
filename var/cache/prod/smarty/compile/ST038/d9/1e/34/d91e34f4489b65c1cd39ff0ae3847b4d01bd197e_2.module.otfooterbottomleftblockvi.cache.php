<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-21 08:41:35
  from 'module:otfooterbottomleftblockvi' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6009140f7a3221_34505222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd91e34f4489b65c1cd39ff0ae3847b4d01bd197e' => 
    array (
      0 => 'module:otfooterbottomleftblockvi',
      1 => 1611035175,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6009140f7a3221_34505222 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '4430062206009140f79c569_34794640';
?>

<div class="footerbottomleft-outer links">

	<?php if (isset($_smarty_tpl->tpl_vars['cms_footerbottomleftinfos']->value) && $_smarty_tpl->tpl_vars['cms_footerbottomleftinfos']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['cms_footerbottomleftinfos']->value['text'];?>

	<?php } else { ?>
	<div id="footerbottomleft-text" class="wrapper  footer-cms col-md-3">
	<div class="title" >
	 	<h3 class="h3">adorn</h3>
	 	<span class="pull-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
        </span>
	</div>
	<ul  class="footer-toggle">
	<li>
	<div class="bottomcmsblock">
	<div class="bottomcmsinner">
	<div class="bottomcms_img"><img class="img-footer" src="img/cms/footer_logo.png" alt="main-image" /></div>
	<div class="call-text">
		<div class="call-text1">Call Us</div>
		<div class="call-text2">214 -025 - 3335</div>
	</div>
	<div class="address">Address: No 40 Bari Street 133/ 
	Newyork City,ny United states</div>
	</div>
	</div>
	</li>
	</ul>
	</div>
	<?php }?>


</div>
<?php }
}
