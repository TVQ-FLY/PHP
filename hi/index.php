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
    <style>
        body{
            background-color: yellow;
            color: black;
            font-weight: 700;
        }
        table{
            color: red;
            border: 3px solid red;
            min-width: 1500px;
            border-collapse: collapse;
        }
        tr{
            text-align: center;
        }

    </style>

</head>
<body>
    <table border="1px">
        <tr>
            <th>Ma sv</th>
            <th>Ho ten</th>
            <th>Ngay sinh</th>
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
                <?php echo $rows["Masv"]?>
            </td>
            <td>
                <?php echo $rows["Hoten"]?>
            </td>
            <td>
                <?php echo $rows["Ngaysinh"]?>
            </td>
            <td>
                <a href="sua.php?id=<?php echo $rows['Masv']?>">Sua</a>|
                <a href="xoa.php?id=<?php echo $rows['Masv']?>">Xoa</a>
            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>
