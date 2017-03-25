<?php
	require ('smarty_configs.php');
	if (isset($_SESSION['user_name']) && isset($_SESSION['id']))
        {
            //logged in HTML and code here
            $user_name = $_SESSION['user_name'];
            $id = $_SESSION['id'];

            require "dashboard_back.php";
            exit();
        }

        else
            {
            //Not logged in HTML and code here

            $smarty->display('templates/flat_login/login');
            exit();
        }

    
?>