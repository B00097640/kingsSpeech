<?php

$options    = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

require "config.php";

try
{
    $connection = new PDO("mysql:host=$host", $username, $password, $options);
    $sql = file_get_contents("users.sql");
    $connection->exec($sql);

    echo "Database and table users created successfully.";
}

catch(PDOException $error)
{
    echo $sql . "<br>" . $error->getMessage();
}