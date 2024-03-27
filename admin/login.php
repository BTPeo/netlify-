<?php
// Lấy tài khoản và mật khẩu từ form
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/grid.css">
</head>

<body>
    <div class="login-container">
        <div class="grid wide">
            <form action="" method="post">
                <div class="form-group">
                    <label class="form-label" for="username">Tài khoản</label>
                    <input class="form-control" type="text" name="taikhoan" id="username">
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Mật khẩu</label>
                    <input class="form-control" type="password" name="matkhau" id="password">
                </div>

                <div class="form-group button">
                <input type="submit" value="Đăng nhập" name="submit" class="btn form-btn">
            </div>
            </form>
        </div>
    </div>
</body>

</html>
<?php
include('../common/login_admin.php')
?>