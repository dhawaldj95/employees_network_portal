<?php
/* Smarty version 3.1.31, created on 2017-03-07 12:37:11
  from "/var/www/companyX.com/public_html/templates/login_response.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58be5c1f5831a2_40062515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ea1a2ce468161e915391f3ec1dbdfa5d9d838de' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/login_response.tpl',
      1 => 1488792556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58be5c1f5831a2_40062515 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CompanyX Response</title>
  </head>
 <body>
 <div id = "header"></div>
    	
        <h1><?php echo $_smarty_tpl->tpl_vars['response_heading']->value;?>
</h1>
    	<p><?php echo $_smarty_tpl->tpl_vars['response']->value;?>
</p>
        <a href="templates/flat_login/login.tpl">Login/SignUp</a>
    	
    </body>
</html><?php }
}
