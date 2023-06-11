<?php
require "condb.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP Thêm Sửa Xóa</title>
</head>

<body>
    <div class="container mt-3">
        <h2>Danh Sách Giảng Viên</h2>
        <table class="table table-striped">
            <tr>
                <th>Mã GV</th>
                <th>Họ Tên</th>
                <th>Điện Thoại</th>
                <th>
                    <a href="them.php"> Thêm </a>
                </th>
            </tr>
            <?php
                $sql = "SELECT * FROM giangvien";
                $qr = mysqli_query($con, $sql);
                while($rows = mysqli_fetch_array($qr)){
            ?>
            <tr>
                <td>
                    <?php echo $rows["Magv"];?>
                </td>
                <td>
                    <?php echo $rows["Hoten"];?>
                </td>
                <td>
                    <?php echo $rows["Dienthoai"];?>
                </td>
                <td>
                    <a href="sua.php?id=<?php echo $rows['Magv'];?>">Sửa</a>|
                    <a href="xoa.php?id=<?php echo $rows['Magv'];?>">Xóa</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

</html>