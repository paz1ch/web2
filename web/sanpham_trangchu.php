<!DOCTYPE html>
<html>
<head>
<title>Sản phẩm</title>
<meta charset="utf-8" />
<meta name="viewpoint" content="width=device-width,initial-scal=1.0">
<meta http-equip="X-UA-compatible" content="ie=edge">
<link rel="stylesheet" href="style/style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="style/style_topnav.css" media="screen" type="text/css" />
<link rel="stylesheet" href="style/style_pagination.css">
<link rel="stylesheet" href="style/style_ourteam.css" media="screen" type="text/css">
<link rel="stylesheet" href="style/style_products.css" media="screen" type="text/css">


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="title-box-products">
            <h2>Phân loại</h2>
        </div>
    </div>

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
			<a  href="search.php" class="account">Tìm kiếm</a>
			<div class="search-container">
                <form action="timkiem_trangchu.php">
				<input type="text" placeholder="Tìm kiếm.." name="search">
				<button type="submit"><i class="fa fa-search"> </i></button>
				</form>
		    </div>
		</div>
	</section>
	<!-- top nav -->	
    <section class="featured-categories" id="products">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h1>GIƯỜNG</h1>
					<img src="images/bed5.jpg">
				</div>
				<div class="col-md-3">
					<h1>GHẾ</h1>
					<img src="images/sofa5.jpg">
				</div>
				<div class="col-md-3">
					<h1>BÀN</h1>
					<img src="images/table5.jpg">
				</div>
				<div class="col-md-3">
					<h1>GƯƠNG</h1>
					<img src="images/mirror5.jpg">
				</div>		
			</div>
		</div>
	</section>
    <!--  -->
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


  <br><br><br>
</body>
</html>	
