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

	<div id="site">
		<header id="masthead">
		</header>
		<div id="content">
			<h1>Lịch sử đơn hàng</h1>
			<form id="shopping-cart" action="cart.php" method="post">
				<table class="shopping-cart">
					<thead>
						<tr>
							<th colspan="3">Mã vận đơn: DHS35K34</th>
						</tr>
					</thead>
					<thead>
						<tr class="item">
							<th scope="col">Sản phẩm</th>
							<th scope="col">Số lượng</th>
							<th scope="col">Thành tiền</th>
						</tr>
					</thead>
					<tbody>

						<tr>
							<td>Gương-3</td>
							<td>3</td>
							<td>36€</td>
						</tr>
						<tr>
							<td>sofa-3</td>
							<td>1</td>
							<td>34€</td>
						</tr>
						<tr>
							<td>Bàn-3</td>
							<td>3</td>
							<td>60€</td>
						</tr>
					</tbody>
				</table>
				<p id="sub-total">
					<strong>Tổng cộng</strong>: 130€<span id="stotal"></span>
				</p>
			</form>
		</div>
	</div>
</body>

</html>