

<?php 
	
	$vehicle = $_POST["vehicle"]; 
	$city = $_POST["city"];

	$_SESSION["vehicle"]= $vehicle;
	$_SESSION["city"]= $city;

	// echo $vehicle;
	// echo "<br>";
	// echo $city;
	
    require 'dbms_connection.php';
    require 'test_analysis.php';
   
?>

</body>
</html>