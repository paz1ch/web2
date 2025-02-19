<?php
include 'config/config.php';
global $conn;
$admin = $_GET['admin'];
$sql = "SELECT * FROM cart_detail where xuly=3 ORDER BY CAST(tongtien AS DECIMAL(10,2)) DESC";
$result = $conn->query($sql);

$unique_products = [];
$total_quantity = 0;
$total_price = 0;
$count_tensp = 0;

while ($row = $result->fetch_assoc()) {
    // Split tensp values by '/'
    $tensp_array = explode('/', $row['tensp']);
    $soluong_array = explode('/', $row['soluong']);

    // Add products to the unique_products array if not already present
    foreach ($tensp_array as $product) {
        $count_tensp++;
    }
    foreach ($soluong_array as $quantity) {
        $total_quantity += (int)$quantity; // Cast quantity to integer and add to total
    }
    $total_price += (int)$row['tongtien'];
}
?>


<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
<html lang="en">
<head>
    <title>WEB ADMIN</title>
    <link rel="stylesheet" href="style/style_admin.css" />
    <link rel="stylesheet" href="style/style_statisticadmin.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container">
    <?php include ('navbar.php'); ?>


    <!-- top banner -->
    <div class="top-banner">
        <p>online store</p>
    </div>

    <section class="main">
        <div class="main-top"></div>
        <div class="background-section">
        <div class="main-body">
          <h1>DOANH SỐ</h1>
        </div>
        <table style="margin-bottom: 30px; border-collapse:collapse">
        <tr>
            <th>Số sản phẩm đã bán</th>
            <th>Số lượng bán</th>
            <th>Tổng tiền</th>
        </tr>
        <tr>
            <td style=" align-items:center; text-align:center; width: 33%">
                <img src="image/products.png" alt="" style="width: 35px;height:35px;object-fit:cover;margin-left: 0px">
                <p style=" padding:10px 15px;"><?php echo $count_tensp?></p>
            </td>
            <td style=" align-items:center; text-align:center">
                <img src="image/cart.png" alt="" style="width: 35px;height:35px;object-fit:cover;margin-left: 0px">
                <p style=" padding:10px 15px;"><?php echo $total_quantity?></p>
            </td>
            <td style=" align-items:center; text-align:center"">
                <img src="image/salary.jpg" alt="" style="width: 35px;height:35px;object-fit:cover;margin-left: 0px">
                <p style=" padding:10px 15px;"><?php echo $total_price . '€'?></p>
            </td>
        </tr>
        </table>
        </div>

        <div class="background-section">
        <div class="main-body">
          <h1>THỐNG KÊ</h1>
        </div>

        <table style="border-collapse:collapse">
            <tr>
                <th>Mã vận đơn</th>
                <th>Số sản phẩm</th>
                <th>Tổng tiền</th>
                <th>Thông tin</th>
            </tr>
            <?php
            $records_per_page = 10; // Số bản ghi mỗi trang

            // Tính tổng số bản ghi
            $sql_count = "SELECT COUNT(*) AS total_records FROM cart_detail where xuly=3";
            $result_count = $conn->query($sql_count);
            $row_count = $result_count->fetch_assoc();
            $total_records = $row_count['total_records'];

            // Tính tổng số trang
            $total_pages = ceil($total_records / $records_per_page);

            // Xác định trang hiện tại
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

            // Tính OFFSET cho truy vấn SQL mới
            $offset = ($current_page - 1) * $records_per_page;

            // Sửa đổi truy vấn SQL để chỉ trả về số lượng bản ghi phù hợp cho trang hiện tại
            $sql_offset = "SELECT * FROM cart_detail where xuly=3 ORDER BY CAST(tongtien AS DECIMAL(10,2)) DESC 
            LIMIT $records_per_page OFFSET $offset";
            $result_offset = $conn->query($sql_offset);

            // Tạo liên kết phân trang
            $pagination = "<div class='pagination' style='font-size: 20px;'> Trang ";
            for ($i = 1; $i <= $total_pages; $i++) {
                $pagination .= "<a style='text-decoration: none; padding: 0; min-width: 2.5rem; text-align: center; height: 1.875rem; font-size: 1.25rem; margin-left: .9375rem; margin-right: .9375rem; color: rgba(0,0,0,.4); display: inline; justify-content: center;' href='?admin=$admin&page=$i'>$i</a>";
            }
            $pagination .= "</div>";

            while ($row = $result_offset->fetch_assoc()){
                $soluong_array = explode('/', $row['soluong']);
                $total_soluong = 0;
                foreach ($soluong_array as $value){
                    $total_soluong += (int)$value;
                }
                ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $total_soluong ?></td>
                <td><?php echo $row['tongtien'].'€' ?></td>
                <td>
                    <a href="chitietdonhang_statistic.php?admin=<?php echo $admin?>&mvd=<?php echo $row['id']?>">
                        Chi tiết
                    </a>
                </td>
            </tr>
            <?php } ?>
        </table>
        <div style="padding-top: 30px">
            <?php
            echo $pagination;
            ?>
        </div>
    </section>

    </div>
</body>
</html>