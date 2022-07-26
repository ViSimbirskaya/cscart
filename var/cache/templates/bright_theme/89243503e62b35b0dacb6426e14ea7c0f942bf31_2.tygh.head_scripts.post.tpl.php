<?php
/* Smarty version 4.1.0, created on 2022-07-08 12:16:38
  from 'C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\gdpr\hooks\index\head_scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62c7f5f64c3d30_20009731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89243503e62b35b0dacb6426e14ea7c0f942bf31' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\gdpr\\hooks\\index\\head_scripts.post.tpl',
      1 => 1657271073,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c7f5f64c3d30_20009731 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['gdpr']['gdpr_cookie_consent'] !== 'none') {?>
    <?php echo '<script'; ?>
 
        data-no-defer
        type="text/javascript"
        src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/var/files/gdpr/klaro/config.js">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 
        data-no-defer
        data-klaro-config="klaroConfig"
        data-config="klaroConfig"
        type="text/javascript"
        src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/js/addons/gdpr/lib/klaro.js">
    <?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gdpr/hooks/index/head_scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gdpr/hooks/index/head_scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['gdpr']['gdpr_cookie_consent'] !== 'none') {?>
    <?php echo '<script'; ?>
 
        data-no-defer
        type="text/javascript"
        src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/var/files/gdpr/klaro/config.js">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 
        data-no-defer
        data-klaro-config="klaroConfig"
        data-config="klaroConfig"
        type="text/javascript"
        src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/js/addons/gdpr/lib/klaro.js">
    <?php echo '</script'; ?>
>
<?php }
}
}
}
