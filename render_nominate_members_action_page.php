<?php
session_start();
?>

<?php
require 'dbms_connection.php';
require 'smarty_configs.php';



if (isset($_SESSION['user_name']) && isset($_SESSION['password']))
{
    //logged in HTML and code here
    $user_name = $_SESSION['user_name'];
    $password = $_SESSION['password'];
    require "render_nominate_members.php";
}
else
{
    $smarty -> display('templates/login.tpl');
}
?>