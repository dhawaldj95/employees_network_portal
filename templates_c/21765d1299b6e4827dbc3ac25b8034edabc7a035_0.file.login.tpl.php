<?php
/* Smarty version 3.1.31, created on 2017-03-21 16:47:55
  from "/var/www/companyX.com/public_html/templates/flat_login/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58d10be3e39384_99223041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21765d1299b6e4827dbc3ac25b8034edabc7a035' => 
    array (
      0 => '/var/www/companyX.com/public_html/templates/flat_login/login.tpl',
      1 => 1490095071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d10be3e39384_99223041 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flat Login Form 3.0</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <h1> Login Form</h1><!-- <span>Pen <i class='fa fa-paint-brush'></i> + <i class='fa fa-code'></i> by <a href='http://andytran.me'>Andy Tran</a></span> -->
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Click Me</div>
  </div>
  <div class="form">
    <h2>Login to your account</h2>
    <form action="../../login_action_page" method="post">

      <input id="input_id" type="text" name="input_id" placeholder="input_id"/>
      <input id="password" type="password" name="password" placeholder="password">

      <button type="submit">Login</button>
    </form>
  </div>
  <div class="form">
    <h2>Create an account</h2>
    <form action="../../signup_action_page" method="post">
      <input id="user_name" type="text" name="user_name" placeholder="Username"/>
      <input id="company_id" type="number" name="company_given_id" placeholder="SAP id"/>
      <input id="password" type="password" name="password" placeholder="Password"/>
      <input id="password_re" type="password" name="password_re" placeholder="Re-Password"/>

      <button type="submit">Register</button>
    </form>
  </div>
  <div class="cta"><a href=#>Forgot your password?</a></div>
</div>
  <?php echo '<script'; ?>
 src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='http://codepen.io/andytran/pen/vLmRVp.js'><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="templates/flat_login/js/index.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
