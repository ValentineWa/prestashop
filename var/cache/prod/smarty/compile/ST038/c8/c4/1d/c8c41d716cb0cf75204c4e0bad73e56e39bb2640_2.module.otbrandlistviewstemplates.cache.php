<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-21 08:41:53
  from 'module:otbrandlistviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600914212d0591_23416985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8c41d716cb0cf75204c4e0bad73e56e39bb2640' => 
    array (
      0 => 'module:otbrandlistviewstemplates',
      1 => 1611035175,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:otbrandlist/views/templates/_partials/".((string)$_smarty_tpl->tpl_vars[\'brand_display_type\']->value).".tpl' => 1,
  ),
),false)) {
function content_600914212d0591_23416985 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1101158672600914212ba853_57988938';
?>

<div class="brandslider-outer">
<div class="brandslider-inner container">
<div class="row">
  <h1 class="main-title title">
    <?php if ($_smarty_tpl->tpl_vars['display_link_brand']->value) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','d'=>'Modules.Brandlist.Shop'),$_smarty_tpl ) );?>
"><?php }?>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clients','d'=>'Modules.Brandlist.Shop'),$_smarty_tpl ) );?>

    <?php if ($_smarty_tpl->tpl_vars['display_link_brand']->value) {?></a><?php }?>
  </h1>
  <div class="brand-slidermain">
    <?php if ($_smarty_tpl->tpl_vars['brands']->value) {?>
      <?php $_smarty_tpl->_subTemplateRender("module:otbrandlist/views/templates/_partials/".((string)$_smarty_tpl->tpl_vars['brand_display_type']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('brands'=>$_smarty_tpl->tpl_vars['brands']->value), 0, true);
?>
    <?php } else { ?>
      <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No brand','d'=>'Modules.Brandlist.Shop'),$_smarty_tpl ) );?>
</p>
    <?php }?>
  </div>
  </div>
</div>
</div>
<?php }
}
