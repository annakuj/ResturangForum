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
			<title> Post a Tip </title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="assets/css/postPage.css">
			<script src = "assets/js/javaScript.js"></script>
		</head>
		<body>
			<div id = header></div>
			<div id="menu">
				<b>Menu</b>
					<ul>
						<li><a href = "index.php">Home</a></li>
						<li><a class="active" href = "postTip.php">Post a Tip</a></li>
						<li><a href="tips.php">Tips & Tricks from users</a></li>
						<li><a href="registration.php">Register here</a></li>
						<li><a href="login.php">Login here</a></li>
					</ul>
					<br><button type = "button" onClick = "processes/logoutProcess.php"> LogOut</button>
			</div>
			<div id = content>
				<div class = align>
					<h3>Write your tip or trick for having a nice hiking experience!</h3>
					<p> Fill in your full name, email-address and the write your hiking tip. Once you click on the submit-button your tip will 
						be posted and shared with other hikers.</p>
				</div>
				<form name = "inputForm" action="processes/insertComment.php" onsubmit = "return validateForm()" method = "post">
					<label for="fname">Full Name</label>
					<input type="text" id="fname" name="fullname" placeholder="ex. Lisa Gideskog">
					<label for="email">Email-address</label>
					<input type="text" id="email" name="email" placeholder="ex. lisa@gmail.com">
					<label for="comment">Story</label>
					<textarea id="comment" name="comment" placeholder="Write your tip here.. (max 200 characters)" style="height:150px"></textarea>
					<input type="submit" value="Submit">
				</form>
			</div>
			<footer>
				<p id =p-footer> Copyright @ Lisalina Gideskog Malmgren. All rights reserved.</p>
			</footer>
		</body>
	</html>