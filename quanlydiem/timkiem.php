<?php
require "condb.php";
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
        <input type="text" name="noidung" id="">
        <button type="text" name="search">Tim kiem</button>
    </form>
    <?php 
        if(isset($_POST['search'])){
            $s = $_POST["noidung"];
            if($s == ""){   
                echo "Nhap vao thanh tim kiem !";
            }else{
                $sql = "SELECT *FROM `sinhvien` WHERE `Hoten` LIKE '%".$s."%'";
                $qr = mysqli_query($con, $sql);
                while ($rows = mysqli_fetch_array($qr)) {
                echo $rows["Hoten"];
                echo "</br>";
                echo $rows["Ngaysinh"];
                echo "</br>";
            }
            }
        }
    ?>  
    
</body>
</html>
    