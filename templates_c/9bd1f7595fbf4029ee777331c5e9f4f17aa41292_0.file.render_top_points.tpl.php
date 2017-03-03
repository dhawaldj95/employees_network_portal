<?php
/* Smarty version 3.1.31, created on 2017-03-03 18:43:42
  from "/var/www/companyX.com/public_html/templates/render_top_points.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58b96c0663d915_13187192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bd1f7595fbf4029ee777331c5e9f4f17aa41292' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/render_top_points.tpl',
      1 => 1488546820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b96c0663d915_13187192 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>The top points</title>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"><?php echo '</script'; ?>
>
    <link href="/templates/css/dashboard_css.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div id= "navigation">
        <p id="userName"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</p>
        

        <a href="render_nominate_members_action_page.php">Nominate Members</a><br><br>
        <a href = "your_team.php">See your team members</a><br><br>
        <a href="top_points.php">Top Rankers</a><br><br>
        <a href="logout.php">Logout</a><br><br>
        <a href="../dashboard_back.php">Dashboard</a>


    </div>
    <div id="centerDoc" style="align-content: center">

        <p>Your Points: <?php echo $_smarty_tpl->tpl_vars['user_points']->value;?>
</p><br>
        


        <h1>The top points</h1>
        


        <table>
            <thead>
            <tr>
                <th>Rank</th>
                <th>Names</th>
                <th>Points</th>

            </tr>
            </thead>
            <tbody>
            <?php $_smarty_tpl->_assignInScope('i', 1);
?>
            <?php
$__section_product_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_product']) ? $_smarty_tpl->tpl_vars['__smarty_section_product'] : false;
$__section_product_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['output']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_product_0_total = $__section_product_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_product'] = new Smarty_Variable(array());
if ($__section_product_0_total != 0) {
for ($__section_product_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_product']->value['index'] = 0; $__section_product_0_iteration <= $__section_product_0_total; $__section_product_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_product']->value['index']++){
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>

                    
                    <td><?php echo $_smarty_tpl->tpl_vars['output']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_product']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_product']->value['index'] : null)]['user_id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['output']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_product']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_product']->value['index'] : null)]['points'];?>
</td>

                </tr>
                <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
?>
            <?php
}
}
if ($__section_product_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_product'] = $__section_product_0_saved;
}
?>
            </tbody>
        </table>
        <br><br>

    </div>


</body>
</html>

<?php }
}
