<?php
/* Smarty version 4.1.0, created on 2022-07-19 08:31:32
  from 'C:\OpenServer\domains\cscart\design\backend\templates\views\products\components\picker\item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62d641b4c9b4b9_24408114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e02e41d11bbc7f30a6cc87ffbcfcf250265bacf' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\products\\components\\picker\\item.tpl',
      1 => 1656493754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d641b4c9b4b9_24408114 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('show_simple_product', (($tmp = $_smarty_tpl->tpl_vars['show_simple_product']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>

<?php if (!$_smarty_tpl->tpl_vars['show_simple_product']->value) {?>

    ${data.image && data.image.image_path
        ? `<img src="${data.image.image_path}" width="30" height="30" alt="${data.image.alt}" class="object-picker__products-image"/>
        ` : `<div class="no-image object-picker__products-image object-picker__products-image--no-image" style="width: 30px; height: 30px;"> <span class="cs-icon glyph-image"></span></div>`
    }

<?php }?>

<div class="object-picker__products-main">
    <div class="object-picker__products-name">
        <div class="object-picker__products-name-content">
            <span class="object-picker__products-name-text">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 
                
                    ${data.product ? data.product : data.text}
                 
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>

            </span>
        </div>
    </div>
</div><?php }
}
