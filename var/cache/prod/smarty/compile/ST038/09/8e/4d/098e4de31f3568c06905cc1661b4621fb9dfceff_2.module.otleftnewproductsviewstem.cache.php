<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-21 08:42:31
  from 'module:otleftnewproductsviewstem' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6009144739d360_59188834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '098e4de31f3568c06905cc1661b4621fb9dfceff' => 
    array (
      0 => 'module:otleftnewproductsviewstem',
      1 => 1611035175,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/sidebar-product.tpl' => 1,
  ),
),false)) {
function content_6009144739d360_59188834 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '202687115560091447395b26_96826670';
?>

<section id="leftsidebar" class="leftsidebar">
  <h1 class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New products','d'=>'otleftnewproducts'),$_smarty_tpl ) );?>
</h1>
  <div class="sidebar-products products">
		<ul id="newproducts-grid" class="products-grid product-item">
	    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
	      <li class="item">
	      <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/sidebar-product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
	      </li>
	    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>

</section>

<?php }
}
