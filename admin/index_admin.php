<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu</title>
</head>

<body>
    <?php
    include('./share/nav.php');
    ?>

    <div class="admin-container container ">
        <div class="grid wide">
            <div class="row no-gutters">
                <div class="col l-6">
                    <div class="admin-avartar">
                        <img src="../image/admin/<?php echo $avatar ?>" alt="">
                    </div>

                </div>
                <div class="col l-6">
                    <h2 class="admin-titte">
                        Thông tin tài khoản
                    </h2>
                    <div class="admin-about">
                        <div class="admin-name admin-group">
                            <h3 class="admin-sub">Họ và tên</h3>
                            <p class="admin-text">
                                <?php echo $name; ?>
                            </p>
                        </div>
                        <div class="admin-gender admin-group">
                            <h3 class="admin-sub">Giới tính</h3>
                            <p class="admin-text">
                                <?php
                               echo ($gender == 0) ? "Nam" : (($gender == 1) ? "Nữ" : "Không tiết lộ");

                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="form-group button admin-group ">
                        <a class="admin-btn" href="./about_admin/sua_admin.php?taikhoan=<?php echo $taikhoan; ?>">
                            <input type="button" value="Sửa" name="cancel" class="btn form-btn ">
                        </a>

                    </div>
                </div>

            </div>
        </div>


    </div>
    </div>



</body>

</html>