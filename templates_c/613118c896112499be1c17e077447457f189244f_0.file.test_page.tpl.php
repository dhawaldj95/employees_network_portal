<?php
/* Smarty version 3.1.31, created on 2017-03-02 15:36:12
  from "/var/www/companyX.com/public_html/templates/test_page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58b7ee9445c7f6_70358251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '613118c896112499be1c17e077447457f189244f' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/test_page.tpl',
      1 => 1488446636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b7ee9445c7f6_70358251 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<title>This is the test page</title>
	</head>
	<body>
		<div>

		   <h1>Welcome to Test</h1>
			<p id="userName"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</p>
		   <p>Here is your test</p>


		  <form action="../test_action_page.php" method="post">
		  
            Q1:Vehicle:<br>
            <input type="radio" name="vehicle" value="bike" checked="checked">I have a bike<br>
			<input type="radio" name="vehicle" value="car">I have a car <br>
            Q2:City:<br>
            <input type="radio" name="city" value="jaipur" checked="checked">I live in Jaipur<br>
			<input type="radio" name="city" value="kolkata">I live in Kolkata<br> 
            <input type="submit" value="Submit">
          </form>
		</div>
	</body>
</html>
<?php }
}
