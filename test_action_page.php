<?php
session_start();
?>

<?php 
	
	$vehicle = $_POST["vehicle"]; 
	$city = $_POST["city"];

	$_SESSION["vehicle"]= $vehicle;
	$_SESSION["city"]= $city;

	// echo $vehicle;
	// echo "<br>";
	// echo $city;
	
    require 'dbms_connection.php';

    echo "inside test_analysis";
    $id =$_SESSION['id'];
    //update the time slot to current date in test_date_table
    date_default_timezone_set('Asia/Kolkata');
    $test_date = date('Y/m/d');
    echo "$test_date";

    $stmt = $conn->prepare("INSERT INTO test_date_table (user_id, test_date)
        VALUES (:id, :test_date)");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':test_date', $test_date);
    $stmt->execute();

    require("smarty_configs.php");
    $user_name = $_SESSION["user_name"];
    $id= $_SESSION['id'];
    $score = 0;
    echo $user_name;
    if($vehicle == "bike")
    {
        $score++;
    }
    if($city == "jaipur")
    {
        $score++;
    }
    echo $score;
    if($score >= 1)
    {
        //You have passed the test

        $stmt = $conn->prepare("INSERT INTO score_table (user_id, score) 
            VALUES (:id, :score)");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':score', $score);
        $stmt->execute();

        //now reward 10 points and 5 points up the hierarchy
        //10 points for the new user
        $points = 10;
        $stmt = $conn->prepare("INSERT INTO points_table (user_id, points) 
            VALUES (:id, :points)");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':points', $points);
        $stmt->execute();


        //now for 5 points up the hierarchy

        //query to fetch nominator
        $stmt1 = $conn ->prepare("SELECT nominator_id FROM nomination_table WHERE nominee_id = :nominee_id");
        $stmt1->bindParam(':nominee_id', $id);
        $stmt1->execute();
        $result = $stmt1->fetch();
    //        print_r($result);
        //query to update the points
        $stmt2 = $conn ->prepare("UPDATE points_table SET points = points + 5 WHERE user_id = :nominator_id");


        //the loop till null is returned
        $count = 0;
        while(!empty($result))
        {
            echo $count;
            $nominator_id = $result[0];
            $stmt2->bindParam(':nominator_id', $nominator_id );
            $stmt2->execute();

            $stmt1->bindParam(':nominee_id', $nominator_id);
            $stmt1->execute();
            $result = $stmt1->fetch();
            $count++;


        }
        $sql = "UPDATE active_table SET status ='1' WHERE user_id =:id ";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        require ("certificate_generation.php");

        $smarty -> assign('user_name', $user_name);
        $smarty -> display('templates/dashboard.tpl');
    }

    else
    {
        //you have not passed the test
        $smarty -> assign('user_name', $user_name);
        $smarty->display('templates/test_fail_response.tpl');
    }





?>
   
