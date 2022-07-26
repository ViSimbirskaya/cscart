<?php
/* Smarty version 4.1.0, created on 2022-07-19 08:31:43
  from 'C:\OpenServer\domains\cscart\design\backend\templates\common\select2\categories_bulkedit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62d641bf27a503_53563058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '236108567bacc7ada19490d7f38e2c378991fc8a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\common\\select2\\categories_bulkedit.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/categories/components/picker/picker.tpl' => 1,
  ),
),false)) {
function content_62d641bf27a503_53563058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/tygh/backend/categories.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"product_data[category_ids][]",'simple_class'=>"cm-field-container",'multiple'=>true,'id'=>((string)$_smarty_tpl->tpl_vars['select_id']->value),'data-ca-picker-id'=>"categories_".((string)$_smarty_tpl->tpl_vars['select2_select_id']->value),'tabindex'=>$_smarty_tpl->tpl_vars['tabindex']->value,'item_ids'=>$_smarty_tpl->tpl_vars['bulk_edit_ids_flat']->value,'meta'=>"object-categories-add object-categories-add--multiple object-categories-add--bulk-edit cm-object-categories-add-container",'select_class'=>"cm-bulk-edit-object-categories-add ".((string)$_smarty_tpl->tpl_vars['select_class']->value),'show_advanced'=>true,'allow_add'=>false,'allow_sorting'=>true,'result_class'=>"object-picker__result--inline",'selection_class'=>"object-picker__selection--product-categories",'required'=>true,'close_on_select'=>false,'allow_multiple_created_objects'=>true,'created_object_holder_selector'=>"[name='product_data[add_new_category][]']",'is_bulk_edit'=>true,'has_selection_controls'=>true,'has_removable_items'=>false,'is_tristate_checkbox'=>true), 0, false);
}
}
