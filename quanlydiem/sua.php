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
    $masv = $_POST["Masv"];
    $hoten = $_POST["Hoten"];
    $ngaysinh = $_POST["Ngaysinh"];

    if($masv != "" && $hoten != "" && $ngaysinh != ""){
        $sql = "UPDATE sinhvien SET Masv = '$masv', Hoten = '$hoten', Ngaysinh = '$ngaysinh' WHERE Masv = $id";
        $qr = mysqli_query($con, $sql);
        header("location: index.php");
    }
}
?>

<?php
$sql = "SELECT* FROM sinhvien WHERE Masv = $id";
$qr = mysqli_query($con, $sql);
$rows = mysqli_fetch_array($qr);
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
            <input type="text" name="Masv" value="<?php echo $rows["Masv"] ?>">
        </div>
        <div>
            <label for="text">Ho ten</label>
            <input type="text" name="Hoten" value="<?php echo $rows["Hoten"] ?>">
        </div>
        <div>
            <label for="text">Ngay sinh</label>
            <input type="text" name="Ngaysinh" value="<?php echo $rows["Ngaysinh"] ?>">
        </div>
        <button type="submit" name="sua">Sua</button>
    </form>
</body>
</html>