<?php
/* Smarty version 4.1.0, created on 2022-07-13 08:35:26
  from 'C:\OpenServer\domains\cscart\design\backend\templates\views\auth\login_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ce599e2feb46_32748214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f7c86e1fc0be030676d52fbe654bbda7613d220' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\auth\\login_form.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/sign_in.tpl' => 1,
  ),
),false)) {
function content_62ce599e2feb46_32748214 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('administration_panel','email','password','forgot_password_question'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"auth:login_form"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"auth:login_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<div class="modal signin-modal">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="main_login_form" class="signin-modal__form cm-skip-check-items cm-check-changes">
        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars(fn_query_remove(fn_url($_REQUEST['return_url'],"A","rel"),"return_url"), ENT_QUOTES, 'UTF-8');?>
">
        <div class="modal-header">
            <h4 class="signin-modal__form-header"><?php echo $_smarty_tpl->__("administration_panel");?>
</h4>
        </div>
        <div class="modal-body">
            <div class="control-group">
                <label for="username" class="signin-modal__form-label cm-trim cm-required cm-email"><?php echo $_smarty_tpl->__("email");?>
:</label>
                <input class="signin-modal__form-field cm-focus" id="username" type="text" name="user_login" size="20" value="<?php if ($_smarty_tpl->tpl_vars['stored_user_login']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['stored_user_login']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['demo_username'], ENT_QUOTES, 'UTF-8');
}?>" tabindex="1">
            </div>
            <div class="control-group">
                <div>
                    <label for="password" class="signin-modal__form-label signin-modal__form-label--password cm-required"><?php echo $_smarty_tpl->__("password");?>
:</label>
                    <a href="<?php echo htmlspecialchars(fn_url("auth.recover_password"), ENT_QUOTES, 'UTF-8');?>
" class="pull-right"><?php echo $_smarty_tpl->__("forgot_password_question");?>
</a>
                </div>
                <input class="signin-modal__form-field" type="password" id="password" name="password" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['demo_password'], ENT_QUOTES, 'UTF-8');?>
" tabindex="2" maxlength="32">
            </div>
        </div>
        <div class="modal-footer signin-modal__footer">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/sign_in.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[auth.login]",'but_role'=>"button_main",'tabindex'=>"3"), 0, false);
?>
        </div>
    </form>
</div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"auth:login_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
