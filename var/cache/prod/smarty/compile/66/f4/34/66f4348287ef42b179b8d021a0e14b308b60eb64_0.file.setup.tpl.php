<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-21 09:11:42
  from 'C:\xampp\htdocs\prestashop\modules\paypal\views\templates\admin\setup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60091b1e12e331_05608211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66f4348287ef42b179b8d021a0e14b308b60eb64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\paypal\\views\\templates\\admin\\setup.tpl',
      1 => 1611036008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./_partials/messages/prestashopCheckoutInfo.tpl' => 1,
    'file:./_partials/messages/restApiIntegrationMessage.tpl' => 1,
    'file:./_partials/messages/roundingSettingsMessage.tpl' => 1,
    'file:./_partials/headerLogo.tpl' => 1,
  ),
),false)) {
function content_60091b1e12e331_05608211 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['showPsCheckoutInfo']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:./_partials/messages/prestashopCheckoutInfo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if ($_smarty_tpl->tpl_vars['showRestApiIntegrationMessage']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:./_partials/messages/restApiIntegrationMessage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if (isset($_smarty_tpl->tpl_vars['need_rounding']->value) && $_smarty_tpl->tpl_vars['need_rounding']->value) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:./_partials/messages/roundingSettingsMessage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php $_smarty_tpl->_subTemplateRender('file:./_partials/headerLogo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    <div class="row pp__flex">
        <div class="col-lg-8 stretchHeightForm pp__pb-4">
            <?php if (isset($_smarty_tpl->tpl_vars['formAccountSettings']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['formAccountSettings']->value;?>
             <?php }?>

        </div>
        <div class="col-lg-4 pp__flex pp__flex_direction_column pp__justify-content-between stretchHeightForm pp__pb-4">
            <?php if (isset($_smarty_tpl->tpl_vars['formEnvironmentSettings']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['formEnvironmentSettings']->value;?>
             <?php }?>

            <div class="status-block-container">
                <?php if (isset($_smarty_tpl->tpl_vars['formStatusTop']->value)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['formStatusTop']->value;?>
                 <?php }?>
            </div>
        </div>
    </div>

    <div class="row pp__flex">
        <div class="col-lg-8">
            <?php if (isset($_smarty_tpl->tpl_vars['formPaymentSettings']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['formPaymentSettings']->value;?>
             <?php }?>
        </div>
        <div class="col-lg-4 stretchHeightForm pp__pb-4 status-block-container">
            <?php if (isset($_smarty_tpl->tpl_vars['formStatus']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['formStatus']->value;?>
             <?php }?>
        </div>
    </div>
</div>
<?php }
}
