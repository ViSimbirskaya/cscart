<?php
/* Smarty version 4.1.0, created on 2022-07-15 17:11:22
  from 'C:\OpenServer\domains\cscart\design\backend\templates\addons\product_variations\hooks\products\categories_section.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62d1758aa199b6_21025001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '446a9c3c0121d65701f48d397f07cfa7e04abf61' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\categories_section.post.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d1758aa199b6_21025001 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('categories'));
if ($_smarty_tpl->tpl_vars['product_data']->value['product_type'] === constant("\Tygh\Addons\ProductVariations\Product\Type\Type::PRODUCT_TYPE_VARIATION")) {?>
    <?php $_smarty_tpl->_assignInScope('multiple_categoires', count($_smarty_tpl->tpl_vars['product_data']->value['category_ids']) > 1);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "variation_categories", null, null);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (($tmp = $_smarty_tpl->tpl_vars['product_data']->value['category_ids'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['request_category_id']->value ?? null : $tmp), 'c_id');
$_smarty_tpl->tpl_vars['c_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c_id']->value) {
$_smarty_tpl->tpl_vars['c_id']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('category_data', fn_get_category_data($_smarty_tpl->tpl_vars['c_id']->value,(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),'',false,true,false,true));?>
            <?php if ($_smarty_tpl->tpl_vars['multiple_categoires']->value) {?>
                <p class="cm-js-item">
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category_data']->value['path_names'], 'path_name', false, 'path_id', 'path_names', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['path_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path_id']->value => $_smarty_tpl->tpl_vars['path_name']->value) {
$_smarty_tpl->tpl_vars['path_name']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_path_names']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_path_names']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_path_names']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_path_names']->value['total'];
?>
                <a target="_blank" class="<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_path_names']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_path_names']->value['last'] : null)) {?>ty-breadcrumbs__a<?php } else { ?>ty-breadcrumbs__current<?php }?>" href="<?php echo htmlspecialchars(fn_url("categories.update&category_id=".((string)$_smarty_tpl->tpl_vars['path_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path_name']->value, ENT_QUOTES, 'UTF-8');?>
</a><?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_path_names']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_path_names']->value['last'] : null)) {?> / <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->tpl_vars['multiple_categoires']->value) {?>
                </p>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("categories");?>
</label>
        <div class="controls">
            <p>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variation_categories');?>

            </p>
        </div>
    </div>
<?php }
}
}
