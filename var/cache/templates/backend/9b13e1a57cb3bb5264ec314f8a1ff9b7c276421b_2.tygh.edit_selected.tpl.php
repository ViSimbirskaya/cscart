<?php
/* Smarty version 4.1.0, created on 2022-07-19 08:31:43
  from 'C:\OpenServer\domains\cscart\design\backend\templates\views\products\components\context_menu\edit_selected.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62d641bf4c2f83_55795982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b13e1a57cb3bb5264ec314f8a1ff9b7c276421b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\products\\components\\context_menu\\edit_selected.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d641bf4c2f83_55795982 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('edit_selected'));
?>

<li class="btn bulk-edit__btn bulk-edit__btn--edit-products mobile-hide">
    <span class="bulk-edit__btn-content">
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"dialog",'class'=>"cm-process-items",'text'=>$_smarty_tpl->__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>$_smarty_tpl->tpl_vars['params']->value['form']), true);?>

    </span>
</li>
<?php }
}
