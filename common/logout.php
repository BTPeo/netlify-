<?php
session_start();

// Hủy bỏ toàn bộ dữ liệu trong phiên làm việc
session_destroy();

// Chuyển hướng đến trang đăng nhập hoặc trang chính
header("Location: ../admin/login.php"); 
exit;
?>