<?php 
include("../../common/dbconfig.php");

$mathuonghieu = $_GET["mathuonghieu"];
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //GET METHOD
    //Gán dữ liệu vào các thẻ input
    if (!isset($_GET['mathuonghieu'])) {
        header('location: ../index.php');
        exit;
    }

    $sql = "SELECT * FROM brand WHERE mathuonghieu = '$mathuonghieu' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: ../index.php");
        exit;
    }

    $mathuonghieu = $row["mathuonghieu"];
    $tenthuonghieu = $row["tenthuonghieu"];
} else {
    //POST METHOD
    // Xử lý dữ liệu khi người dùng nhấn Cập Nhật
    // $mathuonghieu = $_POST["mathuonghieu"];
    $tenthuonghieu = $_POST["tenthuonghieu"];

    $sql = "UPDATE brand SET tenthuonghieu = '$tenthuonghieu' WHERE mathuonghieu = '$mathuonghieu' ";
    $result = $conn->query($sql);

    if (!$result) {
        die("Lỗi kết nối" . $conn->connect_error);
    }

    header("location: ../index_brand.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Thương Hiệu</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/grid.css">

</head>

<body>

    <div class="container brand-container">
        <h1 class="brand-title">Sửa Thương Hiệu</h1>
        <form action=""  method="post">
            <div class="form-group" >
                <label class="form-label" for="mathuonghieu">Mã Thương Hiệu</label>
                <input class="form-control" type="text" name="mathuonghieu" id="mathuonghieu" disabled value="<?php echo $mathuonghieu; ?>">
                
            </div>
            <div class="form-group">
                <label class="form-label" for="tenthuonghieu">Tên Thương Hiệu</label>
                <input class="form-control" type="text" name="tenthuonghieu" value="<?php echo $tenthuonghieu; ?>">
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
