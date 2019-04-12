<?php

require('connect-db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["user_id"]);
    $pwd = md5(trim($_POST["password"]));

    $query = "SELECT * FROM user WHERE username = :username";
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();

    $results = $statement->fetchAll();

    if (empty($results)){
        header('Location: ../logIn.html');
    }
    else{
        foreach ($results as $result){
            $db_hash = $result['password'];
            if (count($results) == 1) {
                if ($pwd == $db_hash){

                    $user = array(
                        'username' => $username,
                        'pwd' => $pwd,
                    );

                    setcookie('user', $user, time() * 3600);
                    
                    header('Location: ../createEvent.php');

                }
                else{
                    header('Location: ../logIn.html');
                }
            }
        }
    }
}

?>