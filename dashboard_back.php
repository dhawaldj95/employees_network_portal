<?php
    session_start();
    ?>
<?php
    require_once "dbms_connection.php";
    require "smarty_configs.php";
    //echo $_SESSION['user_name'];
    $id = $_SESSION['id'];


    $stmt = $conn->prepare("SELECT status FROM active_table WHERE user_id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $result = $stmt->fetch();
    $status = $result[0];

    if($status == 0)
    {
        //display inactive dashboard
        $smarty -> assign('user_name', $_SESSION['user_name']);
        $smarty -> display('templates/dashboard_inactive.tpl');
        exit();
    }
    else
    {
        $smarty -> assign('user_name', $_SESSION['user_name']);
        $smarty -> display('templates/dashboard.tpl');
        exit();
    }

