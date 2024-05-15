<?php
include_once("config/config.php");
global $mysqli;
$username = $_GET['username'];
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
<?php
include_once("header_user.php");
?>
<!--end header-->
<br><br><br>
<main role="main">
    <div class="container mt-4">
        <form name="frmTimKiem" method="get" action="">
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
                                    <input type="hidden" name="username" value="<?php echo $username?>">
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
                                        <option value="0">--Chọn--</option>
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
                    <div class="row">
                        <div class="col-md-12">
                            <h6>Kết quả</h6>
                        </div>
                    </div>
                    <?php
                    $dem_fault = 0;
                    $sql = "SELECT * FROM sanpham WHERE 1=1 and trang_thai!=0";
                    $page1 = 0;

                    if (isset($_GET['page'])) {
                        $get_page = (int)$_GET['page'];
                        if ($get_page > 1) {
                            $page1 = ($get_page * 8) - 8;
                        }
                    }

                    if (isset($_GET['search'])) {
                        $tensp =$_GET['tensp'];
                        $min = $_GET['min'];
                        $max = $_GET['max'];
                        $type = $_GET['type_products'];

                        if (!empty($tensp)) {
                            $sql .= " AND tensp LIKE '%$tensp%'";
                        }

                        if ($type != '0') {
                            $sql .= " AND id_danhmuc = '$type'";
                        }

                        if ($type == '0' && $min !== 0 && $max !== 0) {
                            $sql .= " AND gia BETWEEN $min AND $max";
                        }
                    }
                    $sql .= " LIMIT $page1, 8";
                    $result = $mysqli->query($sql);

                    $count = 0;
                    while ($row = $result->fetch_assoc()) {
                        if ($count % 2 == 0) {
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
                                            <a class="btn btn-sm btn-outline-secondary" href="chitiet_sanpham.php?username=<?php echo $username?>id=<?php echo $row['id_sp']?>">Xem chi tiết</a>
                                        </div>
                                        <small class="text-muted text-right">
                                            <b style="font-size: medium;"><?php echo $row['gia'].'€'?></b>
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
                    if($dem_fault==0) echo '<div>Không tìm thấy sản phẩm nào</div>';
                    ?>
                </div>
            </div> <!-- row.// -->
        </form>
    </div>
    <!-- End block content -->
</main>

<!-- end footer -->

<div style="padding-bottom: 10px;"></div>


<!-- pagination -->
<br>
<div style="text-align: center;">
    <p style="font-size: 20px;">
        <?php
        $sql_trang = "SELECT * from sanpham where 1=1 and trang_thai!=0";

        if(isset($_GET['search'])){
            $tensp = $_GET['tensp'];
            $min = $_GET['min'];
            $max = $_GET['max'];
            $type = $_GET['type_products'];

            if (!empty($tensp)) {
                $sql_trang .= " AND tensp LIKE '%$tensp%'";
            }

            if ($type != '0') {
                $sql_trang .= " AND id_danhmuc = '$type'";
            }

            if ($type == '0' && $min !== 0 && $max !== 0) {
                $sql_trang .= " AND gia BETWEEN $min AND $max";
            }

            $result = $mysqli->query($sql_trang);
            $count = mysqli_num_rows($result);
            $a = ceil($count / 8);

            for ($b = 1; $b <= $a; $b++) {
                echo '<a class="phantrang" href="timkiem_trangchu.php?username=' . ($username) .
                    '&tensp=' . ($tensp) .
                    '&min=' . ($min) .
                    '&max=' . ($max) .
                    '&type_products=' . ($type) .
                    '&page=' . $b .
                    '&search=Submit" style="text-decoration:none;"> ' . $b . ' </a>';

            }
        }
        else{
            $result = $mysqli->query($sql_trang);
            $count = mysqli_num_rows($result);
            $a = ceil($count / 8);
            for ($b = 1; $b <= $a; $b++) {
                echo '<a class="phantrang" href="?username='.$username.'&page=' . $b . '" style="text-decoration:none;"> ' . $b . ' </a>';
            }
        }

        ?>
    </p>
</div>
</section>
</body>
<footer class="footer mt-auto py-3">
    <div class="container">
        <p class="float-right">
            <a href="#">Về đầu trang</a>
        </p>
    </div>
</footer>
<br><br>


</html>