<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ưu đãi</title>

</head>

<body>
    <?php include('./nav_client.php') ?>
    <main>
        <div class="warranty-container ">
            <h1 class="warranty-title">TRUNG TÂM HỖ TRỢ BẢO HÀNH SẢN PHẨM CHÍNH HÃNG</h1>
            <div class="warranty-main">
                <p class="warranty-heading">AUGUST xin chân thành xin lỗi quý khách vì sự cố phát sinh. Cửa hàng chúng
                    tôi xin cam kết có những chính sách hỗ trợ dành riêng cho quý khách hàng bảo hành sản phẩm tại
                    August. có các chính sách hỗ trợ như sau:</p>
                <ul class="warranty-notice">
                    <li>
                        <p>
                            <b>1 ĐỔI 1</b> nếu sản phẩm quý khách đã mua tại cửa hàng <b>dưới thời hạn 7 ngày</b>.
                        </p>
                    </li>
                    <a class="warranty-link">
                        >> Xem thêm chi tiết chính sách đổi trả sản phẩm
                    </a>
                    <li>
                        <p>
                            <b>Miễn phí</b> các chi bảo Hành sửa chữa sản phẩm khi còn <b>trong thời hạn của phiếu bảo
                                hành</b>.
                        </p>
                    </li>
                    <li>
                        <p>
                            <b>Giảm 20%</b> giá trị sản phẩm tiếp theo khi sản phẩm bảo hành bị <b>hoàn trả trễ hẹn</b>.
                        </p>
                    </li>

                </ul>
                <p class="warranty-hotline">HOTLINE: <b style="color: red">0369535221</b> - Trung tâm hỗ trợ tiếp nhận
                    bảo hành và sửa chữa dịch vụ.</p>
            </div>

            <form class="warranty-form grid wide" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <?php
                include('./common/xuly_themcontact.php');
                // Kiểm tra form
                if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                    echo '';
                }
                // Kiểm tra lỗi
                elseif ($result) {
                    echo '<p style ="color:red;" >Thông tin của bạn đã được gửi</p> ';
                }

                ?>
                <div  class="row">
                    <div class="form-group col c-12 m-6 l-6">

                        <label for="name" class="form-label ">Họ Và Tên :</label>
                        <input autofocus class="form-control" type="text" name="hovaten" id="name">
                    </div>

                    <div class="form-group col c-12 m-6 l-6">
                        <label for="sodienthoai" class="form-label">Số điện thoại :</label>
                        <input autofocus class="form-control" type="tel" name="sodienthoai" id="sodienthoai">
                    </div>
                    <div class="form-group col c-12 m-12  ">
                        <label for="location" class="form-label">Địa Chỉ : </label>
                        <input autofocus class="form-control" type="text" name="diachi" id="location">
                    </div>
                    <div class="form-group col c-12 m-8 l-8">
                        <label for="warranty-id" class="form-label">Mã Bảo Hành :</label>
                        <input autofocus class="form-control" type="text" name="mabaohanh" id="warranty-id">

                    </div>
                    <div class="warranty-submit  col c-12 m-4 l-4">
                        <input type="submit" class="btn" name="submit" value="Gửi"></input>
                    </div>
                </div>
            </form>
        </div>


        <div class="location-container  ">
            <h1 class="location-title">Liên hệ để mua hàng theo hình thức online - trực tuyến. </h1>
            <div class="location-main grid">
                <div class="row no-gutters">
                    <div class="col c-12 m-6 l-6 ">
                        <div class="location-group">
                            <h3 class="location-heading">Địa chỉ cửa hàng</h3>
                            <div class="location-text">
                                <p>Thông tin liên hệ : abc@gmail.com</p>
                                <p>Hotline: 00000000</p>
                                <p>Địa chỉ cửa hàng : 69 Đ. Đặng Thuỳ Trâm, Phường 13, Bình Thạnh, Thành phố Hồ Chí
                                    Minh, Vietnam</p>
                            </div>

                        </div>
                    </div>

                    <iframe class="col c-12 m-6 l-6" width="100%" height="400" frameborder="0" scrolling="no"
                        marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=69/68%20%C4%90.%20%C4%90%E1%BA%B7ng%20Thu%E1%BB%B3%20Tr%C3%A2m,%20Ph%C6%B0%E1%BB%9Dng%2013,%20B%C3%ACnh%20Th%E1%BA%A1nh,%20Th%C3%A0nh%20ph%E1%BB%91%20H%E1%BB%93%20Ch%C3%AD%20Minh%2070000,%20Vi%E1%BB%87t%20Nam+(August%20Shop)&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                            href="https://www.maps.ie/population/">Calculate population in area</a>
                    </iframe>
                </div>
            </div>
        </div>
    </main>
<?php include('./footer_client.php'); ?>


</body>

</html>