<!DOCTYPE html>
<html>
<head>
    <title>The top points</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="/templates/css/dashboard_css.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div id= "navigation">
        <p id="userName">{$user_name}</p>
        {*<h2>The Main navigation</h2>*}

        <a href="render_nominate_members_action_page.php">Nominate Members</a><br><br>
        <a href = "your_team.php">See your team members</a><br><br>
        <a href="top_points.php">Top Rankers</a><br><br>
        <a href="logout.php">Logout</a><br><br>


    </div>
    <div id="centerDoc" style="align-content: center">

        <p>Your Points: {$user_points}</p><br>
        {*<p>{$user_points}</p><br><br>*}


        <h1>The top points</h1>
        {*{html_table loop=$names loop=$points cols="Names, Points "}*}


        <table>
            <thead>
            <tr>
                <th>Rank</th>
                <th>Names</th>
                <th>Points</th>

            </tr>
            </thead>
            <tbody>
            {assign var='i' value=1}
            {section name=product loop=$output }
                <tr>
                    <td>{$i}</td>

                    {*<td>{$names[product]}</td>*}
                    <td>{$output[product].user_id}</td>
                    <td>{$output[product].points}</td>

                </tr>
                {assign var='i' value=$i+1}
            {/section}
            </tbody>
        </table>
        <br><br>
        <a href="../dashboard_back.php">Dashboard</a>
    </div>


</body>
</html>

