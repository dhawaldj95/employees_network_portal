<?php
/* Smarty version 3.1.31, created on 2017-03-02 15:48:42
  from "/var/www/companyX.com/public_html/templates/login_response.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58b7f1820bcec4_00778854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ea1a2ce468161e915391f3ec1dbdfa5d9d838de' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/login_response.tpl',
      1 => 1488449916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b7f1820bcec4_00778854 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CompanyX Response</title>
  </head>
 <body>
    	
        <h1><?php echo $_smarty_tpl->tpl_vars['response_heading']->value;?>
</h1>
    	<p><?php echo $_smarty_tpl->tpl_vars['response']->value;?>
</p>
        <a href="templates/flat_login/login.tpl">Login/SignUp</a>
    	
    </body>
</html><?php }
}
