<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-21 08:42:32
  from 'C:\xampp\htdocs\prestashop\themes\ST038\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600914486f2260_35715861',
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
function content_600914486f2260_35715861 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="footer-top"> 
 	<div class="container">
		    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2040750365600914486da045_73481609', 'hook_footer_before');
?>

		</div>
	</div>	
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      <div class="footer_inner">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_451604271600914486dd563_34337914', 'hook_footer');
?>

	  </div>
    </div>
	<div class="row">
     <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1177672371600914486e0361_53655300', 'hook_footer_after');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1077389372600914486e4c29_89602319', 'copyright_link');
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
class Block_2040750365600914486da045_73481609 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_2040750365600914486da045_73481609',
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
class Block_451604271600914486dd563_34337914 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_451604271600914486dd563_34337914',
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
class Block_1177672371600914486e0361_53655300 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_1177672371600914486e0361_53655300',
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
class Block_1077389372600914486e4c29_89602319 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_1077389372600914486e4c29_89602319',
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
