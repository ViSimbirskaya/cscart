<?php
/* Smarty version 4.1.0, created on 2022-07-14 13:06:19
  from 'C:\OpenServer\domains\cscart\design\backend\templates\addons\blog\hooks\pages\sidebar.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62cfea9bd7a466_56213816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c6a0507436f4c9cd27e5720b664b995d02350c4' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\blog\\hooks\\pages\\sidebar.post.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cfea9bd7a466_56213816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\block.notes.php','function'=>'smarty_block_notes',),));
if ($_smarty_tpl->tpl_vars['is_managing_blog']->value) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('notes', array());
$_block_repeat=true;
echo smarty_block_notes(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="sidebar-note-item">
        <?php echo $_smarty_tpl->__('blog_functionality_notes');?>

    </div>
<?php $_block_repeat=false;
echo smarty_block_notes(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
