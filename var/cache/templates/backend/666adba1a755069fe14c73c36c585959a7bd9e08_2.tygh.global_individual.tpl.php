<?php
/* Smarty version 4.1.0, created on 2022-07-08 12:13:52
  from 'C:\OpenServer\domains\cscart\design\backend\templates\components\global_individual.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62c7f5500bb4f7_21785547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '666adba1a755069fe14c73c36c585959a7bd9e08' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\components\\global_individual.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c7f5500bb4f7_21785547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\cscart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('default','global_individual.global_tooltip','global_individual.individual_tooltip'));
?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/components/global_individual.js"),$_smarty_tpl);?>


<div class="global-individual"
    data-ca-global-individual="component"
    data-ca-global-individual-default-text="<?php echo $_smarty_tpl->__("default");?>
"
    data-ca-global-individual-html-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-global-individual-individual-html-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['individual_html_name'], ENT_QUOTES, 'UTF-8');?>
"
    data-ca-global-individual-global-html-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['global_html_name'], ENT_QUOTES, 'UTF-8');?>
"
    data-ca-global-individual-has-value-holder-for-disabled-control="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['has_value_holder']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-global-individual-is-global="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['has_global_value'], ENT_QUOTES, 'UTF-8');?>
"
>
    <input id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_empty_global_value"
        class="hidden"
        name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['global_html_name'], ENT_QUOTES, 'UTF-8');?>
"
        value="<?php echo htmlspecialchars(constant("\Tygh\Settings::NULL_VALUE"), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-global-individual="hiddenInput">
    <div class="global-individual__field-wrapper"
        data-ca-global-individual="fieldWrapper"
    >
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>
    <div class="global-individual__buttons">
        <input
            type="checkbox"
            class="global-individual__btn cm-tooltip
                <?php if (!$_smarty_tpl->tpl_vars['item']->value['has_global_value']) {?>global-individual__btn--individual<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>global-individual__btn--disabled<?php }?>"
            data-ca-global-individual="button"
            title="<div class='global-individual__tooltip'>
                    <span <?php if ($_smarty_tpl->tpl_vars['item']->value['has_global_value']) {?>class='hidden'<?php }?>
                        data-ca-global-individual-html-id='tooltip_global_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
'
                    ><?php echo $_smarty_tpl->__("global_individual.global_tooltip");?>
</span>
                    <span <?php if (!$_smarty_tpl->tpl_vars['item']->value['has_global_value']) {?>class='hidden'<?php }?>
                        data-ca-global-individual-html-id='tooltip_individual_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
'
                    ><?php echo $_smarty_tpl->__("global_individual.individual_tooltip");?>
</span>
                </div>
            "
        />
        <?php if (trim($_smarty_tpl->tpl_vars['extra']->value) !== '') {?>
            <div class="global-individual__container">
                <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>

            </div>
        <?php }?>
    </div>
</div>
<?php }
}
