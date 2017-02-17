<!DOCTYPE html>
<html>
	<head>
		<title>This is the test page</title>
	</head>
	<body>
		<div>

		   <h1>Welcome to Test</h1>
		   <p>{$user_name}</p>
		   <p>Here is your test</p>


		  <form action="../test_action_page.php" method="post">
		  
            Q1:Vehicle:<br>
            <input type="radio" name="vehicle" value="bike" checked="checked">I have a bike<br>
			<input type="radio" name="vehicle" value="car">I have a car <br>
            Q2:City:<br>
            <input type="radio" name="city" value="jaipur" checked="checked">I live in Jaipur<br>
			<input type="radio" name="city" value="kolkata">I live in Kolkata<br> 
            <input type="submit" value="Submit">
          </form>
		</div>
	</body>
</html>
