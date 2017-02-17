<?php
    session_start();
    ?>

<?php
    
   require("smarty_configs.php");
    
    
    // prepare sql and bind parameters
    $stmt = $conn->prepare("SELECT password, active FROM user_table WHERE user_name = :user_name"); 
    $stmt->bindParam(':user_name', $user_name);
    $stmt->execute();   

    //$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    $result = $stmt->fetch();
    //print_r($result);
    $catch = $result[0];

    
    if(empty($result))
    {
        $smarty -> assign('response', 'invalid user');
    }
    else if($catch != $password)
    {
        $smarty -> assign('response', 'invalid credentials');
    }
    else if($catch == $password)
    {
        $_SESSION["user_name"] = $user_name;
        if($result[1] == 0)
        {
            date_default_timezone_set('Asia/Kolkata');
            $today_date = date('Y-m-d');

            $stmt = $conn->prepare("SELECT test_date FROM test_date_table WHERE user_name = :user_name");
            $stmt->bindParam(':user_name', $user_name);
            $stmt->execute();
            $result = $stmt->fetch();

            //if giving test for first time
            if(empty($result))
            {
                $smarty -> assign('user_name', $user_name);
                $smarty -> display('templates/test_page.tpl');
                exit();
            }
            $test_date = $result[0];

            date_default_timezone_set('Asia/Kolkata');
            $today_date = date('Y-m-d');
            //echo $today_date;
            $date1=date_create($test_date);
            $date2=date_create($today_date);
            $diff=date_diff($date1,$date2);
            $catch= $diff->format("%R%a");
            echo $catch;
            echo "<br><br>";
            $wait_days = 7-$diff;
            echo $wait_days;

            if($catch >=7)
            {
                $smarty -> assign('user_name', $user_name);
                $smarty -> display('templates/test_page.tpl');
                exit();
            }


            $smarty -> assign('wait', $wait_days);
            $smarty -> display('templates/wait_time.tpl');
            exit();
        }
            
        else
        {
            $smarty -> assign('user_name', $user_name);
            $smarty -> display('templates/dashboard.tpl');
            exit();
        }
            

    }
    $smarty->display('templates/login_response.tpl');
    $conn = null;

?>