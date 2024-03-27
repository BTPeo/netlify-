<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "donghotht";

    $conn = mysqli_connect($host, $user, $pass, $db);

    // Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}
?>