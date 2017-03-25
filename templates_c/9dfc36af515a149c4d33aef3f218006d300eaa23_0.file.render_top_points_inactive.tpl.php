<?php
/* Smarty version 3.1.31, created on 2017-03-21 16:12:36
  from "/var/www/companyX.com/public_html/templates/render_top_points_inactive.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58d1039c1eb1c9_52764347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dfc36af515a149c4d33aef3f218006d300eaa23' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/render_top_points_inactive.tpl',
      1 => 1490091986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d1039c1eb1c9_52764347 (Smarty_Internal_Template $_smarty_tpl) {
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
        

        <a href="../test_back"><p>Test</p></a><br><br>
        <a href="top_points"><p>Top Rankers</p></a><br><br>
        <a href="logout"><p>Logout</p></a><br><br>


    </div>
    <div id="centerDoc" style="align-content: center">

        <p class="heading">Your Points: <?php echo $_smarty_tpl->tpl_vars['user_points']->value;?>
</p>
        <p class="heading">Your Rank: <?php echo $_smarty_tpl->tpl_vars['user_rank']->value;?>
</p>
        <h1>The top points</h1>

        <table id="topPoints">
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
