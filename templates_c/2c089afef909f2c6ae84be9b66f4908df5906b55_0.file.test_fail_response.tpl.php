<?php
/* Smarty version 3.1.31, created on 2017-03-21 16:14:46
  from "/var/www/companyX.com/public_html/templates/test_fail_response.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58d1041e17ded7_52315321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c089afef909f2c6ae84be9b66f4908df5906b55' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/test_fail_response.tpl',
      1 => 1490092007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d1041e17ded7_52315321 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Test fail response</title>
</head>
<body>
<div id = "header"></div>
<h4><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</h4>
<h1>You Failed the test!!!</h1>

<a href="../logout">Logout</a>
</body>
</html><?php }
}
