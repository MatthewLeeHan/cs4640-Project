<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ScheduleMe Dashboard</title>
    <link rel="stylesheet" href="./css/dashboard.css"/>
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<body>
	<div class="containerHeader">
		<header>
			<div class="logo">
				<h1><a href = "index.html"> ScheduleMe </a></h1>
            </div> 
            <div class="btnHolder">
                <a href = "./php/logout.php"><button>Log out</button></a>
                <a href="./account-settings.html"><button><i class="fas fa-cog"></i></button></a>
			</div>
        </header>
    </div>

    <div id="pageContent">
        <div class="left container">
            <h2>Past Events</h2>
            <!-- past events from database can dynamically load in here -->
        </div>
        <div class="right container">
            <h2>Upcoming Events</h2>

            <!-- upcoming/current events can dynamically load in here -->

            <!-- press this button to create a new event! -->
            <div class="createEventBtn">
                <button onclick="location.href='./createEvent.php'">
                    <h2>Create New Event</h2>
                </button>
            </div>
<!-- 
            <div class="changePasswordBtn">
                <button onclick="location.href='./account-settings.html'">
                    <h2>Change your password</h2>
                </button>
            </div> -->
        </div>
    </div>
</body>
</html>