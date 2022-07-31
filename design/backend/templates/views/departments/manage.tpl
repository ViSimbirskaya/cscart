{** departments section **}

{capture name="mainbox"}

<form action="{""|fn_url}" method="post" id="departments_form" name="departments_form" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />
{include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id="pagination_contents_departments"}

{$c_url=$config.current_url|fn_query_remove:"sort_by":"sort_order"}

{$rev=$smarty.request.content_id|default:"pagination_contents_departments"}
{include_ext file="common/icon.tpl" class="icon-`$search.sort_order_rev`" assign=c_icon}
{include_ext file="common/icon.tpl" class="icon-dummy" assign=c_dummy}
{$department_statuses=""|fn_get_default_statuses:true}
{$has_permission = fn_check_permissions("departments", "update_status", "admin", "POST")}

{if $departments}
    {capture name="departments_table"}
        <div class="table-responsive-wrapper longtap-selection">
            <table class="table table-middle table--relative table-responsive">
            <thead
                data-ca-bulkedit-default-object="true"
                data-ca-bulkedit-component="defaultObject"
            >
            <tr>
                <th width="6%" class="left mobile-hide">
                    {include file="common/check_items.tpl" is_check_disabled=!$has_permission check_statuses=($has_permission) ? $department_statuses : '' }

                    <input type="checkbox"
                        class="bulkedit-toggler hide"
                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>

                <th width="15%">
                    <a class="cm-ajax">{("Logo")}</a>
                </th>

                <th width="15%">
                    <a class="cm-ajax" href="{"`$c_url`&sort_by=name&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("Name")}{if $search.sort_by === "name"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a>
                </th>

                <th width="15%">
                    <a class="cm-ajax">{("Description")}</a>
                </th>

                <th width="15%">
                    <a class="cm-ajax">{("Head")}</a>
                </th>

                <th width="15%">
                    <a class="cm-ajax">{("Workers")}</a>
                </th>
                
                <th width="10%" class="right">
                    <a class="cm-ajax" href="{"`$c_url`&sort_by=status&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("Status")}{if $search.sort_by === "status"}{$c_icon nofilter}{/if}</a>
                </th>

                <th width="6%" class="mobile-hide">&nbsp;</th>

            </tr>
            </thead>
            {foreach from=$departments item=department}
            <tr class="cm-row-status-{$department.is_status|lower} cm-longtap-target"
                {if $has_permission}
                    data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="{$departments.department_id}"
                {/if}
            >
                {$allow_save=true}

                {if $allow_save}
                    {$no_hide_input="cm-no-hide-input"}
                {else}
                    {$no_hide_input=""}
                {/if}

                <td width="6%" class="left mobile-hide">
                    <input type="checkbox" name="department_ids[]" value="{$department.department_id}" class="cm-item {$no_hide_input} cm-item-status-{$department.is_status|lower} hide" />
                </td>

                <td width="{$image_width + 10px}" class="departments__logo">
                        {include
                                file="common/image.tpl"
                                image=$department.logo|default:$department.logo.detailed
                                image_id=$department.logo.image_id
                                image_width=$logo_width
                                image_height=$logo_height
                                href="department.update?department_id=`$department.department_id`"|fn_url
                                image_css_class="departments-list__image--img"
                                link_css_class="departments-list__image--link"
                        }
                </td>

                <td width="15%" class="{$no_hide_input}" data-th="{__("name")}">
                    <a class="row-status" href="{"departments_descriptions.update?department_id=`$department.department_id`"|fn_url}">{$department.name}</a>
                    {include file="views/companies/components/company_name.tpl" object=$department}
                </td>

                 <td width="15%" class="{$no_hide_input}" data-th="{__("description")}">
                    <a class="row-status" href="{"departments_descriptions.update?department_id=`$department.department_id`"|fn_url}">{$department.description}</a>
                    {include file="views/companies/components/company_name.tpl" object=$department}
                </td>

                 <td width="15%" class="{$no_hide_input}" data-th="{__("head")}">
                    <a class="row-status" href="{"departments_links.update?department_id=`$department.department_id`"|fn_url}">{$department.head_id}</a>
                    {include file="views/companies/components/company_name.tpl" object=$department}
                </td>

                <td width="15%" class="{$no_hide_input}" data-th="{__("workers")}">
                    <a class="row-status" href="{"departments.update?department_id=`$department.department_id`"|fn_url}">{$department.worker_ids}</a>
                    {include file="views/companies/components/company_name.tpl" object=$department}
                </td>

                <td width="15%" class="right" data-th="{__("status")}">
                    {if $department.is_status}
                        {include file="common/select_popup.tpl" id=$department.department_id status='A' object_id_name="department_id" table="departments" popup_additional_class="`$no_hide_input` dropleft"}
                    {else}
                        {include file="common/select_popup.tpl" id=$department.department_id status='D' object_id_name="department_id" table="departments" popup_additional_class="`$no_hide_input` dropleft"}
                    {/if}

                </td>

                <td width="15%" class="mobile-hide">
                    {capture name="tools_list"}
                        <li>{btn type="list" text=__("edit") href="departments.update?department_id=`$department.department_id`"}</li>
                    {if $allow_save}
                        <li>{btn type="list" class="cm-confirm" text=__("delete") href="departments.delete?department_id=`$department.department_id`" method="POST"}</li>
                    {/if}
                    {/capture}
                    <div class="hidden-tools">
                        {dropdown content=$smarty.capture.tools_list}
                    </div>
                </td>

            </tr>
            {/foreach}
            </table>
        </div>
    {/capture}

    {include file="common/context_menu_wrapper.tpl"
        form="departments_form"
        object="departments"
        items=$smarty.capture.departments_table
        has_permissions=$has_permission
    }
{else}
    <p class="no-items">{__("no_data")}</p>
{/if}

{include file="common/pagination.tpl" div_id="pagination_contents_departments"}

{capture name="adv_buttons"}
    {include file="common/tools.tpl" tool_href="departments.add" prefix="top" hide_tools="true" title=("Create new department") icon="icon-plus"}
{/capture}

</form>

{/capture}

{capture name="sidebar"}
    {hook name="departments:manage_sidebar"}
    {include file="common/saved_search.tpl" dispatch=$dispatch|default: "departments.manage" view_type="departments"}
    {include file="views/departments/components/departments_search_form.tpl" dispatch=$dispatch|default: "departments.manage"}
    {/hook}
{/capture}

{hook name="departments:manage_mainbox_params"}
    {$page_title = ("Departments")}
    {$select_languages = true}
{/hook}

{include 
    file="common/mainbox.tpl" 
    title=$page_title 
    content=$smarty.capture.mainbox 
    adv_buttons=$smarty.capture.adv_buttons 
    select_languages=$select_languages
}

{** ad section **}
