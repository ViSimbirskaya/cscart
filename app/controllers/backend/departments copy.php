<?php

use Tygh\Registry;
use Tygh\Enum\UsergroupTypes;
use Tygh\Languages\Helper as LanguageHelper;
use Tygh\Languages\Languages;
use Tygh\Tygh;

if (!defined('BOOTSTRAP')) { 
    die('Access denied'); 
   
} elseif ($mode == 'add_department') {
    $department_id = $_REQUEST['department_id'];
    $department = fn_get_department($department_id);
    Tygh::$app['view']->assign('department', $department);
} elseif ($mode =='update_department') {
        $data['timestamp'] = fn_parse_date($data['timestamp']);
        $department_id = $data['department_id'] = db_replace_into('departments', $data);
        $department = fn_departments_update_department($data, $department_id, $lang_code = DESCR_SL);
} else {
    // fn_print_die( $data['timestamp']);
/**
 * single department
 */
function fn_get_department($department_id) {  

    $condition = '';
    $limit = '';
    $join = '';

                        // if (!empty($params['limit'])) {
                        //     $limit = db_quote(' LIMIT 0, ?i', $params['limit']);
                        // }

                        // $sorting = db_sort($params, $sortings, 'name', 'asc');

    if (!empty($department_id)) {
        $condition .= db_quote(' AND ?:departments.department_id IN (?n)', $department_id);
    }

    $fields = array (
        '?:departments.department_id',
        '?:departments.is_status as status',
        '?:departments.worker_ids',
        '?:departments_descriptions.name as department',
        '?:departments_descriptions.description',
        '?:departments_links.head_id',
    );

    $join .= db_quote(' LEFT JOIN ?:departments_descriptions ON ?:departments_descriptions.department_id = ?:departments.department_id AND ?:departments_descriptions.lang_code = ?s', 'en');
    $join .= db_quote(' LEFT JOIN ?:departments_links ON ?:departments_links.department_id = ?:departments.department_id ');
   
    $department = db_get_row(
        "SELECT ?p FROM ?:departments " . $join . "WHERE 1 ?p ",
         implode(', ', $fields), $condition
    );

    if ($department['status']) {
        $department['status'] = 'A';
    } else {
        $department['status'] = 'D';
    }
    return $department;

                        // return array($department, $params);
}

                    // function fn_get_department_data ($params = [], $items_per_page = 0, $lang_code = CART_LANGUAGE)

                    // { $department_data = fn_get_department_data($_REQUEST['product_id'], $auth, DESCR_SL, '', true, true, true, true, false, false, $skip_company_condition);

                    //     if (empty($department_data)) {
                    //         return [CONTROLLER_STATUS_NO_PAGE];
                    //     }

                    //     elseif ($mode == 'manage_departments') {
                    //     }
                    // }

list($departments, $search) = fn_get_department($_REQUEST, Registry::get('settings.Appearance.admin_elements_per_page'), DESCR_SL);

$page = $search['page'];
$valid_page = db_get_valid_page($page, $search['items_per_page'], $search['total_items']);
                    // fn_print_die('hi');
Tygh::$app['view']->assign('departments', $departments);
Tygh::$app['view']->assign('search', $search);
                    // Tygh::$app['view']->assign([
                    //     'department_data' => $department_data,
                    //     'u_info'=> !empty($department_data['user_id']) ? fn_get_user_short_info($department_data['user_id']) : [],
                    // ]);
                    // Tygh::$app['view']->assign('has_select_permission', $has_select_permission);

                    /**
                     * get de[artments index]
                     */
function fn_get_department($params = [], $items_per_page = 0, $lang_code = CART_LANGUAGE) {
    // fn_print_die(explode(',', $params['item_ids'])); 
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
        'status' => '?:departments.is_status',
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


    // $department_image_ids = array_column($departments, 'department_image_id'); 
    //  $images = fn_get_image_pairs($department_image_ids, 'promo', 'M', true, false, $lang_code);

    //  foreach ($departments as $department_id => $department) {
    //     $departments[$department_id]['main_pair'] = !empty($images[$department['department_image_id']]) ? reset($images[$department['department_image_id']]) : array();
    // }

    // fn_print_die($departments['123']);
    // $department = $departments['123'];
    return array($departments, $params);
    // return array($department, $params);
}}
                    // } fn_print_die($departments); 

function fn_departments_update_department($data, $department_id, $lang_code = DESCR_SL)
{
    fn_print_die('123'); 
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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    fn_print_die($_REQUEST);
    if ($mode == 'add_department') {
        $department_id = !empty($_REQUEST['department_id']) ? $_REQUEST['department_id'] : 0;
        $data = !empty($_REQUEST['department_data']) ? $_REQUEST['department_data'] : [];
        $department_id = fn_departments_update_department($data, $department_id);
        if (!empty($department_id)) {
            $suffix = ".update_department?department_id=($department_id)";
        } else {
            $suffix = ".add_department";
        }
      
    } elseif ($mode == 'update_department') {
        // fn_print_die($_REQUEST);
      
    } elseif ($mode == 'delete_department') {
        // fn_print_die($_REQUEST);
      
    }

    return [
        CONTROLLER_STATUS_OK,
        'departments.update?department_id=' . $_REQUEST['department_id'] . '&selected_section=subscribers'
    ];
}

                            // fn_print_die($departments);
                            // die();


                            // из видео, зачем - хз

                            // $product_data = fn_get_product_data($_REQUEST['product_id'], $auth, DESCR_SL, '', true, true, true, true, false, false, $skip_company_condition);

                            // if (!empty($_REQUEST['deleted_subscription_id'])) {
                            //     if (
                            //         !Registry::get('runtime.company_id')
                            //         || (Registry::get('runtime.company_id') && (int) $product_data['company_id'] === (int) Registry::get('runtime.company_id'))
                            //     ) {
                            //         fn_delete_product_subscribers($_REQUEST['deleted_subscription_id']);
                            //     }
                            // }

                            // if (empty($product_data)) {
                            //     return [CONTROLLER_STATUS_NO_PAGE];

                            // взяла откуда-то из update//

                            // $department_id = fn_departments_update_department($_REQUEST['department_data'], $_REQUEST['department_id'], DESCR_SL);
                                
                            // if (!empty($department_id)) {
                            //     fn_attach_image_pairs('department_main', 'department', $department_id, DESCR_SL);

                            //     $suffix = ".update?department_id=$department_id" . (!empty($_REQUEST['department_data']['block_id']) ? "&selected_block_id=" . $_REQUEST['department_data']['block_id'] : "");
                            // } else {
                            //     $suffix = '.manage';
                            //}













                             // Set default values to input params
//     $default_params = array(
//         'page' => 1,
//         'items_per_page' => $items_per_page
//     );

//     $params = array_merge($default_params, $params);

//     if (AREA == 'C') {
//         $params['status'] = 'A';
//     }

//     $sortings = array(
//         'name' => '?:departments_descriptions.name',
//         'is_status' => '?:departments.is_status',
//     );

//     $condition = $limit = $join = '';

//     if (!empty($params['limit'])) {
//         $limit = db_quote(' LIMIT 0, ?i', $params['limit']);
//     }

//     $sorting = db_sort($params, $sortings, 'name', 'asc');

//     if (!empty($params['item_ids'])) {
//         $condition .= db_quote(' AND ?:departments.department_id IN (?n)', explode(',', $params['item_ids']));
//     }

//     if (!empty($params['status'])) {
//         $condition .= db_quote(' AND ?:departments.status = ?s', $params['status']);
//     }

//     $fields = array (
//         '?:departments.department_id',
//         '?:departments.is_status as status',
//         '?:departments.worker_ids',
//         '?:departments_descriptions.name as department',
//         '?:departments_descriptions.description',
//         '?:departments_links.head_id',
//     );

//     $join .= db_quote(' LEFT JOIN ?:departments_descriptions ON ?:departments_descriptions.department_id = ?:departments.department_id AND ?:departments_descriptions.lang_code = ?s', 'en');
//     $join .= db_quote(' LEFT JOIN ?:departments_links ON ?:departments_links.department_id = ?:departments.department_id ');

//     if (!empty($params['items_per_page'])) {
//         $params['total_items'] = db_get_field("SELECT COUNT(*) FROM ?:departments $join WHERE 1 $condition");
//         $limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);
//     }

//     $departments = db_get_hash_array(
//         "SELECT ?p FROM ?:departments " .
//         $join .
//         "WHERE 1 ?p ?p ?p",
//         'department_id', implode(', ', $fields), $condition, $sorting, $limit
//     );

//     // $department_image_ids = array_column($departments, 'department_image_id');
//     // $images = fn_get_image_pairs($department_image_ids, 'promo', 'M', true, false, $lang_code);

//     // foreach ($departments as $department_id => $department) {
//     //     $departments[$department_id]['main_pair'] = !empty($images[$department['department_image_id']]) ? reset($images[$department['department_image_id']]) : array();
//     // }

//     return array($departments, $params);
// }
