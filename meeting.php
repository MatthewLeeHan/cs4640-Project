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
</head>

<body onload='showInput()'>
    <header>
        <div class="logo">
            <h1><a href="index.html"> ScheduleMe </a></h1>
        </div>
    </header>
    <div class='container'>
        <div class='left-side card'>
            <p><span id='display'></span></p>
            <table id='myTable'></table>
        </div>
    </div>

    <!-- To read data from session variables -->
    <input id='row' value='<?php echo $_SESSION['$date1_day']; ?>'/>
    <input id='col' value='<?php echo $_SESSION['$date2_day']; ?>'/>

    <!-- This will pass the number of dates (number of columns in the table) to javascript as a hidden value -->
    <input type="hidden" id="diff" name="diff" value='<?php echo $_SESSION['$date2_day'] - $_SESSION['$date1_day'] + 1; ?>'/>

<!-- 
    <input type="submit" onclick="showInput()"><br />
    <label>Your input: </label> -->
    <script type="text/javascript" src="./js/meeting.js"></script>

</body>

</html>