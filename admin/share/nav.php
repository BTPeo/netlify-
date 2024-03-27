<?php
include('../common/dbconfig.php');
session_start();
$taikhoan = $_SESSION["taikhoan"];

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION["taikhoan"])) {
    // Nếu chưa đăng nhập, chuyển hướng về trang login.php
    header("Location: login.php");
    exit;
}
$sql = "SELECT * FROM quanly WHERE taikhoan = '$taikhoan'";
// Thực hiện truy vấn
$result = $conn->query($sql);
// Kiểm tra kết quả truy vấn
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $taikhoan = $row['taikhoan'];
    $matkhau = $row['matkhau'];
    $name = $row['name'];
    $gender = $row['gender'];
    $avatar = $row['avatar'];
    if(empty($avatar)){
        $avatar = 'avatar-admin.jpg';
    }

    // if(empty($gender)){
    //     $gender = 'Chưa biết';
    // }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
    <nav>
        <ul>
            <li>
                <a href="./index_admin.php" class="logo">
                    <img src="../image/admin/<?php echo $avatar ?>" alt="">
                    <span class="nav-item"><?php echo $name ?></span>
                </a>
            </li>
            <li>
                <a href="./index.php">
                    <i class="fas fa-home"></i>
                    <span class="nav-item">Trang chủ</span>
                </a>
            </li>
            <li>
                <a href="./index_admin.php">
                    <i class="fas fa-user"></i>
                    <span class="nav-item">Giới thiệu</span>
                </a>
            </li>
            <li>
                <a href="./index_production.php">
                    <i class="fas fa-wallet"></i>
                    <span class="nav-item">Sản phẩm</span>
                </a>
            </li>
            <li>
                <a href="./index_brand.php">
                    <i class="fas fa-chart-bar"></i>
                    <span class="nav-item">Thương hiệu</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-tasks"></i>
                    <span class="nav-item">Ưu đãi</span>
                </a>
            </li>
            <!-- <li>
                <a href="#">
                    <i class="fas fa-cog"></i>
                    <span class="nav-item">Setting</span>
                </a>
            </li> -->
            <li>
                <a href="./index_contact.php">
                    <i class="fas fa-solid fa-comments"></i>
                    <span class="nav-item">Chăm sóc khách hàng</span>
                </a>
            </li>
            <li>
                <a href="../common/logout.php" class="logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Log out</span>
                </a>
            </li>
        </ul>
    </nav>
