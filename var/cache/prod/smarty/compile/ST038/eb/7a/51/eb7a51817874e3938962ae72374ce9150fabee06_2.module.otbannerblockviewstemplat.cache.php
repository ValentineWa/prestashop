<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-21 08:41:51
  from 'module:otbannerblockviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6009141fe6e1c5_81293162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb7a51817874e3938962ae72374ce9150fabee06' => 
    array (
      0 => 'module:otbannerblockviewstemplat',
      1 => 1611035175,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6009141fe6e1c5_81293162 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '16249394736009141fe67cf0_84375112';
?>

  
<?php if (isset($_smarty_tpl->tpl_vars['cms_bannerinfos']->value) && $_smarty_tpl->tpl_vars['cms_bannerinfos']->value) {
echo $_smarty_tpl->tpl_vars['cms_bannerinfos']->value['text'];?>

<?php } else { ?>
<div class="subbannercms-outer container">
<div class="row">
<div class="subbannercms-inner">
<div class="subbanner-common subbannerpart1">
<div class="subbanner1 subbanner-inner"><a href="#"><img src="img/cms/banner1.jpg" alt="" /></a></div>
</div>
<div class="subbanner-common subbannerpart2">
<div class="subbanner2 subbanner-inner"><a href="#"><img src="img/cms/banner2.jpg" alt="" /></a></div>
</div>
</div>
</div>
</div>

<?php }?>
 <?php }
}
