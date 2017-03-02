<!DOCTYPE html>
<html>
<head>
    <title>Login CompanyX</title>
    <link href="/templates/css/dashboard_css.css" rel="stylesheet" type="text/css">
</head>
<body>
<div>

    <div id= "navigation">
        <p id="userName">{$user_name}</p>
        {*<h2>The Main navigation</h2>*}

        <a href="render_nominate_members_action_page.php">Nominate Members</a><br><br>
        <a href = "your_team.php">See your team members</a><br><br>
        <a href="top_points.php">Top Rankers</a><br><br>
        <a href="logout.php">Logout</a><br><br>


    </div>

    <div id="centerDoc">
        <p class="heading"><strong>Members still available</strong></p>
        <form action="nominate_members_action_page.php" method="post">

            {html_checkboxes name='nominees_available' values=$value output=$display
            selected=$customer_id  separator='<br />'}

            <input type="submit" value="Submit"><br><br>
            <a href = "dashboard_back.php">Dashboard</a>
        </form>
    </div>

</div>
</body>
</html>