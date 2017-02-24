<?php
/* Smarty version 3.1.31, created on 2017-02-23 20:10:34
  from "/var/www/companyX.com/public_html/templates/render_team_members_content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58aef462b75dd4_19748362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4430011b57df9fea455fd392a4c46540a88383b' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/render_team_members_content.tpl',
      1 => 1487860832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58aef462b75dd4_19748362 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/var/www/companyX.com/public_html/libs/plugins/function.html_options.php';
?>
<h3><?php echo $_smarty_tpl->tpl_vars['name_nominator']->value;?>
</h3>
<?php echo smarty_function_html_options(array('name'=>$_smarty_tpl->tpl_vars['name']->value,'options'=>$_smarty_tpl->tpl_vars['level2']->value),$_smarty_tpl);?>
<br><?php }
}
