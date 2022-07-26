<?php
/* Smarty version 4.1.0, created on 2022-07-14 13:15:40
  from 'C:\OpenServer\domains\cscart\design\backend\templates\views\companies\components\picker\item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62cfecccc186a9_03581731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '338525b5529ab35f423f6078d0c959c30aa30992' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\companies\\components\\picker\\item.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cfecccc186a9_03581731 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="object-picker__companies-main">
    <div class="object-picker__companies-name">
        <div class="object-picker__companies-name-content"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 <span>${data.name}</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
</div><?php }
}
