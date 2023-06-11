<?php
require "condb.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>them sua xoa</title>
</head>
<body>
    <table border="1" align = "center" > 
        <tr>
            <th>Magv</th>
            <th>Hoten</th>
            <th>Dienthoai</th>
            <th>
                <a href="them.php"> Them </a></th>
        </tr>
        <?php 
            $sql = "SELECT*FROM giangvien";
            $qr = mysqli_query($con,$sql);
            while($rows = mysqli_fetch_array($qr)){
        ?>
        <tr>
            <td><?php echo $rows["Magv"]; ?></td>
            <td><?php echo $rows["Hoten"]; ?></td>
            <td><?php echo $rows["Dienthoai"]; ?></td>
            <td><a href="sua.php?id=<?php echo $rows['Magv']; ?>"> Sua</a> |<a href="xoa.php?id=<?php echo $rows['Magv']; ?>"> Xoa</a></td>
        </tr>
        <?php } ?>

    </table>
    
</body>
</html>