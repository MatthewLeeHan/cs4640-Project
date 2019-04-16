<?php
// set error message variables to empty values before validation
$pw_id_error_msg = '';
$user_id_error_msg = '';
$inputted_username = '';
$id_error_msg = '';

require('connect-db.php');

// to prevent exploits - cyber sec
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // input validation
    // validating user id input
    if(empty($_POST['user_id'])){
        $user_id_error_msg = 'Please enter a username, buddy.';
    }
    else{
        $username = test_input($_POST['user_id']);
        // saving last input for easier usability - no need to retype
        $inputted_username = test_input($_POST['user_id']);
    }
    // validating password input
    if(empty($_POST['password'])){
        $pw_id_error_msg = 'Please enter a password, buddy.';
    }
    else{
        $pwd = md5(test_input($_POST['password']));
    }

    // $username = trim($_POST["user_id"]);
    // $pwd = md5(trim($_POST["password"]));

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

                    $user = array(
                        'username' => $username,
                        'pwd' => $pwd,
                    );
                    // setcookie's value MUST be a string
                    // + 3600 ... * 3600 was going over limit
                    setcookie('user', $username, time() + 3600);
                    
                    header('Location: ../dashboard.html');

                }
                else{
                    // header('Location: ./logIn.php');
                    $id_error_msg = 'This account does not exist';
                }
            }
        }
    }
}
?>