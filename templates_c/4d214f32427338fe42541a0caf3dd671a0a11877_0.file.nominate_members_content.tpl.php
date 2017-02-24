<?php
/* Smarty version 3.1.31, created on 2017-02-23 17:52:41
  from "/var/www/companyX.com/public_html/templates/render_nominate_members.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58aed41194a2c8_49042498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d214f32427338fe42541a0caf3dd671a0a11877' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/render_nominate_members.tpl',
      1 => 1487852559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58aed41194a2c8_49042498 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_checkboxes')) require_once '/var/www/companyX.com/public_html/libs/plugins/function.html_checkboxes.php';
echo smarty_function_html_checkboxes(array('name'=>'id','values'=>$_smarty_tpl->tpl_vars['value']->value,'output'=>$_smarty_tpl->tpl_vars['display']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value,'separator'=>'<br />'),$_smarty_tpl);
}
}
