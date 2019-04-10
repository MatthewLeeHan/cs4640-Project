<?php

require('connect-db.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["user_id"];
    $pwd = md5($_POST["password"]);

    $query = "SELECT username FROM user WHERE username=':username' AND password=':pwd'";
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':pwd', $pwd);
    $statement->execute();

    $results = $statement->fetchAll();
    if (count($results) == 1) {
        $_SESSION['username'] = $username;

        header('Location: createEvent.php');
    }

    else{
        header('Location: ../login.html');
    }

}

?>