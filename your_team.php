<?php
    session_start();
    ?>
<?php
    require_once ("dbms_connection.php");
    require_once ("smarty_configs.php");
    if (isset($_SESSION['user_name']) && isset($_SESSION['password']))
    {

        $user_name = $_SESSION['user_name'];
        $password = $_SESSION['password'];

        $smarty->assign('user_name' ,$user_name);

        //to get the names in level 1
        $stmt = $conn->prepare("SELECT nominee FROM nomination_table 
                 WHERE nominator = :user_name");
        $stmt->bindParam(':user_name', $user_name);
        $stmt->execute();
        $result =$stmt->fetchAll();
        $full_names = array_column($result, 'nominee');
        //print_r($full_names);
        $smarty->assign('level1', $full_names);
        $smarty->display('templates/render_team_members_headers.tpl');


        //to get names of the level 2 members

        $output =array();
        $i =0;
        foreach ($full_names as $value)
        {

            $stmt = $conn->prepare("SELECT nominee FROM nomination_table
                 WHERE nominator = :next_level");
            $stmt->bindParam(':next_level', $value);
            $stmt->execute();
            $output= $stmt->fetchAll();
            $reduced = array_column($output, 'nominee');

            $smarty->assign('name', "level1_nominee".$i);
            $smarty->assign('level2', $reduced);
            $smarty->assign('name_nominator', $value);
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
