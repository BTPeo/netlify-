<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Management</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
    include('./share/nav.php')
    ?>
    <div class="brand-container container ">
        <div class="grid wide">

            <h1 class="brand-title text-center">Danh sách thương hiệu</h1>
            <a class="brand-new add-new" href="brand/them_brand.php">Thêm thương hiệu</a>

            

            <div >
                <table class="table">
                    <thead>
                        <tr>
                            <th>Mã thương hiệu</th>
                            <th>Tên thương hiệu</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Kết nối CSDL
                        include('../common/dbconfig.php');

                        // Câu lệnh select
                        $sql = "SELECT * FROM brand ORDER BY mathuonghieu ASC";
                        $result = $conn->query($sql);

                        // Đổ dữ liệu lên bảng
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "
                                <tr>
                                    <td> $row[mathuonghieu] </td>
                                    <td> $row[tenthuonghieu] </td>
                                    <td>
                                        <a class='btn primary' href='brand/sua_brand.php?mathuonghieu=$row[mathuonghieu]'>Sửa</a>
                                        <a class='btn danger' href='brand/xoa_brand.php?mathuonghieu=$row[mathuonghieu]'>Xoá</a>
                                    </td>
                                </tr>
                                ";
                            }
                        } else {
                            echo "<tr><td colspan='3'>Không có dữ liệu</td></tr>";
                        }

                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>