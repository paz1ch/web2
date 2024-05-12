<?php
include_once("config/config.php");
global $mysqli;
if (isset($_POST['themvaogiohang'])){
    echo '<script type="text/JavaScript">
                alert("Vui lòng đăng nhập");
                window.location.href = "login.php";
              </script>';
}
?>
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
    <style>
        .fa{
            line-height: revert!important;
        }
    </style>
</head>


<body>
<<<<<<< HEAD
	<!-- header -->
	<?php
	include_once("header.php");
	?>
	<!--end header-->
    <br><br><br>
    <main role="main">
        <div class="container mt-4">
            <form name="frmTimKiem" method="post" action="">
                <button class="tim-kiem">Tìm kiếm nâng cao
                    <div class="star-1">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
                    </div>
                    <div class="star-2">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
                    </div>
                    <div class="star-3">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
                    </div>
                    <div class="star-4">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
                    </div>
                    <div class="star-5">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
                    </div>
                    <div class="star-6">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><defs></defs><g id="Layer_x0020_1"><metadata id="CorelCorpID_0Corel-Layer"></metadata><path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path></g></svg>
                    </div>
                </button>
                <div class="row">
                    <aside class="col-sm-4">
                        <p>Bộ lọc </p>
                        <div class="card">
                            <!-- Tìm kiếm theo tên sản phẩm -->
                            <article class="card-group-item">
                                <header class="card-header">
                                    <h6 class="title">Tên sản phẩm </h6>
                                </header>
                                <div class="filter-content">
                                    <div class="card-body">
                                        <input class="form-control" type="text" placeholder="Tìm kiếm" aria-label="Search" name="tensp" value="">
                                    </div>
                                </div>
                            </article>

                            <!-- Tìm kiếm theo Loại sản phẩm -->
                            <article class="card-group-item">
                                <header class="card-header">
                                    <h6 class="title">Loại sản phẩm </h6>
                                </header>
                                <div class="filter-content">
                                    <div class="card-body">
                                        <select name="type_products">
                                            <option value="0">--chọn--</option>
                                            <option value="1">Giường</option>
                                            <option value="2">Ghế</option>
                                            <option value="3">Bàn</option>
                                            <option value="4">Gương</option>
                                        </select>
                                    </div>
                                </div>
                            </article>

                            <!-- Tìm kiếm theo khoảng giá tiền -->
                            <article class="card-group-item">
                                <header class="card-header">
                                    <h6 class="title">Khoảng tiền </h6>
                                </header>
                                <div class="filter-content">
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Từ</label>
                                                <input type="number" class="custom-range" min="0" max="50000000" id="min" name="min" value="0">
                                            </div>
                                            <div class="form-group col-md-6 text-right">
                                                <label>Đến</label>
                                                <input type="number" class="custom-range" min="0" max="50000000" id="max" name="max" value="50000000">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <div class="text-center">
                                <button type="reset" id="Search-button" class="btn-warnin" name="delete" >
                                    <span>Xóa bộ lọc</span>

                                    <button type="submit" class="btn-warnin" name="search" id="Search-button" >
                                        <span>Tìm kiếm</span>
                                    </button>
                            </div>
                        </div>
                    </aside>

                    <!-- Giải thuật duyệt và render Danh sách sản phẩm theo dòng, cột của Bootstrap -->
                    <div class="col-sm-8 mt-2">
=======
<!-- header -->
<?php
include_once("header.php");
?>
<!--end header-->
<main role="main">
    <div class="container mt-4">
        <form name="frmTimKiem" method="post">
            <h1 class="text-center" style="margin-top: 75px;">Sản phẩm tìm thấy</h1>
            <br>
            <section class="on-sale">
                <div id="site">
                    <div class="container">
>>>>>>> ea97da4bc23785d2fdb40b665bf8d43549528c31
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
                                        <a href="productdetail.php?id=<?php echo $row['id_sp'] ?>" class="btn btn-secondary" title="Xem chi tiết">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <form id="add-to-cart-form" action="" method="post">
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
                                        <p class="product-price"><?php echo $row["gia"].'€' ?></p>
                                        <input type="hidden" name="id_product" value="<?php echo $row['id_sp']?>">
                                        <label for="qty-<?php echo $row['id_sp']?>">Số lượng</label>
                                        <input type="number" min="1" max="1000" name="quantity" value="1"/>
                                        <p><input name="themvaogiohang" type="submit" value="Mua" class="btn"/></p>
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
                echo '<a href="&search=1&searchtext=' . $search . '&page=' . $b . '" style="text-decoration:none;">' . ' ' . $b . ' ' . '</a>';
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