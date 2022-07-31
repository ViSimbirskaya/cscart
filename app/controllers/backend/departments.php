<?php

use Tygh\Registry;
use Tygh\Enum\UsergroupTypes;
use Tygh\Languages\Helper as LanguageHelper;
use Tygh\Languages\Languages;
use Tygh\Tygh;

if (!defined('BOOTSTRAP')) { 
    die('Access denied');  
} 

/**
 * post params
 */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Define trusted variables that shouldn't be stripped
    fn_trusted_vars ('department_data');


    if ($mode == 'update') {
        $department_id = !empty($_REQUEST['department_id']) ? $_REQUEST['department_id'] : 0;
        $data = !empty($_REQUEST['department_data']) ? $_REQUEST['department_data'] : [];
        $department_id = fn_departments_update_department($data, $department_id);
        
        if (!empty($department_id)) {
            $suffix = ".update?department_id=$department_id";
        } else {
            $suffix = ".add";
        }
      
        return [CONTROLLER_STATUS_OK, 'departments' . $suffix];
    } elseif ($mode == 'delete') {
        $department_id = !empty($_REQUEST['department_id']) ? $_REQUEST['department_id'] : 0;

        if ($department_id === 0) {
            fn_set_notification(
                'N', __('notice'), __('error')
            );
        }

        fn_departments_remove_department($department_id);

        $suffix = ".manage";
    }

    // fn_print_die([CONTROLLER_STATUS_OK, 'departments' . $suffix]);
    // 'departments.update_department&department_id=123'
    return [CONTROLLER_STATUS_OK, 'departments' . $suffix];
}

/**
 * mode params
 */ 
if ($mode == 'add') {
    $department_data = [];
    Tygh::$app['view']->assign('category_data', $department_data);
} elseif ($mode =='update') {
        $department_id = $_REQUEST['department_id'];
        $department = fn_get_department($department_id);
        // fn_print_die($department);
        Tygh::$app['view']->assign('department', $department);
} else {
    $params = $_REQUEST;
    $departmentList = fn_get_departments($params);

    if (isset($departmentList['departments'])) {
        Tygh::$app['view']->assign('departments', $departmentList['departments']);
    }

    if (isset($departmentList['departments'])) {
        Tygh::$app['view']->assign('departments', $departmentList['departments']);
    }
}