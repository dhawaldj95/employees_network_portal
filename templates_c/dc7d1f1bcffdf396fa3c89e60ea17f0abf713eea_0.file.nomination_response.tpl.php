<?php
/* Smarty version 3.1.31, created on 2017-03-21 16:23:47
  from "/var/www/companyX.com/public_html/templates/nomination_response.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58d1063b283f87_38600650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc7d1f1bcffdf396fa3c89e60ea17f0abf713eea' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/nomination_response.tpl',
      1 => 1490091839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d1063b283f87_38600650 (Smarty_Internal_Template $_smarty_tpl) {
?>
<<!DOCTYPE html>
<html>
<head>
    <title>Nomination Response</title>
</head>
<body>
<div id = "header"></div>
<div>

    <h1>Nomination Response</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['response']->value;?>
</p>
    <a href="dashboard_back">Back to Dashboard</a>

</div>
</body>
</html><?php }
}
