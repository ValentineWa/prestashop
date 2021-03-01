<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-21 08:42:32
  from 'module:paypalviewstemplatesshort' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6009144811b622_29143420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8cff8618e868e2054160cba4be00916396bc6db' => 
    array (
      0 => 'module:paypalviewstemplatesshort',
      1 => 1611036008,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6009144811b622_29143420 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!-- Start shortcut. Module Paypal -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78466151600914480e12b0_17988892', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1686333030600914480ec0f8_70553090', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1949745107600914480edc26_24593452', 'js');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147132927860091448116638_05414784', 'init-button');
?>

<!-- End shortcut. Module Paypal -->



<?php }
/* {block 'head'} */
class Block_78466151600914480e12b0_17988892 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_78466151600914480e12b0_17988892',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
>
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['JSvars']->value, 'varValue', false, 'varName');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['varName']->value => $_smarty_tpl->tpl_vars['varValue']->value) {
?>
        var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['varName']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['varValue']->value ));?>
;
     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_1686333030600914480ec0f8_70553090 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1686333030600914480ec0f8_70553090',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_1949745107600914480edc26_24593452 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_1949745107600914480edc26_24593452',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (isset($_smarty_tpl->tpl_vars['JSscripts']->value) && is_array($_smarty_tpl->tpl_vars['JSscripts']->value) && false === empty($_smarty_tpl->tpl_vars['JSscripts']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['JSscripts']->value, 'JSscript', false, 'keyScript');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['keyScript']->value => $_smarty_tpl->tpl_vars['JSscript']->value) {
?>
          <?php echo '<script'; ?>
>
            var script = document.querySelector('script[data-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyScript']->value, ENT_QUOTES, 'UTF-8');?>
"]');

            if (null == script) {
                var newScript = document.createElement('script');
                newScript.setAttribute('src', '<?php echo $_smarty_tpl->tpl_vars['JSscript']->value;?>
');
                newScript.setAttribute('data-key', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyScript']->value, ENT_QUOTES, 'UTF-8');?>
');
                document.body.appendChild(newScript);
            }
          <?php echo '</script'; ?>
>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }
}
}
/* {/block 'js'} */
/* {block 'init-button'} */
class Block_147132927860091448116638_05414784 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'init-button' => 
  array (
    0 => 'Block_147132927860091448116638_05414784',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
>
      function waitPaypalIsLoaded() {
          if (typeof paypal === 'undefined' || typeof Shortcut === 'undefined') {
              setTimeout(waitPaypalIsLoaded, 200);
              return;
          }

          Shortcut.init();
          Shortcut.initButton();
      }

      waitPaypalIsLoaded();
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'init-button'} */
}
