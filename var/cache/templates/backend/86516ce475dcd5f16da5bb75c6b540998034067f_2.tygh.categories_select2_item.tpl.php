<?php
/* Smarty version 4.1.0, created on 2022-07-19 08:31:11
  from 'C:\OpenServer\domains\cscart\design\backend\templates\views\categories\components\categories_select2_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62d6419f9e9a90_54545545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86516ce475dcd5f16da5bb75c6b540998034067f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\categories\\components\\categories_select2_item.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d6419f9e9a90_54545545 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('parent_names', array());?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['parents'], 'parent');
$_smarty_tpl->tpl_vars['parent']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['parent']->value) {
$_smarty_tpl->tpl_vars['parent']->do_else = false;
?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['parent_names']) ? $_smarty_tpl->tpl_vars['parent_names']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['parent']->value['category'];
$_smarty_tpl->_assignInScope('parent_names', $_tmp_array);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['parent_names']->value) {?>
    <?php $_smarty_tpl->_assignInScope('parent_path', implode(" / ",$_smarty_tpl->tpl_vars['parent_names']->value));
}?>
<span class="select2-selection__choice__handler"></span>
<div class="select2__category-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'UTF-8');?>
</div>
<div class="select2__category-parents"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent_path']->value, ENT_QUOTES, 'UTF-8');?>
</div>
<?php if ($_smarty_tpl->tpl_vars['category']->value['company'] && !$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
    <div class="select2__category-company"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['company'], ENT_QUOTES, 'UTF-8');?>
</div>
<?php }
}
}
