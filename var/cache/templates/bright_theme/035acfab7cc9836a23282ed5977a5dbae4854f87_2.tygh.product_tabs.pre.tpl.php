<?php
/* Smarty version 4.1.0, created on 2022-07-27 10:24:10
  from 'C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\product_bundles\hooks\products\product_tabs.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62e0e81a384992_94514000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '035acfab7cc9836a23282ed5977a5dbae4854f87' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\product_bundles\\hooks\\products\\product_tabs.pre.tpl',
      1 => 1657271070,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e0e81a384992_94514000 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\block.component.php','function'=>'smarty_block_component',),2=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"product_bundles.product_bundles",'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'show_on_products_page'=>true));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"product_bundles.product_bundles",'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'show_on_products_page'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_component(array('name'=>"product_bundles.product_bundles",'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'show_on_products_page'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_bundles/hooks/products/product_tabs.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_bundles/hooks/products/product_tabs.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"product_bundles.product_bundles",'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'show_on_products_page'=>true));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"product_bundles.product_bundles",'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'show_on_products_page'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_component(array('name'=>"product_bundles.product_bundles",'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'show_on_products_page'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
