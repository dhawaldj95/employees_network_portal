<?php
/* Smarty version 3.1.31, created on 2017-03-22 12:26:25
  from "/var/www/companyX.com/public_html/templates/render_nominate_members.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58d22019cdbcc6_76605148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b850e06a945cac517c8c52ec31780f17408a9858' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/render_nominate_members.tpl',
      1 => 1490093552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d22019cdbcc6_76605148 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_checkboxes')) require_once '/var/www/companyX.com/public_html/libs/plugins/function.html_checkboxes.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login CompanyX</title>
    <link href="/templates/css/dashboard_css.css" rel="stylesheet" type="text/css">
</head>
<body>
<div>


    <div id= "navigation">
        <p id="userName"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</p>
        

        <a href="render_nominate_members_action_page"><p>Nominate Members</p></a>
        <a href = "your_team"><p>See your team members</p></a>
        <a href="top_points"><p>Top Rankers</p></a>
        <a href="display_certificate"><p>Certificate</p></a>
        <a href="logout"><p>Logout</p></a>

    </div>

    <div id="centerDoc">
        <p class="heading"><strong>Members still available</strong></p>
        <form action="nominate_members_action_page" method="post">

            <?php echo smarty_function_html_checkboxes(array('name'=>'nominees_available','values'=>$_smarty_tpl->tpl_vars['value']->value,'output'=>$_smarty_tpl->tpl_vars['display']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value,'separator'=>'<br />'),$_smarty_tpl);?>


            <input type="submit" value="Submit"><br><br>
            <a href = "dashboard_back">Dashboard</a>
        </form>
    </div>

</div>
</body>
</html><?php }
}
