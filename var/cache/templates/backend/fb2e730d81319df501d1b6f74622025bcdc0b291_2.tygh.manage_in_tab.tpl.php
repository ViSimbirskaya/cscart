<?php
/* Smarty version 4.1.0, created on 2022-07-25 13:30:21
  from 'C:\OpenServer\domains\cscart\design\backend\templates\views\tabs\manage_in_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62de70bdb96a31_25430563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb2e730d81319df501d1b6f74622025bcdc0b291' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\tabs\\manage_in_tab.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/tabs/manage.tpl' => 1,
  ),
),false)) {
function content_62de70bdb96a31_25430563 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "product_tabs") {?>hidden<?php }?>" id="content_product_tabs">
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/tabs/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--content_product_tabs--></div>
<?php }
}
