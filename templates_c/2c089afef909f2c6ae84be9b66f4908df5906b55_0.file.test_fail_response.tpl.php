<?php
/* Smarty version 3.1.31, created on 2017-02-24 18:36:06
  from "/var/www/companyX.com/public_html/templates/test_fail_response.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58b02fbea0a0f7_86234476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c089afef909f2c6ae84be9b66f4908df5906b55' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/test_fail_response.tpl',
      1 => 1487940377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b02fbea0a0f7_86234476 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Test fail response</title>
</head>
<body>
<h4><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</h4>
<h1>You Failed the test!!!You Sucker</h1>

<a href="../logout.php">Logout</a>
</body>
</html><?php }
}
