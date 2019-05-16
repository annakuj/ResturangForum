<?php
	$firstnamelastname = "Lisalina Malmgren";
	$uname = "dbtrain_1036";
	$pass = "xotlno";
	$host = "dbtrain.im.uu.se";
	$dbname = "dbtrain_1036";
	
	$connection =  new mysqli($host, $uname, $pass, $dbname);
	
	if($connection -> connect_error)
	{
		die("Connection failed: ".$connection.connect_error);
	}

	$query = "SELECT * FROM Story";
	$result = $connection -> query($query);
?>
<!DOCTYPE html>
	<html>
		<head>
			<title> Hiking</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="assets/css/indexPage.css">
			<script src = "assets/js/javaScript.js"></script>
		</head>
		<body>
			<div id = header>
				<div id = frontText>
				<h1>Welcome to the page for hikers!</h1>
				<h2>This is the page for you who would like to share and read Tips & Tricks about hiking</h2>
				</div>	
			</div>
			<div id="menu">
				<b>Menu</b>
					<ul>
						<li><a class="active" href = "index.php">Home</a></li>
						<li><a href = "postTip.php">Post a Tip</a></li>
						<li><a href="tips.php">Tips & Tricks from users</a></li>
						<li><a href="registration.php">Register here</a></li>
						<li><a href="login.php">Login here</a></li>
					</ul>
					<br><button type = "button" onClick = "processes/logoutProcess.php"> LogOut</button>
			</div>
			<div id = content>
				<div class = align>
					<h3>4 essential tips for beginners:</h3>
					<h4>1. Start small and choose the right trail for your fitness level!</h4>
					<p> Select a hike a little shorter than the distance you can normally walk on a level or paved surface. To estimate the time required to hike the trail, figure a pace of roughly 2-miles per hour. Next, review the elevation changes and add an hour to your estimated hiking time for every 1000 feet of gain. After you’ve been out once or twice, you’ll have a sense for what distance and elevation changes work well for you.</p>
					<img id = img2 src= "assets/img/resting.jpg" alt = "Resting"> </img>
					
					<h4><br>2. Check the weather!</h4>
					<p>Leading up to your hike, and again a few hours before, check the weather. This will give you valuable information on how to dress and what to pack. If the weather is forecast to be awful, it will give you the chance to change plans instead of getting surprised on the trail.</p>
					<img id = img2 src= "assets/img/weather.jpg" alt = "Weather"> </img>
					
					<h4><br>3. Wear the right shoes and socks!</h4>
					<p>Painful feet can ruin a hike. Invest in quality hiking shoes and socks. This doesn’t mean heavy leather boots, there are a lot of “light hikers” available that require little break-in. Wool or synthetic socks are the way to go, try to avoid sock made from cotton. It is smart to also pack blister dressings just in case.</p>
					<img src= "assets/img/boots.jpg" alt = "Hiking boots"> </img>
					
					<h4><br>4. Tell someone where you are heading!</h4>
					<p>It’s important that someone not on the hike knows the hiking route and what time to worry and call for help. However, the “worrying time” may be several hours later than your planned finish to allow for slow hiking, amazing views, or perhaps a sore ankle causing a delay.</p>
					<img src= "assets/img/map.jpg" alt = "Map"> </img>
				</div>
			</div>
			<footer>
				<p id =p-footer> Copyright @ Lisalina Gideskog Malmgren. All rights reserved.</p>
			</footer>
		</body>
	</html>