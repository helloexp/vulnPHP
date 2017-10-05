<?php
require ("../../configuration/configuration.php");

$servername = DB_HOST;
$username = DB_USER;
$password = DB_PASSWORD;
$dbName = DB_DATABASE;

$conn = new mysqli($servername, $username, $password, $dbName);

$reset = "DELETE FROM storedxss";
$conn->query($reset);

echo "Comments cleared.<br>";

$conn->close();
?>

<p><a href="./index.html">home</a></p>