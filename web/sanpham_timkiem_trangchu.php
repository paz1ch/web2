<?php
include_once("config/config.php");
$username = $_GET["username"];
?>

<!DOCTYPE html>
<html lang="vi" class="h-100">

<head>
	<title>Tìm kiếm</title>
	<meta charset="utf-8" />
	<meta name="viewpoint" content="width=device-width,initial-scal=1.0">
	<meta http-equip="X-UA-compatible" content="ie=edge">
	<link rel="icon" type="image/png" href="images/icon_search.png">
	<link rel="stylesheet" href="style/style.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="style/style_topnav.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="style/style_ourteam.css" media="screen" type="text/css">
	<link rel="stylesheet" href="style/style_banner.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="style/style_serviece.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="style/style_product.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="style/style_pagination.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style/product_detail.css" media="screen" type="text/css">
	<link rel="stylesheet" href="style/bootstrap.min.css" media="screen" type="text/css">
	<link rel="stylesheet" href="style/font-awesome.min.css" media="screen" type="text/css">
</head>


<body>
	<!-- header -->
	<?php
	include_once("header_user.php");
	?>
	<!--end header-->
	<main role="main">
		<div class="container mt-4">
			<form name="frmTimKiem" method="post" action="cart.php?username=<?php echo $username?>">
				<h1 class="text-center" style="margin-top: 75px;">Sản phẩm tìm thấy</h1>
                <br>
				<section class="on-sale">
					<div id="site">
						<div class="container">
							<div class="row">
								<?php
								$tmp = mysqli_num_rows($sql_sanpham);
								if ($tmp == 0) {
								?>
									<p>Không có sản phẩm được tìm thấy</p>
								<?php
								} else {
								?>
									<?php
									while ($row = mysqli_fetch_array($sql_sanpham)) {

									?>
                                <div class="col-md-3">
                                    <div class="product-top">
                                        <img src="images/<?php echo $row['image_sp'] ?>" alt="">
                                        <div class="overlay-right">
                                            <a href="chitiet_sanpham.php?username=<?php echo urlencode($username); ?>&id=<?php echo $row['id_sp']; ?>" class="btn btn-secondary" title="Xem chi tiết">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <form id="add-to-cart-form" action="cart.php?username=<?php echo $username?>" method="post">
                                                <button type="submit" class="btn btn-secondary" title="Thêm vào giỏ hàng" name="themvaogiohang">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </button>
                                        </div>
                                    </div>

                                    <div class="product-bottom text-center">
                                        <?php
                                        $sao = $row['star'];
                                        $count = 0;
                                        while ($count++ < $sao) {
                                            ?>
                                            <i class="fa fa-star"></i>
                                            <?php
                                        } ?>
                                        <i class="fa fa-star-half-o"></i>
                                        <h4><?php echo $row['tensp'] ?></h4>
                                        <div>
                                            <p class="product-price" style="width: 2.7em; height: 2em; font-size: 1.7em; text-align: center; margin-left: 90px; background: #fff; color: black;"><?php echo $row["gia"].'€' ?></p>
                                            <input type="hidden" name="id_product" value="<?php echo $row['id_sp']?>">
                                            <div>
                                                <label for="qty-<?php echo $row['id_sp']?>"">Số lượng</label>
                                                <input  style="margin-left: 24px; -webkit-appearance: none; border-left: 0; border-radius: 0;border-right: 0; box-sizing: border-box; cursor: pointer; font-size: 16px; font-weight: 400; height: 32px; text-align: center; width: 50px;" type="number" min="1" max="10000" name="quantity" value="1" >
                                            </div>
                                            <p style="margin-top: 0; margin-bottom: 1rem;"><input style="text-align: center; color: white; background: #ef0e2a !important; margin-top: 10px;" name="themvaogiohang" type="submit" value="Mua" class="btn"/></p>
                                        </div>
                                    </div>
            </form>
        </div>
								<?php
									}
								}
								?>
							</div>
						</div>
					</div>
		    </div>
		    </section>
		    </form>
		</div>
		<!-- End block content -->
	</main>


	<!-- pagination -->
	<br>





	</section>
	<?php
	if ($tmp != 0) {
	?>
		<div style="text-align: center;">
			<p style="font-size: 20px;">Trang :
				<?php
				$sql_trang = mysqli_query($mysqli, "SELECT * FROM sanpham WHERE tensp LIKE '%$search%'");
				$count = mysqli_num_rows($sql_trang);
				$a = ceil($count / 8);

				for ($b = 1; $b <= $a; $b++) {
					echo '<a class="phantrang" href="?username='.$username.'&search=1&searchtext=' . $search . '&page=' . $b . '" style="text-decoration:none;">' . ' ' . $b . ' ' . '</a>';
				}
				?>
			</p>
		</div>
	<?php } ?>
</body>

<!-- footer -->
<?php
if ($tmp != 0) {
?>
	<footer class="footer mt-auto py-3">
		<div class="container">
			<p class="float-right">
				<a href="#">Về đầu trang</a>
			</p>
		</div>
	</footer>
<?php } ?>


</html>

