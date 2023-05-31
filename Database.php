<?php	
$servername="localhost";
$username="root";
$password="";
$dbname="Enigma";

$conn = mysqli_connect($servername, $username,$password,$dbname);
	if (!$conn) {
		die("Could Not Connect MySQL Server:" .mysql_error());
	}
	else {
		echo("<h1>Welcome to TheEnigmaGamer!</h1>");
	}
?>