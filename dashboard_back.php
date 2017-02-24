<?php
    session_start();
    ?>
<?php
    require "smarty_configs.php";
    //echo $_SESSION['user_name'];
    $smarty -> assign('user_name', $_SESSION['user_name']);
    $smarty -> display('templates/dashboard.tpl');
    exit();
