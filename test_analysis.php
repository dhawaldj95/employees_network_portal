<?php 
   session_start();
    ?>

<?php
    echo "inside test_analysis";

    //update the time slot to current date in test_date_table

    // Change the line below to your timezone!
    date_default_timezone_set('Asia/Kolkata');
    $test_date = date('Y/m/d');
    echo "$test_date";

    $stmt = $conn->prepare("INSERT INTO test_date_table (user_name, test_date)
    VALUES (:user_name, :test_date)");
    $stmt->bindParam(':user_name', $user_name);
    $stmt->bindParam(':test_date', $test_date);
    $stmt->execute();

    require("smarty_configs.php");
    $user_name = $_SESSION["user_name"];
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

        $stmt = $conn->prepare("INSERT INTO score_table (user_name, score) 
        VALUES (:user_name, :score)");
        $stmt->bindParam(':user_name', $user_name);
        $stmt->bindParam(':score', $score);
        $stmt->execute();

        //now reward 10 points and 5 points up the hierarchy
        //10 points for the new user
        $points = 10;
        $stmt = $conn->prepare("INSERT INTO points_table (user_name, points) 
        VALUES (:user_name, :points)");
        $stmt->bindParam(':user_name', $user_name);
        $stmt->bindParam(':points', $points);
        $stmt->execute();

        
        //now for 5 points up the hierarchy

        $stmt1 = $conn ->prepare("SELECT nominator FROM nomination_table WHERE nominee = :nominee_id");
        $stmt1->bindParam(':nominee_id', $user_name);
        $stmt1->execute(); 
        $result = $stmt1->fetch();
        print_r($result);
        $stmt2 = $conn ->prepare("UPDATE points_table SET points = points + 5 WHERE user_name = :nominator");


        //the loop till null is returned
        $count = 0;
        while(!empty($result))
        {
            echo $count;
            $nominator = $result[0];
            $stmt2->bindParam(':nominator', $nominator );
            $stmt2->execute();

            $stmt1->bindParam(':nominee_id', $nominator);
            $stmt1->execute();
            $result = $stmt1->fetch();
            $count++;


        }
        $sql = "UPDATE user_table SET active ='1' WHERE user_name =:nominee_id ";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nominee_id', $user_name);
        $stmt->execute();

        $smarty -> assign('user_name', $user_name);
        $smarty -> display('templates/dashboard.tpl');
    }    
       
    else
    {
        //you have not passed the test
    }
    


   

?>