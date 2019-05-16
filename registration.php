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
			<title> Register </title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="assets/css/registrationPage.css">
			<script src = "assets/js/registration.js"></script>
		</head>
		<body>
			<div id = header></div>
			<div id="menu">
				<b>Menu</b>
					<ul>
						<li><a href = "index.php">Home</a></li>
						<li><a href = "postTip.php">Post a Tip</a></li>
						<li><a href="tips.php">Tips & Tricks from users</a></li>
						<li><a class="active" href="registration.php">Register here</a></li>
						<li><a href="login.php">Login here</a></li>
					</ul>
					<br><button type = "button" onClick = "processes/logoutProcess.php"> LogOut</button>
			</div>
			<div id = content>
				<div class = align>
					<h3>Register here!</h3>
					<p> Fill in your email-address and your password.</p>
				</div>
				<form name = "inputForm" class= align action="processes/insertUser.php" onsubmit = "return validateForm()" method = "post">
					<br><label for="email">Email-address</label>
					<br><input type="text" id="email" name="email" placeholder="ex. lisa@gmail.com">
					<br><label for="fname">Password</label>
					<br><input type="text" id="password" name="password" placeholder="ex. xtlno">
					<br><input type="submit" value="Register!">
				</form>
			</div>
			<footer>
				<p id =p-footer> Copyright @ Lisalina Gideskog Malmgren. All rights reserved.</p>
			</footer>
		</body>
	</html>