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

        <a href="render_nominate_members_action_page"><p>Nominate Members</p></a>
        <a href = "your_team"><p>See your team members</p></a>
        <a href="top_points"><p>Top Rankers</p></a>
        <a href="display_certificate"><p>Certificate</p></a>
        <a href="logout"><p>Logout</p></a>

    </div>
    <div id="centerDoc" style="align-content: center">

        <p class="heading">Your Points: {$user_points}</p>
        <p class="heading">Your Rank: {$user_rank}</p>
        <h1>The top points</h1>

        <table id="topPoints">
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
    </div>
</body>
</html>

