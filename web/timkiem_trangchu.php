<?php
include ('config/config.php');
global $mysqli;
$username=$_GET['username'];
?>
<!DOCTYPE html>
<html lang="vi">
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
    <section id="home">
        <?php include('header_user.php'); ?>

    </section>

    <!--end header-->
    <br><br><br>
    <main role="main">
        <div class="container mt-4">
            <form name="frmTimKiem" method="post" action="">
                <h1 class="text-center" style="margin-top: 75px;">Tìm kiếm sản phẩm</h1>
                <div class="row">
                    <div class="col col-md-12">
                        <div class="text-center">
                            <input type="reset" id="btnReset" class="btn btn-warning"
                                   name="delete" value="Xóa bộ lọc">
                            <input type="submit" class="btn btn-primary btn-lg"
                                   name="search" value="Tìm kiếm">
                        </div>
                    </div>
                </div>
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
                                            <option value="0">--chon--</option>
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
                        </div>
                    </aside>

                    <!-- Giải thuật duyệt và render Danh sách sản phẩm theo dòng, cột của Bootstrap -->
                    <div class="col-sm-8 mt-2">
                        <div class="row">
                            <div class="col-md-12">
                                <h6>Tìm kiếm</h6>
                            </div>
                        </div>
                        <?php
                        $sql = "SELECT * from sanpham";
                        $result = $mysqli->query($sql);
                        $dem_fault=0;

                        if (isset($_POST['search'])){
                            $tensp = $_POST['tensp'];
                            $min = $_POST['min'];
                            $max = $_POST['max'];
                            $type = $_POST['type_products'];

                            // Base query
                            $sql = "SELECT * FROM sanpham WHERE 1=1";

                            if (!empty($tensp)) {
                                $sql .= " AND tensp LIKE '%$tensp%'";
                            }

                            if ($type != '0') {
                                $sql .= " AND id_danhmuc='$type'";
                            }

                            if ($type == '0') {
                                $sql .= " AND REPLACE(gia, '€', '') BETWEEN $min AND $max";
                            }
                            $result = $mysqli->query($sql);
                        }
                        $count = 0;
                        while ($row = $result->fetch_assoc()) {
                            if ($count % 2 == 0) {
                                // Mở một dòng mới nếu là sản phẩm đầu tiên hoặc sau mỗi 2 sản phẩm
                                echo '<div class="row">';
                            }
                            ?>
                            <div class="col-md-6">
                                <div class="card mb-4 shadow-sm">
                                    <a>
                                        <img class="bd-placeholder-img card-img-top" width="100%" height="350" src="images/<?php echo $row['image_sp'] ?>">
                                    </a>
                                    <div class="card-body">
                                        <a>
                                            <h5><?php $dem_fault++;echo $row['tensp'] ?></h5>
                                        </a>
                                        <p class="card-text"><?php echo $row['motangan'] ?></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <a class="btn btn-sm btn-outline-secondary" href="chitiet_sanpham.php?username=<?php echo $username?>&id=<?php echo $row['id_sp']?>">Xem chi tiết</a>
                                            </div>
                                            <small class="text-muted text-right">
                                                <b style="font-size: medium;"><?php echo $row['gia']?></b>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $count++; // Tăng đếm
                            if ($count % 2 == 0) {
                                // Đóng dòng hiện tại nếu đã hiển thị 2 sản phẩm
                                echo '</div>';
                            }
                        }
                        if ($count % 2 != 0) {
                            // Đóng thẻ div mở còn dư nếu số sản phẩm là lẻ
                            echo '</div>';
                        }
                        if($dem_fault==0) echo 'ko tim thay san pham';
                        ?>
                    </div>
                </div> <!-- row.// -->
            </form>
        </div>
        <!-- End block content -->
    </main>
    <br>


    <!-- footer -->
    <footer class="footer mt-auto py-3">
        <div class="container">
            <p class="float-right">
                <a href="#">Về đầu trang</a>
            </p>
        </div>
    </footer>
    <!-- end footer -->

    <div style="padding-bottom: 10px;"></div>

    </section>
</body>

</html>