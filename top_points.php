<?php
    session_start();
    ?>
<?php

    require_once ('smarty_configs.php');
    require_once ('dbms_connection.php');
    if (isset($_SESSION['user_name']) && isset($_SESSION['id']))
    {
        //logged in HTML and code here
        $user_name = $_SESSION['user_name'];
        $id = $_SESSION['id'];
        //get top 5 points
        //we will get the ids of the top points holders
        $stmt = $conn->prepare("SELECT user_id , points FROM points_table ORDER BY points DESC LIMIT 5");
        $stmt->execute();
        $result = $stmt->fetchAll();
//        print_r($result);
//        echo "<br><br>";
        $top_points_ids = array_column($result, 'user_id');

        //this will provide us the names from ids
        $user_names_top_points = array();
        $stmt2 = $conn->prepare("SELECT user_name FROM user_table 
                 WHERE id = :id");
        foreach ($top_points_ids as $key => $value)
        {

            //echo $value;
            $stmt2->bindParam(':id', $value);
            $stmt2->execute();
            $result1 = $stmt2->fetch();
            //$user_names_top_points[] = $result1[0];
            $result[$key][user_id] = $result1[0];
            $result[$key][0] = $result1[0];
            //echo"<br>";

        }

        //get the points of the user
        $stmt3 = $conn->prepare("SELECT points FROM points_table WHERE user_id = :id");
        $stmt3 -> bindParam(':id', $id);
        $stmt3 -> execute();
        $result3 = $stmt3->fetch();

        //get the active status



        $smarty->assign('output' , $result);
        $smarty->assign('user_name', $user_name);
        $smarty->assign('user_points', $result3[0]);
        //$smarty->assign('names' , $user_names_top_points);
        $smarty->display('templates/render_top_points.tpl');
        exit();
    }
    else
    {
        $message = "please login";
        $smarty->assign(':message', $message);
        $smarty->display("templates/login.tpl");
    }
