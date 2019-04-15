<?php
$title_error_msg = '';
$date_error_msg = '';
$details_error_msg = '';
$inputted_title = '';
$inputted_date = '';
$inputted_desc = '';

$date = NULL;

// user defined array for error message output
$error_msgs = array('Please enter an event title', 'Please select a date range', 'Please enter some details about your meeting');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    // Input-validation on server side
    // if($_POST['event_title'] == '' || $_POST['datefilter'] == '' || $_POST['event_desc'] == ''){
    if(empty($_POST['event_title'])){
        $title_error_msg = $error_msgs[0];
    }
    $inputted_title = $_POST['event_title'];
    if(empty($_POST['datefilter'])){
        $date_error_msg = $error_msgs[1];
    }
    $inputted_date = $_POST['datefilter'];
    if(empty($_POST['event_desc'])){
        $details_error_msg = $error_msgs[2];
    }
    $inputted_desc = $_POST['event_desc'];

    if(!empty($_POST['event_title']) && !empty($_POST['datefilter']) && !empty($_POST['event_desc'])){
        foreach ($_POST as $key => $val){
            // data is an array... i think
            $data[$key] = $val;
            $_SESSION[$key] = $val;
        }
        date_split_formatter($data);
        $rand_hashed_string = md5(uniqid(rand(), true));

        require('connect-db.php');

        $date = $_POST['datefilter'];
        $event_title = $_POST['event_title'];
        $event_description = $_POST['event_desc'];
        $username = (string)$_COOKIE['user'];

        $query = "INSERT INTO meeting_info VALUES(:date, :event_title, :event_description, :hash_value, :username)";
        $statement = $db->prepare($query);
        $statement->bindValue(':event_title', $event_title);
        $statement->bindValue(':event_description', $event_description);
        $statement->bindValue(':date', $date);
        $statement->bindValue(':hash_value', $rand_hashed_string);
        $statement->bindValue(':username', $username);
                
        $statement->execute();
        $statement->closeCursor();

        header('Location: meeting.php?' . $username . "&" . $rand_hashed_string);

    }
}

// splits dates into various SESSION variables to use on other pages, my user-defined-function
function date_split_formatter($arr){
    // using php explode to split data (built-in function)
    list($date1_full, $date2_full) = explode('-', $_SESSION['datefilter']);
    list($date1_month, $date1_day, $date1_year) = explode('/', $date1_full);
    list($date2_month, $date2_day, $date2_year) = explode('/', $date2_full);
    // setting various session variables
    $_SESSION['$date1_full'] = $date1_full;
    $_SESSION['$date2_full'] = $date2_full;
    $_SESSION['$date1_month'] = $date1_month;
    $_SESSION['$date1_day'] = $date1_day;
    $_SESSION['$date1_year'] = $date1_year;
    $_SESSION['$date2_month'] = $date2_month;
    $_SESSION['$date2_day'] = $date2_day;
    $_SESSION['$date2_year'] = $date2_year;
}
?>