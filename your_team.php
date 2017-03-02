<?php
    session_start();
    ?>
<?php
    require_once ("dbms_connection.php");
    require_once ("smarty_configs.php");
    if (isset($_SESSION['user_name']) && isset($_SESSION['id']))
    {

        $user_name = $_SESSION['user_name'];
        $password = $_SESSION['password'];
        $id = $_SESSION['id'];
        $smarty->assign('user_name' ,$user_name);

        //to get the ids in level 1

        $stmt = $conn->prepare("SELECT nominee_id FROM nomination_table 
                 WHERE nominator_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result =$stmt->fetchAll();
        $nominees_ids = array_column($result, 'nominee_id');

        //loop through all the ids and get there user names
        $user_names_level1 = array();
        $stmt2 = $conn->prepare("SELECT user_name FROM user_table 
                 WHERE id = :id");
        foreach ($nominees_ids as $value)
        {

            //echo $value;
            $stmt2->bindParam(':id', $value);
            $stmt2->execute();
            $result1 = $stmt2->fetch();
            $user_names_level1[] = $result1[0];
            //echo"<br>";

        }
        //display the names at level 1
        $smarty->assign('level1', $user_names_level1);
        $smarty->display('templates/render_team_members_headers.tpl');


        //to get ids of the level 2 members for each level 1 member

        $output =array();
        $i=0;
        foreach ($nominees_ids as $value)
        {
            $stmt = $conn->prepare("SELECT nominee_id FROM nomination_table
                 WHERE nominator_id = :nominator_id");
            $stmt->bindParam(':nominator_id', $value);
            $stmt->execute();
            $result = $stmt->fetchAll();
            $nominees_id_level2 = array_column($result, 'nominee_id');


            //get names of level 2 members for each level1 member
            $user_names_level2 = array();
            $stmt2 = $conn->prepare("SELECT user_name FROM user_table 
                 WHERE id = :id");
            foreach ($nominees_id_level2 as $value)
            {

                //echo $value;
                $stmt2->bindParam(':id', $value);
                $stmt2->execute();
                $result3 = $stmt2->fetch();
                $user_names_level2[] = $result3[0];
                //echo"<br>";

            }

            $smarty->assign('name', "level1_nominee".$i);
            $smarty->assign('level2', $user_names_level2);
            $smarty->assign('name_nominator', $user_names_level1[$i]);
            $smarty->display('templates/render_team_members_content.tpl');
            $i++;
        }
        $smarty->display('templates/render_team_members_footer.tpl');
    }
    else
    {
        echo "please log-in to visit this page";
        $smarty->display('templates/login.tpl');
        exit();
    }



    ?>
