<?php
include("../../common/dbconfig.php");


session_start();
$taikhoan = $_SESSION["taikhoan"];
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $sql = "SELECT * FROM quanly WHERE taikhoan = '$taikhoan'";
    // Thực hiện truy vấn
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if (!$row) {
        header("../index.php");
        exit;
    }
    // Kiểm tra kết quả truy vấn
    $name = $row['name'];
    $avatar = $row['avatar'];
    $gender = $row['gender'];
    if (empty($avatar)) {
        $avatar = 'avatar-admin.jpg';
    }
    if (empty($gender)) {
        $gender = 'Chưa biết';
    }
} else {

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $avatar = $_POST['avatarold'];
    $avatarnew = $_FILES["avatarnew"]["name"];

    if ($avatarnew != null) {
        $avatar = $avatarnew;
        move_uploaded_file($_FILES["avatarnew"]["tmp_name"], '../../image/admin/' . $avatar);
    }
    $sql = "UPDATE quanly SET name = '$name', gender = '$gender', avatar = '$avatar' WHERE taikhoan = '$taikhoan'";

    $result = $conn->query($sql);

    if (!$result) {
        die("Lỗi kết nối" . $conn->connect_error);
    }
    header("location: ../index_admin.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa admin</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <div class="container admin-container">
        <h1 class="admin-title">Sửa thông tin</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="avatar" class="form-label">Ảnh đại diện</label>
                <input type="text" name="avatarold" class="form-control" id="avatar" value="<?php echo $avatar; ?>">
                <img src="../../image/admin/<?php echo $avatar; ?>" alt="" width="200">
            </div>
            <div class="form-group">
                <label for="avatar" class="form-label">Ảnh đại diện mới</label>
                <input type="file" accept="image/*" name="avatarnew" class="form-control" id="avatar">
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Họ và tên</label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>">
            </div>
            <div class="form-group">
                <label for="gender" class="form-label">Giới tính</label>
                <select name="gender">
                    <option value="0" <?php if ($gender == "0") echo "selected"; ?>>Nam</option>
                    <option value="1" <?php if ($gender == "1") echo "selected"; ?>>Nữ</option>
                    <option value="3" <?php if ($gender == "3") echo "selected"; ?>>Không tiết lộ</option>
                </select>
                <!-- <input type="text" class="form-control" name="gender" id="gender" value="
               ?php
                if ($gender == 1) {
                    echo "Nữ";
                } elseif ($gender == 0) {
                    echo "Nam";
                } else {
                    echo "Không biết";
                }
                ?>
                "> -->
            </div>
            <div class="form-group button">
                <input type="submit" value="Cập Nhật" name="submit" class="btn form-btn">
                <input type="reset" value="Xoá" class="btn form-btn">
                <a href="../index_admin.php">
                    <input type="button" value="Huỷ" name="cancel" class="btn form-btn">
                </a>

            </div>
        </form>
    </div>
</body>

</html>