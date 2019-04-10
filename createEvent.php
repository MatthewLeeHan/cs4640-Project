<?php
session_start();
?>

<!-- Jiwon Cha (jc4va) & Matthew Han (mlh6fc) -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ScheduleMe</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu|Varela+Round" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="./css/createEvent.css" />
    <script type="text/javascript" src="./js/createEvent.js"></script>
</head>

<body>

    <header>
    <div class="logo">
			<h1><a href="index.html"> ScheduleMe </a></h1>
	</div>
    </header>

    <div class="wrap">

        <div class="container">
            <!-- <form action="./php/createEvent-handler.php" class="createEventForm" method="POST"> -->
            <form action="createEvent.php" class="createEventForm" method="POST">
                <div class="title-holder">
                    <div class="title_box">
                        <input type="text" id = "event_title" name="event_title" placeholder="Type your event title here...">
                    </div>
                </div>
                <div class='details-holder'>
                    <div class="box left">
                        <h1 id="start"> Enter the Start Date and the End Date </h1>
                        <div class="caldiv">
                            <input id="calendar" type="text" name="datefilter" autocomplete="off" value="Click to select dates"/>
                        </div>
                    </div>

                    <div class="box right">
                        <h1 id="description"> Enter the Details About this Event </h1>
                        <div class = "textbox">
                            <textarea rows="30" id="event_desc" cols="60" id="event_desc" name="event_desc" placeholder="Please Type the Event Details"></textarea>
                        </div>
                    </div>
                </div>


                <div class="btnHolder">
                    <button type="submit" class="create">Create Event</button>
                </div>  
            </form>
        </div>
    </div>
    
</body>

</html>

<?php
$date = NULL;


if($_SERVER['REQUEST_METHOD'] == "POST"){
    if($_POST['event_title'] == '' || $_POST['datefilter'] == '' || $_POST['event_desc'] == ''){
        echo 'please enter all fields';
    }
    foreach ($_POST as $key => $val){
        $data[$key] = $val;
        $_SESSION[$key] = $val;
    }
    print_array($data);
    header('Location: meeting.php');
}

// print out values from session storage
function print_array($arr){
    // while($curr = each($arr)):
    //     $k = $curr["key"];
    //     $v = $curr['value'];
    //     echo "[$k => $v ] <br/>";
    // endwhile;
    echo $_SESSION['event_title'] . '</br>';
    echo $_SESSION['datefilter'] . '</br>';
    echo $_SESSION['event_desc'] . '</br>';
    list($date1_full, $date2_full) = explode('-', $_SESSION['datefilter']);
    echo $date1_full . ' ' . $date2_full . '</br>';
    list($date1_month, $date1_day, $date1_year) = explode('/', $date1_full);
    list($date2_month, $date2_day, $date2_year) = explode('/', $date2_full);
    echo $date1_month . ' ' . $date2_month . '</br>';
    $_SESSION['$date1_month'] = $date1_month;
    $_SESSION['$date1_day'] = $date1_day;
    $_SESSION['$date1_year'] = $date1_year;
    $_SESSION['$date2_month'] = $date2_month;
    $_SESSION['$date2_day'] = $date2_day;
    $_SESSION['$date2_year'] = $date2_year;


}
?>

<!-- <?php include('./php/createEvent-handler.php'); ?> -->
