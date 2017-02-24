<?php
/* Smarty version 3.1.31, created on 2017-02-23 18:07:34
  from "/var/www/companyX.com/public_html/templates/render_nominate_members.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58aed78e9be576_46224502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b850e06a945cac517c8c52ec31780f17408a9858' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/render_nominate_members.tpl',
      1 => 1487852987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58aed78e9be576_46224502 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_checkboxes')) require_once '/var/www/companyX.com/public_html/libs/plugins/function.html_checkboxes.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login CompanyX</title>
</head>
<body>
<div>
    <form action="nominate_members_action_page.php" method="post">

    <?php echo smarty_function_html_checkboxes(array('name'=>'nominees_available','values'=>$_smarty_tpl->tpl_vars['value']->value,'output'=>$_smarty_tpl->tpl_vars['display']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value,'separator'=>'<br />'),$_smarty_tpl);?>


        <input type="submit" value="Submit"><br><br>
        <a href = "dashboard_back.php">Dashboard</a>
    </form>
</div>
</body>
</html><?php }
}
