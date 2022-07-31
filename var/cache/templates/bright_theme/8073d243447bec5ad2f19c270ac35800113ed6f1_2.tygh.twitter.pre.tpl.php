<?php
/* Smarty version 4.1.0, created on 2022-07-27 10:24:09
  from 'C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\gdpr\hooks\social_buttons\twitter.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62e0e819b16e99_06907150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8073d243447bec5ad2f19c270ac35800113ed6f1' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\gdpr\\hooks\\social_buttons\\twitter.pre.tpl',
      1 => 1657271073,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e0e819b16e99_06907150 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('script_attrs', array("type"=>"text/plain","data-type"=>"application/javascript","data-name"=>"twitter") ,false ,2);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gdpr/hooks/social_buttons/twitter.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gdpr/hooks/social_buttons/twitter.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('script_attrs', array("type"=>"text/plain","data-type"=>"application/javascript","data-name"=>"twitter") ,false ,2);
}
}
}
