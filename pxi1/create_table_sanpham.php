<?php
include 'connect.php';

// Tạo bảng sanpham
// thông cảm cho tao nha tại vì tao làm trên máy người khác với bạn bè hỗ trợ á, nên là cái sql là bạn tao làm luôn, có gì m nhập ở trên xmap giùm nha @@
$sql = "CREATE TABLE sanpham (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    ten_sanpham VARCHAR(255) NOT NULL,
    gia DECIMAL(10, 2) NOT NULL,
    mo_ta TEXT,
    tinh_trang VARCHAR(50) DEFAULT 'Mới',
    ngay_tao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Bảng sanpham đã được tạo thành công";
} else {
    echo "Lỗi: " . $conn->error;
}

$conn->close();
?>
