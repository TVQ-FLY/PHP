<?php
session_start();
?>


<form action="welcome.php" method="post" style="text-align:center; width: 400px;">
	<p>
		Username: <input name="username" type="text" value="<?php if(isset($_SESSION["username"])) { echo $_SESSION["username"]; } ?>">
	</p>
	<p>Password: <input name="password" type="password" value="<?php if(isset($_SESSION["password"])) { echo $_SESSION["password"]; } ?>">
	</p>
	<p><input type="checkbox" name="remember" /> Remember me
	</p>
	<p><input type="submit" value="Login"></span></p>       
</form>