<?php
/* Smarty version 4.1.0, created on 2022-07-27 10:24:11
  from 'C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\discussion\blocks\product_tabs\discussion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62e0e81b03d412_49296391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dcc630d56b6482dfe3241eca8f52e63dc2d5f94' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\discussion\\blocks\\product_tabs\\discussion.tpl',
      1 => 1657271072,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion/view.tpl' => 2,
  ),
),false)) {
function content_62e0e81b03d412_49296391 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('discussion_title_product','discussion_title_product'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['status'] !== smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>

<?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT"),'title'=>$_smarty_tpl->__("discussion_title_product"),'quicklink'=>"disussion_link",'container_id'=>"content_discussion_block",'locate_to_review_tab'=>true), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/blocks/product_tabs/discussion.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/blocks/product_tabs/discussion.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['status'] !== smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>

<?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT"),'title'=>$_smarty_tpl->__("discussion_title_product"),'quicklink'=>"disussion_link",'container_id'=>"content_discussion_block",'locate_to_review_tab'=>true), 0, true);
}
}
}
}
