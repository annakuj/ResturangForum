<!DOCTYPE html>
	<html>
		<head>
			<title> Logged In </title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="../assets/css/loginPage.css">
			<script src = "assets/js/javaScript.js"></script>
		</head>
		<body>
			<div id = header></div>
			<div id="menu">
				<b>Menu</b>
					<ul>
						<li><a href = "../index.php">Home</a></li>
						<li><a href = "../postTip.php">Post a Tip</a></li>
						<li><a href="../tips.php">Tips & Tricks from users</a></li>
						<li><a href="../registration.php">Register here</a></li>
						<li><a href="../login.php">Login here</a></li>
					</ul>
					<br><button type = "button" onClick = "processes/logoutProcess.php"> LogOut</button>
			</div>
			<div id = content>
				<div class = align>
					<h3>Your login failed!</h3>
					<p> Try another email or password!</p>
				</div>
			</div>
			<footer>
				<p id =p-footer> Copyright @ Lisalina Gideskog Malmgren. All rights reserved.</p>
			</footer>
		</body>
	</html>