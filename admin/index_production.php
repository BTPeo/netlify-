<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUẢN LÝ SẢN PHẨM</title>
</head>

<body>
    <?php
    include('./share/nav.php');
    ?>
    <div class="production-container container ">
        <div class="grid wide">

            <h1 class="title">QUẢN LÝ SẢN PHẨM</h1>
            <P><a href="./production/them_sp.php" class="add-new">Thêm</a></P>
            <table class="table">
                <tr>

                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Thương hiệu</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Giới tính</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                <?php
                require_once '../common/dbconfig.php';
                $sql = "SELECT p.*, b.*
                FROM production p
                JOIN brand b ON p.thuonghieu = b.mathuonghieu
                ORDER BY b.mathuonghieu ASC , p.gioitinh ASC;";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['masp'] ?></td>
                        <td><?php echo $row['tensp'] ?></td>
                        <td><img src="../image/production/<?php echo $row['anhsp'] ?>" alt="production" width="60"></td>
                        <!-- thay ảnh -->
                        <td>

                            <?php
                            // Sử dụng biến mới, chẳng hạn như $brandRow, để tránh ghi đè giá trị của $row
                            $brandSql = "SELECT * FROM brand WHERE mathuonghieu = '{$row['thuonghieu']}'";
                            $brandResult = mysqli_query($conn, $brandSql);

                            while ($brandRow = mysqli_fetch_array($brandResult)) {
                                echo $brandRow['tenthuonghieu'];
                            }
                            ?>

                        </td>
                        <td><?php echo $row['soluong'] ?></td>
                        <td><?php echo number_format($row['gia'], 3, '.', ',');
                            ?></td>
                        <td>
                            <?php
                            $genderSql = $row['gioitinh'];
                            echo ($genderSql == 0) ? "Nam" : (($genderSql == 1) ? "Nữ" : "Cặp đôi");
                            ?>

                        </td>
                        <td>
                            <a href="./production/sua_sp.php?masp=<?php echo $row["masp"] ?>">
                                <i class="ti-settings"></i>
                            </a>
                        </td>
                        <td>
                            <a href="./production/xoa_sp.php?masp=<?php echo $row["masp"] ?>">
                                <i class="ti-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php
                }
                mysqli_close($conn);
                ?>
            </table>
        </div>
    </div>

</body>

</html>