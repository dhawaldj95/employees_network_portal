<?php
    session_start();
    ?>

<?php
    $user_name = $_SESSION["user_name"];
    $password = $_SESSION["password"];


    $stmt = $conn->prepare("SELECT Info_table.name FROM Info_table LEFT JOIN user_table 
            ON user_table.user_name = Info_table.user_name WHERE user_table.user_name IS null");
    $stmt->execute();
    $result =$stmt->fetchAll();

    $smarty->display('templates/nominate_members_header.tpl');
    foreach ($result as $value) {
        //echo $value['name'];
        $smarty->assign('response', $value['name']);
        $smarty->display('templates/nominate_members_content.tpl');

    }
    $smarty->display('templates/nominate_members_footer.tpl');



?>