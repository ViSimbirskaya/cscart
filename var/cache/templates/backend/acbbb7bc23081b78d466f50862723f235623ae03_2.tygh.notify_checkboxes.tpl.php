<?php
/* Smarty version 4.1.0, created on 2022-07-12 17:50:08
  from 'C:\OpenServer\domains\cscart\design\backend\templates\views\profiles\components\context_menu\notify_checkboxes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62cd8a202c4557_07332985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acbbb7bc23081b78d466f50862723f235623ae03' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\profiles\\components\\context_menu\\notify_checkboxes.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/notify_checkboxes.tpl' => 1,
  ),
),false)) {
function content_62cd8a202c4557_07332985 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('notify_user'));
?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/notify_checkboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prefix'=>"multiple",'id'=>"select",'notify'=>true,'notify_customer_status'=>true,'notify_text'=>$_smarty_tpl->__("notify_user"),'name_prefix'=>"notify"), 0, false);
}
}
