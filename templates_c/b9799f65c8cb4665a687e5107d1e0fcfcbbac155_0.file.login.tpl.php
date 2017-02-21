<?php
/* Smarty version 3.1.31, created on 2017-02-21 17:31:40
  from "/var/www/companyX.com/public_html/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58ac2c249f3c71_93700679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9799f65c8cb4665a687e5107d1e0fcfcbbac155' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/login.tpl',
      1 => 1487338368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ac2c249f3c71_93700679 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login CompanyX</title>
	</head>
	<body>
		<div>
		  <form action="../login_action_page.php" method="post">
		  
            User name:<br>
            <input id="user_name" type="text" name="user_name" value="dhawal.jain"><br>
            Password:<br>
            <input id="password" type="password" name="password" value="dhawal"><br>
            <input type="submit" value="Submit">
          </form>
		</div>
	</body>
</html>
<?php }
}
