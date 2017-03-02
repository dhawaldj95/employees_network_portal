<?php
session_start();
?>

<?php
require 'dbms_connection.php';
require 'smarty_configs.php';



if (isset($_SESSION['user_name']) && isset($_SESSION['id']))
{
    //logged in HTML and code here
    $user_name = $_SESSION['user_name'];
    $id = $_SESSION['id'];



    $stmt = $conn->prepare("SELECT Info_table.name FROM Info_table LEFT JOIN user_table 
            ON user_table.user_name = Info_table.user_name WHERE user_table.user_name IS NULL");
    $stmt->execute();
    $result =$stmt->fetchAll();
    $full_names = array_column($result, 'name');

    $smarty->assign('user_name', $user_name);
    $smarty->assign('display', $full_names);
    $smarty->assign('value' , $full_names);
    $smarty->display('templates/render_nominate_members.tpl');
}
else
{
    $smarty -> display('templates/login.tpl');
}
?>