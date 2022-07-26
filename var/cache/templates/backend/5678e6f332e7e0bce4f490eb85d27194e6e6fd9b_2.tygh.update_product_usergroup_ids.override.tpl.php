<?php
/* Smarty version 4.1.0, created on 2022-07-15 17:11:23
  from 'C:\OpenServer\domains\cscart\design\backend\templates\addons\product_variations\hooks\products\update_product_usergroup_ids.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62d1758b718f99_27513838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5678e6f332e7e0bce4f490eb85d27194e6e6fd9b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_usergroup_ids.override.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d1758b718f99_27513838 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("usergroup_ids")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
