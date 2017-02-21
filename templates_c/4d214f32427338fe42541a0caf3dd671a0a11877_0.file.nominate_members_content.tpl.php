<?php
/* Smarty version 3.1.31, created on 2017-02-21 17:52:25
  from "/var/www/companyX.com/public_html/templates/nominate_members_content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58ac31015623f7_29718341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d214f32427338fe42541a0caf3dd671a0a11877' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/nominate_members_content.tpl',
      1 => 1487679375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ac31015623f7_29718341 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="checkbox" name="aval_nominees[]" id="nominees" value="<?php echo $_smarty_tpl->tpl_vars['response']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['response']->value;?>
<br>
<?php }
}
