<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-21 09:11:41
  from 'C:\xampp\htdocs\prestashop\modules\paypal\views\templates\admin\_partials\switchSandboxBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60091b1d4b5138_05041741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6da5da647b43927d72e0b1ba5cef7620ed8fce6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\paypal\\views\\templates\\admin\\_partials\\switchSandboxBlock.tpl',
      1 => 1611036008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60091b1d4b5138_05041741 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col-lg-9">
    <p class="h3">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Environment:','mod'=>'paypal'),$_smarty_tpl ) );?>

        <?php if (isset($_smarty_tpl->tpl_vars['sandbox']->value) && $_smarty_tpl->tpl_vars['sandbox']->value) {?>
            <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sandbox','mod'=>'paypal'),$_smarty_tpl ) );?>
</b>
        <?php } else { ?>
            <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Production','mod'=>'paypal'),$_smarty_tpl ) );?>
</b>
        <?php }?>
    </p>

    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Production mode is the Live environment where you\'ll be able to collect your real payments','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>

    <p>
        <button class="btn btn-default" id="switchEnvironmentMode">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Switch to','mod'=>'paypal'),$_smarty_tpl ) );?>

            <?php if (isset($_smarty_tpl->tpl_vars['sandbox']->value) && $_smarty_tpl->tpl_vars['sandbox']->value) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Production mode','mod'=>'paypal'),$_smarty_tpl ) );?>

            <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sandbox mode','mod'=>'paypal'),$_smarty_tpl ) );?>

            <?php }?>
        </button>
    </p>
</div>


<?php }
}
