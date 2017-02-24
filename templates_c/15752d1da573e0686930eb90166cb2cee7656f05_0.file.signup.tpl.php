<?php
/* Smarty version 3.1.31, created on 2017-02-17 13:30:46
  from "/var/www/companyX.com/public_html/templates/signup.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58a6adae37c6e6_15296507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15752d1da573e0686930eb90166cb2cee7656f05' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/signup.tpl',
      1 => 1487318421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a6adae37c6e6_15296507 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<title>SignUp CompanyX</title>
	</head>
	<body>
		<div>
            <p><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</p>
		  <form action="../signup_action_page.php" method="post">
		  
            User name:<br>
            <input id="user_name" type="text" name="user_name" value="dhawal.jain"><br>
            CompanyId:<br>
            <input id="company_id" type="text" name="company_given_id" value="80000007"><br>
            Password:<br>
            <input id="password" type="password" name="password" value="123456"><br>
            Re-Type Password:<br>
            <input id="password_re" type="password" name="password_re" value="123456"><br>
            <input type="submit" value="Submit">
          </form>
		</div>
	</body>
</html>
<?php }
}
