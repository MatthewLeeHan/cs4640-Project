<?php

require('connect-db.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["user_id"];
    $pwd = md5($_POST["password"]);

    $query = "SELECT * FROM user WHERE username = :username";
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();

    $results = $statement->fetchAll();

    foreach ($results as $result){
        $db_hash = $result['password'];
        if (count($results) == 1) {
            if ($pwd == $db_hash){
                $_SESSION['username'] = $username;

                header('Location: ../createEvent.php');

            }
            else{
                header('Location: ../login.html');
            }
        }
        else{
            header('Location: ../login.html');
        }
    }
}

?>