<?php
/* Smarty version 4.1.0, created on 2022-07-27 20:02:52
  from 'C:\OpenServer\domains\cscart\design\backend\templates\addons\product_bundles\hooks\product_list\table_columns.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62e16fbcddf9a2_00913566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcf8091a38e716a7d8fe55f30ec96faed23798d3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_bundles\\hooks\\product_list\\table_columns.post.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e16fbcddf9a2_00913566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>
<input type="hidden" id="price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['base_price'], ENT_QUOTES, 'UTF-8');?>
" />
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['product_options'], 'option', false, 'option_id');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option_id']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value['variants'], 'variant', false, 'variant_id');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant_id']->value => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['variant']->value['modifier'] != 0) {?>
            <?php if ($_smarty_tpl->tpl_vars['variant']->value['modifier_type'] == "A") {?>
                <?php $_smarty_tpl->_assignInScope('op_modifier', $_smarty_tpl->tpl_vars['variant']->value['modifier']);?>
            <?php } else { ?>
                <?php echo smarty_function_math(array('equation'=>"(price / 100) * modifier",'price'=>$_smarty_tpl->tpl_vars['product']->value['base_price'],'modifier'=>$_smarty_tpl->tpl_vars['variant']->value['modifier'],'assign'=>"op_modifier"),$_smarty_tpl);?>

            <?php }?>
            <input type="hidden" id="product_bundle_option_modifier_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['op_modifier']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
