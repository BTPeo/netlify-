<?php
if (isset($_GET["mabaohanh"])) {
    $mabaohanh = $_GET["mabaohanh"];
    include "../../common/dbconfig.php";

    $sql = "DELETE FROM baohanh WHERE mabaohanh = '$mabaohanh'";
    $result = $conn->query($sql);

    if (!$result) {
        die("Lỗi kết nối: " . $conn->connect_error);
    }

    header("location: ../index_contact.php");
    exit;   
}
?>