<!DOCTYPE html>
<html>
<head>
<title>Online Store</title>
<meta charset="utf-8" />
<meta name="viewpoint" content="width=device-width,initial-scal=1.0">
<meta http-equip="X-UA-compatible" content="ie=edge">
<link rel="icon" type="image/png" href="images/onlineshop.png">
<link rel="stylesheet" href="style/style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="style/style_topnav.css" media="screen" type="text/css" />
<link rel="stylesheet" href="style/style_ourteam.css" media="screen" type="text/css">
<link rel="stylesheet" href="style/style_banner.css" media="screen" type="text/css" />
<link rel="stylesheet" href="style/style_serviece.css" media="screen" type="text/css" />
<link rel="stylesheet" href="style/style_product.css" media="screen" type="text/css" />
<link rel="stylesheet" href="style/style_pagination.css">
<link rel="stylesheet" href="style/style_products.css" media="screen" type="text/css">
<link rel="stylesheet" href="style/bootstrap.min.css" media="screen" type="text/css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="script/jquery.store.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <section id="home">
		<div class="topnav">
            <div style="display: flex;" class="dangxuat">
                <a href="personal_infomation.php">
                    <img src="images/phuccac.jpg" class="editphucadmin" >
                </a>
                <a href="index.php" class="dangxuat">Đăng xuất</a>
            </div>
			<a class="active" href="trangchu.php" style="background-color: black;">Trang chủ</a>
			<a href="sanpham_trangchu.php">Sản phẩm</a>
			<a href="cart.php">Giỏ hàng</a>
			<a  href="timkiem_trangchu.php" class="account">Tìm kiếm</a>
			<div class="search-container">
                <form action="timkiem_trangchu.php">
				<input type="text" placeholder="Tìm kiếm.." name="search">
				<button type="submit"><i class="fa fa-search"> </i></button>
				</form>
		    </div>
		</div>
	
		<!-- banner images -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/image1.jpg">
                </div>
                <div class="carousel-item">
                    <img src="images/image2.jpeg">
                </div>
                <div class="carousel-item">                    
                    <img src="images/image4.jpg">
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

	</section>
	<!-- top nav -->
	
	<!------Featured Categories----->
	<section class="featured-categories" id="products">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h1>Giường</h1>
					<img src="images/bed5.jpg">
				</div>
				<div class="col-md-3">
					<h1>Ghế</h1>
					<img src="images/sofa5.jpg">
				</div>
				<div class="col-md-3">
					<h1>Bàn</h1>
					<img src="images/table5.jpg">
				</div>
				<div class="col-md-3">
					<h1>Gương</h1>
					<img src="images/mirror5.jpg">
				</div>		
			</div>
		</div>
	</section>
	
	<!-- recommended -->
    <section class="on-sale">
        <div id="site">
            <div class="container">
                <div class="title-box">
                <h2>Đề xuất </h2>
                </div>
                <script>
                    function addtoCart(){
                        alert("Thêm vào giỏ hàng thành công");
                    }
                </script>
                <div class="row">
                    <div class="col-md-3">
                    <div class="product-top">
                        <img src="images/mirror3.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Xem chi tiết">
                                <a href="guong3.php">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </button>
                            
                            <button type="button" class="btn btn-secondary" title="Thêm vào giỏ hàng" onclick="addtoCart()">
                            <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    
                    
                    <div class="product-bottom text-center">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <h3>Gương-3</h3>
                    <div class="product-description" data-name="Mirror-3" data-price="12">
                        
                        <p class="product-price">&euro; 12</p>
                        <form class="add-to-cart" action="cart.php" method="post">
                                <div>
                                    <label for="qty-2">Số lượng</label>
                                    <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                </div>
                                <p><input type="button" value="Mua ngay" class="btn" id="button" /></p>
                                <script>
                                    button = document.getElementById("button");
                                    button.onclick = function(){
                                    window.location.replace("thanhtoan.php");    
                                    }
                                </script>
                        </form>
                                
                    </div>
                    </div>
                    </div>
        
                    
                    <div class="col-md-3">
                    <div class="product-top">
                        <img src="images/sofa3.jpg">
                        <div class="overlay-right">
                            <div class="overlay-right">
                                <button type="button" class="btn btn-secondary" title="Xem chi tiết">
                                    <a href="sofa3.php">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </button>
                                
                                <button type="button" class="btn btn-secondary" title="Thêm vào giỏ hàng" onclick="addtoCart()">
                                <i class="fa fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="product-bottom text-center">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <h3>sofa-3</h3>
                    
                    <div class="product-description" data-name="sofa-3" data-price="34">
                        
                        <p class="product-price">&euro; 34</p>
                        <form class="add-to-cart" action="cart.php" method="post">
                                    <div>
                                        <label for="qty-2">Số lượng</label>
                                        <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                    </div>
                                    <p><input type="button" value="Mua ngay" class="btn" id="button2" /></p>
                                    <script>
                                        button = document.getElementById("button2");
                                    button.onclick = function(){
                                    window.location.replace("thanhtoan.php");    
                                    }
                                    </script>
                        </form>
                                
                    </div>
                    </div>
                    </div>
        
        
        
                    <div class="col-md-3">
                    <div class="product-top">
                        <img src="images/table3.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Xem chi tiết">
                                <a href="ban3.php">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </button>
                            
                            <button type="button" class="btn btn-secondary" title="Thêm vào giỏ hàng" onclick="addtoCart()">
                            <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    
                    
                    <div class="product-bottom text-center">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <h3>Bàn-3</h3>
                    <div class="product-description" data-name="Table-3" data-price="20">
                        
                        <p class="product-price">&euro; 20</p>
                        <form class="add-to-cart" action="cart.php" method="post">
                                    <div>
                                        <label for="qty-2">Số lượng</label>
                                        <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                    </div>
                                    <p><input type="button" value="Mua ngay" class="btn" id="button3" /></p>
                                    <script>
                                        button = document.getElementById("button3");
                                    button.onclick = function(){
                                    window.location.replace("thanhtoan.php");    
                                    }
                                    </script>
                                </form>
                                
                    </div>
                    </div>
                    </div>
        
        
        
                    <div class="col-md-3">
                    <div class="product-top">
                        <img src="images/bed3.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Xem chi tiết">
                                <a href="giuong3.php">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </button>
                            
                            <button type="button" class="btn btn-secondary" title="Thêm vào giỏ hàng" onclick="addtoCart()">
                            <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    
                    
                    <div class="product-bottom text-center">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <h3>Giường-3</h3>
                    <div class="product-description" data-name="Bed" data-price="60">
                        
                        <p class="product-price">&euro; 60</p>
                        <form class="add-to-cart" action="cart.php" method="post">
                                    <div>
                                        <label for="qty-2">Số lượng</label>
                                        <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                    </div>
                                    <p><input type="button" value="Mua ngay" class="btn" id="button4" /></p>
                                    <script>
                                        button = document.getElementById("button4");
                                    button.onclick = function(){
                                    window.location.replace("thanhtoan.php");    
                                    }
                                    </script>
                                </form>
                                
                    </div>
                    </div>
                    </div>			
        
                </div>
        
        
        
            <div class="row">
                    <div class="col-md-3">
                    <div class="product-top">
                        <img src="images/mirror4.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Xem chi tiết">
                                <a href="guong4.php">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </button>
                            
                            <button type="button" class="btn btn-secondary" title="Thêm vào giỏ hàng" onclick="addtoCart()">
                            <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    
                    
                    <div class="product-bottom text-center">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <h3>Gương-4</h3>
                    <div class="product-description" data-name="Mirror" data-price="17">
                        
                        <p class="product-price">&euro; 17</p>
                        <form class="add-to-cart" action="cart.php" method="post">
                                    <div>
                                        <label for="qty-2">Số lượng</label>
                                        <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                    </div>
                                    <p><input type="button" value="Mua ngay" class="btn" id="button5" /></p>
                                    <script>
                                        button = document.getElementById("button5");
                                    button.onclick = function(){
                                    window.location.replace("thanhtoan.php");    
                                    }
                                    </script>
                                </form>
                                
                    </div>
                    </div>
                    </div>
        
                    
                    <div class="col-md-3">
                    <div class="product-top">
                        <img src="images/sofa4.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Xem chi tiết">
                                <a href="sofa4.php">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </button>
                            
                            <button type="button" class="btn btn-secondary" title="Thêm vào giỏ hàng" onclick="addtoCart()">
                            <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    
                    
                    <div class="product-bottom text-center">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <h3>sofa-4</h3>
                    <div class="product-description" data-name="Couch" data-price="28">
                        
                        <p class="product-price">&euro; 28</p>
                        <form class="add-to-cart" action="cart.php" method="post">
                                    <div>
                                        <label for="qty-2">Số lượng</label>
                                        <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                    </div>
                                    <p><input type="button" value="Mua ngay" class="btn" id="button6" /></p>
                                    <script>
                                        button = document.getElementById("button6");
                                    button.onclick = function(){
                                    window.location.replace("thanhtoan.php");    
                                    }
                                    </script>
                                </form>
                                
                    </div>
                    </div>
                    </div>
        
        
        
                    <div class="col-md-3">
                    <div class="product-top">
                        <img src="images/table4.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Xem chi tiết">
                                <a href="ban4.php">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </button>
                            
                            <button type="button" class="btn btn-secondary" title="Thêm vào giỏ hàng" onclick="addtoCart()">
                            <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    
                    
                    <div class="product-bottom text-center">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <h3>Bàn-4</h3>
                    <div class="product-description" data-name="Table" data-price="21">
                        
                        <p class="product-price">&euro; 21</p>
                        <form class="add-to-cart" action="cart.php" method="post">
                                    <div>
                                        <label for="qty-2">Số lượng</label>
                                        <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                    </div>
                                    <p><input type="button" value="Mua ngay" class="btn" id="button7" /></p>
                                    <script>
                                        button = document.getElementById("button7");
                                    button.onclick = function(){
                                    window.location.replace("thanhtoan.php");    
                                    }
                                    </script>
                                </form>
                                
                    </div>
                    </div>
                    </div>
        
        
        
                    <div class="col-md-3">
                    <div class="product-top">
                        <img src="images/bed4.jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Xem chi tiết">
                                <a href="giuong4.php">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </button>
                            
                            <button type="button" class="btn btn-secondary" title="Thêm vào giỏ hàng" onclick="addtoCart()">
                            <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    
                    
                    <div class="product-bottom text-center">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <h3>Giường-4</h3>
                    
                    <div class="product-description" data-name="Bed" data-price="25">
                        
                        <p class="product-price">&euro; 25</p>
                        <form class="add-to-cart" action="cart.php" method="post">
                                    <div>
                                        <label for="qty-2">Số lượng</label>
                                        <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                    </div>
                                    <p><input type="button" value="Mua ngay" class="btn" id="button8" /></p>
                                    <script>
                                        button = document.getElementById("button8");
                                    button.onclick = function(){
                                    window.location.replace("thanhtoan.php");    
                                    }
                                    </script>
                                </form>
                                
                    </div>
                    </div>
                    </div>	
                </div>
            </div>
        </div>
    </section>



  <hr class="featurette-divider">

<!------About Section------->	
	<section id="aboutus">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<h2>Giới thiệu</h2>
				<div class="about-content">
					Chào mừng bạn đến với Smart Furniture, số một về mọi thứ. Chúng tôi tận tâm cung cấp cho bạn những dịch vụ 
					tốt nhất, tập trung vào độ tin cậy, dịch vụ khách hàng và tính độc đáo. Được thành lập vào năm 2018 bởi Đặng 
					Hùng Phúc, Sports Compass đã đi được một chặng đường dài kể từ khi bắt đầu hoạt động ở Việt Nam. Khi anh Phúc 
					mới bắt đầu khởi nghiệp, với niềm đam mê nội thất cùng với nguồn tiềm lực phong phú đã thúc đẩy anh thực hiện 
					nghiên cứu chuyên sâu, bỏ công việc hàng ngày và cho anh động lực để chuyển sang làm việc chăm chỉ và nguồn cảm 
					hứng cho một cửa hàng trực tuyến đang bùng nổ. Hiện chúng tôi phục vụ khách hàng trên khắp Việt Nam và rất vui mừng
					được trở thành một phần của nhóm thương mại công bằng, thân thiện với môi trường của ngành nội thất. Chúng tôi hy 
					vọng bạn thích sản phẩm của chúng tôi nhiều như chúng tôi thích cung cấp chúng cho bạn. Nếu bạn có bất kỳ câu hỏi 
					hoặc ý kiến, xin vui lòng liên hệ với chúng tôi.
				</div>
			<br>
			</div>
			<div class="col-md-6 skills-bar">
			<br><br><br>
			<p>Tỉ lệ giao hàng thành công</p>
			<div class="progress">
			<div class="progress-bar" style="width:97%;">97%</div>
			</div>
			
			<p>Tăng trưởng khách hàng</p>
			<div class="progress">
			<div class="progress-bar" style="width:75%;">75%</div>
			</div>
			<p>Độ hài lòng của khách hàng</p>
			<div class="progress">
			<div class="progress-bar" style="width:98%;">98%</div>
			</div>
			</div>
		</div>
		
	</div>	
	<br>
    
<!------Services Section------->		
	<section id="services">
	
		<div class="container">
			<h1>Dịch vụ</h1>
			<div class="row services" >
				<div class= "col-md-4 text-center">
					<div class="icon">
					<i class="fa fa-phone"></i>
					</div>
					<h3> Hỗ trợ 24/7</h3>
					<p>về các vấn đề liên quan đến đơn hàng</p>
				</div>
			
				<div class="col-md-4 text-center">
					<div class="icon">
					<i class="fa fa-shopping-cart"></i>
					</div>
					<h3> Gửi trả hàng trong 30 ngày</h3>
					<p>nếu bạn không hài lòng về đơn hàng</p>
				</div>
			
				<div class="col-md-4 text-center">
					<div class="icon">
					<i class="fa fa-truck"></i>
					</div>
					<h3>Vận chuyển miễn phí</h3>
					<p>trên những đơn hàng 3 triệu đồng trở lên</p>
				</div>
			</div>
		</div>
	
	</section>
	

<!------COntact------------>	
<section id="contact">	
	
	<div class="container">
		<h1>Thông tin liên lạc</h1>
		<div class="row">
			<div class="col-md-6">
				<form class="contact-form">
				<div class="form-group">
				<input type="text" class="form-control" placeholder="Họ tên đầy đủ của bạn">
				</div>
				<div class="form-group">
				<input type="text" class="form-control" placeholder="Số điện thoại (+84)">
				</div>
				<div class="form-group">
				<input type="email" class="form-control" placeholder="Email">
				</div>
				<div class="form-group">
				<textarea class="form-control" rows="4" placeholder="Message"></textarea>
				</div>
				<button type="submit" id="btn" class="btn btn-primary">Gửi</button>
				<script language="javascript">
					var button = document.getElementById("btn");
					button.onclick = function(){
						alert("Thông tin liên lạc của bạn đã được gửi đến nhà bán hàng.");
					}
				</script>
				</form>
			</div>
			<div class="col-md-6 contact-info">
				<div class="follow"><b><i class="fa fa-map-marker"></i>  </b>2 Đ. Hải Triều, Bến Nghé, Quận 1, Thành phố Hồ Chí Minh</div>
				<div class="follow"><b><i class="fa fa-mobile"></i>  </b>(+84) 328246613</div>
				<div class="follow"><b><i class="fa fa-envelope"></i>  </b>Khongquenef@gmail.com</div>
				
				
				<div class="follow"><label><b>Mạng xã hội </b></label>
				<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
				<a href="https://www.youtube.com/"><i class="fa fa-youtube-play"></i></a>
				<a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a>
				<a href="https://myaccount.google.com/"><i class="fa fa-google-plus"></i></a>
				
				</div>
			</div>
			
		</div>

	</div>

</section>

</body>
</html>	
