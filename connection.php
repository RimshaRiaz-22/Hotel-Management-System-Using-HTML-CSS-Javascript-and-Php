<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "mobile";

//create connection

$conn = new mysqli ($servername, $username, $password, $db);

//check connection
if ($conn -> connect_error)
{
	die ("connection failed" .$connect_error);
}
echo "connection successful";

?>
