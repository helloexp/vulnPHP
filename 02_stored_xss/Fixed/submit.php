<?php
require ("../../configuration/configuration.php");

$servername = DB_HOST;
$username = DB_USER;
$password = DB_PASSWORD;
$dbName = DB_DATABASE;

$conn = new mysqli($servername, $username, $password, $dbName);
if($conn->connect_errno) {
	die("Connection Failed...");
}

$name = htmlspecialchars($_GET["name"]);
$comment = htmlspecialchars($_GET["comment"]);


//Prepared statement... We aren't writing an sqli yet!!!
$stmt = $conn->prepare("INSERT INTO storedxss (name,comment) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $comment);
$stmt->execute();

echo "thnk u for ur feedback it makes my webapps better!!!";

$stmt->close();
$conn->close();

?>

<p><a href="./index.html">home</a></p>