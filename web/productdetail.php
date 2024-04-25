<?php
    include_once("config/config.php");
?>
<?php
    $id = $_GET['id'];
    $ctsp="SELECT * FROM sanpham WHERE id_sp ='$id'";
    $sql_sanpham = mysqli_query($mysqli,$ctsp);
    $row = mysqli_fetch_array($sql_sanpham);
?>


<html>
<head>
<title>Product details</title>
<meta charset="utf-8" />
<meta name="viewpoint" content="width=device-width,initial-scal=1.0">
<meta http-equip="X-UA-compatible" content="ie=edge">
<link rel="icon" type="image/png" href="images/Real-Madrid.jpg">
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
<link rel="stylesheet" href="style/product-detail.css" media="screen" type="text/css">
<link rel="stylesheet" href="style/bootstrap.min.css" media="screen" type="text/css">
<link rel="stylesheet" href="style/font-awesome.min.css" media="screen" type="text/css">
</head>

<body>

	<!-- top nav -->
	
    <?php
            include 'header.php';
        ?>
    <!-- end header -->

    <div class="spacing"></div>
    <main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <div id="thongbao" class="alert alert-danger d-none face" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="card">
                <div class="container-fliud">
                    <form name="frmsanphamchitiet" id="frmsanphamchitiet" method="post"
                        action="">
               
                        <div class="wrapper row">
                            <div class="preview col-md-6">
                                <div class="preview-pic tab-content">
                                    <div class="tab-pane" id="pic-1">
                                        <img src="images/<?php echo $row['image_sp'] ?>">
                                    </div>
                                    <div class="tab-pane" id="pic-2">
                                        <img src="images/<?php echo $row['image_sp'] ?>">
                                    </div>
                                    <div class="tab-pane active" id="pic-3">
                                        <img src="images/<?php echo $row['image_sp'] ?>">
                                    </div>
                                </div>
                                <ul class="preview-thumbnail nav nav-tabs">
                                    <li class="active">
                                        <a data-target="#pic-1" data-toggle="tab" class="">
                                            <img src="images/<?php echo $row['image_sp'] ?>">
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-target="#pic-2" data-toggle="tab" class="">
                                            <img src="images/<?php echo $row['image_sp'] ?>">
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-target="#pic-3" data-toggle="tab" class="active">
                                            <img src="images/<?php echo $row['image_sp'] ?>">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="details col-md-6">
                                <!-- Tên Snar phẩm được thêm ở đây-->
                                <h3 class="product-title"><?php echo $row['tensp'] ?></h3>
                                <div class="rating">
                                    <div class="stars">
                                        <?php 
                                            $sao = $row['star'];
                                            $count = 0;
                                            while($count++ < $sao){
                                        ?>
                                        <i class="fa fa-star"></i>
                                        <?php  
                                            } ?>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <!--Mô tả sản phẩm ở đây-->
                                <p class="product-description"><?php echo $row['motangan']?></p>
                                <small class="text-muted">Giá cũ: <s><span><?php echo $row['gia'] ?></span></s></small>
                                <h4 class="price">Giá hiện tại: <span><?php echo $row['giakhuyenmai'] ?></span></h4>
                                <p class="vote"><strong>100%</strong> hàng <strong>Chất lượng</strong>, đảm bảo <strong>Uy tín</strong>!</p>
                                <div class="form-group">
                                    <label for="soluong">Số lượng đặt mua:</label>
                                    <input type="number" class="form-control" id="soluong" name="soluong" value="1">
                                </div>
                                <div class="action">
                                    <div class="add-to-cart btn btn-default" id="btnThemVaoGioHang" onclick="addCart1()">
                                        Thêm vào giỏ hàng
                                    </div>
                                    <script>
                                        function addCart1(){
                                            alert("Hãy đăng nhập để thêm vào giỏ hàng");
                                        }
                                    </script>
                                    <br><br>
                                    <a class="add-to-cart btn btn-default" id="muangay" onclick="addCart()" >Mua ngay</a>
                                    <script>
                                        function addCart(){
                                            alert("Hãy đăng nhập để mua hàng");
                                        }
                                    </script>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="container-fluid">
                    <h3>Thông tin chi tiết về Sản phẩm</h3>
                    <div class="row">
                        <div class="col">
                            <?php 
                                echo $row['motachitiet'];
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End block content -->
    </main>


<!------Contact------------>
  <section id="contact">	
	<div class="container">
		<h1>Thông tin liên lạc</h1>
		<div class="row">
			<div class="col-md-6">
				<form class="contact-form">
				<div class="form-group">
				<input type="text" class="form-control" placeholder="Họ và tên..">
				</div>
				<div class="form-group">
				<input type="number" class="form-control" placeholder="Số điệnt thoại">
				</div>
				<div class="form-group">
				<input type="email" class="form-control" placeholder="Email">
				</div>
				<div class="form-group">
				<textarea class="form-control" rows="4" placeholder="Lời nhắn"></textarea>
				</div>		
				<button type="submit" class="btn btn-primary">Gửi</button>
				</form>
			</div>
			<div class="col-md-6 contact-info">
				<div class="follow"><b><i class="fa fa-map-marker"></i>  </b>2 Đ. Hải Triều, Bến Nghé, Quận 1, Thành phố Hồ Chí Minh</div>
				<div class="follow"><b><i class="fa fa-mobile"></i>  </b>(+84) 328246613</div>
				<div class="follow"><b><i class="fa fa-envelope"></i>  </b>Khongquenef@gmail.com</div>			
				<div class="follow"><label><b>Liên kết</b></label>
				<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
				<a href="https://www.youtube.com/"><i class="fa fa-youtube-play"></i></a>
				<a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a>
				<a href="https://myaccount.google.com/"><i class="fa fa-google-plus"></i></a>			
				</div>
			</div>		
		</div>
	</div>
</section>

    <!-- footer -->
    <footer class="footer mt-auto py-3">
    <div class="container">
        <p class="float-right">
            <a href="#">Về đầu trang</a>
        </p>
    </div>
    <div style="margin-bottom: 10px;"></div>
    </footer>
    <!-- end footer -->
	

</body>
</html>	
