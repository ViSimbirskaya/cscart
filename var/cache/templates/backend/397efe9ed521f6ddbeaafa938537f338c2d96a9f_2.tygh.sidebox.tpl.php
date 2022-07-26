<?php
/* Smarty version 4.1.0, created on 2022-07-14 14:06:20
  from 'C:\OpenServer\domains\cscart\design\backend\templates\common\sidebox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62cff8ac2db745_83671441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '397efe9ed521f6ddbeaafa938537f338c2d96a9f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\common\\sidebox.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cff8ac2db745_83671441 (Smarty_Internal_Template $_smarty_tpl) {
if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="sidebar-row">
        <h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h6>
        <?php echo (($tmp = $_smarty_tpl->tpl_vars['content']->value ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);?>

    </div>
    <hr />
<?php }
}
}
