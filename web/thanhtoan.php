<?php session_start();
include('config/config.php');
global $mysqli;
$sql = "SELECT * FROM address";
$result = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Giỏ hàng</title>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="images/cart.png">
    <link rel="stylesheet" href="style/style_banner.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_web_cart.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_topnav.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    
<body>
    <section id="home">
        <?php include('header_user.php'); ?>
    </section>

    <main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <form class="needs-validation" method="post">
                <div class="py-5 text-center">
                    <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                    <h2>Thanh toán</h2>
                </div>

                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Giỏ hàng</span>
                            <span class="badge badge-secondary badge-pill">3</span>
                        </h4>
                        <ul class="list-group mb-3">
                            <input type="hidden" name="sanphamgiohang[1][sp_ma]" value="2">
                            <input type="hidden" name="sanphamgiohang[1][gia]" value="11800000.00">
                            <input type="hidden" name="sanphamgiohang[1][soluong]" value="2">

                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Sofa</h6>
                                    <small class="text-muted">34€ * 1</small>
                                </div>
                                <span class="text-muted">34€</span>
                            </li>
                            <input type="hidden" name="sanphamgiohang[2][sp_ma]" value="4">
                            <input type="hidden" name="sanphamgiohang[2][gia]" value="14990000.00">
                            <input type="hidden" name="sanphamgiohang[2][soluong]" value="8">

                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Gương lớn</h6>
                                    <small class="text-muted">36€ x 3</small>
                                </div>
                                <span class="text-muted">108€</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Bàn lớn</h6>
                                    <small class="text-muted">60€ x 3</small>
                                </div>
                                <span class="text-muted">180€</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Tổng thành tiền</span>
                                <strong>322€</strong>
                            </li>
                        </ul>

                    </div>

                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Thông tin khách hàng</h4>
                        <?php
                        if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                        $username = $_SESSION['username'];
                        $id=$_SESSION['id'];
                        if ( $row['username']==$username && $row['id']==$id) {
                        ?>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Họ tên</label>
                                <input class="form-control" type="text" name="name" readonly
                                value="<?php echo ($row['name'])?>">
                            </div>
                            <div class="col-md-12">
                                <br>
                                <label >Địa chỉ</label>
                                <input class="form-control" type="text" name="address" readonly
                                value="<?php echo ($row['district'].", ".$row['city'].", ".$row['country'])?>">
                            </div>
                            <div class="col-md-12">
                                <br>
                                <label >Số điện thoại</label>
                                <input class="form-control" type="text" name="phone" readonly
                                value="<?php echo ($row['phone'])?>">
                            </div>
                            <div class="col-md-12">
                                <br>
                                <label >Phuong thuc thanh toan</label>
                                <input class="form-control" type="text" name="payment" readonly
                                       value="<?php echo ($row['payment'])?>">
                            </div>
                            <?php
                            }
                            }
                            }
                            ?>
                        </div>

                        <hr class="mb-4">
                        <button href="index.php" class="btn btn-primary btn-lg btn-block" id="dathang" type="button" name="btnDatHang">Đặt hàng</button>

                        <script>
                            button1 = document.getElementById("dathang");
                            button1.onclick = function(){
                                alert("Đặt hàng thành công. Bạn sẽ được đưa về trang chủ, Vui lòng giữ điện thoại khi tới ngày giao hàng và kiểm tra email để theo dõi ngày giao hàng");
                                location.assign("sanpham_trangchu.php");
                            }
                        </script>

                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block"
                                type="button" name="btnDatHang" onclick="window.location.replace('select_address.php')"
                                style="background-color:green;border: none"
                        >Quay lại</button>

                    </div>
                </div>
            </form>

        </div>
        <!-- End block content -->
    </main>
<br><br><br>
</body>
</html>