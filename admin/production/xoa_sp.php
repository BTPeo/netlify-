<?php
if (isset($_GET["masp"])) {
    $masp = $_GET["masp"];
    include "../../common/dbconfig.php";

    $sql = "DELETE FROM production WHERE masp = '$masp'";
    $result = $conn->query($sql);

    if (!$result) {
        die("Lỗi kết nối: " . $conn->connect_error);
    }

    header("location: ../index_production.php");
    exit;   
}
?>