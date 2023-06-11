<?php 
    require "condb.php";
?>
<?php 
    if(isset($_POST["them"])){
        $magv = $_POST["Magv"];
        $hoten = $_POST["Hoten"];
        $dienthoai = $_POST["Dienthoai"];
        // Validation
        if($magv ==""){echo "Vui long nhap Magv! <br />";}
        if($hoten ==""){echo "Vui long nhap Hoten! <br />";}
        if($dienthoai ==""){echo "Vui long nhap Dienthoai! <br />";}
        // Chuc nang Them
        if($magv != "" && $hoten != "" && $dienthoai != ""){
            $sql = "INSERT INTO Giangvien(Magv, Hoten, Dienthoai) VALUES ('$magv','$hoten','$dienthoai')";
            $qr = mysqli_query($con,$sql);
            header("location: index.php");
        }
    }
?>
<form method="POST" action="">
    <label >Magv</label><input type="text" name="Magv"><br></br>
    <label >Hoten</label><input type="text" name="Hoten"><br></br>
    <label >Dienthoai</label><input type="text" name="Dienthoai"><br></br>
    <input type="submit" name="them" value="Them">
</form>