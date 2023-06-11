<?php
// Xóa Cookie
  setcookie("username", "", time()-20);
  setcookie("password", "", time()-20);
  
?>
<p><a href="login.php"> Go to Login Page </a> </p>