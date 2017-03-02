<?php
/* Smarty version 3.1.31, created on 2017-02-24 17:52:10
  from "/var/www/companyX.com/public_html/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58b0257211ec49_30325871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9799f65c8cb4665a687e5107d1e0fcfcbbac155' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/login.tpl',
      1 => 1487932756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b0257211ec49_30325871 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login CompanyX</title>
	</head>
	<body>
		<div>
		  <form action="../login_action_page.php" method="post">
		  	<h4><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h4>
            Input_Dialog:<br>
            <input id="input_id" type="text" name="input_id" value="akash.jain"><br>
            Password:<br>
            <input id="password" type="password" name="password" value="akash"><br>
            <input type="submit" value="Submit">
          </form>
		</div>
	</body>
</html>
<?php }
}
