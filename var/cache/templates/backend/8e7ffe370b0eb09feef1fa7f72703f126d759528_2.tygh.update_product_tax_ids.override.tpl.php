<?php
/* Smarty version 4.1.0, created on 2022-07-15 17:11:23
  from 'C:\OpenServer\domains\cscart\design\backend\templates\addons\product_variations\hooks\products\update_product_tax_ids.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62d1758b474b83_17243841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e7ffe370b0eb09feef1fa7f72703f126d759528' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_tax_ids.override.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d1758b474b83_17243841 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("tax_ids")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
