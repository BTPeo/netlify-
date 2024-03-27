<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin bảo hành </title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/grid.css">

</head>

<body>
    <?php
    include('./share/nav.php')
    ?>

    <div class="contact-container container">
        <div class="grid wide">
            <h1 class="contact-title title text-center">Danh sách khách hàng cần bảo hành</h1>
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <td>Mã bảo Hành</td>
                            <td>Họ và Tên</td>
                            <td>Số điện thoại</td>
                            <td>Địa chỉ</td>
                            <td>Ngày gửi</td>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('../common/dbconfig.php');
                        $sql = "SELECT * FROM baohanh ORDER BY ngaygui ASC";
                        $result = $conn->query($sql);
                        if (!$result) {
                            die("Lỗi truy vấn: " . $conn->error);
                        }
                        while ($row = $result->fetch_assoc()) { ?>
                            <td>
                                <?php echo $row['mabaohanh'] ?>
                            </td>
                            <td>
                                <?php echo $row['hovaten'] ?>
                            </td>
                            <td>
                                <?php echo $row['sodienthoai'] ?>
                            </td>
                            <td>
                                <?php echo $row['diachi'] ?>
                            </td>
                            <td>
                                <?php echo $row['ngaygui'] ?>
                            </td>
                            <td>
                                <a class="btn" href="contact/sua_contact.php?mabaohanh=<?php echo $row['mabaohanh'] ?>">Sửa</a>
                            </td>
                            <td>
                                <a class="btn " href="contact/xoa_contact.php?mabaohanh=<?php echo $row['mabaohanh'] ?>">Xoá</a>
                            </td>   



                    </tbody>
                    <?php
                        }
                        ?>
                </table>
               
            </div>
            
        </div>
    </div>

</body>

</html>