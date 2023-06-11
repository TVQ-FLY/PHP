<?php

if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
	echo "Cookies Set Successfuly";
	
} 
else {
	setcookie("username","");
	setcookie("password","");
	echo "Cookies Not Set";
}

?>

<p><a href="login.php"> Go to Login Page </a> </p>
<p><a href="cookie.php"> Go to Cookie Page </a> </p>
<p><a href="ClearCookie.php"> Go to ClearCookie Page </a> </p>
