<?php
	session_start();
	$uname = "dbtrain_1036";
	$pass = "xotlno";
	$host = "dbtrain.im.uu.se";
	$dbname = "dbtrain_1036";
	
	$connection =  new mysqli($host, $uname, $pass, $dbname);
	//mysqli_set_charset($connection,"utf8"); Ska jag ha med detta?
	
	if($connection -> connect_error)
	{
		die("Connection failed: ".$connection.connect_error);
	}

	$email = mysqli_real_escape_string($connection, $_POST["email"]);
	$password = mysqli_real_escape_string($connection, $_POST["password"]);
	
	$query = "SELECT password, salt FROM User WHERE uemail = '$email'";
	$result = $connection->query($query);
	
	if($result->num_rows == 1) {
		$row = $result->fetch_assoc();
		$savedSalt = $row["salt"];
		$savedPassword = $row["password"];
	}
	
	$cryptedPassword = crypt($password, $savedSalt);
	
	if($cryptedPassword === $savedPassword){
		echo "<br> successful login";
		//$_SESSION['login_user']=$email;
		header("Refresh: 0; URL=nowLoggedIn.php");
	}
	else{
		echo "<br> login failed";
		header("Refresh: 0; URL=failedLogin.php");
	}
?>