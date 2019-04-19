<?php
session_start();
?>
<!-- 
    Username
    Name
    Password
    Email
 -->


<!-- Jiwon Cha (jc4va) -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ScheduleMe : Meeting</title>
    <link rel="stylesheet" href="./css/meeting.css" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu|Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
</head>

<body onload='showInput()'>
    <header>
        <div class="logo">
            <h1><a href="index.php"> ScheduleMe </a></h1>
        </div>
    </header>
    <div class='container'>
        <div class='left-side card'>
            <div class="instruction">
                <h2>Select your availability below!</h2>
            </div>
            <p><span id='display'></span></p>
            <table id='myTable'></table>
        </div>
        <div class="right-side card">
            <div class="event_details">
                <h1>Event title: <?php echo $_SESSION['event_title'] ?></h1>
                <div class="event_desc">
                    <br>
                    <span class='block-title'>Notes from the event creator:</span>
                    <p><?php echo $_SESSION['event_desc'] ?></p>
                </div>
                <h1> <span class='block-title'>Members:</span> </h1>
                <br>
                <div class="createEventBtn">
                    <h2>Member sign up </h2>
                    <form name="signupform">
                        <div class="nameinput">
                            <p> Enter your name: </p>
                            <input type="text" id="name" name="name" placeholder="Name"> <br>
                            <div id="name_error"></div>
                        </div>
                        <div class="submitbtn">
                            <input type="submit" id="submit" name="submit" value="Sign Up">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- To read data from session variables -->
    <input id='row' value='<?php echo $_SESSION['$date1_day']; ?>' />
    <input id='col' value='<?php echo $_SESSION['$date2_day']; ?>' />
    <input type="hidden" id='month1' value='<?php echo $_SESSION['$date1_month']; ?>' />
    <input type="hidden" id='month2' value='<?php echo $_SESSION['$date2_month']; ?>' />
    <input type="hidden" id='year1' value='<?php echo $_SESSION['$date1_year']; ?>' />
    <input type="hidden" id='year2' value='<?php echo $_SESSION['$date2_year']; ?>' />
    <input type="hidden" id='full_date1' value='<?php echo $_SESSION['$date1_full']; ?>' />
    <input type="hidden" id='full_date2' value='<?php echo $_SESSION['$date2_full']; ?>' />

    <!-- This will pass the number of dates (number of columns in the table) to javascript as a hidden value -->
    <input type="hidden" id="diff" name="diff"
        value='<?php echo $_SESSION['$date2_day'] - $_SESSION['$date1_day'] + 1; ?>' />

    <!-- 
    <input type="submit" onclick="showInput()"><br />
    <label>Your input: </label> -->
    <script type="text/javascript" src="./js/meeting.js"></script>

</body>

</html>