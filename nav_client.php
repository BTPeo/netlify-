<!DOCTYPE html>
<html lang="en">
<!--todo Fix không nhảy trang khác , link tại trang  -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- Link css font -->
    <link rel="stylesheet" href="./font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https:cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Link css style -->
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./css/client.css">




</head>

<body>
    <header>
        <div class="header-container ">

       
            <div class="header-logo ">
                <p class="header-sologan">
                “Tương lai được mua bằng hiện tại.” - Steve Jobs.
                </p>
                <a href="./index.php" class="header-logo-link">
                    <img src="./image/logo.jpg" alt="" class="header-logo-image" />
                </a>
            </div>
          
     


            <div class="group-1 grid wide ">
                <div class="row">
                    <div class="header-search col l-10 c-19 m-10">

                        <label class="search-label btn" for="search">
                            <i class="ti-search"></i>
                        </label>
                        <input type="text" name="search" id="search" class="c-0 m-6 l-6 search-input">

                    </div>

                    

                </div>
            </div>


            <nav>
                <div class=" header-container">
                    <!--*Begin nav Mobile  -->
                    <div>
                        <div class="menuToggle">
                            <label for="nav-mobile-input"><i class="ti-menu menuBtn"></i>
                            </label>
                            <a href="./index.php" class="nav-mobile-link">Trang chủ</a>


                            <p class="menuToggle-text">
                            </p>
                        </div>
                        <input type="checkbox" hidden name="" class="nav-input" id="nav-mobile-input">
                        <label for="nav-mobile-input" class="nav-overlay"></label>
                        <div class="header-container-mobile">

                            <ul class="nav-mobile">
                                <label for="nav-mobile-input"><i class="ti-close nav-mobile-close"></i></label>

                                <li class="nav-mobile-item ">
                                    <a href="./index.php" class="nav-mobile-link">Trang chủ</a>
                                </li>
                                <li class="nav-mobile-item  ">
                                    <a href="./introduction.php" class="nav-mobile-link">Giới thiệu</a>
                                </li>
                                <li class="nav-mobile-item ">
                                    <div class="dropdown-overlay">
                                        <a class="nav-mobile-link dropdown-heading ">Sản phẩm</a>
                                        <i class="ti-angle-down dropdown-icon"></i>
                                    </div>

                                    <ul class="subnav-mobile active">
                                        <li class="subnav-mobile-item ">
                                            <div class="dropdown-overlay">
                                                <p class="subnav-mobile-link dropdown-heading ">Bộ sưu tập</p>
                                                <i class="ti-angle-down dropdown-icon"></i>

                                            </div>
                                            <ul class="subnav-mobile-dropdown">
                                                <li class="subnav-mobile-dropdown-item">
                                                    <a href="./image/production_male.php" class="subnav-mobile-dropdown-item">Nam</a>
                                                </li>
                                                <li class="subnav-mobile-dropdown-item">
                                                    <a href="./image/production_female.php" class="subnav-mobile-dropdown-item">Nữ</a>
                                                </li>
                                                <li class="subnav-dropdown-item">
                                                    <a href="./image/production_couple.php" class="subnav-dropdown-link">Cặp đôi</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="subnav-mobile-item   ">
                                            <div class="dropdown-overlay">
                                                <p class="subnav-mobile-link dropdown-heading ">Thương hiệu</p>
                                                <i class="ti-angle-down dropdown-icon "></i>
                                            </div>
                                            <ul class="subnav-mobile-dropdown">
                                                <li class="subnav-mobile-dropdown-item">
                                                    <a class="subnav-mobile-dropdown-item">Casio</a>
                                                </li>
                                                <li class="subnav-mobile-dropdown-item">
                                                    <a href="#" class="subnav-mobile-dropdown-item">Citizen</a>
                                                </li>
                                                <li class="subnav-mobile-dropdown-item">
                                                    <a href="#" class="subnav-mobile-dropdown-item">Doxa</a>
                                                </li>
                                                <li class="subnav-mobile-dropdown-item">
                                                    <a href="#" class="subnav-mobile-dropdown-item">Tissot</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="subnav-mobile-item  ">
                                            <div class="dropdown-overlay">
                                                <a href="#" class="subnav-mobile-link dropdown-heading">Các dòng đặc
                                                    biệt</a>
                                                <i class="ti-angle-down dropdown-icon"></i>

                                            </div>
                                            <ul class="subnav-mobile-dropdown">
                                                <li class="subnav-mobile-dropdown-item">
                                                    <a href="#" class="subnav-mobile-dropdown-item">Đồng hồ điện tử</a>
                                                </li>
                                                <li class="subnav-mobile-dropdown-item">
                                                    <a href="#" class="subnav-mobile-dropdown-item">Đồng hồ đính kim
                                                        cương</a>
                                                </li>
                                                <li class="subnav-mobile-dropdown-item">
                                                    <a href="#" class="subnav-mobile-dropdown-item">Đồng hồ Thuỵ Sĩ</a>
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>

                                </li>
                                <li class="nav-mobile-item ">
                                    <a href="#" class="nav-mobile-link">Ưu đãi</a>
                                </li>
                                </li>
                                <li class="nav-mobile-item ">
                                    <div class="dropdown-overlay">
                                        <p class="nav-mobile-link dropdown-heading">CSKH</p>
                                        <i class="ti-angle-down dropdown-icon"></i>

                                    </div>
                                    <ul class="subnav-mobile-dropdown  ">
                                        <li class="subnav-mobile-dropdown-item">
                                            <a href="./contact.php" class="subnav-mobile-dropdown-item">Bảo hành</a>
                                        </li>
                                        <li class="subnav-mobile-dropdown-item">
                                            <a href="./contact.php" class="subnav-mobile-dropdown-item ">Liên hệ</a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--* End nav Mobile -->

                        <!--* Begin nav PC -->
                        <ul class="nav ">
                            <li class="nav-item col m-2-4 l-2-4 ">
                                <a href="./index.php" class="nav-link">Trang chủ</a>
                            </li>
                            <li class="nav-item col m-2-4 l-2-4   ">
                                <a href="./introduction.php" class="nav-link">Giới thiệu</a>
                            </li>
                            <li class="nav-item col m-2-4 l-2-4  ">
                                <a href="#" class="nav-link">Sản phẩm</a>
                                <ul class="subnav">
                                    <li class="subnav-item col l-4 m-4">
                                        <a href="#" class="subnav-link ">Bộ sưu tập</a>
                                        <ul class="subnav-dropdown">
                                            <li class="subnav-dropdown-item">
                                                <a href="production_male.php" class="subnav-dropdown-link">Nam</a>
                                            </li>
                                            <li class="subnav-dropdown-item">
                                                <a href="production_female.php" class="subnav-dropdown-link">Nữ</a>
                                            </li>
                                            <li class="subnav-dropdown-item">
                                                <a href="production_couple.php" class="subnav-dropdown-link">Cặp đôi</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav-item col l-4 m-4">
                                        <a href="#" class="subnav-link ">Thương hiệu</a>
                                        <ul class="subnav-dropdown">
                                            <li class="subnav-dropdown-item">
                                                <a class="subnav-dropdown-link">Casio</a>
                                            </li>
                                            <li class="subnav-dropdown-item">
                                                <a href="#" class="subnav-dropdown-link">Citizen</a>
                                            </li>
                                            <li class="subnav-dropdown-item">
                                                <a href="#" class="subnav-dropdown-link">Doxa</a>
                                            </li>
                                            <li class="subnav-dropdown-item">
                                                <a href="#" class="subnav-dropdown-link">Tissot</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="subnav-item col l-4 m-4">
                                        <a href="#" class="subnav-link ">Các dòng đặc biệt</a>
                                        <ul class="subnav-dropdown">
                                            <li class="subnav-dropdown-item">
                                                <a href="#" class="subnav-dropdown-link">Đồng hồ điện tử</a>
                                            </li>
                                            <li class="subnav-dropdown-item">
                                                <a href="#" class="subnav-dropdown-link">Đồng hồ đính kim cương</a>
                                            </li>
                                            <li class="subnav-dropdown-item">
                                                <a href="#" class="subnav-dropdown-link">Đồng hồ Thuỵ Sĩ</a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>

                            </li>
                            <li class="nav-item col m-2-4 l-2-4  ">
                                <a href="./voucher.php" class="nav-link">Ưu đãi</a>
                            </li>
                            </li>
                            <li class="nav-item col m-2-4 l-2-4  ">
                                <a href="#" class="nav-link">CSKH</a>
                                <ul class="subnav grid row ">
                                    <li class="subnav-item col l-6 m-6">
                                        <a href="./contact.php" class="subnav-link ">Bảo hành</a>
                                    </li>
                                    <li class="subnav-item col l-6 m-6">
                                        <a href="./contact.php" class="subnav-link ">Liên hệ</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>


            </nav>

        </div>

    </header>

    <main>
        <div class="container">
            <div class="banner">

                <div class="list-images">
                    <img src="./image/banner/black-friday.png" alt="">
                    <img src="./image/banner/halloween.png" alt="">
                    <img src="./image/banner/christmas.png" alt="">
                </div>

                <div class="btns">
                    <i class="ti-angle-right btn btnNext"></i>
                    <i class="ti-angle-left btn btnPrev"></i>
                </div>

            </div>

        </div>
    </main>
</body>

<script src="./js/changeSilder.js"></script>
<script src="./js/dropdown.js"></script>

</html>