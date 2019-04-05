<?php 
// hostname
$hostname = "localhost:3306";

// databse name
$dbname = '';

// databse credentials
$username = '';
$password = '';

$dsn = "mysql:host=$hostname;dbname=''";

/** connect to data base */
try{
    $db = new PDO($dsn, $username, $password);

}
catch(PDOException $e){
    $error_message = $e->getMessage();
    echo "<p> An error occured while connecting to the database: $error_message </p>";
}
catch(Exception $e){ //handle any type of exception
    $error_message = $e->getMessage();
    echo "<p>Error message: $error_message</p>";
}
?>