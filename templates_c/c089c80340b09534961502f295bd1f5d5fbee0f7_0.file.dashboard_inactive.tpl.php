<?php
/* Smarty version 3.1.31, created on 2017-03-01 19:15:02
  from "/var/www/companyX.com/public_html/templates/dashboard_inactive.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58b6d05e06e853_96217414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c089c80340b09534961502f295bd1f5d5fbee0f7' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/dashboard_inactive.tpl',
      1 => 1488375897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b6d05e06e853_96217414 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h1>Welcome to dashboard</h1>

    <div id= "navigation">
        <p id="userName"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</p>
        

        <a href="../test_back.php">Test</a><br><br>
        <a href="top_points.php">Top Rankers</a><br><br>
        <a href="logout.php">Logout</a><br><br>


    </div>
    

    


</div>
</body>
</html><?php }
}