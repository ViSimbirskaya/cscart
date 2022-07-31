<?php

use Tygh\Languages\Languages;
use Tygh\Registry;
use Tygh\Tygh;

defined('BOOTSTRAP') or die('Access denied');

/**
 * Manage
 */
function fn_get_departments($params = [], $lang_code = CART_LANGUAGE) 
{
    $default_params = array(
        'page' => 1,
        'items_per_page' => Registry::get('settings.Appearance.admin_elements_per_page')
    );

    $params = array_merge($default_params, $params);

    if (AREA == 'C') {
        $params['status'] = 'A';
    }

    $sortings = [
        'name' => '?:departments_descriptions.name',
        'status' => '?:departments.is_status',
    ];

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

    if (!empty($params['status'])) {
        $condition .= db_quote(' AND ?:departments.is_status = ?s', $params['status']);
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

    return [
        'departments' => $departments,
        'params' => $params,
    ];
}

/**
 * Get single department
 */
function fn_get_department(int $id, $lang_code = CART_LANGUAGE) 
{
    $condition = '';
    $limit = '';
    $join = '';

    $fields = array (
        '?:departments.department_id',
        '?:departments.is_status',
        '?:departments.worker_ids',
        '?:departments_descriptions.name as name',
        '?:departments_descriptions.description',
        '?:departments_links.head_id',
    );

    $join .= db_quote(' LEFT JOIN ?:departments_descriptions ON ?:departments_descriptions.department_id = ?:departments.department_id AND ?:departments_descriptions.lang_code = ?s', $lang_code);
    $join .= db_quote(' LEFT JOIN ?:departments_links ON ?:departments_links.department_id = ?:departments.department_id ');

    $department = db_get_hash_array(
        "SELECT ?p FROM ?:departments " .
        $join .
        "WHERE 1 ?p",
        'department_id', implode(', ', $fields), $condition
    );

    return $department[$id];
}



/**
 * Update/Create
 */
function fn_departments_update_department($data, $department_id, $lang_code = DESCR_SL)
{
    if (isset($data['timestamp'])) {
        $data['timestamp'] = fn_parse_date($data['timestamp']);
    }

    if (!empty($department_id)) {
        db_query("UPDATE ?:departments SET ?u WHERE department_id = ?i", $data, $department_id);
        db_query("UPDATE ?:departments_descriptions SET ?u WHERE department_id = ?i AND lang_code = ?s", $data, $department_id, $lang_code);
    } else {
        $data['department_id'] = null;
        $department_id = db_query("INSERT INTO ?:departments ?e", $data);
        // $payment_data['department_id'] = $department_id = db_query("INSERT INTO ?:departments ?e", $data);
        $data['department_id'] = $department_id;
        $department_description_id = db_query("INSERT INTO ?:departments_descriptions ?e", $data);

        foreach (Languages::getAll() as $payment_data['lang_code'] => $_v) {
            db_query("INSERT INTO ?:departments_descriptions ?e", $data);
        }
    }
 
    return $department_id;
}

/**
 * Remove 
 */
function fn_departments_remove_department(int $department_id): void
{
    db_query("DELETE FROM ?:departments WHERE department_id IN (?n)", $department_id);
    db_query("DELETE FROM ?:departments_descriptions WHERE department_id IN (?n)", $department_id);
}