<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-21 08:41:35
  from 'C:\xampp\htdocs\prestashop\themes\ST038\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6009140f5c2474_44309263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59b58c0742f8b6b83447c4e4a2f8f6ae56beff9a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\ST038\\templates\\_partials\\footer.tpl',
      1 => 1611035178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6009140f5c2474_44309263 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="footer-top"> 
 	<div class="container">
		    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11179224376009140f5ad518_81950550', 'hook_footer_before');
?>

		</div>
	</div>	
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      <div class="footer_inner">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7401849696009140f5b0711_84492771', 'hook_footer');
?>

	  </div>
    </div>
	<div class="row">
     <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6391662066009140f5b5e07_54018216', 'hook_footer_after');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7363961786009140f5b9426_50503103', 'copyright_link');
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
class Block_11179224376009140f5ad518_81950550 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_11179224376009140f5ad518_81950550',
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
class Block_7401849696009140f5b0711_84492771 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_7401849696009140f5b0711_84492771',
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
class Block_6391662066009140f5b5e07_54018216 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_6391662066009140f5b5e07_54018216',
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
class Block_7363961786009140f5b9426_50503103 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_7363961786009140f5b9426_50503103',
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
