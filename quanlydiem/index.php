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
    <table border="1px">
        <tr>
            <th>Ma SV</th>
            <th>Ho Ten</th>
            <th>Ngay Sinh</th>
            <th>
                <a href="them.php">Them</a>
            </th>
        </tr>
        <?php
        $sql = "SELECT * FROM sinhvien";
        $qr = mysqli_query($con, $sql);
        while($rows = mysqli_fetch_array($qr)){
        ?>
        <tr>
            <td>
                <?php echo $rows["Masv"]; ?>
            </td>
            <td>
                <?php echo $rows["Hoten"]; ?>
            </td>
            <td>
                <?php echo $rows["Ngaysinh"]; ?>
            </td>
            <td>
                <a href="sua.php?id=<?php echo $rows['Masv']; ?>">Sua</a>|
                <a href="xoa.php?id=<?php echo $rows['Masv']; ?>">Xoa</a>
            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>