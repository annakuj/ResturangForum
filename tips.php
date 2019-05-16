<!DOCTYPE html>
	<html>
		<head>
			<title> Tips & Tricks </title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="assets/css/tipPage.css">
		</head>
		<body>
			<div id = header></div>
			<div id="menu">
				<b>Menu</b>
					<ul>
						<li><a href = "index.php">Home</a></li>
						<li><a href = "postTip.php">Post a Tip</a></li>
						<li><a class="active" href="tips.php">Tips & Tricks from users</a></li>
						<li><a href="registration.php">Register here</a></li>
						<li><a href="login.php">Login here</a></li>
					</ul>
					<br><button type = "button" onClick = "processes/logoutProcess.php"> LogOut</button>
			</div>
			<div id = content>
			<?php
				$uname = "dbtrain_1036";
				$pass = "xotlno";
				$host = "dbtrain.im.uu.se";
				$dbname = "dbtrain_1036";
	
				$connection =  new mysqli($host, $uname, $pass, $dbname);
	
				if($connection -> connect_error)
				{
					die("Connection failed: ".$connection.connect_error);
				}
				
				echo "<div id = rubrik> Tips & Tricks </div>";

				$sql = "SELECT name, story FROM Story";
				$result = $connection->query($sql);

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) { ?>
						<p id = fromDatabase> <?php echo "<h3>Name: ". $row["name"]. " </h3><h3> Tip: </h3>". $row["story"]. "<br>"; ?> </p>
					<?php }
				}
				$connection->close();
			?> 
			</div>
			</content>
			<footer>
				<p id = p-footer> Copyright @ Lisalina Gideskog Malmgren. All rights reserved.</p>
			</footer>
		</body>
	</html>