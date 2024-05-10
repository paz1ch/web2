<?php
session_start();
include('config/config.php');
global $mysqli;
$username = $_GET['username'];
$id=$_GET['id'];
$sql = "SELECT * from cart where username='$username'";
$result = $mysqli->query($sql);
$count = $result->num_rows;

if(isset($_POST['submit'])){
    $hoten = $_POST['name'];
    $diachi = $_POST['address'];
    $sdt=$_POST['phone'];
    $payment = $_POST['payment'];
    $tensp = $_SESSION['tensp'];
    $soluong=$_SESSION['soluong'];
    $gia=$_SESSION['gia'];
    $tong=$_SESSION['tong'];
    $tongtien=$_SESSION['tongtien'];
    $currentTime = date("Y-m-d", strtotime("+3 days"));

    $sql = "INSERT INTO cart_detail (username,hoten, diachi,sdt, payment, tensp, soluong, gia, tong, tongtien,xuly,date)
    VALUES ('$username','$hoten', '$diachi','$sdt', '$payment', '$tensp', '$soluong', '$gia', '$tong', '$tongtien','1','$currentTime')";
    $result = $mysqli->query($sql);

    $_SESSION['tensp']='';
    $_SESSION['soluong']='';
    $_SESSION['gia']='';
    $_SESSION['tong']='';
    $_SESSION['tongtien']='';

    $sql = "DELETE FROM cart WHERE username = '$username'";
    $result = $mysqli->query($sql);
    echo '<script>
        alert("Đặt hàng thành công");
        window.location.href="lichsudonhang.php?username='.$username.'";
        </script>';
}
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

                <form method="post" action="">
                    <div class="row">
                        <div class="col-md-4 order-md-2 mb-4">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Giỏ hàng</span>
                                <span class="badge badge-secondary badge-pill">
                                <?php echo $count?>
                            </span>
                            </h4>
                            <?php
                            $sql = "SELECT * from cart where username='$username'";
                            $result = $mysqli->query($sql);
                            $count = $result->num_rows;
                            // Loop through each row in the result set
                            while ($row = $result->fetch_assoc()) {
                            ?>
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <!-- Output the product name -->
                                        <h6 class="my-0"><?php echo $row['tensp']; ?></h6>
                                        <!-- Output the product price and quantity -->
                                        <small class="text-muted">Giá: <?php echo $row['gia'].'€' ?> | Số lượng: x<?php echo $row['soluong']; ?></small>

                                        <input type="hidden" name="tensp" value="<?php echo $row['tensp']?>">
                                        <input type="hidden" name="gia" value="<?php echo $row['gia']?>">
                                        <input type="hidden" name="soluong" value="<?php echo $row['soluong']?>">

                                    </div>
                                    <span class="text-muted">
                                        <?php
                                        echo $row['tong'].'€';
                                        ?>
                                        <input type="hidden" name="tong" value="<?php echo $row['tong']?>">
                                    </span>
                                </li>
                                <?php
                                }
                                ?>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Tổng thành tiền</span>
                                    <strong>
                                        <?php
                                        echo $_SESSION['tongtien'].'€';
                                        ?>
                                        <input type="hidden" name="tongtien" value="<?php echo $row['tongtien']?>">
                                    </strong>
                                </li>
                            </ul>

                        </div>

                        <div class="col-md-8 order-md-1">
                            <h4 class="mb-3">Thông tin khách hàng</h4>
                            <?php
                            $sql = "SELECT * FROM address where id = '$id' and username = '$username'";
                            $result = $mysqli->query($sql);
                            while ($row = $result->fetch_assoc()) {
                            ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Họ tên</label>
                                    <input class="form-control" type="text" name="name" readonly value="<?php echo ($row['name']) ?>">
                                </div>
                                <div class="col-md-12">
                                    <br>
                                    <label>Địa chỉ</label>
                                    <input class="form-control" type="text" name="address" readonly value="<?php echo ($row['district'] . ", " . $row['city'] . ", " . $row['country']) ?>">
                                </div>
                                <div class="col-md-12">
                                    <br>
                                    <label>Số điện thoại</label>
                                    <input class="form-control" type="text" name="phone" readonly value="<?php echo ($row['phone']) ?>">
                                </div>
                                <div class="col-md-12">
                                    <br>
                                    <label>Phuong thuc thanh toan</label>
                                    <input class="form-control" type="text" name="payment" readonly value="<?php echo ($row['payment']) ?>">
                                </div>

                            </div>

                            <hr class="mb-4">
                            <form id="add-to-cart-form">
                                <input class="btn btn-primary btn-lg btn-block" id="dathang" type="submit" name="submit"  value="Đặt hàng">
                            </form>

                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="button" name="btnDatHang" onclick="window.location.replace
                                    ('select_address.php?username=<?php echo urlencode($username); ?>')" style="background-color:green;border: none">Quay lại</button>

                        </div>
                    </div>
                <?php } ?>
                </form>

            </form>

        </div>
        <!-- End block content -->
    </main>
    <br><br><br>
</body>

</html>