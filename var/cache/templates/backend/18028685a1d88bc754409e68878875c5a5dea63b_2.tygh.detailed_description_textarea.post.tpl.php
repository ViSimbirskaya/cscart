<?php
/* Smarty version 4.1.0, created on 2022-07-14 13:06:31
  from 'C:\OpenServer\domains\cscart\design\backend\templates\addons\blog\hooks\pages\detailed_description_textarea.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62cfeaa7eadda8_33454382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18028685a1d88bc754409e68878875c5a5dea63b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\blog\\hooks\\pages\\detailed_description_textarea.post.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cfeaa7eadda8_33454382 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('ttc_post_description'));
if ($_smarty_tpl->tpl_vars['page_type']->value == (defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>
    <p class="muted description"><?php echo $_smarty_tpl->__("ttc_post_description");?>
</p>
<?php }
}
}
