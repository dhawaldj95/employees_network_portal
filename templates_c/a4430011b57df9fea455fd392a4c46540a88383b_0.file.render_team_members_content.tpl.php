<?php
/* Smarty version 3.1.31, created on 2017-03-02 10:48:01
  from "/var/www/companyX.com/public_html/templates/render_team_members_content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58b7ab0903ecc4_88609851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4430011b57df9fea455fd392a4c46540a88383b' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/render_team_members_content.tpl',
      1 => 1488431879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b7ab0903ecc4_88609851 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class = "inlineDiv">
    <h3><?php echo $_smarty_tpl->tpl_vars['name_nominator']->value;?>
</h3>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['level2']->value, 'value');
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

</div>
<?php }
}
