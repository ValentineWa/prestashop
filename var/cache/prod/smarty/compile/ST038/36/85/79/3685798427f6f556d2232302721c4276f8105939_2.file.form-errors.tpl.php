<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-21 08:44:39
  from 'C:\xampp\htdocs\prestashop\themes\ST038\templates\_partials\form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600914c7368191_45126974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3685798427f6f556d2232302721c4276f8105939' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\ST038\\templates\\_partials\\form-errors.tpl',
      1 => 1611035178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600914c7368191_45126974 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_248213847600914c73641c9_85695028', 'form_errors');
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
class Block_248213847600914c73641c9_85695028 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_248213847600914c73641c9_85695028',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
          <li class="alert alert-danger"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
