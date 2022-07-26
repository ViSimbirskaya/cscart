<?php
/* Smarty version 4.1.0, created on 2022-07-25 14:36:54
  from 'C:\OpenServer\domains\cscart\design\backend\templates\addons\gift_certificates\hooks\profiles\update_tools_list.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62de8056041e62_89752274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fbe79cbab677a1f4e56b4713f9c471af6c1cc33' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\gift_certificates\\hooks\\profiles\\update_tools_list.post.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62de8056041e62_89752274 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('create_gift_certificate_for_customer'));
if ($_smarty_tpl->tpl_vars['user_data']->value['user_type'] == "C" && fn_check_view_permissions("gift_certificates.add")) {?>
    <li><a class="tool-link" href="<?php echo htmlspecialchars(fn_url("gift_certificates.add?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("create_gift_certificate_for_customer");?>
</a></li>
<?php }
}
}
