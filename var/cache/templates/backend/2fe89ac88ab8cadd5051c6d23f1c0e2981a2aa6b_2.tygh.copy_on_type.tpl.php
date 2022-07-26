<?php
/* Smarty version 4.1.0, created on 2022-07-19 08:31:32
  from 'C:\OpenServer\domains\cscart\design\backend\templates\components\copy_on_type.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62d641b4614a82_27099015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fe89ac88ab8cadd5051c6d23f1c0e2981a2aa6b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\components\\copy_on_type.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d641b4614a82_27099015 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('name','storefront_name','edit'));
?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/copy_on_type.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('source_label', (($tmp = $_smarty_tpl->tpl_vars['source_label']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("name") ?? null : $tmp));
$_smarty_tpl->_assignInScope('target_label', (($tmp = $_smarty_tpl->tpl_vars['target_label']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("storefront_name") ?? null : $tmp));
$_smarty_tpl->_assignInScope('type', (($tmp = $_smarty_tpl->tpl_vars['type']->value ?? null)===null||$tmp==='' ? "name" ?? null : $tmp));
$_smarty_tpl->_assignInScope('source_id', (($tmp = $_smarty_tpl->tpl_vars['source_id']->value ?? null)===null||$tmp==='' ? "elm_source_".((string)$_smarty_tpl->tpl_vars['type']->value)."_".((string)$_smarty_tpl->tpl_vars['id']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('target_wrapper_id', (($tmp = $_smarty_tpl->tpl_vars['target_wrapper_id']->value ?? null)===null||$tmp==='' ? "elm_".((string)$_smarty_tpl->tpl_vars['type']->value)."_target_wrapper_".((string)$_smarty_tpl->tpl_vars['id']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('target_id', (($tmp = $_smarty_tpl->tpl_vars['target_id']->value ?? null)===null||$tmp==='' ? "elm_".((string)$_smarty_tpl->tpl_vars['type']->value)."_".((string)$_smarty_tpl->tpl_vars['id']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('text_wrapper_id', (($tmp = $_smarty_tpl->tpl_vars['text_wrapper_id']->value ?? null)===null||$tmp==='' ? "elm_".((string)$_smarty_tpl->tpl_vars['type']->value)."_text_wrapper_".((string)$_smarty_tpl->tpl_vars['id']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('text_id', (($tmp = $_smarty_tpl->tpl_vars['text_id']->value ?? null)===null||$tmp==='' ? "elm_".((string)$_smarty_tpl->tpl_vars['type']->value)."_text_".((string)$_smarty_tpl->tpl_vars['id']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('required', (($tmp = $_smarty_tpl->tpl_vars['required']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('is_same_value', ($_smarty_tpl->tpl_vars['source_value']->value === $_smarty_tpl->tpl_vars['target_value']->value));?>

<div class="control-group">
    <label class="control-label <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>cm-required<?php }?>" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['source_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['source_label']->value, ENT_QUOTES, 'UTF-8');?>
</label>
    <div class="controls">
        <input id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['source_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            class="input-large"
            type="text"
            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['source_name']->value, ENT_QUOTES, 'UTF-8');?>
"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['source_value']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-copy-on-type-active="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_same_value']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-copy-on-type-target-selector="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-copy-on-type-text-selector="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['is_source_focus']->value) {?>
                autofocus
            <?php }?>
            />
        <?php if ($_smarty_tpl->tpl_vars['is_same_value']->value) {?>
            <p id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text_wrapper_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="muted description">
                <span class="copy-on-type__target-text-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_label']->value, ENT_QUOTES, 'UTF-8');?>
:</span>
                <span id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="copy-on-type__target-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                <button type="button"
                    class="btn-link"
                    data-ca-copy-on-type-source-selector="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['source_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-copy-on-type-target-selector="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-copy-on-type-target-wrapper-selector="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_wrapper_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-copy-on-type-text-wrapper-selector="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text_wrapper_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo $_smarty_tpl->__("edit");?>

                </button>
            </p>
        <?php }?>
    </div>

</div>

<div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_wrapper_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-group <?php if ($_smarty_tpl->tpl_vars['is_same_value']->value) {?>hidden<?php }?>">
    <label class="control-label" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_label']->value, ENT_QUOTES, 'UTF-8');?>
</label>
    <div class="controls">
        <input class="input-large" type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_value']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
    </div>
</div>
<?php }
}
