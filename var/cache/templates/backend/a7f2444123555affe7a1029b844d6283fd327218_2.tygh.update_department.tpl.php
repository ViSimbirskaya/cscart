<?php
/* Smarty version 4.1.0, created on 2022-07-26 16:43:45
  from 'C:\OpenServer\domains\cscart\design\backend\templates\views\departments\update_department.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62dfef918aaee6_99534630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7f2444123555affe7a1029b844d6283fd327218' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\departments\\update_department.tpl',
      1 => 1658750008,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/attach_images.tpl' => 1,
    'tygh:common/calendar.tpl' => 1,
    'tygh:common/select_status.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 2,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_62dfef918aaee6_99534630 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('name','image','description','creation_date'));
if ($_smarty_tpl->tpl_vars['department']->value) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['department']->value['department_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', 0);
}?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-editedit" name="departments_form" enctype="multipart/form-data">
<input type="hidden" class="cm-no-hide-input" name="fake" value="1" />
<input type="hidden" class="cm-no-hide-input" name="department_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />


    <div id="content_general">
        <div class="control-group">
            <label for="elm_department_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
            <div class="controls">
                <input type="text" name="department_data[department]" id="elm_department_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department']->value['department'], ENT_QUOTES, 'UTF-8');?>
" size="25" class="input-large" />
            </div>
        </div>

        <div class="control-group" id="department_graphic">
            <label class="control-label"><?php echo $_smarty_tpl->__("image");?>
</label>
            <div class="controls">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_name'=>"department",'image_object_type'=>"department",'image_pair'=>$_smarty_tpl->tpl_vars['department']->value['main_pair'],'image_object_id'=>$_smarty_tpl->tpl_vars['id']->value,'no_detailed'=>true,'hide_titles'=>true), 0, false);
?>
            </div>
        </div>

        <div class="control-group <?php if ($_smarty_tpl->tpl_vars['b_type']->value == "G") {?>hidden<?php }?>" id="department_text">
            <label class="control-label" for="elm_department_description"><?php echo $_smarty_tpl->__("description");?>
:</label>
            <div class="controls">
                <textarea id="elm_department_description" name="department_data[description]" cols="35" rows="8" class="cm-wysiwyg input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_department_timestamp_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("creation_date");?>
</label>
                <div class="controls">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"elm_department_timestamp_".((string)$_smarty_tpl->tpl_vars['id']->value),'date_name'=>"department_data[timestamp]",'date_val'=>(($tmp = $_smarty_tpl->tpl_vars['department']->value['timestamp'] ?? null)===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) ?? null : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0, false);
?>
                </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"department_data[status]",'id'=>"elm_department_status",'obj_id'=>$_smarty_tpl->tpl_vars['id']->value,'obj'=>$_smarty_tpl->tpl_vars['department']->value,'hidden'=>false), 0, false);
?>
    <!--content_general--></div>

    <div id="content_addons" class="hidden clearfix">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"departments:detailed_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"departments:detailed_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"departments:detailed_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
         <!--content_addons-->
    </div>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>"Save",'but_role'=>"submit-link",'but_target_form'=>"departments_form",'but_name'=>"dispatch[departments.update]"), 0, false);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[departments.update]",'but_role'=>"submit-link",'but_target_form'=>"departments_form",'hide_first_button'=>$_smarty_tpl->tpl_vars['hide_first_button']->value,'hide_second_button'=>$_smarty_tpl->tpl_vars['hide_second_button']->value,'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, true);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

</form>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['id']->value ? $_smarty_tpl->tpl_vars['department']->value['department'] : ("Edit department"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'select_languages'=>true), 0, false);
?>

<?php }
}
