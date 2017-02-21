<?php
    session_start();
    ?>
<?php
    require ("smarty_configs.php");
    session_destroy();
    $smarty ->display('templates/index.tpl');
?>