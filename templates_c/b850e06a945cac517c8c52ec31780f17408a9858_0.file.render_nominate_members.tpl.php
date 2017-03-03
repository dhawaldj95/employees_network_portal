<?php
/* Smarty version 3.1.31, created on 2017-03-02 15:00:31
  from "/var/www/companyX.com/public_html/templates/render_nominate_members.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58b7e63701c559_02668814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b850e06a945cac517c8c52ec31780f17408a9858' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/render_nominate_members.tpl',
      1 => 1488447022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b7e63701c559_02668814 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_checkboxes')) require_once '/var/www/companyX.com/public_html/libs/plugins/function.html_checkboxes.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login CompanyX</title>
    <link href="/templates/css/dashboard_css.css" rel="stylesheet" type="text/css">
</head>
<body>
<div>

    <div id= "navigation">
        <p id="userName"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</p>
        

        <a href="render_nominate_members_action_page.php">Nominate Members</a><br><br>
        <a href = "your_team.php">See your team members</a><br><br>
        <a href="top_points.php">Top Rankers</a><br><br>
        <a href="logout.php">Logout</a><br><br>


    </div>

    <div id="centerDoc">
        <p class="heading"><strong>Members still available</strong></p>
        <form action="nominate_members_action_page.php" method="post">

            <?php echo smarty_function_html_checkboxes(array('name'=>'nominees_available','values'=>$_smarty_tpl->tpl_vars['value']->value,'output'=>$_smarty_tpl->tpl_vars['display']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value,'separator'=>'<br />'),$_smarty_tpl);?>


            <input type="submit" value="Submit"><br><br>
            <a href = "dashboard_back.php">Dashboard</a>
        </form>
    </div>

</div>
</body>
</html><?php }
}
