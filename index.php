<?php
session_start();
?>
<?php
require("smarty_configs.php");
require 'dbms_connection.php';





if (isset($_SESSION['user_name']) && isset($_SESSION['password']))
{
    //logged in HTML and code here
    $user_name = $_SESSION['user_name'];
    $password = $_SESSION['password'];
    require "validate_login.php";
    exit();
}

else
    {
    //Not logged in HTML and code here
    $smarty->display('index.tpl');
    exit();
}

?>

