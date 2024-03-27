<!-- thêm sản phẩm vào giỏ hàng -->

<?php
include 'connect.php';

$id_sanpham = $_POST['id_sanpham'];
$ten_khachhang = $_POST['ten_khachhang'];
$email_khachhang = $_POST['email_khachhang'];

// Thêm dữ liệu vào bảng khachhang 
$sql = "INSERT INTO khachhang (ten_khachhang, email_khachhang, id_sanpham) VALUES ('$ten_khachhang', '$email_khachhang', $id_sanpham)";

if ($conn->query($sql) === TRUE) {
    echo "Sản phẩm đã được thêm vào giỏ hàng thành công";
} else {
    echo "Lỗi: " . $conn->error;
}

$conn->close();
?>
