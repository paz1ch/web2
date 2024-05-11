<?php
include 'config/config.php';
global $conn;
$admin = $_GET['admin'];
$sql = "SELECT * FROM cart_detail ORDER BY CAST(tongtien AS DECIMAL(10,2)) DESC";
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
            $sql = "SELECT * FROM cart_detail ORDER BY CAST(tongtien AS DECIMAL(10,2)) DESC";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()){
                $tensp_array = explode('/', $row['tensp']);
                $count_slash_tensp = count($tensp_array); // Số lượng các phần tử trong $tensp_array
                ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $count_slash_tensp ?></td>
                <td><?php echo $row['tongtien'].'€' ?></td>
                <td>
                    <a href="chitietdonhang_statistic.php?admin=<?php echo $admin?>&mvd=<?php echo $row['id']?>">
                        Chi tiết
                    </a>
                </td>
            </tr>

            <?php } ?>
        </table>
        </div>
    </section>

    </div>
</body>
</html>