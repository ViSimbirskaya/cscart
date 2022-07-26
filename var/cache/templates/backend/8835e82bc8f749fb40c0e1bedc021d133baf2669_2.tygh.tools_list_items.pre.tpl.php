<?php
/* Smarty version 4.1.0, created on 2022-07-14 11:17:33
  from 'C:\OpenServer\domains\cscart\design\backend\templates\addons\advanced_import\hooks\products\tools_list_items.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62cfd11d84c762_67358877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8835e82bc8f749fb40c0e1bedc021d133baf2669' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\advanced_import\\hooks\\products\\tools_list_items.pre.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cfd11d84c762_67358877 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('import_product_href', "import_presets.manage&object_type=products" ,false ,2);
$_smarty_tpl->_assignInScope('has_permission_an_import', fn_check_permissions("import_presets","update","admin","POST") ,false ,2);
}
}
