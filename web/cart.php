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
		function xoasp() {
			alert("Xóa sản phẩm thành công!");
		}
	</script>
	<div id="site">
		<header id="masthead">
		</header>
		<div id="content">
			<h1>Giỏ hàng của bạn</h1>
			<form id="shopping-cart" action="add_to_cart.php" method="post">
				<table class="shopping-cart">
					<tr class="item">
                        <th>Stt</th>
						<th>Sản phẩm</th>
						<th>Số lượng</th>
						<th>Thành tiền</th>
						<th>Lựa chọn</th>
					</tr>
					<tr>
                        <td>1</td>
						<td>Gương-3</td>
						<td>3</td>
						<td>36€</td>
						<td>
                            <a>Xóa |</a>
                            <a>Thêm</a>
                        </td>
					</tr>
				</table>
				<p id="sub-total">
					<strong>Tổng cộng</strong>: 130€<span id="stotal"></span>
				</p>
				<ul id="shopping-cart-actions">
					<li>
						<a href="select_address.php?username=" id="thanhtoan" class="btn">Thanh toán</a>
					</li>
					<li>
						<a href="sanpham_trangchu.php?username=" class="btn">Tiếp tục mua sắm</a>
					</li>
				</ul>
			</form>
		</div>
	</div>
</body>

</html>