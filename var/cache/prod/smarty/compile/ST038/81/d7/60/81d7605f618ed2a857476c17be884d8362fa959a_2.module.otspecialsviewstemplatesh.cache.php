<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-21 08:41:52
  from 'module:otspecialsviewstemplatesh' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60091420ea1708_29201713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81d7605f618ed2a857476c17be884d8362fa959a' => 
    array (
      0 => 'module:otspecialsviewstemplatesh',
      1 => 1611035176,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-slider.tpl' => 1,
  ),
),false)) {
function content_60091420ea1708_29201713 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '175815676360091420e099b3_63929542';
?>

<section id="special-products">
	<div class="special-products container">
	<div class="row">
	  <h1 class="main-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Special Product','d'=>'otspecials'),$_smarty_tpl ) );?>
</h1>
	  <div class="homepage-products products">
		<?php if ($_smarty_tpl->tpl_vars['sliderstatus']->value == 1) {?>
			<ul id="specialproducts-carousel" class="owl-carousel product-item products-slider">
		<?php } else { ?>
			<ul id="specialproducts-grid" class="products-grid product-item">
		<?php }?>	
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
		   <li class="item">
			<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
		   </li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	  </div>
	  </div>
	</div>
</section>
<?php }
}
