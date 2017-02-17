<?php
/* Smarty version 3.1.31, created on 2017-02-15 18:38:38
  from "/var/www/companyX.com/public_html/templates/dashboard.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58a452d6c19110_60163582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73a520caa5603b198423f8c5294a3efa9044bfc7' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/dashboard.tpl',
      1 => 1487163952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a452d6c19110_60163582 (Smarty_Internal_Template $_smarty_tpl) {
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
		  <!-- <form action="../action_page.php" method="post">
		  
            User name:<br>
            <input id="user_name" type="text" name="user_name" value=""><br>
            Password:<br>
            <input id="password" type="password" name="password" value=""><br>
            <input type="submit" value="Submit">
          </form> -->
		</div>
	</body>
</html><?php }
}
