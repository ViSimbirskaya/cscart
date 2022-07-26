<?php

use Tygh\Registry;
use Tygh\Enum\UsergroupTypes;
use Tygh\Languages\Helper as LanguageHelper;
use Tygh\Languages\Languages;
use Tygh\Tygh;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

elseif ($mode == 'add_department' || $mode == 'update_department') {
    //  fn_print_die('hi');
}

elseif ($mode == 'manage_departments') {
    //  fn_print_die('hi');
}

list($departments, $search) = fn_get_departments($_REQUEST, Registry::get('settings.Appearance.admin_elements_per_page'), DESCR_SL);

$page = $search['page'];
$valid_page = db_get_valid_page($page, $search['items_per_page'], $search['total_items']);
// fn_print_die('hi');
Tygh::$app['view']->assign('departments', $departments);
Tygh::$app['view']->assign('search', $search);
// Tygh::$app['view']->assign('has_select_permission', $has_select_permission);

/**
 * get de[artments index]
 */
function fn_get_departments($params = [], $items_per_page = 0, $lang_code = CART_LANGUAGE)
{
      // Set default values to input params
    $default_params = array(
        'page' => 1,
        'items_per_page' => $items_per_page
    );

    $params = array_merge($default_params, $params);

    if (AREA == 'C') {
        $params['status'] = 'A';
    }

    $sortings = array(
        'worker_ids' => '?:departments.worker_ids',
        'name' => '?:departments_descriptions.name',
        'is_status' => '?:departments.is_status',
    );

    $condition = '';
    $limit = '';
    $join = '';

    if (!empty($params['limit'])) {
        $limit = db_quote(' LIMIT 0, ?i', $params['limit']);
    }

    $sorting = db_sort($params, $sortings, 'name', 'asc');

    if (!empty($params['item_ids'])) {
        $condition .= db_quote(' AND ?:departments.department_id IN (?n)', explode(',', $params['item_ids']));
    }

    if (!empty($params['is_status'])) {
        $condition .= db_quote(' AND ?:departments.is_status = ?s', $params['is_status']);
    }

    $fields = array (
        '?:departments.department_id',
        '?:departments.is_status',
        '?:departments.worker_ids',
        '?:departments_descriptions.name',
        '?:departments_descriptions.description',
        '?:departments_links.head_id',
    );

    $join .= db_quote(' LEFT JOIN ?:departments_descriptions ON ?:departments_descriptions.department_id = ?:departments.department_id AND ?:departments_descriptions.lang_code = ?s', $lang_code);
    $join .= db_quote(' LEFT JOIN ?:departments_links ON ?:departments_links.department_id = ?:departments.department_id ');
   
    if (!empty($params['items_per_page'])) {
        $params['total_items'] = db_get_field("SELECT COUNT(*) FROM ?:departments $join WHERE 1 $condition");
        $limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);
    }

    $departments = db_get_hash_array(
        "SELECT ?p FROM ?:departments " .
        $join .
        "WHERE 1 ?p ?p ?p",
        'department_id', implode(', ', $fields), $condition, $sorting, $limit
    );


    // $department_image_ids = array_column($departments, 'department_image_id'); 
    //  $images = fn_get_image_pairs($department_image_ids, 'promo', 'M', true, false, $lang_code);

    //  foreach ($departments as $department_id => $department) {
    //     $departments[$department_id]['main_pair'] = !empty($images[$department['department_image_id']]) ? reset($images[$department['department_image_id']]) : array();
    // }

    // fn_print_die($departments);
    // die();

    return array($departments, $params);
}
function fn_departments_update_department($data, $department_id, $lang_code = DESCR_SL)
{
    if (isset($data['timestamp'])) {
        $data['timestamp'] = fn_parse_date($data['timestamp']);
    }

    if (!empty($department_id)) {
        db_query("UPDATE ?:departments SET ?u WHERE department_id = ?i", $data, $department_id);
        db_query("UPDATE ?:departments_descriptions SET ?u WHERE department_id = ?i AND lang_code = ?s", $data, $department_id, $lang_code);
    } else {
        $department_id = $data['department_id'] = db_replace_into('departments', $data);
 
        foreach (Languages::getAll() as $data['lang_code'] => $v) {
            db_query("REPLACE INTO ?:departments_descriptions ?e", $data);
        }

    }

    return $department_id;
}
