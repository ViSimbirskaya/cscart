<?php
/* Smarty version 4.1.0, created on 2022-07-31 14:31:41
  from 'C:\OpenServer\domains\cscart\design\backend\templates\addons\product_bundles\views\product_bundles\components\sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62e6681d8d0ea6_57852191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3decd253a89b47db962843e29704fede8e27a5e9' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_bundles\\views\\product_bundles\\components\\sidebar.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/companies/components/picker/picker.tpl' => 1,
    'tygh:views/products/components/picker/picker.tpl' => 1,
  ),
),false)) {
function content_62e6681d8d0ea6_57852191 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','product_bundles.product_bundle_name','owner','any_vendor','product_bundles.search_in_products','admin_search_button'));
$_smarty_tpl->_assignInScope('dispatch', "product_bundles.manage");?>
<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="bundle_search_form" method="get" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="sidebar-field">
            <label for="elm_bundle"><?php echo $_smarty_tpl->__("product_bundles.product_bundle_name");?>
</label>
            <input type="text" name="q" id="elm_bundle" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
">
        </div>

        <?php if (fn_allowed_for("MULTIVENDOR") && !$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <div class="sidebar-field">
                <label for="elm_owner"><?php echo $_smarty_tpl->__("owner");?>
</label>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"company_id",'show_advanced'=>false,'show_empty_variant'=>true,'item_ids'=>$_smarty_tpl->tpl_vars['search']->value['company_id'] ? array($_smarty_tpl->tpl_vars['search']->value['company_id']) : array(),'empty_variant_text'=>$_smarty_tpl->__("any_vendor")), 0, false);
?>
            </div>
        <?php }?>

        <div class="sidebar-field">
            <label><?php echo $_smarty_tpl->__("product_bundles.search_in_products");?>
</label>

            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('advanced_picker_id'=>"product_bundle_".((string)$_smarty_tpl->tpl_vars['id']->value)."_",'view_mode'=>"simple",'show_simple_product'=>true,'input_name'=>"product_id",'item_ids'=>array($_smarty_tpl->tpl_vars['search']->value['product_id']),'show_empty_variant'=>true,'for_current_storefront'=>true,'result_class'=>"object-picker__result--product-bundles",'show_advanced'=>false), 0, false);
?>
        </div>

        <div class="sidebar-field">
            <input class="btn" type="submit" name="dispatch[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dispatch']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo $_smarty_tpl->__("admin_search_button");?>
">
        </div>
    </form>
</div><?php }
}
