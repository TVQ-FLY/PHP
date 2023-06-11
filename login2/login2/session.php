<p>
    Username: 
<?php
    session_start();

    echo $_SESSION["username"];
    echo "<br>";
 ?>
    Password:
<?php 
    echo $_SESSION["password"];
?>
 </p>
<br>
 <a href="welcome.php">back</a>
