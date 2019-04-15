<?php

// set error message variables to empty values before validation
$old_pw_error_msg = '';
$new_pw_error_msg = '';
$new_pw_confirm_error_msg = '';


function validateInput($old_pw_error_msg,$new_pw_error_msg,$new_pw_confirm_error_msg){
    if(empty($_POST['old_pw']) || empty($_POST['new_pw']) || empty($_POST['new_pw_confirm'])){
        echo "<script>alert('Please enter all fields!'); window.location.href='../account-settings.html';</script>";
    }
}

require('connect-db.php');

// to prevent exploits - cyber sec
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    validateInput($old_pw_error_msg,$new_pw_error_msg,$new_pw_confirm_error_msg);

    if (!isset($_COOKIE['user'])){
        echo "<script>alert('Please log in first!'); window.location.href='../login.php';</script>";
    }

    else{
        
        $username = $_COOKIE['user'];
        $pwd = md5(test_input($_POST['old_pw']));

        $query = "SELECT * FROM user WHERE username = :username";
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->execute();

        $results = $statement->fetchAll();

        if(empty($results)){
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
}
?>