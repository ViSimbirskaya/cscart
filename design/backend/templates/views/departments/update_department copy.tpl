{if $department}
    {assign var="id" value=$department.department_id}
{else}
    {assign var="id" value=0}
{/if}
<?php
die();
?>

{capture name="mainbox"}

<form action="{""|fn_url}" method="post" class="form-horizontal form-editedit" name="departments_update_form" enctype="multipart/form-data">

<input type="hidden" class="cm-no-hide-input" name="fake" value="1" />
<input type="hidden" class="cm-no-hide-input" name="department_id" value="{$id}" />


    <div id="content_general">
        <div class="control-group">
            <label for="elm_department_name" class="control-label cm-required">{__("name")}</label>
            <div class="controls">
                <input type="text" name="department_data[department]" id="elm_department_name" value="{$department.department}" size="25" class="input-large" />
            </div>
        </div>

        <div class="control-group" id="department_graphic">
            <label class="control-label">{__("image")}</label>
            <div class="controls">
                {include file="common/attach_images.tpl"
                    image_name="department"
                    image_object_type="department"
                    image_pair=$department.main_pair
                    image_object_id=$id
                    no_detailed=true
                    hide_titles=true
                }
            </div>
        </div>

        <div class="control-group {if $b_type == "G"}hidden{/if}" id="department_text">
            <label class="control-label" for="elm_department_description">{__("description")}:</label>
            <div class="controls">
                <textarea id="elm_department_description" name="department_data[description]" cols="35" rows="8" class="cm-wysiwyg input-large">{$department.description}</textarea>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_department_timestamp_{$id}">{__("creation_date")}</label>
                <div class="controls">
                    {include file="common/calendar.tpl" date_id="elm_department_timestamp_`$id`" date_name="department_data[timestamp]" date_val=$department.timestamp|default:$smarty.const.TIME start_year=$settings.Company.company_start_year}
                </div>
        </div>

        {
            include file="common/select_status.tpl" 
            input_name="department_data[status]" 
            id="elm_department_status" 
            obj_id=$id 
            obj=$department 
            hidden=false
        }
    <!--content_general--></div>

    <div id="content_addons" class="hidden clearfix">
        {hook name="departments:detailed_content"}
        {/hook}
         <!--content_addons-->
    </div>

    <div class="control-group">
        <label class="control-label">{("Head")}</label>
        <div class="controls">
            {include
                file="pickers/users/picker.tpl"
                but_text=("Select the head of department")
                data_id="return_users"
                but_meta="btn"
                input_name="department.data[head_id]"
                item_ids=$department_data.head_id
                placement="left"
                display="radio"
                view_mode="single_button"
                user_info=$u_info}
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">{("Workers")}</label>
        <div class="controls">
            {include
                file="pickers/users/picker.tpl"
                but_text=("Select department workers")
                data_id="return_users"
                but_meta="btn"
                input_name="department.data[workers_ids]"
                item_ids=$department_data.workers_ids
                placement="left"
                display="radio"
                view_mode="single_button"
                user_info=$u_info}
        </div>
    </div>
            





     {component name="configurable_page.field" entity="departments" tab="detailed" section="information"}
        <input type="hidden" value="{$result_ids}" name="result_ids">

        <div class="control-group {$no_hide_input_if_shared_department} department-head" id="department_head">
            {$rnd = rand()}
            {$request_head_id = ""}
            {if $smarty.request.head_id}
                {$request_head_id = ","|explode:$smarty.request.head_id}
            {/if}
            <label for="department_head_add_{$rnd}" class="control-label cm-required control-label--department-head">{("Head")}</label>
            <div class="controls">
                {$company_id = $smarty.request.department_data.company_id|default:$department_data.company_id|default:$runtime.company_id}
                {if !$company_id}
                    {$company_id = ($zero_company_id_name_lang_var) ? 0 : fn_get_default_company_id()}
                {/if}

                <input type="hidden" name="department_data[add_new_head][]" value=""/>
                {include file="views/departments/components/picker/picker.tpl"
                    input_name="department_data[head_id][]"
                    simple_class="cm-field-container"
                    multiple=true
                    id="department_head_add_{$rnd}"
                    tabindex=$tabindex
                    item_ids=$department_data.head_id
                    meta="input-large object-head-add object-head-add--multiple"
                    show_advanced=true
                    allow_add=fn_check_permissions("head", "update", "admin", "POST")
                    allow_sorting=true
                    result_class="object-picker__result--inline"
                    selection_class="object-picker__selection--department-head"
                    required=true
                    close_on_select=false
                    allow_multiple_created_objects=true
                    created_object_holder_selector="[name='department_data[add_new_head][]']"
                    query_params=["company_id" => $company_id]
                }
                <p class="muted description">{("Select the head of department")}</p>
            </div>
        <!--department_head--></div>

        <div class="control-group {$no_hide_input_if_shared_department} department-workers" id="department_workers">
            {$rnd = rand()}
            {$request_workers_id = ""}
            {if $smarty.request.workers_ids}
                {$request_workers_ids = ","|explode:$smarty.request.workers_ids}
            {/if}
            <label for="department_workers_add_{$rnd}" class="control-label cm-required control-label--department-workers">{("Workers")}</label>
            <div class="controls">
                {$company_id = $smarty.request.department_data.company_id|default:$department_data.company_id|default:$runtime.company_id}
                {if !$company_id}
                    {$company_id = ($zero_company_id_name_lang_var) ? 0 : fn_get_default_company_id()}
                {/if}

                <input type="hidden" name="department_data[add_new_workers][]" value=""/>
                {include file="views/departments/components/picker/picker.tpl"
                    input_name="department_data[workers_ids][]"
                    simple_class="cm-field-container"
                    multiple=true
                    id="department_workers_add_{$rnd}"
                    tabindex=$tabindex
                    item_ids=$department_data.workers_ids
                    meta="input-large object-workers-add object-workers-add--multiple"
                    show_advanced=true
                    allow_add=fn_check_permissions("workers", "update", "admin", "POST")
                    allow_sorting=true
                    result_class="object-picker__result--inline"
                    selection_class="object-picker__selection--department-workers"
                    required=true
                    close_on_select=false
                    allow_multiple_created_objects=true
                    created_object_holder_selector="[name='department_data[add_new_workers][]']"
                    query_params=["company_id" => $company_id]
                }
                <p class="muted description">{("Select new workers")}</p>
            </div>
        <!--department_workers--></div>
    {/component}




</form>

{/capture}
{capture name="buttons"}
    {include file="buttons/save.tpl" but_name="dispatch[categories.m_update]" but_target_form="categories_m_update_form" but_role="submit-link"}


    {if !$id}
        {include file="buttons/save_cancel.tpl" but_text="Save" but_role="submit-link" but_target_form="departments_form" but_name="dispatch[departments.update]"}
    {else}
        {include file="buttons/save_cancel.tpl" but_name="dispatch[departments.update]" but_role="submit-link" but_target_form="departments_form" hide_first_button=$hide_first_button hide_second_button=$hide_second_button save=$id}

    {capture name="buttons"}
        {include file="buttons/save.tpl" but_name="dispatch[departments.update]" but_target_form="departments_update_form" but_role="submit-link"}
    {/capture}

    {include file="common/mainbox.tpl" 
    title=__("update_departments") 
    content=$smarty.capture.mainbox 
    select_languages=true 
    buttons=$smarty.capture.buttons}


    {/if}
{/capture}
{include file="common/mainbox.tpl"
    title=($id) ? $department.department : ("Edit department")
    content=$smarty.capture.mainbox
    buttons=$smarty.capture.buttons
    select_languages=true}

{** department section **}