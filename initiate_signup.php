<?php
   
    require("smarty_configs.php");
    
    echo $company_given_id;
    //$user_name = $_SESSION["user_name"];

    //check in info table for company validation

    $stmt1 = $conn ->prepare("SELECT user_name, email_id FROM Info_table WHERE company_given_id = :company_given_id");
        $stmt1->bindParam(':company_given_id', $company_given_id);
        $stmt1->execute(); 
        $result = $stmt1->fetch();
        print_r($result);
        if(empty($result))
        {
            //not valid company person
            echo "not valid company person";
            $smarty -> assign('response', "not valid person");
            $smarty -> display('templates/unsuccess_signup_response.tpl');
            exit();

        }
        $user_name = $result[0];
        $email_id = $result[1];
        //echo $user_name;

    //check in user table for ensuring not registered......

    $stmt2 = $conn ->prepare("SELECT user_name FROM user_table WHERE user_name = :user_name");
        $stmt2->bindParam(':user_name', $user_name);
        $stmt2->execute();
        $result = $stmt2->fetch();

        if(empty($result))
        {
            //sign up as root
            //no one has nominated you
            echo "<br><br><br>it is empty";
            $_SESSION['user_name'] = $user_name;
            $_SESSION['password'] = $password;

            //creating entry in user table............


            $role_id = 2;
            $stmt = $conn->prepare("INSERT INTO user_table (user_name, password, email_id, role_id) 
            VALUES (:user_name, :password, :email_id, :role_id)");
            $stmt->bindParam(':user_name', $user_name);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':email_id', $email_id);
            $stmt->bindParam(':role_id', $role_id);
            $stmt->execute();

            //create entry in nomination table...........

            $stmt3 = $conn->prepare("INSERT INTO nomination_table (nominee)
            VALUES (:nominee)");
            $stmt3->bindParam(':nominee',$user_name);
            $stmt3->execute();



            $smarty -> assign('user_name', $user_name);
            $smarty -> display('templates/success_signup_response.tpl');
        }
        else
        {
            //already a member
            //use your login id to sign up
            echo "<br><br><br>already a member";
            $smarty -> assign('response', $user_name);
            $smarty -> display('templates/unsuccess_signup_response.tpl');
        }










    // if($score >= 1)
    // {
    //     //You have passed the test

    //     $stmt = $conn->prepare("INSERT INTO score_table (user_name, score) 
    //     VALUES (:user_name, :score)");
    //     $stmt->bindParam(':user_name', $user_name);
    //     $stmt->bindParam(':score', $score);
    //     $stmt->execute();

    //     //now reward 10 points and 5 points up the hierchy
    //     //10 points for the new user
    //     $points = 10;
    //     $stmt = $conn->prepare("INSERT INTO points_table (user_name, points) 
    //     VALUES (:user_name, :points)");
    //     $stmt->bindParam(':user_name', $user_name);
    //     $stmt->bindParam(':points', $points);
    //     $stmt->execute();

        
    //     //now for 5 points up the hierchy
    //     //$nominee_id = 
    //     $stmt1 = $conn ->prepare("SELECT nominator FROM nomination_table WHERE nominee = :nominee_id");
    //     $stmt1->bindParam(':nominee_id', $user_name);
    //     $stmt1->execute(); 
    //     $result = $stmt1->fetch();
    //     print_r($result);
    //     $stmt2 = $conn ->prepare("UPDATE points_table SET points = points + 5 WHERE user_name = :nominator");


    //     //the loop till null is returned
    //     $count = 0;
    //     while(!empty($result))
    //     {
    //         echo $count;
    //         $nominator = $result[0];
    //         $stmt2->bindParam(':nominator', $nominator );
    //         $stmt2->execute();

    //         $stmt1->bindParam(':nominee_id', $nominator);
    //         $stmt1->execute();
    //         $result = $stmt1->fetch();
    //         $count++;


    //     }
    //     $sql = "UPDATE user_table SET active ='1' WHERE user_name =:nominee_id ";
    //     $stmt = $conn->prepare($sql);
    //     $stmt->bindParam(':nominee_id', $user_name);
    //     $stmt->execute();

    //     $smarty -> assign('user_name', $user_name);
    //     $smarty -> display('templates/dashboard.tpl');
    // }    
       
    // else
    // {
    //     //you have not passed the test
    // }