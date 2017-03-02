<!DOCTYPE html>
<html>
<head>
    <title>Your Team Members</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="/templates/css/dashboard_css.css" rel="stylesheet" type="text/css">
    <link href="/templates/css/inline.css" rel="stylesheet" type="text/css">
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
        <h1>Your Team Members</h1>
        <p>{$user_name}</p>
        {*{html_options  options=$level1 }<br>*}
        {foreach $level1 as $value}
            <li>{$value}</li>
        {foreachelse}
        {/foreach}



