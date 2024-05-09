<?php
global $mysqli;
include_once("config/config.php");
?>
<?php
$id = $_GET['id'];
$ctsp = "SELECT * FROM sanpham WHERE id_sp ='$id'";
$sql_sanpham = mysqli_query($mysqli, $ctsp);
$row = mysqli_fetch_array($sql_sanpham);
?>
<html>

<head>
    <title>Product details</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style/style.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_topnav.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_ourteam.css" media="screen" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style/product-detail.css" media="screen" type="text/css">
    <link rel="stylesheet" href="style/bootstrap.min.css" media="screen" type="text/css">

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
                <!--                    <form name="frmsanphamchitiet" id="frmsanphamchitiet" method="post" action="cart.php">-->

                <?php
                $ctsp = "SELECT * FROM sanpham WHERE id_sp ='$id'";
                $sql_sanpham = mysqli_query($mysqli, $ctsp);
                $row = mysqli_fetch_array($sql_sanpham);
                ?>
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
                        <!-- Tên Sản phẩm được thêm ở đây-->
                        <h3 class="product-title"><?php echo $row['tensp'] ?></h3>
                        <div class="rating">
                            <div class="stars">
                                <?php
                                $sao = $row['star'];
                                $count = 0;
                                while ($count++ < $sao) {
                                    ?>
                                    <i class="fa fa-star"></i>
                                    <?php
                                } ?>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </div>
                        <!--Mô tả sản phẩm ở đây-->
                        <p class="product-description"><?php echo $row['motangan'] ?></p>
                        <h4 class="price">Giá: <span><?php echo $row['gia'].'€' ?></span></h4>
                        <p class="vote"><strong>100%</strong> hàng <strong>Chất lượng</strong>, đảm bảo <strong>Uy tín</strong>!</p>
                        <div class="form-group">
                            <label for="soluong">Số lượng đặt mua:</label>
                            <form id="add-to-cart-form" >
                                <input type="number" min="1" max="1000" class="form-control" id="soluong" value="1">
                            </form>
                        </div>
                        <div class="main">
                            <input class="add-to-cart btn btn-default" id="btnThemVaoGioHang" value="Thêm vào giỏ hàng"
                                  type="submit" onclick="myFunction()">
                            <br> <br>
                            <script>
                                function myFunction(){
                                    alert("Cần phải đăng nhập trước khi thực hiện thao tác này!!!");
                                    window.location.href='login.php';
                                }
                            </script>

                        </div>

                    </div>
                </div>
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
<br>

<!------Contact------------>
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