<?php
/* Smarty version 3.1.31, created on 2017-02-20 18:46:47
  from "/var/www/companyX.com/public_html/templates/unsuccess_signup_response.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58aaec3f04dc20_16694932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26bb6f86cdf00662339ea41bf1dd5c6a58397363' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/unsuccess_signup_response.tpl',
      1 => 1487596397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58aaec3f04dc20_16694932 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Un Successful Login</title>
</head>
<body>
<h1>Sorry!!!!!!</h1>
<p>UnSuccessful login for <br></p>
<p><?php echo $_smarty_tpl->tpl_vars['response']->value;?>
</p>

<a href="templates/login.tpl">Click here to go to login</a>
</body>
</html><?php }
}
