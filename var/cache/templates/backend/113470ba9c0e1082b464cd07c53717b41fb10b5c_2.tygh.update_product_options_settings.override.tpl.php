<?php
/* Smarty version 4.1.0, created on 2022-07-15 17:11:22
  from 'C:\OpenServer\domains\cscart\design\backend\templates\addons\product_variations\hooks\products\update_product_options_settings.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62d1758aedf7b4_72503622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '113470ba9c0e1082b464cd07c53717b41fb10b5c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_options_settings.override.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d1758aedf7b4_72503622 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("options_type") && !$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("exceptions_type")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
