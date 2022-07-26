<?php
/* Smarty version 4.1.0, created on 2022-07-15 17:11:23
  from 'C:\OpenServer\domains\cscart\design\backend\templates\addons\product_variations\hooks\products\update_product_min_qty.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62d1758b33e9b9_42745834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa4f65e5e938f76e5e140c134f5599d8aa2a83e1' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_min_qty.override.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d1758b33e9b9_42745834 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("min_qty")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
