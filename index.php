 <!-- Matthew Han (mlh6fc) -->

 <!-- 

	Special helpers: Jane Kim 
	Jane helped us with server side validation (php) - translating the logic from javascript to php



	Matthew: 
	- DOM
	- Error messages
	- Responsiveness
	Jiwon: 
	- Cookie
	- GET requests

	- Select values 
  -->

<!-- *** TO START SCSS -> CSS WATCHING -->
<!-- $ sass --watch scss:css
 -->
<!-- *** TO START XAMPP - LINUX UBUNTU MINT *** -->
 <!-- cd /opt/lampp

sudo ./manager-linux.run (or manager-linux-x64.run) -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Matthew Han (mlh6fc) and Jiwon Cha (jc4va)">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ScheduleMe</title>
	<link rel="stylesheet" href="./css/homePage.css"/>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<body>
	<div class="spinnerHolder" id="spinnerHolder">
		<div id="loadingSpinner"></div>
	</div>
	<div id="pageContent">
		<div class="containerHeader">
			<header>
				<div class="logo">
					<h1><a href = "index.php"> ScheduleMe </a></h1>
				</div> 
				<div class="btnHolder">
					<?php 
					if(isset($_COOKIE['user'])) {
						echo '<a><form class="logoutform" action="./php/logout.php" method="GET">
						<button class="logout_btn">Log Out</button>
						</form></a>';
					}
						else{
							echo '<a href = "./logIn.php"><button>Log In</button></a>';
						}
						
					?>
					<a href = "./signup.html"><button>Sign Up</button></a>
					<a href = "./dashboard.php"><button>Dashboard</button></a>
					<a><button onclick='function redirect(){window.location.href = "http://localhost:4200";}; redirect()'>Help</button></a>
				</div>
			</header>
		</div>
		<div class="container">
			<h1 class="heroText">Scheduling meetings has never been easier.</h1>
			<div class="threeFeaturesContainer">
				<div class="feature feature-1">
					<i class="calendar-icon far fa-calendar-alt"></i>
					<div class="feature-text">
						<h2>Coordinate schedules</h2>
						<p>Find the best meeting time among all of your members' schedules.</p>
					</div>
				</div>
				<div class="feature feature-2">
					<i class="brain-icon fas fa-brain"></i>
					<div class="feature-text">
						<h2>Optimize your meetings</h2>
						<p>Our system automatically suggests the most optimal meeting time based on everyone's availability.</p>
					</div>
				</div>
				<div class="feature feature-3">
					<i class="fas fa-bell"></i>
					<div class="feature-text">
						<h2>Automatic reminders</h2>
						<p>Real-time notifications to ensure no one is out of the loop.</p>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="footerContainer">
				<div class="authors">
					<p>Made by Jiwon Cha and Matthew Han</p>
					<p>Web PL Project Spring 2019</p>
				</div>
				<div class="footer-links">
					<a href="./help.php">Help</a>
				</div>
			</div>
		</footer>
</div>
<script type="text/javascript" src="./js/mainPage.js"></script>

</body>
</html>