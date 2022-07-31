<?php
/* Smarty version 4.1.0, created on 2022-07-27 10:24:09
  from 'C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\social_buttons\providers\pinterest.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62e0e819cce8d5_43289864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7c2f2192cb82de9d96e71c2db32e472f0e018fb' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\social_buttons\\providers\\pinterest.tpl',
      1 => 1657271069,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e0e819cce8d5_43289864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\modifier.render_tag_attrs.php','function'=>'smarty_modifier_render_tag_attrs',),2=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['pinterest_enable'] == "Y" && $_smarty_tpl->tpl_vars['provider_settings']->value['pinterest']['data']) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"social_buttons:pinterest"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"social_buttons:pinterest"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"social_buttons:pinterest"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<span class="pinterest__wrapper">
    <a href="//pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['pinterest']['data']['url'];?>
&amp;media=<?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['pinterest']['data']['media'];?>
&amp;description=<?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['pinterest']['data']['description'];?>
" <?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['pinterest']['data']['params'];?>
><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['pinterest_size'], ENT_QUOTES, 'UTF-8');?>
.png" alt="Pinterest"></a>
</span>
<?php echo '<script'; ?>

    <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['script_attrs']->value);?>

>
    (function(_, $) {
        var event_suffix = 'pinterest';

        _.deferred_scripts.push({
            src: '//assets.pinterest.com/js/pinit.js',
            event_suffix: event_suffix
        });

        $.ceEvent('on', 'ce.lazy_script_load_' + event_suffix, function () {
            if (window.PinUtils) {
                window.PinUtils.build();
                return;
            }
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/providers/pinterest.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/social_buttons/providers/pinterest.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['pinterest_enable'] == "Y" && $_smarty_tpl->tpl_vars['provider_settings']->value['pinterest']['data']) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"social_buttons:pinterest"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"social_buttons:pinterest"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"social_buttons:pinterest"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<span class="pinterest__wrapper">
    <a href="//pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['pinterest']['data']['url'];?>
&amp;media=<?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['pinterest']['data']['media'];?>
&amp;description=<?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['pinterest']['data']['description'];?>
" <?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['pinterest']['data']['params'];?>
><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['pinterest_size'], ENT_QUOTES, 'UTF-8');?>
.png" alt="Pinterest"></a>
</span>
<?php echo '<script'; ?>

    <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['script_attrs']->value);?>

>
    (function(_, $) {
        var event_suffix = 'pinterest';

        _.deferred_scripts.push({
            src: '//assets.pinterest.com/js/pinit.js',
            event_suffix: event_suffix
        });

        $.ceEvent('on', 'ce.lazy_script_load_' + event_suffix, function () {
            if (window.PinUtils) {
                window.PinUtils.build();
                return;
            }
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }
}
}
}
