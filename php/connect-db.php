<?php

$hostname = "mysql.cs.virginia.edu";
$username = "jc4va";
$password = "lollypop12";

$dsn = "mysql:host=$hostname;dbname=jc4va_cs4640";

try{
	$db = new PDO($dsn, $username, $password);
}

catch (PDOException $e) {
	$error_message = $e -> getMessage();
	echo "<p> An error occured while connecting to the database: $error_message </p>";
}

catch (Exception $e) {
	$error_message = $e -> getMessage();
	echo "<p> Error message: $error_message </p>";
}


?>