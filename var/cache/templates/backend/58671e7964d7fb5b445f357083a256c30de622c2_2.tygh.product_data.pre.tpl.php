<?php
/* Smarty version 4.1.0, created on 2022-07-27 20:02:52
  from 'C:\OpenServer\domains\cscart\design\backend\templates\addons\product_variations\hooks\product_list\product_data.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62e16fbc48ea48_38387546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58671e7964d7fb5b445f357083a256c30de622c2' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\product_list\\product_data.pre.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e16fbc48ea48_38387546 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
if ($_smarty_tpl->tpl_vars['product']->value['variation_name']) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_list:picker_product_alt_name"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_list:picker_product_alt_name"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <input type="hidden" id="product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_alt" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['variation_name'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_list:picker_product_alt_name"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
