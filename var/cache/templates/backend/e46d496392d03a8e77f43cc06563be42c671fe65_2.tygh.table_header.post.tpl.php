<?php
/* Smarty version 4.1.0, created on 2022-07-19 08:31:32
  from 'C:\OpenServer\domains\cscart\design\backend\templates\addons\product_bundles\hooks\product_picker\table_header.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62d641b4d0ea35_37860975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e46d496392d03a8e77f43cc06563be42c671fe65' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_bundles\\hooks\\product_picker\\table_header.post.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d641b4d0ea35_37860975 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('price','discount','value','discounted_price','product_bundles.show_on_product_page'));
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] === "product_bundles" || $_smarty_tpl->tpl_vars['extra_mode']->value === "product_bundles") {?>
    <th><?php echo $_smarty_tpl->__("price");?>
</th>
    <th><?php echo $_smarty_tpl->__("discount");?>
</th>
    <th><?php echo $_smarty_tpl->__("value");?>
</th>
    <th><?php echo $_smarty_tpl->__("discounted_price");?>
</th>
    <th><?php echo $_smarty_tpl->__("product_bundles.show_on_product_page");?>
</th>
<?php }
}
}
