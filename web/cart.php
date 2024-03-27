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
		<div class="topnav">
            <div style="display: flex;" class="dangxuat">
                <a href="personal_infomation.html">
                    <img src="images/phuccac.jpg" class="editphucadmin" >
                </a>
                <a href="index.html" class="dangxuat">Đăng xuất</a>
            </div>
			<a class="active" href="trangchu.html" style="background-color: black;">Trang chủ</a>
			<a href="sanpham_trangchu.html">Sản phẩm</a>
			<a href="cart.html">Giỏ hàng</a>
			<a  href="timkiem_trangchu.html" class="account">Tìm kiếm</a>
			<div class="search-container">
                <form action="timkiem_trangchu.html">
				<input type="text" placeholder="Tìm kiếm.." name="search">
				<button type="submit"><i class="fa fa-search"> </i></button>
				</form>
		    </div>
		</div>
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
			<form id="shopping-cart" action="cart.html" method="post">
				<table class="shopping-cart">
				<thead>
					<tr class="item">
						<th scope="col">Sản phẩm</th>
						<th scope="col">Số lượng</th>
						<th scope="col">Thành tiền</th>
						<th scope="col">Lựa chọn</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Gương-3</td>
						<td><input type="text" value="3" style="outline: none; border: none; text-align: center;"></td>
						<td>36€</td>
						<td><span onclick="xoasp()" style="background-color: red;border: 1px solid; padding: 1px 1px 1px 1px; color: antiquewhite;">Xóa sản phẩm</span></td>
					</tr>
					<tr>
						<td>sofa-3</td>
						<td><input type="text" value="1" style="outline: none; border: none; text-align: center;"></td>
						<td>34€</td>
						<td><span onclick="xoasp()" style="background-color: red;border: 1px solid; padding: 1px 1px 1px 1px; color: antiquewhite;">Xóa sản phẩm</span></td>
					</tr>
					<tr>
						<td>Bàn-3</td>
						<td><input type="text" value="3" style="outline: none; border: none; text-align: center;"></td>
						<td>60€</td>
						<td><span onclick="xoasp()" style="background-color: red;border: 1px solid; padding: 1px 1px 1px 1px; color: antiquewhite;">Xóa sản phẩm</span></td>
					</tr>
				</tbody>
				</table>
				<p id="sub-total">
					<strong>Tổng cộng</strong>: 130€<span id="stotal"></span>
				</p>
				<ul id="shopping-cart-actions">
					<li>
						<a href="thanhtoan.html" id="thanhtoan" class="btn">Thanh toán</a>
					</li>
					<li>
						<a href="sanpham_trangchu.html" class="btn">Tiếp tục mua sắm</a>
					</li>
				</ul>
			</form>
		</div>
	</div>
</body>
</html>	
