<?php
/* Smarty version 4.1.0, created on 2022-07-31 11:53:38
  from 'C:\OpenServer\domains\cscart\design\backend\templates\views\departments\manage_department.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62e643126c14b7_89816121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a64072d22306e72a0b6d9a4c43e2698f647c64d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\departments\\manage_department.tpl',
      1 => 1658942670,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/image.tpl' => 1,
    'tygh:views/companies/components/company_name.tpl' => 4,
    'tygh:common/select_popup.tpl' => 2,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:common/tools.tpl' => 1,
    'tygh:common/saved_search.tpl' => 1,
    'tygh:views/departments/components/departments_search_form.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_62e643126c14b7_89816121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('Name','Status','name','description','head','workers','status','edit','delete','no_data'));
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" id="departments_form" name="departments_form" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />
<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>"pagination_contents_departments"), 0, false);
?>

<?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));?>

<?php $_smarty_tpl->_assignInScope('rev', (($tmp = $_REQUEST['content_id'] ?? null)===null||$tmp==='' ? "pagination_contents_departments" ?? null : $tmp));
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']),'assign'=>'c_icon'),$_smarty_tpl);?>

<?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-dummy",'assign'=>'c_dummy'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('department_statuses', fn_get_default_statuses('',true));
$_smarty_tpl->_assignInScope('has_permission', fn_check_permissions("departments","update_status","admin","POST"));?>

<?php if ($_smarty_tpl->tpl_vars['departments']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "departments_table", null, null);?>
        <div class="table-responsive-wrapper longtap-selection">
            <table class="table table-middle table--relative table-responsive">
            <thead
                data-ca-bulkedit-default-object="true"
                data-ca-bulkedit-component="defaultObject"
            >
            <tr>
                <th width="6%" class="left mobile-hide">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_check_disabled'=>!$_smarty_tpl->tpl_vars['has_permission']->value,'check_statuses'=>$_smarty_tpl->tpl_vars['has_permission']->value ? $_smarty_tpl->tpl_vars['department_statuses']->value : ''), 0, false);
?>

                    <input type="checkbox"
                        class="bulkedit-toggler hide"
                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>

                <td width="6%">
                    <input type="text" name="departments_data[1][position]" value="10" size="3" class="input-micro input-hidden">
                </td>

                <th width="15%">
                    <a class="cm-ajax"><?php echo htmlspecialchars(("Logo"), ENT_QUOTES, 'UTF-8');?>
</a>
                </th>

                <th width="15%">
                    <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("Name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "name") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a>
                </th>

                <th width="15%">
                    <a class="cm-ajax"><?php echo htmlspecialchars(("Description"), ENT_QUOTES, 'UTF-8');?>
</a>
                </th>

                <th width="15%">
                    <a class="cm-ajax"><?php echo htmlspecialchars(("Head"), ENT_QUOTES, 'UTF-8');?>
</a>
                </th>

                <th width="15%">
                    <a class="cm-ajax"><?php echo htmlspecialchars(("Workers"), ENT_QUOTES, 'UTF-8');?>
</a>
                </th>
                
                <th width="10%" class="right">
                    <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("Status");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
}?></a>
                </th>

                <th width="6%" class="mobile-hide">&nbsp;</th>

            </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['departments']->value, 'department');
$_smarty_tpl->tpl_vars['department']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['department']->value) {
$_smarty_tpl->tpl_vars['department']->do_else = false;
?>
            <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['department']->value['is_status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target"
                <?php if ($_smarty_tpl->tpl_vars['has_permission']->value) {?>
                    data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['departments']->value['department_id'], ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
            >
                <?php $_smarty_tpl->_assignInScope('allow_save', true);?>

                <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('no_hide_input', "cm-no-hide-input");?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('no_hide_input', '');?>
                <?php }?>

                <td width="6%" class="left mobile-hide">
                    <input type="checkbox" name="department_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department']->value['department_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
 cm-item-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['department']->value['is_status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" />
                </td>

                <td width="6%">
                  <input type="text" name="departments_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department']->value['department_id'], ENT_QUOTES, 'UTF-8');?>
]][is_status]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department']->value['is_status'], ENT_QUOTES, 'UTF-8');?>
" size="2" class="input-micro input-hidden">
                </td>

                <td width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_width']->value+'10px', ENT_QUOTES, 'UTF-8');?>
" class="departments__logo">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>(($tmp = $_smarty_tpl->tpl_vars['department']->value['logo'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['department']->value['logo']['detailed'] ?? null : $tmp),'image_id'=>$_smarty_tpl->tpl_vars['department']->value['logo']['image_id'],'image_width'=>$_smarty_tpl->tpl_vars['logo_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['logo_height']->value,'href'=>fn_url("department.update?department_id=".((string)$_smarty_tpl->tpl_vars['department']->value['department_id'])),'image_css_class'=>"departments-list__image--img",'link_css_class'=>"departments-list__image--link"), 0, true);
?>
                </td>

                <td width="15%" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
" data-th="<?php echo $_smarty_tpl->__("name");?>
">
                    <a class="row-status" href="<?php echo htmlspecialchars(fn_url("departments_descriptions.update?department_id=".((string)$_smarty_tpl->tpl_vars['department']->value['department_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['department']->value), 0, true);
?>
                </td>

                 <td width="15%" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
" data-th="<?php echo $_smarty_tpl->__("description");?>
">
                    <a class="row-status" href="<?php echo htmlspecialchars(fn_url("departments_descriptions.update?department_id=".((string)$_smarty_tpl->tpl_vars['department']->value['department_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department']->value['description'], ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['department']->value), 0, true);
?>
                </td>

                 <td width="15%" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
" data-th="<?php echo $_smarty_tpl->__("head");?>
">
                    <a class="row-status" href="<?php echo htmlspecialchars(fn_url("departments_links.update?department_id=".((string)$_smarty_tpl->tpl_vars['department']->value['department_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department']->value['head_id'], ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['department']->value), 0, true);
?>
                </td>

                <td width="15%" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
" data-th="<?php echo $_smarty_tpl->__("workers");?>
">
                    <a class="row-status" href="<?php echo htmlspecialchars(fn_url("departments.update?department_id=".((string)$_smarty_tpl->tpl_vars['department']->value['department_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department']->value['worker_ids'], ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['department']->value), 0, true);
?>
                </td>

                <td width="15%" class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                    <?php if ($_smarty_tpl->tpl_vars['department']->value['is_status']) {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['department']->value['department_id'],'status'=>'A','object_id_name'=>"department_id",'table'=>"departments",'popup_additional_class'=>((string)$_smarty_tpl->tpl_vars['no_hide_input']->value)." dropleft"), 0, true);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['department']->value['department_id'],'status'=>'D','object_id_name'=>"department_id",'table'=>"departments",'popup_additional_class'=>((string)$_smarty_tpl->tpl_vars['no_hide_input']->value)." dropleft"), 0, true);
?>
                    <?php }?>

                </td>

                <td width="15%" class="mobile-hide">
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"departments.update_department?department_id=".((string)$_smarty_tpl->tpl_vars['department']->value['department_id'])), true);?>
</li>
                    <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("delete"),'href'=>"departments.delete?department_id=".((string)$_smarty_tpl->tpl_vars['department']->value['department_id']),'method'=>"POST"), true);?>
</li>
                    <?php }?>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <div class="hidden-tools">
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                    </div>
                </td>

            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"departments_form",'object'=>"departments",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'departments_table'),'has_permissions'=>$_smarty_tpl->tpl_vars['has_permission']->value), 0, false);
} else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('div_id'=>"pagination_contents_departments"), 0, true);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tool_href'=>"departments.add_department",'prefix'=>"top",'hide_tools'=>"true",'title'=>("Create new department"),'icon'=>"icon-plus"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

</form>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"departments:manage_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"departments:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>(($tmp = $_smarty_tpl->tpl_vars['dispatch']->value ?? null)===null||$tmp==='' ? "departments.manage" ?? null : $tmp),'view_type'=>"departments"), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/departments/components/departments_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>(($tmp = $_smarty_tpl->tpl_vars['dispatch']->value ?? null)===null||$tmp==='' ? "departments.manage" ?? null : $tmp)), 0, false);
?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"departments:manage_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"departments:manage_mainbox_params"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"departments:manage_mainbox_params"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->_assignInScope('page_title', ("Departments"));?>
    <?php $_smarty_tpl->_assignInScope('select_languages', true);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"departments:manage_mainbox_params"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['page_title']->value,'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'select_languages'=>$_smarty_tpl->tpl_vars['select_languages']->value), 0, false);
?>

<?php }
}
