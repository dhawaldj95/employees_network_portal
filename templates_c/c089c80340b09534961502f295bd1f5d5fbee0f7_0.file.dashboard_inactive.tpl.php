<?php
/* Smarty version 3.1.31, created on 2017-03-21 16:12:33
  from "/var/www/companyX.com/public_html/templates/dashboard_inactive.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58d103991809d7_45442020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c089c80340b09534961502f295bd1f5d5fbee0f7' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/dashboard_inactive.tpl',
      1 => 1490091746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d103991809d7_45442020 (Smarty_Internal_Template $_smarty_tpl) {
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
<body>
<div>
    

    <div id= "navigation">
        <p id="userName"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</p>
        

        <a href="../test_back"><p>Test</p></a><br><br>
        <a href="top_points"><p>Top Rankers</p></a><br><br>
        <a href="logout"><p>Logout</p></a><br><br>


    </div>

    <div id="centerDoc">
        <h1>Welcome to dashboard</h1>
    </div>


</div>
</body>
</html><?php }
}
