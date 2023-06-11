<?php
require "condb.php";
?>

<?php
if(isset($_GET["id"])){
    echo $id = $_GET["id"];
}
?>

<?php 
    if(isset($_POST["sua"])){
        $magv = $_POST["Magv"];
        $hoten = $_POST["Hoten"];
        $dienthoai = $_POST["Dienthoai"];
        // Validation
        if($magv ==""){echo "Vui long nhap Magv! <br />";}
        if($hoten ==""){echo "Vui long nhap Hoten! <br />";}
        if($dienthoai ==""){echo "Vui long nhap Dienthoai! <br />";}
        // Chuc nang Them
        if($magv != "" && $hoten != "" && $dienthoai != ""){
            $sql = "UPDATE giangvien SET Magv = '$magv', Hoten = '$hoten', Dienthoai= '$dienthoai' WHERE Magv=$id";
            $qr = mysqli_query($con,$sql);
            header("location: index.php");
        }
    }
?>


    <?php 
        $sql = "SELECT*FROM giangvien WHERE Magv = $id";
        $qr = mysqli_query($con,$sql);
        $rows = mysqli_fetch_array($qr);
    ?>
<form method="POST" action="">
    <label >Magv</label><input type="text" name="Magv" value="<?php echo $rows['Magv']; ?>"><br></br>
    <label >Hoten</label><input type="text" name="Hoten" value="<?php echo $rows['Hoten']; ?>"><br></br>
    <label >Dienthoai</label><input type="text" name="Dienthoai" value="<?php echo $rows['Dienthoai']; ?>"><br></br>
    <input type="submit" name="sua" value="Sua">
</form>