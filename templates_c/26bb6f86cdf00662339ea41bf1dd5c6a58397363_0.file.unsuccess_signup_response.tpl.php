<?php
/* Smarty version 3.1.31, created on 2017-03-20 23:09:07
  from "/var/www/companyX.com/public_html/templates/unsuccess_signup_response.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58d013bb6d4e17_32963747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26bb6f86cdf00662339ea41bf1dd5c6a58397363' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/unsuccess_signup_response.tpl',
      1 => 1488792556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d013bb6d4e17_32963747 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Un Successful Login</title>
</head>
<body>
<div id = "header"></div>
<p>UnSuccessful login for <br></p>
<p><?php echo $_smarty_tpl->tpl_vars['response']->value;?>
</p>

<a href="templates/flat_login/login.tpl">Click here to go to login</a>
</body>
</html><?php }
}
