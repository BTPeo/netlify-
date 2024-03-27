<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới thương hiệu</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>


    <div class="container brand-container">
        <h1 class="brand-title">Thêm mới thương hiệu</h1>
        <form action="" method="post">
           
            <div class="form-group">
                <label class="form-label" for="tenthuonghieu">Tên thương hiệu</label>
                <input type="text" name="tenthuonghieu" id="" class = "form-control">
            </div>

            <div class="form-group button">
                <input type="submit" value="Thêm mới" name="submit" class="btn form-btn">
                <!-- Khi người dùng ấn huỷ sẽ quay về trang index -->
                <a href="../index_brand.php">
                    <input type="button" value="Huỷ" name="cancel" class= "btn form-btn">
                </a>

            </div>
        </form>
    </div>
    <?php
include("../../common/dbconfig.php");
// Xử lý dữ liệu submit bằng phương thức post của người dùng
    if (isset($_POST["submit"])) {
        $tenthuonghieu = $_POST['tenthuonghieu'];

        // Câu lệnh INSERT
        $sql = "INSERT INTO brand(tenthuonghieu) VALUES ('$tenthuonghieu')";
        // Thực thi câu lệnh SQL
        $result = $conn->query($sql);
        // Kiểm tra lỗi
        if (!$result) {
            die("Lỗi kết nối" . $conn->connect_error);
        }
        // Chuyển tiếp về trang index khi thêm mới thành công
        header("location: ../index_brand.php");
        exit;
    }
    ?>
</body>

</html>
