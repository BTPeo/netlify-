<?php
include('../../common/dbconfig.php');

$mabaohanh = $_GET["mabaohanh"];
// $mabaohanh = isset($_GET['mabaohanh']) ? $_GET['mabaohanh'] : null;

// var_dump($_GET['mabaohanh']);

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    //Gán dữ liệu vào các thẻ input
    if (!isset($_GET['mabaohanh'])) {
        header('location: ../index.php');
        exit;
    }
    $sql = "SELECT * FROM baohanh WHERE mabaohanh = '$mabaohanh' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: ../index.php");
        exit;
    }

    $mabaohanh = $row["mabaohanh"];
    $hovaten = $row["hovaten"];
    $sodienthoai = $row["sodienthoai"];
    $diachi = $row["diachi"];

} else {

    // $mabaohanh = $_POST["mabaohanh"];
    $hovaten = $_POST["hovaten"];
    $sodienthoai = $_POST["sodienthoai"];
    $diachi = $_POST["diachi"];


    $sql = "UPDATE baohanh SET hovaten = '$hovaten' , sodienthoai = '$sodienthoai' , diachi = '$diachi' WHERE mabaohanh = '$mabaohanh' ";

    // echo $mabaohanh;
    $result = $conn->query($sql);

    if (!$result) {
        die("Lỗi kết nối" . $conn->connect_error);
    }
    header("location: ../index_contact.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Bảo Hành</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/grid.css">

</head>

<body>
    <div class="container contact-container">
        <h1 class="contact-title title">Sửa bảo hành</h1>
        <form action="" method="post">
            <div class="form-group">
                <label class="form-label" for="mabaohanh">Mã bảo hành</label>
                <input class="form-control" type="text" name="mabaohanh" id="mabaohanh" readonly value="<?php echo $mabaohanh; ?>">
            </div>

            <div class="form-group">
                <label class="form-label" for="hovaten">Họ và tên</label>
                <input class="form-control" type="text" name="hovaten" id="hovaten" value="<?php echo $hovaten; ?>">
            </div>

            <div class="form-group">
                <label class="form-label" for="sodienthoai">Số điện thoại</label>
                <input class="form-control" type="text" name="sodienthoai" id="sodienthoai" value="<?php echo $sodienthoai; ?>">
            </div>

            <div class="form-group">
                <label class="form-label" for="diachi">Địa chỉ</label>
                <input class="form-control" type="text" name="diachi" id="diachi" value="<?php echo $diachi; ?>">
            </div>
            <div class="form-group button">
                <input type="submit" value="Cập Nhật" name="submit" class="btn form-btn">
                <input type="reset" value="Xoá" class= "btn form-btn">
                <a href="../index_brand.php" >
                    <input type="button" value="Huỷ" name="cancel" class= "btn form-btn">
                </a>
            </div>

        </form>
    </div>

</body>

</html>