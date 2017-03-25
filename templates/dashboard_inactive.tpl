<!DOCTYPE html>
<html>
<head>
    <title>This is the dashboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="/templates/css/dashboard_css.css" rel="stylesheet" type="text/css">
</head>
<body>
<div>
    

    <div id= "navigation">
        <p id="userName">{$user_name}</p>
        {*<h2>The Main navigation</h2>*}

        <a href="../test_back"><p>Test</p></a><br><br>
        <a href="top_points"><p>Top Rankers</p></a><br><br>
        <a href="logout"><p>Logout</p></a><br><br>


    </div>

    <div id="centerDoc">
        <h1>Welcome to dashboard</h1>
    </div>


</div>
</body>
</html>