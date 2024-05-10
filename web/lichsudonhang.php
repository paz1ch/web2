<?php
include('config/config.php');
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'web_php');
$username = $_GET['username'];

?>
<!DOCTYPE html>
<html>

<head>
	<title>Giỏ hàng</title>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="images/cart.png">
    <link rel="stylesheet" href="style/style.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_topnav.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_ourteam.css" media="screen" type="text/css">
    <link rel="stylesheet" href="style/style_banner.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_serviece.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_pagination.css">
    <link rel="stylesheet" href="style/bootstrap.min.css" media="screen" type="text/css">
    <link rel="stylesheet" href="style/p_inf.css" media="screen" type="text/css">

    <link rel="stylesheet" href="style/bootstrap.min.css" media="screen" type="text/css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<section id="home">
		<?php include('header_user.php'); ?>
	</section>
    <div>
        <div style="display: flex;">
            <?php include("link_personalinfo.php"); ?>
            <form action="" method="POST" style="display: contents">
                <div class="div_right">
                    <div style="margin-left: 5%; margin-right: 5%;">
                        <h2 style="text-align: center;">Lịch sử đơn hàng</h2>
                        <hr style="border: 1px solid black;">
                        <?php
                        $sql = "SELECT * FROM cart_detail WHERE username = '$username'";
                        $result = $mysqli->query($sql);
                        ?>
                        <?php
                        while ($row = $result->fetch_assoc()) {
                            $tensp_array = explode('/', $row['tensp']);
                            $soluong_array = explode('/', $row['soluong']);
                            $tong_array = explode('/', $row['tong']);

                            ?>
                            <table class="shopping-cart">
                                <thead>
                                    <tr>
                                        <th colspan="3" style="background-color: rgba(160,158,164,0.65)">
                                            Mã vận đơn: <?php echo $row['id'] ?>
                                        </th>
                                    </tr>
                                    <thead>
                                        <tr class="item">
                                            <th scope="col">Tên</th>
                                            <th scope="col" style="text-align: center">Số điện thoại</th>
                                            <th scope="col" style="text-align: center">Thanh toán</th>
                                        </tr>
                                    </thead>

                                    <tr>
                                        <td><?php echo $row['hoten']?></td>
                                        <td style="text-align: center"><?php echo $row['sdt']?></td>
                                        <td style="text-align: center"><?php echo $row['payment']?></td>
                                    </tr>
                                    <thead>
                                        <tr class="item">
                                            <th scope="col">địa chỉ</th>
                                            <td colspan="2">
                                                <p><?php echo $row['diachi'] ?> </p>
                                            </td>

                                        </tr>
                                    </thead>
                                </thead>
                                <thead>
                                    <tr class="item">
                                        <th scope="col">Sản phẩm</th>
                                        <th scope="col" style="text-align: center">Số lượng</th>
                                        <th scope="col" style="text-align: center">Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($tensp_array as $key => $product) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $product; ?>
                                        </td>
                                        <td style="text-align: center">
                                            <?php echo $soluong_array[$key]; ?>
                                        </td>
                                        <td style="text-align: center">
                                            <?php echo $tong_array[$key]. '€' ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <td colspan="2" >
                                        <p id="sub-total" style="text-align: left">
                                            <strong>Tình trạng đơn:</strong>
                                            <?php
                                            if ($row['xuly']==1){
                                                echo 'Đơn chưa xác nhận';
                                            }
                                            else if ($row['xuly']==2){
                                                echo 'Đơn đã xác nhận';
                                            }
                                            else if ($row['xuly']==3){
                                                echo 'Đơn giao thành công';
                                            }
                                            else if ($row['xuly']==4){
                                                echo 'Hủy đơn';
                                            }
                                            ?>
                                            <p id="time">Thời gian nhận hàng (dự kiến):
                                                <?php echo $row['date']; ?>
                                            </p>
                                        </p>
                                    </td>
                                    <td>
                                        <p id="sub-total">
                                            <strong>Tổng cộng:</strong>
                                            <?php echo $row['tongtien'] . '€'?>
                                            <span id="stotal"></span>
                                        </p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <br>
                        <?php } ?>

                        <br>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>