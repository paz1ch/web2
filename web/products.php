<?php
    include_once("config/config.php");
?>

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
	<section id="home">
    <?php
            include 'header.php';
        ?>
	</section>
	<!-- top nav -->	
    <?php 
        $sql = "SELECT * FROM sanpham ORDER BY id_sp DESC";
        $sql_sanpham = mysqli_query($mysqli,$sql);
    ?>
	<section class="on-sale">
        <div id="site">
            <div class="container">
                <div class="title-box">
                <h2>ĐỒ NỘI THẤT</h2>
                </div>
                <script>
                    function addtoCart(){
                        alert("Cần phải đăng nhập");
                        window.location.replace("login.php")
                    }
                </script>
                
                <div class="row">
                <?php 
                     while($row = mysqli_fetch_array($sql_sanpham)){                        
                    
                ?>
                    <div class="col-md-3">
                    <div class="product-top">
                        <img src="images/<?php echo $row['image_sp']?>" alt="">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Xem chi tiết">
                                <a href="products.php">
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
                        
                        <p class="product-price"><?php echo $row["gia"] ?></p>
                        <form class="add-to-cart" action="cart.php" method="post">
                                <div>
                                    <label for="qty-2">Số lượng</label>
                                    <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
                                </div>
                                <p><input type="button" value="Mua ngay" class="btn" id="button" /></p>
                                <script>
                                    button = document.getElementById("button");
                                    button.onclick = function(){
                                        alert("Cần phải đăng nhập")
                                    window.location.replace("login.php");    
                                    }
                                </script>
                        </form>
                                
                    </div>
                    </div>
                    </div>
                    <?php 
                    }
                    ?>
                    
                    
                    
                     
                    
                    </div>	
                </div>
            </div>
        </div>
    </section>
  <br><br><br>
</body>
</html>	
