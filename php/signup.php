<?php

    session_start();

    if (isset($_POST['submit'])){

        $username = $_POST['user_id'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $email = $_POST['email'];

        header('Location: http://localhost/cs4640-project/createEvent.html');
    }
    else{
        header('Location: http://localhost/cs4640-project/');  
    }

    /*
    $query = "INSERT INTO user VALUES(:username, :password, :name, :email)";
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':email', $email);
        
    $statement->execute();
    $statement->closeCursor();
    */
?>