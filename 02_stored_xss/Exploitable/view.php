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

$OBJ =  $conn->query("SELECT * FROM storedxss");	
if (mysqli_num_rows($OBJ) > 0) 
{
	while($row = mysqli_fetch_assoc($OBJ))
	{
		echo "<b>" . $row["name"] . "</b><br>" . $row["comment"] . "<br><br>";
	}
}

$conn->close();

?>

<p><a href="./index.html">home</a></p>