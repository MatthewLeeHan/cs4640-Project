<?php
// set error message variables to empty values before validation
$pw_id_error_msg = '';
$user_id_error_msg = '';
$inputted_username = '';

require('connect-db.php');

// to prevent exploits - cyber sec
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_COOKIE['user'];
    $pwd = md5(test_input($_POST['old_pw']));

    $query = "SELECT * FROM user WHERE username = :username";
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();

    $results = $statement->fetchAll();

    if (empty($results)){
        // header('Location: ../logIn.php');
    }
    else{
        foreach ($results as $result){
            $db_hash = $result['password'];
            if (count($results) == 1) {
                if ($pwd == $db_hash){
                    if ($_POST['new_pw'] == $_POST['new_pw_confirm']){
                        $password = md5($_POST['new_pw']);
                        $update_query = "UPDATE user SET password=:password WHERE username=:username";
                        $statement = $db->prepare($update_query);
                        $statement->bindValue(':username', $username);
                        $statement->bindValue(':password', $password);
                        $statement->execute();
                        $statement->closeCursor();   

                        echo '<script type="text/javascript">alert("Password successfully changed")</script>';
                        header("Location: ../index.html");

                    }
            }
            else{
                header("Location: ../account-settings.html");
            }
        }
        else{
            header("Location: ../account-settings.html");
        }
    }
}
}
?>