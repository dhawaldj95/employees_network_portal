<?php
    $count =0;
    //only 5 members are allowed to be selected
    if (isset($_POST['aval_nominees']))
    {

        $input = $_POST['aval_nominees'];
        foreach ($input as $value)
            $count++;

        if($count > 5)
        {
            echo "you can't select more then 5 members";
            //enter a redirect link over here
            exit();
        }

    }


    if (isset($_POST['aval_nominees']))
    {
        //query to retrive info for user table from Info table
        $stmt1 = $conn->prepare("SELECT user_name , email_id FROM Info_table WHERE name =:name");

        //query to insert in nomination table
        $stmt2 = $conn ->prepare("INSERT INTO nomination_table (nominee, nominator) VALUES (:nominee, :nominator)");

        //query to insert info in user table
        $stmt3 = $conn ->prepare("INSERT INTO user_table (user_name , password, active, email_id, role_id) 
        VALUES (:user_name , :password, :active, :email_id, :role_id)");

        $result = $stmt2->fetch();
        $input = $_POST['aval_nominees'];
        foreach ($input as $value) {
            echo $value . "<br />";
            $name = $value;
            $stmt1 -> bindParam(':name' , $name);
            $stmt1 -> execute();
            $result = $stmt1-> fetch();

            $user_name_nominee = $result[0];
            $email_id_nominee = $result[1];

            $stmt2 ->bindParam(':nominee' , $user_name_nominee);
            $stmt2 ->bindParam(':nominator' , $user_name);
            $stmt2 -> execute();

            $password_nominee = $user_name_nominee;
            $active = 0;
            $role_id = 2;

            $stmt3 ->bindParam(':user_name' , $user_name_nominee);
            $stmt3 ->bindParam(':password' , $password_nominee);
            $stmt3 ->bindParam(':active' , $active);
            $stmt3 ->bindParam(':email_id' , $email_id_nominee);
            $stmt3 ->bindParam(':role_id' , $role_id);
            $stmt3 -> execute();
        }
        $smarty->assign('response', "you have selected ".$count." members");
        $smarty->display('templates/nomination_response.tpl');
    }
    else{
        $smarty->assign('response', "you have selected no one");
        $smarty->display('templates/nomination_response.tpl');
    }

