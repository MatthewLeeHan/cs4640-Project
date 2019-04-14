<?php
$title_error_msg = '';
$date_error_msg = '';
$details_error_msg = '';

$date = NULL;


if($_SERVER['REQUEST_METHOD'] == "POST"){
    // Input-validation on server side
    // if($_POST['event_title'] == '' || $_POST['datefilter'] == '' || $_POST['event_desc'] == ''){
    if(empty($_POST['event_title'])){
        $title_error_msg = 'Please enter an event title';
    }
    if($_POST['datefilter'] == 'Click to select dates'){
        $date_error_msg = 'Please select a date range';
    }
    if(empty($_POST['event_desc'])){
        $details_error_msg = 'Please enter some details about your meeting';
    }
    else{
        foreach ($_POST as $key => $val){
            // data is an array... i think
            $data[$key] = $val;
            $_SESSION[$key] = $val;
        }
        date_split_formatter($data);
        header('Location: meeting.php');
    }
}

// splits dates into various SESSION variables to use on other pages
function date_split_formatter($arr){
    // using php explode to split data
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