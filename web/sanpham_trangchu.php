<?php
include_once("config/config.php");
global $mysqli;
$username = $_GET['username'];

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
    <?php include 'header_user.php'; ?>
    </section>
    <!--Danh mục-->
    <section class="featured-categories" id="products">
        <div class="container">
            <div class="title-box">
                <h2>DANH MỤC</h2>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h1>Giường</h1>
                    <a href="danhmuc.php?username=<?php echo $username?>&id_danhmuc=1">
                        <img src="images/bed5.jpg">
                    </a>
                </div>
                <div class="col-md-3">
                    <h1>Ghế</h1>
                    <a href="danhmuc.php?username=<?php echo $username?>&id_danhmuc=2">
                        <img src="images/sofa5.jpg">
                    </a>
                </div>
                <div class="col-md-3">
                    <h1>Bàn</h1>
                    <a href="danhmuc.php?username=<?php echo $username?>&id_danhmuc=3">
                        <img src="images/table5.jpg">
                    </a>
                </div>
                <div class="col-md-3">
                    <h1>Gương</h1>
                    <a href="danhmuc.php?username=<?php echo $username?>&id_danhmuc=4">
                        <img src="images/mirror5.jpg">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- top nav -->
    <?php

    if (isset($_GET['page'])) {
        $get_page = $_GET['page'];
    } else {
        $get_page = '';
    }
    if ($get_page == '' || $get_page == 1) {
        $page1 = 0;
    } else {
        $page1 = ($get_page * 8) - 8;
    }

    $sql = "SELECT * FROM sanpham where trang_thai!=0 ORDER BY id_sp DESC LIMIT $page1,8";
    $sql_sanpham = mysqli_query($mysqli, $sql);
    ?>
    <br>
    <section class="on-sale">
        <div id="site">
            <div class="container">
                <div class="title-box">
                    <h2>ĐỒ NỘI THẤT</h2>
                </div>

                <div class="row">
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
                                    <p class="product-price"><?php echo $row["gia"].'€' ?></p>
                                    <input type="hidden" name="id_product" value="<?php echo $row['id_sp']?>">
                                    <label for="qty-<?php echo $row['id_sp']?>"">Số lượng</label>
                                    <input class="product-value" type="number" min="1" max="10000" name="quantity" value="1" >
                                    <p><input name="themvaogiohang" type="submit" value="Mua" class="btn"/></p>
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
    <br>
    <div style="text-align: center;">
        <p style="font-size: 20px;">Trang :
            <?php
            $sql_trang = mysqli_query($mysqli, "SELECT * FROM sanpham where trang_thai!=0");
            $count = mysqli_num_rows($sql_trang);
            $a = ceil($count / 8);

            for ($b = 1; $b <= $a; $b++) {
                echo '<a class="phantrang" href="sanpham_trangchu.php?username='.$username.'&page=' . $b . '" style="text-decoration:none;">' . ' ' . $b . ' ' . '</a>';
            }

            ?>
        </p>
    </div>
<br><br>
</body>

</html>