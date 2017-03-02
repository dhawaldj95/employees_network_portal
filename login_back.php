<?php
    require ('smarty_configs.php');

    $message = "";
    $smarty->assign(':message' , $message);
    $smarty->display('templates/login.tpl');