<?php
/* Smarty version 3.1.31, created on 2017-03-06 18:00:57
  from "/var/www/companyX.com/public_html/templates/dashboard.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58bd5681894975_52779683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73a520caa5603b198423f8c5294a3efa9044bfc7' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/dashboard.tpl',
      1 => 1488803456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bd5681894975_52779683 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<title>This is the dashboard</title>
		<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"><?php echo '</script'; ?>
>
		<link href="/templates/css/dashboard_css.css" rel="stylesheet" type="text/css">
	</head>
	<div>
	



			<div id= "navigation">
				<p id="userName"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</p>
				

				<a href="render_nominate_members_action_page.php"><p>Nominate Members</p></a>
				<a href = "your_team.php"><p>See your team members</p></a>
				<a href="top_points.php"><p>Top Rankers</p></a>
				<a href="display_certificate.php"><p>Certificate</p></a>
				<a href="logout.php"><p>Logout</p></a>

			</div>
			<div id="centerDoc">
				<h1>Welcome to dashboard</h1>
				</div>

	</div>
	</body>
</html><?php }
}
