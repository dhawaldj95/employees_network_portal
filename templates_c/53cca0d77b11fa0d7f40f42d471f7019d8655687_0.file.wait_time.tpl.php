<?php
/* Smarty version 3.1.31, created on 2017-03-01 13:39:43
  from "/var/www/companyX.com/public_html/templates/wait_time.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58b681c7027691_90247702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53cca0d77b11fa0d7f40f42d471f7019d8655687' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/wait_time.tpl',
      1 => 1487327241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b681c7027691_90247702 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Wait Time</title>
</head>
<body>
<h1>Login Response</h1>
<p>You have to wait for <?php echo $_smarty_tpl->tpl_vars['wait']->value;?>
 more days to reappear in the test</p>
</body>
</html><?php }
}
