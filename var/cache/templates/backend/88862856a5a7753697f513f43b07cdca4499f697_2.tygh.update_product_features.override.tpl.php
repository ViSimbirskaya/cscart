<?php
/* Smarty version 4.1.0, created on 2022-07-15 17:11:24
  from 'C:\OpenServer\domains\cscart\design\backend\templates\addons\product_variations\hooks\products\update_product_features.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62d1758c0e4717_00905677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88862856a5a7753697f513f43b07cdca4499f697' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_features.override.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d1758c0e4717_00905677 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("features")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
