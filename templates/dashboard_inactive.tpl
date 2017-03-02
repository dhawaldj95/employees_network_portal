<!DOCTYPE html>
<html>
<head>
    <title>This is the dashboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="/templates/css/dashboard_css.css" rel="stylesheet" type="text/css">
</head>
<body>
<div>
    <h1>Welcome to dashboard</h1>

    <div id= "navigation">
        <p id="userName">{$user_name}</p>
        {*<h2>The Main navigation</h2>*}

        <a href="../test_back.php">Test</a><br><br>
        <a href="top_points.php">Top Rankers</a><br><br>
        <a href="logout.php">Logout</a><br><br>


    </div>
    {*<div id="centerDoc">*}

    {*</div>*}


</div>
</body>
</html>