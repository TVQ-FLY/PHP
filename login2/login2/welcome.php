<?php
session_start();


	if(!empty($_POST["remember"])) {
		$_SESSION ['username']= $_POST["username"];
		$_SESSION ["password"] = $_POST["password"];
		echo "Session Set Successfuly";
		
	} 
	else {
		$_SESSION['username'] ="";
		$_SESSION["password"] = "";
		echo "Session Not Set";
	}

?>

<p><a href="login2.php"> Go to Login2 Page </a> </p>
<p><a href="session.php"> Go to Session Page </a> </p>
<p><a href="ClearSession.php"> Go to ClearSession Page </a> </p>