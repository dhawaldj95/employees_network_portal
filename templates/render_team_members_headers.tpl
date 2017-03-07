<!DOCTYPE html>
<html lang ="en">
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

        <a href="render_nominate_members_action_page.php"><p>Nominate Members</p></a>
        <a href = "your_team.php"><p>See your team members</p></a>
        <a href="top_points.php"><p>Top Rankers</p></a>
        <a href="display_certificate.php"><p>Certificate</p></a>
        <a href="logout.php"><p>Logout</p></a>

    </div>
    <div id="centerDoc">
        <h1>Your Team Members</h1>
        <p>{$user_name}</p>
        {*{html_options  options=$level1 }<br>*}
        {foreach $level1 as $value}
            <li>{$value}</li>
        {foreachelse}
        {/foreach}



