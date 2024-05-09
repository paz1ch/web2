<?php
global $mysqli;
include_once("config/config.php");
if (isset($_POST['themvaogiohang'])){
    echo '<script type="text/javascript">
        alert("Cần phải đăng nhâp !!!");
        window.location.href = "login.php";
    </script>';
}
?>
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
        <?php
        include('header.php');
        ?>

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

    <!-- recommended -->
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
                                    <a href="productdetail.php" class="btn btn-secondary" title="Xem chi tiết">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <form id="add-to-cart-form" method="post">
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
                                    <input type="hidden" name="id_product" value="<?php echo $row['id_sp']?>">
                                    <label for="qty-<?php echo $row['id_sp']?>">Số lượng</label>
                                    <input type="number" min="1" max="1000" name="quantity" value="1"/>
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
            $sql_trang = mysqli_query($mysqli, "SELECT * FROM sanpham");
            $count = mysqli_num_rows($sql_trang);
            $a = ceil($count / 8);

            for ($b = 1; $b <= $a; $b++) {
                echo '<a href="products.php?page=' . $b . '" style="text-decoration:none;">' . ' ' . $b . ' ' . '</a>';
            }

            ?>
        </p>
    </div>



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
                <div class="row services">
                    <div class="col-md-4 text-center">
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
                                button.onclick = function() {
                                    alert("Thông tin liên lạc của bạn đã được gửi đến nhà bán hàng.");
                                }
                            </script>
                        </form>
                    </div>
                    <div class="col-md-6 contact-info">
                        <div class="follow"><b><i class="fa fa-map-marker"></i> </b>2 Đ. Hải Triều, Bến Nghé, Quận 1, Thành phố Hồ Chí Minh</div>
                        <div class="follow"><b><i class="fa fa-mobile"></i> </b>(+84) 328246613</div>
                        <div class="follow"><b><i class="fa fa-envelope"></i> </b>Khongquenef@gmail.com</div>


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