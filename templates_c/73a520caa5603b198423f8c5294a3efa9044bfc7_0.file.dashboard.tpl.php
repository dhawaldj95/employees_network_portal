<?php
/* Smarty version 3.1.31, created on 2017-02-21 17:26:12
  from "/var/www/companyX.com/public_html/templates/dashboard.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58ac2adce37bc3_20822723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73a520caa5603b198423f8c5294a3efa9044bfc7' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/dashboard.tpl',
      1 => 1487678158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ac2adce37bc3_20822723 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<title>This is the dashboard</title>
	</head>
	<body>
		<div>

		   <h1>Welcome to dashboard</h1>
		   <p><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</p>
			<a href="render_nominate_members_action_page.php">Nominate Members</a>
			<a href = "your_team.php">See your team members</a>
			<a href="logout.php">Logout</a>
		</div>
	</body>
</html><?php }
}
