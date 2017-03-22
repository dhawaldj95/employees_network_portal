<?php
session_start();
?>
<?php
    require("smarty_configs.php");
    require 'dbms_connection.php';

    switch ($_GET['url']) 
    {
    case '':

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

            $smarty->display('index.tpl');
            exit();
        }
        break;

    case 'login_action_page':

        require 'login_action_page.php';
        break;

    case 'signup_action_page':

        require 'signup_action_page.php';
        break;

    case 'render_nominate_members_action_page':

        require 'render_nominate_members_action_page.php';
        break;

    case 'your_team':

        require 'your_team.php';
        break;

    case 'top_points':

        require 'top_points.php';
        break;

    case 'display_certificate':

        require 'display_certificate.php';
        break;

    case 'logout':

        require 'logout.php';
        break;

    case 'dashboard_back':

        require 'dashboard_back.php';
        break;

    case 'test_action_page':

        require 'test_action_page.php';
        break;


    case 'test_back':

        require 'test_back.php';
        break;

    case 'nominate_members_action_page':

        require 'nominate_members_action_page.php';
        break;

    case 'new_login':

        require 'new_login.php';
        break;

    case 'user/login':

        require 'new_login.php';
        break;

    case 'next/new/login':
        
        
        require 'new_login.php';
        break;


    case 'index':
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

            $smarty->display('index.tpl');
            exit();
        }
        break;
       
   
    }

   



