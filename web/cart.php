<?php
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
            if(isset($_GET['action'])){
                var_dump($_POST); exit;
            }
        ?>
	</section>
	<div id="site">
		<header id="masthead">
		</header>
		<div id="content">
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
						<th class="product-delete">Xóa</th>
					</tr>
					<tr>
                        <td class="product-number">1</td>
						<td class="product-name">Gương-3</td>
                        <td class="product-img">
                            <img id="product-img" src="http://localhost/web2/web/images/table5.jpg" alt="" width="300" height="200">

                            <!-- The Modal -->
                            <div id="myModal" class="modal">
                                <span class="close" style="color: #eeeeee">X</span>
                                <img class="modal-content" id="img01">
                                <div id="caption"></div>
                            </div>

                            <script>
                                // Get the modal
                                var modal = document.getElementById('myModal');

                                // Get the image and insert it inside the modal - use its "alt" text as a caption
                                var img = document.getElementById('product-img');
                                var modalImg = document.getElementById("img01");
                                var captionText = document.getElementById("caption");
                                img.onclick = function(){
                                    modal.style.display = "block";
                                    modalImg.src = this.src;
                                    captionText.innerHTML = this.alt;
                                }

                                // Get the <span> element that closes the modal
                                var span = document.getElementsByClassName("close")[0];

                                // When the user clicks on <span> (x), close the modal
                                span.onclick = function() {
                                    modal.style.display = "none";
                                }
                            </script>
                        </td>
                        <td class="product-price">3$</td>
						<td class="product-quantity">3</td>
						<td class="product-money">36€</td>
                        <td class="product-delete"></td>
					</tr>
                    <tr id="row-total">
                        <th class="product-number">Tổng tiền</th>
                        <th class="product-name">&nbsp</th>
                        <th class="product-img">&nbsp</th>
                        <th class="product-price">&nbsp</th>
                        <th class="product-quantity">&nbsp</th>
                        <th class="product-money">36$</th>
                        <th class="product-delete">Xóa</th>
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