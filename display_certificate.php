<?php
session_start();
?>
<?php
    require_once ("dbms_connection.php");
    require_once ("smarty_configs.php");
    $id =$_SESSION['id'];
    $user_name = $_SESSION['user_name'];
    //get the certificate address from certificate table
    $stmt = $conn->prepare("SELECT certificate_address FROM certificate_table WHERE user_id = :user_id");
    $stmt->bindParam(':user_id', $id);
    $stmt->execute();
    $result = $stmt->fetch();
    $path = "../".$result[0];

    $smarty->assign('user_name', $user_name);
    $smarty->assign('image', $path);
    $smarty->display("templates/certificate_display.tpl");
?>

