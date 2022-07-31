<?php
/* Smarty version 4.1.0, created on 2022-07-27 10:24:10
  from 'C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\product_bundles\components\common\product_bundles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62e0e81a41d932_72087906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bc9114a51b59a7f6f3d599990aef6e1d2f76e49' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\product_bundles\\components\\common\\product_bundles.tpl',
      1 => 1657271070,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_bundles/components/common/bundle_form.tpl' => 2,
  ),
),false)) {
function content_62e0e81a41d932_72087906 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_bundles.product_bundles','product_bundles.product_bundles'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['bundles']->value) {?>
    <?php $_smarty_tpl->_assignInScope('show_block_header', (($tmp = $_smarty_tpl->tpl_vars['show_block_header']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('enable_padding', (($tmp = $_smarty_tpl->tpl_vars['enable_padding']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

    <div class="ty-product-bundles-product-bundles <?php if ($_smarty_tpl->tpl_vars['enable_padding']->value) {?>ty-product-bundles-product-bundles--padding<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['show_block_header']->value) {?>
            <div class="ty-product-bundles-product-bundles__header">
                <?php echo $_smarty_tpl->__("product_bundles.product_bundles");?>

            </div>
        <?php }?>
        <div class="ty-product-bundles-product-bundles__body">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bundles']->value, 'bundle');
$_smarty_tpl->tpl_vars['bundle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bundle']->value) {
$_smarty_tpl->tpl_vars['bundle']->do_else = false;
?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_bundles/components/common/bundle_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bundle'=>$_smarty_tpl->tpl_vars['bundle']->value,'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_bundles/components/common/product_bundles.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_bundles/components/common/product_bundles.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['bundles']->value) {?>
    <?php $_smarty_tpl->_assignInScope('show_block_header', (($tmp = $_smarty_tpl->tpl_vars['show_block_header']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('enable_padding', (($tmp = $_smarty_tpl->tpl_vars['enable_padding']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

    <div class="ty-product-bundles-product-bundles <?php if ($_smarty_tpl->tpl_vars['enable_padding']->value) {?>ty-product-bundles-product-bundles--padding<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['show_block_header']->value) {?>
            <div class="ty-product-bundles-product-bundles__header">
                <?php echo $_smarty_tpl->__("product_bundles.product_bundles");?>

            </div>
        <?php }?>
        <div class="ty-product-bundles-product-bundles__body">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bundles']->value, 'bundle');
$_smarty_tpl->tpl_vars['bundle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bundle']->value) {
$_smarty_tpl->tpl_vars['bundle']->do_else = false;
?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_bundles/components/common/bundle_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bundle'=>$_smarty_tpl->tpl_vars['bundle']->value,'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }
}
}
}
