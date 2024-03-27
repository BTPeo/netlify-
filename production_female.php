<?php include('./nav_client.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đồng hồ nữ</title>
</head>
<main>

    <h1 class="product-male product-heading">_ĐỒNG HỒ NỮ_</h1>
    <div class="male-container casio-product">
        <div class="grid wide">
            <div class="row">
                <div class="col l-12  m-12 c-12 ">
                    <h1 class="male-heading">Casio</h1>
                </div>

                <div class=" col l-12">
                    <div class="row">
                        <?php
                        require_once './common/dbconfig.php';
                       
                        //Truy vấn JOIN
                        // Lấy thông tin sản phẩm với điều kiện gioitinh = '0' và thuonghieu là 'casio'
                        $sql = "SELECT p.*, b.* 
                                FROM production p
                                JOIN brand b ON p.thuonghieu = b.mathuonghieu
                                WHERE p.gioitinh = '1' AND b.tenthuonghieu = 'casio'";
                        $result = mysqli_query($conn, $sql);

                        // Duyệt qua từng sản phẩm
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <?php $brandSql = "SELECT * FROM brand WHERE mathuonghieu = '{$row['thuonghieu']}'";
                            $brandResult = mysqli_query($conn, $brandSql);
                            $brandRow = mysqli_fetch_array($brandResult);
                       

                            ?>
                            <div class="col l-3 m-6 c-12  male-item product-item " >
                                <img class="img-product" src="./image/production/<?php echo $row["anhsp"] ?>" alt="">
                                <p class="about-product">
                                    <?php echo $brandRow['tenthuonghieu'] . " " . $row["tensp"]; ?>
                                </p>
                                <p class="about-product">
                                    <?php echo ($row["soluong"] > 0) ? "Tồn kho: " . $row["soluong"] : "Hết hàng"; ?>
                                </p>
                                <span class="price-product"><?php echo number_format($row['gia'], 3, '.', ',');
                            ?>₫</span>
                                <div class="function-product">
                                    <button class=" buynow-product btn">Mua ngay</button>
                                    <button class=" addcart-product btn">Thêm giỏ hàng</button>
                                </div>

                            </div>
                        <?php
                        }
                        if (mysqli_num_rows($result) == 0) {
                            echo '<p class="col l-12  m-12 c-12 male-heading">Chưa có mặt hàng                        <span><i class="fa-regular fa-face-sad-cry"></i></span>
                            </p>
                         
                            ';
                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="male-container citizen-product">
        <div class="grid wide">
            <div class="row">
                <div class="col l-12  m-12 c-12 male-heading">
                    <h1>Citizen</h1>
                </div>
                <div class="male-citizen col l-12">
                    <div class="row">
                        <?php
                        require_once './common/dbconfig.php';
                        //Truy vấn JOIN
                        // Lấy thông tin sản phẩm với điều kiện gioitinh = '0' và thuonghieu là 'casio'
                        $sql = "SELECT p.*, b.* 
                                FROM production p
                                JOIN brand b ON p.thuonghieu = b.mathuonghieu
                                WHERE p.gioitinh = '1' AND b.tenthuonghieu = 'citizen'";
                        $result = mysqli_query($conn, $sql);

                        // Duyệt qua từng sản phẩm
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <?php $brandSql = "SELECT * FROM brand WHERE mathuonghieu = '{$row['thuonghieu']}'";
                            $brandResult = mysqli_query($conn, $brandSql);
                            $brandRow = mysqli_fetch_array($brandResult);
                            ?>
                            <div class="col l-3 m-6 c-12  male-item product-item ">

                                <img class="img-product" src="./image/production/<?php echo $row["anhsp"] ?>" alt="">
                                <p class="about-product">
                                    <?php echo $brandRow['tenthuonghieu'] . " " . $row["tensp"]; ?>
                                </p>
                                <p class="about-product" style="height: 0;">
                                    <?php echo ($row["soluong"] > 0) ? "Tồn kho: " . $row["soluong"] : "Hết hàng"; ?>
                                </p>
                                <span class="price-product"><?php echo number_format($row['gia'], 3, '.', ',');
                            ?>₫</span>
                                <div class="function-product">
                                    <button class=" buynow-product btn">Mua ngay</button>
                                    <button class=" addcart-product btn">Thêm giỏ hàng</button>
                                </div>

                            </div>
                        <?php
                        }
                        if (mysqli_num_rows($result) == 0) {
                            echo '<p class="col l-12  m-12 c-12 male-heading">Chưa có mặt hàng                        <span><i class="fa-regular fa-face-sad-cry"></i></span>
                            </p>
                         
                            ';
                        }
                        ?>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="male-container doxa-product">
        <div class="grid wide">
            <div class="row">
                <div class="col l-12  m-12 c-12 male-heading">
                    <h1>doxa</h1>
                </div>
                <div class="male-doxa col l-12">
                    <div class="row">
                        <?php
                        require_once './common/dbconfig.php';
                        //Truy vấn JOIN
                        // Lấy thông tin sản phẩm với điều kiện gioitinh = '0' và thuonghieu là 'casio'
                        $sql = "SELECT p.*, b.* 
                                FROM production p
                                JOIN brand b ON p.thuonghieu = b.mathuonghieu
                                WHERE p.gioitinh = '1' AND b.tenthuonghieu = 'doxa'";
                        $result = mysqli_query($conn, $sql);

                        // Duyệt qua từng sản phẩm
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <?php $brandSql = "SELECT * FROM brand WHERE mathuonghieu = '{$row['thuonghieu']}'";
                            $brandResult = mysqli_query($conn, $brandSql);
                            $brandRow = mysqli_fetch_array($brandResult);
                            ?>
                            <div class="col l-3 m-6 c-12  male-item product-item ">

                                <img class="img-product" src="./image/production/<?php echo $row["anhsp"] ?>" alt="">
                                <p class="about-product">
                                    <?php echo $brandRow['tenthuonghieu'] . " " . $row["tensp"]; ?>
                                </p>
                                <p class="about-product" style="height: 0;">
                                    <?php echo ($row["soluong"] > 0) ? "Tồn kho: " . $row["soluong"] : "Hết hàng"; ?>
                                </p>
                                <span class="price-product"><?php echo number_format($row['gia'], 3, '.', ',');
                            ?>₫</span>
                                <div class="function-product">
                                    <button class=" buynow-product btn">Mua ngay</button>
                                    <button class=" addcart-product btn">Thêm giỏ hàng</button>
                                </div>

                            </div>
                        <?php
                        }
                        if (mysqli_num_rows($result) == 0) {
                            echo '<p class="col l-12  m-12 c-12 male-heading">Chưa có mặt hàng                        <span><i class="fa-regular fa-face-sad-cry"></i></span>
                            </p>
                         
                            ';
                        }
                        ?>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <div class="male-container tissot-product">
        <div class="grid wide">
            <div class="row">
                <div class="col l-12  m-12 c-12 male-heading">
                    <h1>tissot</h1>
                </div>
                <div class="male-tissot col l-12">
                    <div class="row">
                    <?php
                        require_once './common/dbconfig.php';
                       
                        //Truy vấn JOIN
                        // Lấy thông tin sản phẩm với điều kiện gioitinh = '0' và thuonghieu là 'casio'
                        $sql = "SELECT p.*, b.* 
                                FROM production p
                                JOIN brand b ON p.thuonghieu = b.mathuonghieu
                                WHERE p.gioitinh = '1' AND b.tenthuonghieu = 'tissot'";
                        $result = mysqli_query($conn, $sql);

                        // Duyệt qua từng sản phẩm
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <?php $brandSql = "SELECT * FROM brand WHERE mathuonghieu = '{$row['thuonghieu']}'";
                            $brandResult = mysqli_query($conn, $brandSql);
                            $brandRow = mysqli_fetch_array($brandResult);
                       

                            ?>
                            <div class="col l-3 m-6 c-12  male-item product-item " >
                                <img class="img-product" src="./image/production/<?php echo $row["anhsp"] ?>" alt="">
                                <p class="about-product">
                                    <?php echo $brandRow['tenthuonghieu'] . " " . $row["tensp"]; ?>
                                </p>
                                <p class="about-product">
                                    <?php echo ($row["soluong"] > 0) ? "Tồn kho: " . $row["soluong"] : "Hết hàng"; ?>
                                </p>
                                <span class="price-product"><?php echo number_format($row['gia'], 3, '.', ',');
                            ?>₫</span>
                                <div class="function-product">
                                    <button class=" buynow-product btn">Mua ngay</button>
                                    <button class=" addcart-product btn">Thêm giỏ hàng</button>
                                </div>

                            </div>
                        <?php
                        }
                        if (mysqli_num_rows($result) == 0) {
                            echo '<p class="col l-12  m-12 c-12 male-heading">Chưa có mặt hàng                        <span><i class="fa-regular fa-face-sad-cry"></i></span>
                            </p>
                         
                            ';
                        }
                        ?>
                       
                    </div>


                </div>
            </div>
        </div>
    </div>

</main>
<?php include('./footer_client.php') ?>


</body>
<script src="./assets/js/dropdown.js"></script>

</html>