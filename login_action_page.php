<?php
   session_start();
?>

<?php

    require 'dbms_connection.php';
    require("smarty_configs.php");
    //echo $_SESSION["user_name"];


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
        $user_name = $_POST["user_name"];
        $password = ($_POST["password"]);
        //Not logged in HTML and code here
        require "validate_login.php";
        exit();
    }
   
?>

