<?php
require "condb.php";
?>

<?php 
if(isset($_POST["them"])){
    $masv = $_POST["Masv"];
    $hoten = $_POST["Hoten"];
    $ngaysinh = $_POST["Ngaysinh"];

    if($masv != "" && $hoten != "" && $ngaysinh != ""){
        $sql = "INSERT INTO sinhvien(Masv, Hoten, Ngaysinh) VALUES ('$masv','$hoten','$ngaysinh')";
        $qr = mysqli_query($con, $sql);
        header("location: index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <div>
            <label for="text">Ma sv</label>
            <input type="text" name="Masv">
        </div>
        <div>
            <label for="text">Ho ten</label>
            <input type="text" name="Hoten">
        </div>
        <div>
            <label for="text">Ngay sinh</label>
            <input type="text" name="Ngaysinh">
        </div>
        <button type="submit" name="them">Them</button>
    </form>
</body>
</html>