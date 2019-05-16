<?php
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
	else{
	echo "Connection worked.";
	}

	$name = mysqli_real_escape_string($connection, $_POST["fullname"]);
	$email = mysqli_real_escape_string($connection, $_POST["email"]);
	$story = mysqli_real_escape_string($connection, $_POST["comment"]);
	
	if(empty(trim($name)) !== true && empty(trim($email)) !== true && empty(trim($story)) !== true){//checks so the strings are not empty
		if(strpos($email, '@') !== false){
		$query = "INSERT INTO Story (name, email, story) VALUES('$name', '$email', '$story')";
		}
	}
	$connection -> query($query); //Varför detta??? storyid ligger även fortfarande på plats 10
	
	echo "<br/>";
	echo $query;
	
	header("Refresh: 0; URL=../tips.php");
?>