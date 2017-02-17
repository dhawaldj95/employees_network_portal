<?php
   session_start();
   ?>

<?php
// *nix style (note capital 'S')
echo $_SESSION["user_name"];
require("smarty_configs.php");

date_default_timezone_set('Asia/Kolkata');
$today_date = date('Y-m-d');
echo $today_date;
$date1=date_create("2017-02-15");
$date2=date_create($today_date);
$diff=date_diff($date1,$date2);

$catch= $diff->format("%R%a");
echo $catch;
echo "<br><br>";
$wait_days = 7-$diff;
echo $wait_days;

$smarty->display('index.tpl');
?>

