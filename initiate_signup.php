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
            echo "<br><br><br>not in user table";
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

            //retrieve the id from the user table

            $stmt4 = $conn->prepare("SELECT id FROM user_table WHERE user_name =:user_name");
            $stmt4->bindParam(':user_name' ,$user_name);
            $stmt4->execute();
            $result4 = $stmt4->fetch();
            $id = $result4[0];
            echo $id;
            //create entry in nomination table...........


            $stmt3 = $conn->prepare("INSERT INTO nomination_table (nominee_id)
            VALUES (:nominee)");
            $stmt3->bindParam(':nominee',$id);
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

