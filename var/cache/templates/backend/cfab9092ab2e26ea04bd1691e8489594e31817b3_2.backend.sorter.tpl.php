<?php
/* Smarty version 4.1.0, created on 2022-07-08 12:23:30
  from 'C:\OpenServer\domains\cscart\design\backend\templates\views\debugger\components\sorter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62c7f792a15ba2_55644789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfab9092ab2e26ea04bd1691e8489594e31817b3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\debugger\\components\\sorter.tpl',
      1 => 1656493754,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c7f792a15ba2_55644789 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
if ($_smarty_tpl->tpl_vars['field']->value != $_smarty_tpl->tpl_vars['order_by']->value) {?>
    <?php $_smarty_tpl->_assignInScope('direction', "none");?>
    <?php $_smarty_tpl->_assignInScope('order_direction', "asc");
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['direction']->value == "asc") {?>
        <?php $_smarty_tpl->_assignInScope('order_direction', "desc");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('order_direction', "asc");?>
    <?php }
}?>
<a class="cm-ajax cm-ajax-cache" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['url']->value)."?order_by=".((string)$_smarty_tpl->tpl_vars['field']->value).",".((string)$_smarty_tpl->tpl_vars['order_direction']->value)."&debugger_hash=".((string)$_smarty_tpl->tpl_vars['debugger_hash']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['direction']->value == "none") {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-asc"),$_smarty_tpl);
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-desc",'data'=>array("style"=>"margin-left: -7px;")),$_smarty_tpl);
} else {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['order_direction']->value)),$_smarty_tpl);
}?></a>
<?php }
}
