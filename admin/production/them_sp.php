
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/grid.css">

</head>

<body>
    <div class="container production-container">
        <h1 class="production-title title">Thêm mới sản phẩm</h1>
        <div class="grid wide">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label class="form-label" for="masp">Mã sản phẩm</label>
                    <input type="text" name="masp" id="masp" class="form-control">
                </div>

                <div class="form-group">
                    <label class="form-label" for="tensp">Tên sản phẩm</label>
                    <input type="text" name="tensp" id="tensp" class="form-control">
                </div>

                <div class="form-group">
                    <label class="form-label" for="anhsp">Ảnh sản phẩm</label>
                    <input type="file" name="anhsp" id="anhsp" class="form-control" required>
                </div>

                <div class="form-group">

                    <label class="form-label" for="thuonghieu">Thương hiệu</label>

                    <select name="thuonghieu">

                        <?php
                        require_once '../../common/dbconfig.php';
                        $sql = "SELECT * FROM brand";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>

                            <option value="<?php echo $row['mathuonghieu'] ?>">
                                <?php echo $row['tenthuonghieu'] ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label" for="soluong">Số lượng sản phẩm</label>
                    <input type="number" name="soluong" id="soluong" class="form-control">
                </div>

                <div class="form-group">
                    <label class="form-label" for="gia">Giá thành</label>
                    <input type="number" name="gia" id="gia" class="form-control">
                </div>

                <div class="form-group">
                    <label for="gioitinh" class="form-label">Giới tính</label>
                    <select name="gioitinh">
                        <option value="0" >Nam</option>
                        <option value="1" >Nữ</option>
                        <option value="3">Cặp đôi</option>
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
    </div>



</body>

</html>

<?php 
require_once'../../common/dbconfig.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$masp = $_POST["masp"];
$tensp = $_POST["tensp"];
$anhsp = $_FILES["anhsp"]["name"];
$soluong = $_POST["soluong"];
$thuonghieu = $_POST["thuonghieu"];
$gia = $_POST["gia"];
$gioitinh = $_POST["gioitinh"];
$sql = "INSERT INTO production(masp, tensp, anhsp, thuonghieu, soluong, gia, gioitinh) values ('$masp','$tensp','$anhsp','$thuonghieu','$soluong','$gia','$gioitinh')";

move_uploaded_file($_FILES["anhsp"]["tmp_name"], '../../image/production/' . $anhsp);

$result = $conn->query($sql);

    if (!$result) {
        die("Lỗi kết nối" . $conn->connect_error);
    }
    header("location: ../index_production.php");

}
?>