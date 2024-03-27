<?php
include('../../common/dbconfig.php');

$masp = $_GET["masp"];
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //GET METHOD
    //Gán dữ liệu vào các thẻ input
    if (!isset($_GET['masp'])) {
        header('location: ../index_production.php');
        exit;
    }
    $sql = "SELECT * FROM production WHERE masp = '$masp' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if (!$row) {
        header("location: ../index_product.php");
        exit;
    }
    $masp = $row['masp'];
    $tensp = $row['tensp'];
    $anhsp = $row['anhsp'];
    $soluong = $row['soluong'];
    $gia = $row['gia'];
    $gioitinh = $row['gioitinh'];
    $thuonghieu = $row['thuonghieu'];
} else {
    //POST METHOD
    // Xử lý dữ liệu khi ngườu dùng nhấn Cập Nhật
    $masp = $_POST['masp'];
    $tensp = $_POST['tensp'];
    $anhsp = $_POST["anhspcu"];
    $anhspmoi = $_FILES["anhspmoi"]["name"];
    if ($anhspmoi != null) {
        $anhsp = $anhspmoi;
        move_uploaded_file($_FILES["anhspmoi"]["tmp_name"], '../../image/production' . $anhsp);
    }

    $soluong = $_POST['soluong'];
    $gia = $_POST['gia'];
    $gioitinh = $_POST['gioitinh'];
    $thuonghieu = $_POST['thuonghieu'];

    $sql = "UPDATE production SET tensp = '$tensp',anhsp = '$anhsp',thuonghieu = '$thuonghieu', soluong = '$soluong',gia = '$gia' , gioitinh = '$gioitinh' WHERE  masp = '$masp'";
    $result = $conn->query($sql);
    if (!$result) {
        die("Lỗi kết nối" . $conn->connect_error);
    }
    header("location: ../index_production.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Sản Phẩm</title>

    <link rel="stylesheet" href="../../css/style.css">
</head>
</head>

<body>
    <div class="container ">
        <h3 class="title">Sửa sản phẩm</h3>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label class="form-label" for="masp">Mã sản phẩm</label>
                <input readonly class="form-control" type="text" name="masp" id="masp" value="<?php echo $masp; ?>">
            </div>
            <div class="form-group">
                <label class="form-label" for="tensp">Tên sản phẩm</label>
                <input class="form-control" type="text" name="tensp" id="" value="<?php echo $tensp; ?>">
            </div>
            <div class="form-group">
                <label class="form-label" for="image">Hình ảnh:</label>
                <input class="form-control" type="text" name="anhspcu" id="image" value="<?php echo $anhsp; ?>">
                <img src="../../image/production/<?php echo $row['anhsp'] ?>" alt="production" width="100">
            </div>
            <div class="form-group">
                <label class="form-label" for="image">Ảnh mới:</label>
                <input class="form-control" type="file" name="anhspmoi" id="image" accept="image/*">
            </div>
            <div class="form-group">
                <label class="form-label" for=" sl">Số Lượng</label>
                <input class="form-control" type="number" name="soluong" id="" value="<?php echo $soluong; ?>">
            </div>
            <div class="form-group">
                <label class="form-label" for="gia">Giá tiền</label>
                <input class="form-control" type="text" name="gia" id="" value="<?php echo $gia ?>">
            </div>


            <div class="form-group">
                <label class="form-label" for="gioitinh">Giới tính</label>
                <select name="gioitinh">
                    <option value="0" <?php if ($gioitinh == "0") echo "selected"; ?>>Nam</option>
                    <option value="1" <?php if ($gioitinh == "1") echo "selected"; ?>>Nữ</option>
                    <option value="3" <?php if ($gioitinh == "3") echo "selected"; ?>>Cặp đôi</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label" for="thuonghieu">Thương hiệu</label>
                <select name="thuonghieu">

                    <?php
                    require_once '../../common/dbconfig.php';
                    $sql = "SELECT * FROM brand ORDER BY mathuonghieu ASC";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                    ?>

                        <option value="<?php echo $row['mathuonghieu'] ?>"
                        <?php if ($thuonghieu == $row['mathuonghieu']) echo "selected"; ?>>
                            <?php echo $row['tenthuonghieu'] ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="form-group button">
                <input type="submit" value="Cập Nhật" name="submit" class="btn form-btn">
                <input type="reset" value="Xoá" class="btn form-btn">
                <a href="../index_production.php">
                    <input type="button" value="Huỷ" name="cancel" class="btn form-btn">
                </a>

            </div>


        </form>
    </div>
</body>

</html>