<?php
require "condb.php";
?>
<?php
if(isset($_GET["id"])){
    echo $id = $_GET["id"];
}
?>

<?php
 $sql = "DELETE FROM giangvien WHERE Magv=$id";
 $qr = mysqli_query($con,$sql);
 header("location: index.php")

?>