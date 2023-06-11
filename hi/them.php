<?php
require "condb.php";
?>

<?php
if(isset($_POST['them'])){
    $masv = $_POST["Masv"];
    $hoten = $_POST["Hoten"];
    $ngaysinh = $_POST["Ngaysinh"];

    if($masv != "" && $hoten != "" && $ngaysinh != ""){
        $sql = "INSERT INTO sinhvien(Masv, Hoten, Ngaysinh) VALUES('$masv','$hoten','$ngaysinh')";
        $qr = mysqli_query($con, $qr);
        header("location: index.php");
    }
}
?>

<form method="POST">
    <div class="one">
        <label for="" class="text">Ma sv</label>
        <input type="text" name="Masv" class="in">
    </div>
</br>
<div class="one">
    <label for="" class="text">Ho ten</label>
    <input type="text" name="Hoten" class="in">
</div>
</br>
    <div class="one">
        <label for="" class="text">Ngay sinh</label>
        <input type="text" name="Ngaysinh" class="in">
    </div>
    <button name="them">Them</button>
</form>