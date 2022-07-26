<?php
/* Smarty version 4.1.0, created on 2022-07-08 12:13:02
  from 'C:\OpenServer\domains\cscart\design\backend\templates\buttons\save_cancel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62c7f51e3154b4_71650532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef16cea705825c4598c30f9cc4bcf4e43f4d3ea7' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\buttons\\save_cancel.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_62c7f51e3154b4_71650532 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('save','save_and_close','create','create_and_close','cancel'));
if ($_smarty_tpl->tpl_vars['but_target_id']->value || $_smarty_tpl->tpl_vars['but_target_form']->value) {
$_smarty_tpl->_assignInScope('but_role', "submit-link");
} else {
$_smarty_tpl->_assignInScope('but_role', "button_main");
}?>

<?php if ($_smarty_tpl->tpl_vars['save']->value) {?>
    <?php $_smarty_tpl->_assignInScope('but_label', $_smarty_tpl->__("save"));?>
    <?php $_smarty_tpl->_assignInScope('but_label2', $_smarty_tpl->__("save_and_close"));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('but_label', $_smarty_tpl->__("create"));?>
    <?php $_smarty_tpl->_assignInScope('but_label2', $_smarty_tpl->__("create_and_close"));
}?>

<?php if ($_smarty_tpl->tpl_vars['but_name']->value) {
$_smarty_tpl->_assignInScope('r', $_smarty_tpl->tpl_vars['but_name']->value);
} else {
$_smarty_tpl->_assignInScope('r', $_smarty_tpl->tpl_vars['but_href']->value);
}?>

<?php if ($_smarty_tpl->tpl_vars['cancel_action']->value == "close") {?>
    <a class="cm-dialog-closer cm-inline-dialog-closer cm-cancel tool-link btn <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cancel_meta']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("cancel");?>
</a>
<?php }?>

<?php if (fn_check_view_permissions($_smarty_tpl->tpl_vars['r']->value)) {?>
    <?php if (!$_smarty_tpl->tpl_vars['hide_first_button']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>(($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_label']->value ?? null : $tmp),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>"btn-primary ".((string)$_smarty_tpl->tpl_vars['but_meta']->value)), 0, false);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('skip_or', true);?>
    <?php }
} else { ?>
    <?php $_smarty_tpl->_assignInScope('skip_or', true);
}?>

<?php if ($_smarty_tpl->tpl_vars['extra']->value) {?>
    <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>

<?php }
}
}
