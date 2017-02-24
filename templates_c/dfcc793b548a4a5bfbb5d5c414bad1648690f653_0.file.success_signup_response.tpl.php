<?php
/* Smarty version 3.1.31, created on 2017-02-17 18:27:19
  from "/var/www/companyX.com/public_html/templates/success_signup_response.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58a6f32fb78027_91457785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfcc793b548a4a5bfbb5d5c414bad1648690f653' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/success_signup_response.tpl',
      1 => 1487335000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a6f32fb78027_91457785 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Wait Time</title>
</head>
<body>
<h1>Congrats!!!!!!</h1>
<p>Successful login for<br></p>
<p><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</p>

<a href="templates/test_page.tpl" >Click here to go for test</a>
</body>
</html><?php }
}
