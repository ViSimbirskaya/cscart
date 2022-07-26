<?php
/* Smarty version 4.1.0, created on 2022-07-25 14:36:53
  from 'C:\OpenServer\domains\cscart\design\backend\templates\views\profiles\components\profile_orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62de8055deb809_62745789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ca42a4152454a9e7ccccc02168004ea387354c6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\profiles\\components\\profile_orders.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62de8055deb809_62745789 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),2=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\modifier.format_price.php','function'=>'smarty_modifier_format_price',),));
\Tygh\Languages\Helper::preloadLangVars(array('orders','registration_date','first_order','total_orders','total_paid_orders','total_spent_money','last_order','last_login'));
if ($_smarty_tpl->tpl_vars['can_view_orders']->value && $_smarty_tpl->tpl_vars['user_data']->value['user_id'] && $_smarty_tpl->tpl_vars['user_type']->value == smarty_modifier_enum("UserTypes::CUSTOMER")) {?>
    <div class="sidebar-row">
        <h6><?php echo $_smarty_tpl->__("orders");?>
</h6>
        <ul class="unstyled">
            <li><?php echo $_smarty_tpl->__("registration_date");?>
 <span class="pull-right"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['user_data']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</span></li>
            <?php if ($_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user_data']->value['user_id']]['first_order_id']) {?>
                <li><?php echo $_smarty_tpl->__("first_order");?>
 <span><a class="pull-right" href="<?php echo htmlspecialchars(fn_url("orders.details&order_id=".((string)$_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user_data']->value['user_id']]['first_order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user_data']->value['user_id']]['first_order_timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</a></span></li>
            <?php }?>
            <li><?php echo $_smarty_tpl->__("total_orders");?>
 <span><a class="pull-right" href="<?php echo htmlspecialchars(fn_url("orders.manage?is_search=Y&user_id=".((string)$_smarty_tpl->tpl_vars['user_data']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user_data']->value['user_id']]['total_orders'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</a></span></li>
            <li><?php echo $_smarty_tpl->__("total_paid_orders");?>
 <span><a class="pull-right" href="<?php ob_start();
echo htmlspecialchars(http_build_query(array("status"=>array_values($_smarty_tpl->tpl_vars['settled_statuses']->value))), ENT_QUOTES, 'UTF-8');
$_prefixVariable5=ob_get_clean();
echo htmlspecialchars(fn_url("orders.manage?is_search=Y&user_id=".((string)$_smarty_tpl->tpl_vars['user_data']->value['user_id'])."&".$_prefixVariable5), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user_data']->value['user_id']]['total_settled_orders'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</a></span></li>
            <li><?php echo $_smarty_tpl->__("total_spent_money");?>
 <a class="pull-right" href="<?php ob_start();
echo htmlspecialchars(http_build_query(array("status"=>array_values($_smarty_tpl->tpl_vars['settled_statuses']->value))), ENT_QUOTES, 'UTF-8');
$_prefixVariable6=ob_get_clean();
echo htmlspecialchars(fn_url("orders.manage?is_search=Y&user_id=".((string)$_smarty_tpl->tpl_vars['user_data']->value['user_id'])."&".$_prefixVariable6), ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = smarty_modifier_format_price($_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user_data']->value['user_id']]['total_spend'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]) ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user_data']->value['user_id']]['last_order_id']) {?>
                <li><?php echo $_smarty_tpl->__("last_order");?>
 <span><a class="pull-right" href="<?php echo htmlspecialchars(fn_url("orders.details&order_id=".((string)$_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user_data']->value['user_id']]['last_order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user_data']->value['user_id']]['last_order_timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</a></span></li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['last_login']) {?>
                <li><?php echo $_smarty_tpl->__("last_login");?>
 <span class="pull-right"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['user_data']->value['last_login'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</span></li>
            <?php }?>
        </ul>
    </div>
<?php }
}
}
