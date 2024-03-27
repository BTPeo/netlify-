
<?php
    include("dbconfig.php");
    // Xử lý dữ liệu submit bằng phương thức post của người dùng
    if (isset($_POST["submit"])) {
        $mabaohanh = $_POST['mabaohanh'];
        $hovaten = $_POST['hovaten'];
        $sodienthoai = $_POST['sodienthoai'];
        $diachi = $_POST['diachi'];
        $ngaygui ="NOW()";
        // Câu lệnh INSERT
        $sql = "INSERT INTO baohanh (mabaohanh, hovaten, sodienthoai, diachi, ngaygui) VALUES ('$mabaohanh', '$hovaten', '$sodienthoai', '$diachi', $ngaygui)";
        // Thực thi câu lệnh SQL
        $result = $conn->query($sql);
        // Kiểm tra lỗi
        // if (!$result) {
        //     die("Lỗi kết nối" . $conn->connect_error);
        // }
        // Chuyển tiếp về trang index khi thêm mới thành công
        // header("location: ./index.php");
        // echo "Xong";
        // exit;
    }
    ?>