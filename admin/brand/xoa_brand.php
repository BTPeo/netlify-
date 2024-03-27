<?php
if (isset($_GET["mathuonghieu"])) {
    $mathuonghieu = $_GET["mathuonghieu"];
    include("../../common/dbconfig.php");

    $sql = "DELETE FROM brand WHERE mathuonghieu = $mathuonghieu";
    $result = $conn->query($sql);

    if (!$result) {
        die("Lỗi kết nối: " . $conn->connect_error);
    }

    header("location: ../index_brand.php");
    exit;   
}
?>