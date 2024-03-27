<?php
include 'connect.php';

// Tạo bảng khachhang
$sql = "CREATE TABLE khachhang (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    ten_khachhang VARCHAR(255) NOT NULL,
    email_khachhang VARCHAR(255) NOT NULL,
    id_sanpham INT(11),
    FOREIGN KEY (id_sanpham) REFERENCES sanpham(id)
)";

// đoạn code SQL Đó là bạn t tạo á nó kêu là viết vậy m hiểu

if ($conn->query($sql) === TRUE) {
    echo "Bảng khachhang đã được tạo thành công";
} else {
    echo "Lỗi: " . $conn->error;
}

$conn->close();
?>
