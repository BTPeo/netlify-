
<?php
include('../common/dbconfig.php');
if (isset($_POST["submit"])) {
    $taikhoan = $_POST["taikhoan"];
    $matkhau = $_POST["matkhau"];
    

    // Chuẩn bị truy vấn SQL
    $sql = "SELECT * FROM quanly WHERE  taikhoan = '$taikhoan' AND matkhau = '$matkhau'";
    // Thực hiện truy vấn
    $result = $conn->query($sql);
    // Kiểm tra kết quả truy vấn
    if ($result->num_rows > 0) {
        $_SESSION["taikhoan"] = $taikhoan; 

        $taikhoan = $row['$taikhoan'];
        $matkhau = $row['matkhau'];
        $avatar = $row['avatar'];
        // Lưu tài khoản vào session
        // Tài khoản và mật khẩu trùng khớp
        header("Location: ../admin/index.php");
        exit;
    } else {
        // Tài khoản hoặc mật khẩu không chính xác
        echo '<p style="color: red;margin-left:2rem;" >Tài khoản hoặc mật khẩu không chính xác</p>';
        exit;
    }

}
?>