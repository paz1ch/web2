<!DOCTYPE html>
<html>
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

	<script>
		function xoasp(){
			alert("Xóa sản phẩm thành công!");
		}
	</script>
	<div id="site">
		<header id="masthead">
		</header>
		<div id="content">
			<h1>Giỏ hàng của bạn</h1>
			<form id="shopping-cart" action="cart.php" method="post">
				<table class="shopping-cart">
                    <tr class="item">
                        <th scope="col">Sản phẩm</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Thành tiền</th>
                        <th scope="col">Lựa chọn</th>
                    </tr>
                    <tr>
                        <td>Gương-3</td>
                        <td><input type="text" value="3" style="outline: none; border: none; text-align: center;"></td>
                        <td>36€</td>
                        <td><span onclick="xoasp()">Xóa</span></td>
                    </tr>
				</table>
				<p id="sub-total">
					<strong>Tổng cộng</strong>: 130€<span id="stotal"></span>
				</p>
				<ul id="shopping-cart-actions">
					<li>
						<a href="select_address.php?username=<?php echo $_GET['username']?>" id="thanhtoan" class="btn">Thanh toán</a>
					</li>
					<li>
						<a href="sanpham_trangchu.php" class="btn">Tiếp tục mua sắm</a>
					</li>
				</ul>
			</form>
		</div>
	</div>
</body>
</html>	
