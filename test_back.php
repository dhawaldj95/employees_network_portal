<?php
    session_start();
?>
<?php
        require_once "dbms_connection.php";
        require_once "smarty_configs.php";

        $user_name = $_SESSION['user_name'];
        $id = $_SESSION['id'];

        {
            date_default_timezone_set('Asia/Kolkata');
            $today_date = date('Y-m-d');

            $stmt = $conn->prepare("SELECT test_date FROM test_date_table WHERE user_id = :id");
            $stmt->bindParam(':id', $id);
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
//            print_r($test_date);

            //for calculating the date for next test.....

            date_default_timezone_set('Asia/Kolkata');
            $today_date = date('Y-m-d');
//            echo "today date ".$today_date;
            $date1=date_create($test_date);
            $date2=date_create($today_date);
            $diff=date_diff($date1,$date2);
            $catch= $diff->format("%R%a");
//            var_dump ($catch);
//            echo "<br><br>";
            $wait_days = 7-((1)*$catch);
//            echo $wait_days;

            if($wait_days <=0)
            {
                $smarty -> assign('user_name', $user_name);
                $smarty -> display('templates/test_page.tpl');
                exit();
            }


            $smarty -> assign('wait', $wait_days);
            $smarty -> display('templates/wait_time.tpl');
            exit();
        }
