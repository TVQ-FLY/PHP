<?php
require "condb.php";
?>

<?php 
if(isset($_GET['id'])){
    $id = $_GET["id"];

    $sql = "DELETE FROM sinhvien WHERE Masv = $id";
    $qr = mysqli_query($con, $sql);
    header("location: index.php");
}
?>