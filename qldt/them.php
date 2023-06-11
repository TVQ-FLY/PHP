<?php 
    require "condb.php";
?>
<?php 
    if(isset($_POST["them"])){
        $magv = $_POST["Magv"];
        $hoten = $_POST["Hoten"];
        $dienthoai = $_POST["Dienthoai"];
        // Chuc nang Them
        if($magv != "" && $hoten != "" && $dienthoai != ""){
            $sql = "INSERT INTO Giangvien(Magv, Hoten, Dienthoai) VALUES('$magv','$hoten','$dienthoai')";
            $qr = mysqli_query($con,$sql);
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Thêm Giảng Viên</h2>
        <form method="POST">
            <div class="mb-3 mt-3">
                <label for="text" class="form-label">Mã Giảng Viên:</label>
                <input type="text" class="form-control" id="email" placeholder="" name="Magv">
            </div>
            <div class="mb-3 mt-3">
                <label for="text" class="form-label">Họ Và Tên</label>
                <input type="text" class="form-control" id="email" placeholder="" name="Hoten">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Số Điện Thoại</label>
                <input type="text" class="form-control" id="pwd" placeholder="" name="Dienthoai">
            </div>
            <button type="submit" class="btn btn-primary" name="them">Thêm</button>
        </form>
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






