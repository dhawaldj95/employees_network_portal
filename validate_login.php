<?php
    session_start();
    ?>

<?php


    require_once("smarty_configs.php");

    // verify the login
    $stmt = $conn->prepare("SELECT password, id FROM user_table WHERE user_name = :input_id");
    $stmt->bindParam(':input_id', $input_id);
    $stmt->execute();
    $result = $stmt->fetch();
    $catch = $result[0];
    $id = $result[1];
    //print_r($result);
    //echo "hello";


    //login with email id
    if(empty($result))
    {
        $stmt = $conn->prepare("SELECT password, id FROM user_table WHERE email_id = :input_id");
        $stmt->bindParam(':input_id', $input_id);
        $stmt->execute();
        $result = $stmt->fetch();
        $catch = $result[0];
        $id = $result[1];
    }

    if(empty($result))
    {
        //user name not found in user table
        $smarty -> assign('response', 'invalid user');
        $smarty ->assign('response_heading', 'Login Response');
    }
    else if($catch != $password)
    {
        //password incorrect

        $smarty ->assign('response_heading', 'Login Response');
        $smarty -> assign('response', 'invalid credentials');
    }
    else if($catch == $password)
    {
        //get user name , id and assign it to session variables

        $stmt = $conn->prepare("SELECT user_name FROM user_table WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        $user_name = $result[0];
        $_SESSION["user_name"] = $user_name;
        $_SESSION["id"] = $id;

        //now getting the active status from the active table

        $stmt = $conn->prepare("SELECT status FROM active_table WHERE user_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        $status = $result[0];

        require_once ("dashboard_back.php");


//        if($status == 0)
//        {
//            date_default_timezone_set('Asia/Kolkata');
//            $today_date = date('Y-m-d');
//
//            $stmt = $conn->prepare("SELECT test_date FROM test_date_table WHERE user_id = :id");
//            $stmt->bindParam(':id', $id);
//            $stmt->execute();
//            $result = $stmt->fetch();
//
//            //if giving test for first time
//            if(empty($result))
//            {
//                $smarty -> assign('user_name', $user_name);
//                $smarty -> display('templates/test_page.tpl');
//                exit();
//            }
//            $test_date = $result[0];
//
//            //for calculating the date for next test.....
//
//            date_default_timezone_set('Asia/Kolkata');
//            $today_date = date('Y-m-d');
//            //echo $today_date;
//            $date1=date_create($test_date);
//            $date2=date_create($today_date);
//            $diff=date_diff($date1,$date2);
//            $catch= $diff->format("%R%a");
//            var_dump ($catch);
//            echo "<br><br>";
//            $wait_days = 7-((-1)*$catch);
//            echo $wait_days;
//
//            if($wait_days <=0)
//            {
//                $smarty -> assign('user_name', $user_name);
//                $smarty -> display('templates/test_page.tpl');
//                exit();
//            }
//
//
//            $smarty -> assign('wait', $wait_days);
//            $smarty -> display('templates/wait_time.tpl');
//            exit();
//        }
//
//        else
//        {
//            $smarty -> assign('user_name', $user_name);
//            $smarty -> display('templates/dashboard.tpl');
//            exit();
//        }
            

    }
    $smarty->display('templates/login_response.tpl');
    $conn = null;

?>