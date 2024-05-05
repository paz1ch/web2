<?php
include_once("config/config.php");
global $mysqli;
$username = $_GET['username'];
if (isset($_POST['dathang'])){
    echo '<script type="text/JavaScript">
                window.location.href = "select_address.php?username=' . ($username) . '";
              </script>';
}
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
        include 'header_user.php';
        ?>
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

    $sql = "SELECT * FROM sanpham ORDER BY id_sp DESC LIMIT $page1,8";
    $sql_sanpham = mysqli_query($mysqli, $sql);
    ?>
    <section class="on-sale">
        <div id="site">
            <div class="container">
                <div class="title-box">
                    <h2>Đồ nội thất</h2>
                </div>

                <div class="row">
                    <?php
                    while ($row = mysqli_fetch_array($sql_sanpham)) {
                    ?>
                        <div class="col-md-3">
                            <div class="product-top">
                                <img src="images/<?php echo $row['image_sp'] ?>" alt="">
                                <div class="overlay-right">
                                    <button type="button" class="btn btn-secondary" title="Xem chi tiết">
                                        <a href="chitiet_sanpham.php?username=<?php echo urlencode($username); ?>&id=<?php echo $row['id_sp']; ?>">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </button>
                                    <form id="add-to-cart-form" action="cart.php?username=<?php echo $username?>&action=add" method="post">
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
                                    <p class="product-price"><?php echo $row["gia"] ?></p>
                                        <div>
                                            <label for="qty-2">Số lượng</label>
                                            <input type="number" min="1" max="1000" name="quantity[<?php echo $row['id_sp']?>]"  class="qty" value="1"/>
                                        </div>
                                    </form>
                                    <form class="add-to-cart">
                                        <br>
                                        <p><input name="dathang" type="submit" value="Mua ngay" class="btn" id="button" /></p>
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
            $sql_trang = mysqli_query($mysqli, "SELECT * FROM sanpham");
            $count = mysqli_num_rows($sql_trang);
            $a = ceil($count / 8);

            for ($b = 1; $b <= $a; $b++) {
                echo '<a href="products.php?page=' . $b . '" style="text-decoration:none;">' . ' ' . $b . ' ' . '</a>';
            }

            ?>
        </p>
    </div>
</body>

</html>