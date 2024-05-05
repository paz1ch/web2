<?php
session_start();
global $mysqli;
include ('config/config.php');
$username = $_GET['username'];
?>
<!DOCTYPE html>
<html>

<head>
	<title>Giỏ hàng</title>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="images/cart.png">
	<link rel="stylesheet" href="style/style_banner.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="style/style_web_cart.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="style/style_topnav.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_cart.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<section id="home">
		<?php
            include('header_user.php');
            if(!isset($_SESSION['cart'])){
                $_SESSION['cart'] = array();
            }
            if(isset($_GET['action'])){
//                echo "<br> <br> <br> <br> <br>";
                function update_cart($add = false)
                {
                    foreach($_POST['quantity'] as $id_sp => $quantity) {
                        if($add) $_SESSION["cart"][$id_sp] += $quantity;
                        else $_SESSION["cart"][$id_sp] = $quantity;
                    }
                }
                switch($_GET['action']){
                    case "add":
                        update_cart(true);
                        header("location: ./cart.php?username=$username");
                        break;
                    case "delete":
                        if(isset($_GET['id'])){
                            unset($_SESSION["cart"][$_GET['id']]);
                        }
                        break;
                }
            }
        if(!empty($_SESSION['cart'])){
//            var_dump("SELECT * FROM `sanpham` WHERE `id_sp` IN (".implode(",",array_keys($_SESSION['cart'])).")"); exit;
            $products = mysqli_query($mysqli, "SELECT * FROM `sanpham` WHERE `id_sp` IN (".implode(",",array_keys($_SESSION['cart'])).")");
            }
        ?>
	</section>
	<div id="site">
		<div id="content">
            <header id="masthead"></header>
            <h1>Giỏ hàng của bạn</h1>
			<form id="shopping-cart" action="cart.php?action=submit" method="post">
				<table class="shopping-cart">
					<tr class="item">
                        <th class="product-number">Stt</th>
						<th class="product-name">Sản phẩm</th>
                        <th class="product-img">Ảnh sản phẩm</th>
                        <th class="product-price"> Đơn giá</th>
						<th class="product-quantity">Số lượng</th>
						<th class="product-money">Thành tiền</th>
						<th class="product-delete">Thao tác</th>
					</tr>
                    <?php
                    $num = 1;
                    while($row = mysqli_fetch_assoc($products)){ ?>
					<tr>
                        <td class="product-number"><?=$num++;?></td>
						<td class="product-name" ><?= $row['tensp']?></td>
                        <td class="product-img">
                            <img id="product-img" src="http://localhost/web2/web/images/<?= $row['image_sp']?>">
                        </td>
                        <td class="product-price"><?= $row['gia']?></td>
						<td class="product-quantity"><?= $_SESSION["cart"][$row['id_sp']]?></td>
						<td class="product-money"><?= $row['gia']?></td>
                        <td class="product-delete">
                            <a href="cart.php?username=<?php echo ($username); ?>&action=delete&id=<?php echo ($row['id_sp']); ?>">Xóa</a>
                        </td>
					</tr>
                    <?php } ?>
                    <tr id="row-total">
                        <th class="product-number">Tổng tiền</th>
                        <th class="product-name">&nbsp</th>
                        <th class="product-img">&nbsp</th>
                        <th class="product-price">&nbsp</th>
                        <th class="product-quantity">&nbsp</th>
                        <th class="product-money">36$</th>
                        <th class="product-delete"></th>
                    </tr>
				</table>
<!--				<p id="sub-total">-->
<!--					<strong>Tổng cộng</strong>: 130€<span id="stotal"></span>-->
<!--				</p>-->
				<ul id="shopping-cart-actions">
					<li>
						<a href="select_address.php?username=<?php echo urldecode($username) ?>" id="thanhtoan" class="btn">Thanh toán</a>
					</li>
					<li>
						<a href="sanpham_trangchu.php?username=<?php echo urldecode($username) ?>" class="btn">Tiếp tục mua sắm</a>
					</li>
				</ul>
			</form>
		</div>
	</div>
</body>

</html>