<!DOCTYPE html>
<html>
	<head>
		<title>This is the dashboard</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link href="/templates/css/dashboard_css.css" rel="stylesheet" type="text/css">
	</head>
	<div>
	{*<div id = "header"></div>*}



			<div id= "navigation">
				<p id="userName">{$user_name}</p>
				{*<h2>The Main navigation</h2>*}

				<a href="render_nominate_members_action_page.php"><p>Nominate Members</p></a>
				<a href = "your_team.php"><p>See your team members</p></a>
				<a href="top_points.php"><p>Top Rankers</p></a>
				<a href="display_certificate.php"><p>Certificate</p></a>
				<a href="logout.php"><p>Logout</p></a>

			</div>
			<div id="centerDoc">
				<h1>Welcome to dashboard</h1>
				</div>

	</div>
	</body>
</html>