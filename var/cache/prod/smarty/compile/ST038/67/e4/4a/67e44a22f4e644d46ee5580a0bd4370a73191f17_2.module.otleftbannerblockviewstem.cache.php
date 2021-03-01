<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-21 08:42:31
  from 'module:otleftbannerblockviewstem' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6009144712ac11_50459760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67e44a22f4e644d46ee5580a0bd4370a73191f17' => 
    array (
      0 => 'module:otleftbannerblockviewstem',
      1 => 1611035175,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6009144712ac11_50459760 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1499157611600914471252c5_14173754';
?>


<div id="custom-leftbannerblock">
  
<?php if (isset($_smarty_tpl->tpl_vars['cms_leftbannerinfos']->value) && $_smarty_tpl->tpl_vars['cms_leftbannerinfos']->value) {
echo $_smarty_tpl->tpl_vars['cms_leftbannerinfos']->value['text'];?>

<?php } else { ?>
<p><a href="#"><img src="img/cms/left.jpg" alt="" /></a></p>
<?php }?>
 
</div>
<?php }
}
