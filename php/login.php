<?php

require('connect-db.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["user_id"]);
    $pwd = md5(trim($_POST["password"]));

    $query = "SELECT * FROM user WHERE username = :username";
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();

    $results = $statement->fetchAll();

    foreach ($results as $result){
        $db_hash = $result['password'];
        if (count($results) == 1) {
            if ($pwd == $db_hash){

                setcookie('username', $user, time()+3600);
                setcookie('password', md5($pwd), time()+3600);
                
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