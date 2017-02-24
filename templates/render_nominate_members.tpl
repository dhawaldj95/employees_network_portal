<!DOCTYPE html>
<html>
<head>
    <title>Login CompanyX</title>
</head>
<body>
<div>
    <form action="nominate_members_action_page.php" method="post">

    {html_checkboxes name='nominees_available' values=$value output=$display
    selected=$customer_id  separator='<br />'}

        <input type="submit" value="Submit"><br><br>
        <a href = "dashboard_back.php">Dashboard</a>
    </form>
</div>
</body>
</html>