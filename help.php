<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Matthew Han (mlh6fc) and Jiwon Cha (jc4va)">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Help (FAQ)</title>
    <link rel="stylesheet" href="./css/help.css"/>
</head>
<body>
    <div class="containerHeader">
		<header>
			<div class="logo">
				<h1><a href = "index.php"> ScheduleMe </a></h1>
            </div> 
        </header>
    </div>
    <div id="pageContent">
        <div class='container'>
                <form name="helpform" action="./help2.php" method="GET">
                    <div class = "nameinput">
                        <input type="text" id="uname" name="uname" placeholder="What's your name?" value=""> 
                            <br>
                        <div id="user_id_error"></div>
                    </div>
                        <div class = "submitbtn">
                            <input type="submit" id="submit" name="submit" value="Get help">
                        <div id="id_error"></div>
                    </div>
                </form>
        </div>
    </div>
</body>
</html>