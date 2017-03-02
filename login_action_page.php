<?php
   session_start();
?>

<?php

    require 'dbms_connection.php';
    require("smarty_configs.php");
    //echo $_SESSION["user_name"];


    if (isset($_SESSION['user_name'])&& isset($_SESSION['id']))
    {

        //logged in HTML and code here
        $user_name = $_SESSION['user_name'];
        $id = $_SESSION['id'];
        require "dashboard_back.php";
        exit();
    }
    else
    {
        $input_id = $_POST["input_id"];
        $password = $_POST["password"];
        //Not logged in HTML and code here

        require "validate_login.php";
        exit();
    }
   
?>

