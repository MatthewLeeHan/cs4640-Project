<?php
session_start();
include('./php/createEventLogic.php');
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
            <form name="createEvent-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="createEventForm" method="POST">
                <div class="title-holder">
                    <div class="title_box">
                        <input type="text" id = "event_title" name="event_title" placeholder="Type your event title here..." value='<?php echo $inputted_title ?>'>
                        <div class='error'><p><?php echo $title_error_msg ?></p></div>
                    </div>
                </div>
                <div class='details-holder'>
                    <div class="box left">
                        <h1 id="start"> Enter the Start Date and the End Date </h1>
                        <div class="caldiv">
                            <input id="calendar" type="text" name="datefilter" autocomplete="off" placeholder='Click to select dates' value="<?php echo $inputted_date ?>"/>
                            <div class='error'><p><?php echo $date_error_msg ?></p></div>
                        </div>
                    </div>

                    <div class="box right">
                        <h1 id="description"> Enter the Details About this Event </h1>
                        <div class='error'><p><?php echo $details_error_msg ?></p></div>
                        <div class = "textbox">
                            <textarea rows="30" id="event_desc" cols="60" id="event_desc" name="event_desc" placeholder="Please Type the Event Details" value='<?php echo $inputted_desc ?>'></textarea>
                        </div>
                    </div>
                </div>

                <div class="btnHolder">
                    <button type="submit" class="create">Create Event</button>
                </div>  
            </form>
        </div>
    </div>
    <input type="hidden" id='inputted_event_desc' value='<?php echo $inputted_desc; ?>'/>
</body>
<script>
document.getElementById("event_desc").value = document.getElementById("inputted_event_desc").value;

</script>
</html>



<!-- <?php include('./php/createEvent-handler.php'); ?> -->
