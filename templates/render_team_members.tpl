<!DOCTYPE html>
<html>
<head>
    <title>Your Team Members</title>
</head>
<body>
<div>

    <h1>Your Team Members</h1>
    <p>{$user_name}</p>
    {html_options  options=$level1 }
    {html_options name = $name options=$level2}
</div>
</body>
</html>