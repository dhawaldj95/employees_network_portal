<?php
/* Smarty version 3.1.31, created on 2017-02-17 18:07:01
  from "/var/www/companyX.com/public_html/templates/unsuccess_signup_response.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58a6ee6d18bd14_00547271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26bb6f86cdf00662339ea41bf1dd5c6a58397363' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/unsuccess_signup_response.tpl',
      1 => 1487335000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a6ee6d18bd14_00547271 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Wait Time</title>
</head>
<body>
<h1>Sorry!!!!!!</h1>
<p>UnSuccessful login for <br></p>
<p><?php echo $_smarty_tpl->tpl_vars['response']->value;?>
</p>

<a href="templates/signup.tpl" >Click here to go to signup</a>
</body>
</html><?php }
}
