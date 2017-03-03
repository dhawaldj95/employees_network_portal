<?php 
   session_start();
    ?>

<?php 
	require 'dbms_connection.php';
	require 'smarty_configs.php';



    if (isset($_SESSION['user_name']) && isset($_SESSION['id']))
    {
        //logged in HTML and code here
        $user_name = $_SESSION['user_name'];
        $password = $_SESSION['password'];
        $id = $_SESSION['id'];
        require "validate_login.php";
        exit();
    }
    else
    {

        $user_name = $_POST["user_name"];
        $company_given_id = $_POST["company_given_id"];
        $password = $_POST["password"];
        $password_re = $_POST["password_re"];

        if($password != $password_re)
        {
            $smarty -> assign('response', "password field does not match");
            $smarty -> display('templates/unsuccess_signup_response.tpl');
            exit();
        }
        require 'initiate_signup.php';

    }

   
?>

