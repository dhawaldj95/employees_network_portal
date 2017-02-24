<?php
/* Smarty version 3.1.31, created on 2017-02-23 20:05:45
  from "/var/www/companyX.com/public_html/templates/render_team_members_headers.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58aef341b78bf8_89118886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1038e3dcc69bc02d3ac7badb145069d0975072aa' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/render_team_members_headers.tpl',
      1 => 1487860530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58aef341b78bf8_89118886 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/var/www/companyX.com/public_html/libs/plugins/function.html_options.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Team Members</title>
</head>
<body>
<div>

    <h1>Your Team Members</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</p>
<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['level1']->value),$_smarty_tpl);?>
<br><?php }
}
