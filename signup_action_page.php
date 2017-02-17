<?php 
   session_start();
    ?>

<?php 
	require 'dbms_connection.php';
	
	$user_name = $_POST["user_name"]; 
	$company_given_id = $_POST["company_given_id"];
	$password = $_POST["password"];
	$password_re = $_POST["password_re"];

	if($password != $password_re)
	{
		//show error at page
		//exit();
	}

	 $_SESSION["user_name"]= $user_name;
	// $_SESSION["company_id"]= $company_id;
	// $_SESSION["password"]= $password;
	// $_SESSION["password_re"]= $password_re;

    require 'initiate_signup.php';
   
?>

