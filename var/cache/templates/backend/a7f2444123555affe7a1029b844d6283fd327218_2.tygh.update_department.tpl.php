<?php
/* Smarty version 4.1.0, created on 2022-07-31 12:41:51
  from 'C:\OpenServer\domains\cscart\design\backend\templates\views\departments\update_department.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62e64e5fbe9a79_84781127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7f2444123555affe7a1029b844d6283fd327218' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\departments\\update_department.tpl',
      1 => 1659260506,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/attach_images.tpl' => 1,
    'tygh:common/calendar.tpl' => 1,
    'tygh:pickers/users/picker.tpl' => 2,
    'tygh:views/departments/components/picker/picker.tpl' => 2,
    'tygh:common/select_status.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_62e64e5fbe9a79_84781127 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\block.component.php','function'=>'smarty_block_component',),));
\Tygh\Languages\Helper::preloadLangVars(array('name','image','description','creation_date'));
if ($_smarty_tpl->tpl_vars['department']->value) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['department']->value['department_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', 0);
}
echo '<?php'; ?>

die();
<?php echo '?>'; ?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" class="form-horizontal form-editedit" name="departments_update_form">
        <input type="hidden" name="fake" value="1" />
        <input type="hidden" name="department_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars(fn_url("departments.update"), ENT_QUOTES, 'UTF-8');?>
" />

            <div id="content_general">
                <div class="control-group">
                    <label for="elm_department_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
                    <div class="controls">
                        <input type="text" name="department_data[name]" id="elm_department_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department']->value['name'], ENT_QUOTES, 'UTF-8');?>
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

            <!--content_general-->
            </div>

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

            <div class="control-group">
                <label class="control-label"><?php echo htmlspecialchars(("Head"), ENT_QUOTES, 'UTF-8');?>
</label>
                <div class="controls">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/users/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>("Select the head of department"),'data_id'=>"return_users",'but_meta'=>"btn",'input_name'=>"department.data[head_id]",'item_ids'=>$_smarty_tpl->tpl_vars['department_data']->value['head_id'],'placement'=>"left",'display'=>"radio",'view_mode'=>"single_button",'user_info'=>$_smarty_tpl->tpl_vars['u_info']->value), 0, false);
?>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label"><?php echo htmlspecialchars(("Workers"), ENT_QUOTES, 'UTF-8');?>
</label>
                <div class="controls">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/users/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>("Select department workers"),'data_id'=>"return_users",'but_meta'=>"btn",'input_name'=>"department.data[workers_ids]",'item_ids'=>$_smarty_tpl->tpl_vars['department_data']->value['workers_ids'],'placement'=>"left",'display'=>"radio",'view_mode'=>"single_button",'user_info'=>$_smarty_tpl->tpl_vars['u_info']->value), 0, true);
?>
                </div>
            </div>
                    





            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"departments",'tab'=>"detailed",'section'=>"information"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"departments",'tab'=>"detailed",'section'=>"information"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
" name="result_ids">

                <div class="control-group <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_department']->value, ENT_QUOTES, 'UTF-8');?>
 department-head" id="department_head">
                    <?php $_smarty_tpl->_assignInScope('rnd', rand());?>
                    <?php $_smarty_tpl->_assignInScope('request_head_id', '');?>
                    <?php if ($_REQUEST['head_id']) {?>
                        <?php $_smarty_tpl->_assignInScope('request_head_id', explode(",",$_REQUEST['head_id']));?>
                    <?php }?>
                    <label for="department_head_add_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rnd']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required control-label--department-head"><?php echo htmlspecialchars(("Head"), ENT_QUOTES, 'UTF-8');?>
</label>
                    <div class="controls">
                        <?php $_smarty_tpl->_assignInScope('company_id', (($tmp = (($tmp = $_REQUEST['department_data']['company_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['department_data']->value['company_id'] ?? null : $tmp) ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['runtime']->value['company_id'] ?? null : $tmp));?>
                        <?php if (!$_smarty_tpl->tpl_vars['company_id']->value) {?>
                            <?php $_smarty_tpl->_assignInScope('company_id', $_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value ? 0 : fn_get_default_company_id());?>
                        <?php }?>

                        <input type="hidden" name="department_data[add_new_head][]" value=""/>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/departments/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"department_data[head_id][]",'simple_class'=>"cm-field-container",'multiple'=>true,'id'=>"department_head_add_".((string)$_smarty_tpl->tpl_vars['rnd']->value),'tabindex'=>$_smarty_tpl->tpl_vars['tabindex']->value,'item_ids'=>$_smarty_tpl->tpl_vars['department_data']->value['head_id'],'meta'=>"input-large object-head-add object-head-add--multiple",'show_advanced'=>true,'allow_add'=>fn_check_permissions("head","update","admin","POST"),'allow_sorting'=>true,'result_class'=>"object-picker__result--inline",'selection_class'=>"object-picker__selection--department-head",'required'=>true,'close_on_select'=>false,'allow_multiple_created_objects'=>true,'created_object_holder_selector'=>"[name='department_data[add_new_head][]']",'query_params'=>array("company_id"=>$_smarty_tpl->tpl_vars['company_id']->value)), 0, false);
?>
                        <p class="muted description"><?php echo htmlspecialchars(("Select the head of department"), ENT_QUOTES, 'UTF-8');?>
</p>
                    </div>
                <!--department_head--></div>

                <div class="control-group <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_department']->value, ENT_QUOTES, 'UTF-8');?>
 department-workers" id="department_workers">
                    <?php $_smarty_tpl->_assignInScope('rnd', rand());?>
                    <?php $_smarty_tpl->_assignInScope('request_workers_id', '');?>
                    <?php if ($_REQUEST['workers_ids']) {?>
                        <?php $_smarty_tpl->_assignInScope('request_workers_ids', explode(",",$_REQUEST['workers_ids']));?>
                    <?php }?>
                    <label for="department_workers_add_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rnd']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required control-label--department-workers"><?php echo htmlspecialchars(("Workers"), ENT_QUOTES, 'UTF-8');?>
</label>
                    <div class="controls">
                        <?php $_smarty_tpl->_assignInScope('company_id', (($tmp = (($tmp = $_REQUEST['department_data']['company_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['department_data']->value['company_id'] ?? null : $tmp) ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['runtime']->value['company_id'] ?? null : $tmp));?>
                        <?php if (!$_smarty_tpl->tpl_vars['company_id']->value) {?>
                            <?php $_smarty_tpl->_assignInScope('company_id', $_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value ? 0 : fn_get_default_company_id());?>
                        <?php }?>

                        <input type="hidden" name="department_data[add_new_workers][]" value=""/>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/departments/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"department_data[workers_ids][]",'simple_class'=>"cm-field-container",'multiple'=>true,'id'=>"department_workers_add_".((string)$_smarty_tpl->tpl_vars['rnd']->value),'tabindex'=>$_smarty_tpl->tpl_vars['tabindex']->value,'item_ids'=>$_smarty_tpl->tpl_vars['department_data']->value['workers_ids'],'meta'=>"input-large object-workers-add object-workers-add--multiple",'show_advanced'=>true,'allow_add'=>fn_check_permissions("workers","update","admin","POST"),'allow_sorting'=>true,'result_class'=>"object-picker__result--inline",'selection_class'=>"object-picker__selection--department-workers",'required'=>true,'close_on_select'=>false,'allow_multiple_created_objects'=>true,'created_object_holder_selector'=>"[name='department_data[add_new_workers][]']",'query_params'=>array("company_id"=>$_smarty_tpl->tpl_vars['company_id']->value)), 0, true);
?>
                        <p class="muted description"><?php echo htmlspecialchars(("Select new workers"), ENT_QUOTES, 'UTF-8');?>
</p>
                    </div>
                <!--department_workers--></div>
            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"departments",'tab'=>"detailed",'section'=>"information"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"status"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"status"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
               <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"department_data[status]",'id'=>"is_status",'obj_id'=>$_smarty_tpl->tpl_vars['id']->value,'obj'=>$_smarty_tpl->tpl_vars['department']->value,'hidden'=>false), 0, false);
?>
            <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"status"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    </form>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[departments.update]",'but_target_form'=>"departments_update_form",'but_role'=>"submit-link",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>("Edite_department"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'select_languages'=>true,'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons')), 0, false);
}
}
