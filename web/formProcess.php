<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

if($password == "password")
{
    echo 'Password accepted';
    echo "<a href=\"/index.php?action=admin\" class=\"{% block adminPageLinkStyle %}{% endblock %}\">Admin</a>";
}
else
{
    echo "Error invalid password!";
}

?>


<!DOCTYPE HTML>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
</div>
</body>