<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-21 08:41:52
  from 'module:otparallaxblockviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60091420c785d9_05698095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fe697f556e58d43216fc614d502e94a3b08b96c' => 
    array (
      0 => 'module:otparallaxblockviewstempl',
      1 => 1611035176,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60091420c785d9_05698095 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '120924754260091420c72de9_43735519';
?>


<div id="custom-parallaxblock" class="custom-parallaxblock parallaxblock-outer" data-source-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
/views/img/parallax.jpg">
 <div class="parallaxblock-inner container"> 
 <div  class="row">
	<?php if (isset($_smarty_tpl->tpl_vars['cms_parallaxinfos']->value) && $_smarty_tpl->tpl_vars['cms_parallaxinfos']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['cms_parallaxinfos']->value['text'];?>

	<?php } else { ?>
	<div class="parallax-block">
	    <div class="parallax-left">
	        <div class="parallax-text">
	            <div class="parallax-text1">up to</div>
	            <div class="parallax-text2">50% off</div>
	        </div>
	        <div class="parallax-desc">Get high quality clearance women's handbags at exceptional values.</div>
	        <div class="parallax-btn"><a href="#">buy now</a></div>
	    </div>
	</div>
	<?php }?>
  </div>
 </div>
</div>
<?php }
}
