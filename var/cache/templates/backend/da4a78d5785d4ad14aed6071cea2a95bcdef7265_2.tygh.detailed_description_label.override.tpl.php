<?php
/* Smarty version 4.1.0, created on 2022-07-14 13:06:31
  from 'C:\OpenServer\domains\cscart\design\backend\templates\addons\blog\hooks\pages\detailed_description_label.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62cfeaa7e4baa0_51974711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da4a78d5785d4ad14aed6071cea2a95bcdef7265' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\blog\\hooks\\pages\\detailed_description_label.override.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cfeaa7e4baa0_51974711 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('post_description'));
if ($_smarty_tpl->tpl_vars['page_type']->value == (defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>
    <label class="control-label" for="elm_page_descr"><?php echo $_smarty_tpl->__("post_description");?>
:</label>
<?php }
}
}
