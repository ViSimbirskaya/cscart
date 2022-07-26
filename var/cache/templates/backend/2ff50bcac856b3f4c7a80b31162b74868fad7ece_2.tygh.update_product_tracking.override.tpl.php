<?php
/* Smarty version 4.1.0, created on 2022-07-15 17:11:23
  from 'C:\OpenServer\domains\cscart\design\backend\templates\addons\product_variations\hooks\products\update_product_tracking.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62d1758b2eefa8_23258441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ff50bcac856b3f4c7a80b31162b74868fad7ece' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_tracking.override.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d1758b2eefa8_23258441 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("tracking")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
