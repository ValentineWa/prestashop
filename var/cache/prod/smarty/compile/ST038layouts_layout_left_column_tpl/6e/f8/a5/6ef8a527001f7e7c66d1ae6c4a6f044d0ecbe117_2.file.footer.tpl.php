<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-21 08:42:47
  from 'C:\xampp\htdocs\prestashop\themes\ST038\templates\checkout\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6009145757df60_76133811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ef8a527001f7e7c66d1ae6c4a6f044d0ecbe117' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\ST038\\templates\\checkout\\_partials\\footer.tpl',
      1 => 1611035178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6009145757df60_76133811 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="footer-top"> 
 	<div class="container">
		    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3968881476009145756ccc8_13486599', 'hook_footer_before');
?>

		</div>
	</div>	
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      <div class="footer_inner">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14306204456009145756f522_74147684', 'hook_footer');
?>

	  </div>
    </div>
	<div class="row">
     <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177426388860091457571596_50349587', 'hook_footer_after');
?>
 
    </div>
  </div>
</div>
<div class="footer-bottom">
<div class="container">
<div class="row">
<div class="col-md-12">
	  	 <div class="row">
			  <div class="footer-bottom-link">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBottom'),$_smarty_tpl ) );?>

			  </div>
		  </div>
	  </div>
    <div class="col-md-12">
		 <div class="row">
		<div class="copyright_outer">
			<div class="copyright">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106062648760091457575a48_85438544', 'copyright_link');
?>

			</div>
		</div>
		</div>
      </div>
    
	</div>
  </div>
</div>
<?php }
/* {block 'hook_footer_before'} */
class Block_3968881476009145756ccc8_13486599 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_3968881476009145756ccc8_13486599',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		    	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

		    <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_14306204456009145756f522_74147684 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_14306204456009145756f522_74147684',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	  	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

	  <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_177426388860091457571596_50349587 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_177426388860091457571596_50349587',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

     <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_106062648760091457575a48_85438544 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_106062648760091457575a48_85438544',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
			  <a class="_blank" href="http://www.prestashop.com" target="_blank">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme'),$_smarty_tpl ) );?>

			  </a>
			<?php
}
}
/* {/block 'copyright_link'} */
}
