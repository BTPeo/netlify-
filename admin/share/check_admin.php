<?php
include('../common/dbconfig.php');
session_start();
$taikhoan = $_SESSION["taikhoan"];

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION["taikhoan"])) {
    // Nếu chưa đăng nhập, chuyển hướng về trang login.php
    header("Location: login.php");
    exit;
}
$sql = "SELECT * FROM quanly WHERE taikhoan = '$taikhoan'";
// Thực hiện truy vấn
$result = $conn->query($sql);
// Kiểm tra kết quả truy vấn
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $taikhoan = $row['taikhoan'];
    $matkhau = $row['matkhau'];
    $name = $row['name'];
    $gender = $row['gender'];
    $avatar = $row['avatar'];
    if(empty($avatar)){
        $avatar = 'avatar-admin.jpg';
    }

    // if(empty($gender)){
    //     $gender = 'Chưa biết';
    // }
}
?>