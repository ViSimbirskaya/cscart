<?php
/* Smarty version 4.1.0, created on 2022-07-14 13:06:32
  from 'C:\OpenServer\domains\cscart\design\backend\templates\addons\tags\hooks\pages\tabs_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62cfeaa86a0199_34384512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5956da7342e29e8f0fc007707e017794b8c4e4a8' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\tags\\hooks\\pages\\tabs_content.post.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/tags/views/tags/components/object_tags.tpl' => 1,
  ),
),false)) {
function content_62cfeaa86a0199_34384512 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR")) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_pages'] == "Y") {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/tags/views/tags/components/object_tags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['page_data']->value,'input_name'=>"page_data",'object_type'=>"A",'object_id'=>$_smarty_tpl->tpl_vars['page_data']->value['page_id']), 0, false);
?>
    <?php }
}
}
}
