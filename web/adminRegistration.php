
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo $title = "Database"; ?></title>

    <title>Registration</title>

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/footer.css">

</head>

<body>


<h1>King's Speech</h1>
<ul>
    <li>
        <a href="index.php" class="{% block indexPageLinkStyle %}{% endblock %}">Home</a>
    </li>
    <li>
        <a href="/index.php?action=about" class="{% block aboutPageLinkStyle %}{% endblock %}">About</a>
    </li>
    <li>
        <a href="/index.php?action=gallery" class="{% block galleryPageLinkStyle %}{% endblock %}">Gallery</a>
    </li>
    <li>
        <a href="/index.php?action=login" class="{% block loginPageLinkStyle %}{% endblock %}">Login</a>
    </li>
    <li>
        <a href="/index.php?action=contact" class="{% block contactPageLinkStyle %}{% endblock %}">Contact</a>
    </li>
    <li>
        <a href="/shop.php" class="{% block shopPageLinkStyle %}{% endblock %}">Shop</a>
    </li>
    <li>
        <a href="registration.php" class="{% block registrationPageLinkStyle %}{% endblock %}">Registration</a>
    </li>
</ul>

<h2> Sign Up Now </h2>


<a href="create.php"><strong>Register Here</strong></a> - Create new user</a><br>
<a href="read.php"><strong>View Registered Users</strong></a> - View users</a>
<br>

<footer>
    Copyright &copy; Israel Ogedengbe B00097640
</footer>

</body>
</html>