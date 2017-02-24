<?php
/* Smarty version 3.1.31, created on 2017-02-23 19:53:16
  from "/var/www/companyX.com/public_html/templates/render_team_members.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58aef054a7ffa4_39264055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '674522042bc3d4c7c9d8c51e5bacff1ace7af129' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/render_team_members.tpl',
      1 => 1487859786,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58aef054a7ffa4_39264055 (Smarty_Internal_Template $_smarty_tpl) {
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

    <?php echo smarty_function_html_options(array('name'=>$_smarty_tpl->tpl_vars['name']->value,'options'=>$_smarty_tpl->tpl_vars['level2']->value),$_smarty_tpl);?>

</div>
</body>
</html><?php }
}
