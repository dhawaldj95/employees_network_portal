<?php
/* Smarty version 3.1.31, created on 2017-03-03 17:00:27
  from "/var/www/companyX.com/public_html/templates/render_team_members_headers.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58b953d3abcd28_60990235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1038e3dcc69bc02d3ac7badb145069d0975072aa' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/render_team_members_headers.tpl',
      1 => 1488539980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b953d3abcd28_60990235 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Team Members</title>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"><?php echo '</script'; ?>
>
    <link href="/templates/css/dashboard_css.css" rel="stylesheet" type="text/css">
    <link href="/templates/css/inline.css" rel="stylesheet" type="text/css">
</head>
<body>
<div>

    <div id= "navigation">
        <p id="userName"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</p>
        

        <a href="render_nominate_members_action_page.php">Nominate Members</a><br><br>
        <a href = "your_team.php">See your team members</a><br><br>
        <a href="top_points.php">Top Rankers</a><br><br>
        <a href="../display_certificate.php">Certificate</a><br><br>
        <a href="logout.php">Logout</a><br><br>


    </div>
    <div id="centerDoc">
        <h1>Your Team Members</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</p>
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['level1']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
        <?php
}
} else {
?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>




<?php }
}
