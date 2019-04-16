<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (isset($_POST['submit'])){

            require('connect-db.php');

            $username = $_POST['user_id'];
            $password = md5($_POST['password']);
            $name = $_POST['name'];
            $email = $_POST['email'];

            $query = "INSERT INTO user VALUES(:username, :password, :name, :email)";
            $statement = $db->prepare($query);
            $statement->bindValue(':username', $username);
            $statement->bindValue(':password', $password);
            $statement->bindValue(':name', $name);
            $statement->bindValue(':email', $email);
                
            $statement->execute();
            $statement->closeCursor();

            header("Location: ../logIn.php");
            exit();
        }
        else{
            header("Location: ../index.html");
            exit();
        }
    }

    /*
    */
?>