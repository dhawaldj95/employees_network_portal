<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login CompanyX</title>
    <link href="/templates/css/dashboard_css.css" rel="stylesheet" type="text/css">
</head>
<body>
<div>


    <div id= "navigation">
        <p id="userName">{$user_name}</p>
        {*<h2>The Main navigation</h2>*}

        <a href="render_nominate_members_action_page"><p>Nominate Members</p></a>
        <a href = "your_team"><p>See your team members</p></a>
        <a href="top_points"><p>Top Rankers</p></a>
        <a href="display_certificate"><p>Certificate</p></a>
        <a href="logout"><p>Logout</p></a>

    </div>

    <div id="centerDoc">
        <p class="heading"><strong>Members still available</strong></p>
        <form action="nominate_members_action_page" method="post">

            {html_checkboxes name='nominees_available' values=$value output=$display
            selected=$customer_id  separator='<br />'}

            <input type="submit" value="Submit"><br><br>
            <a href = "dashboard_back">Dashboard</a>
        </form>
    </div>

</div>
</body>
</html>