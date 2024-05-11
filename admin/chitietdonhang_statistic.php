<?php
include ('config/config.php');
global $conn;
$username_admin = $_GET['admin'];
$mvd = $_GET['mvd'];
$sql = "SELECT * from cart_detail where id = '$mvd'";
$result = $conn->query($sql);
?>

<span style="font-family: verdana, geneva, sans-serif;">
<!DOCTYPE html>
<html lang="en">
<head>
    <title>WEB ADMIN</title>
    <link rel="stylesheet" href="style/style_admin.css" />
    <link rel="stylesheet" href="style/style_cartadmin.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
    <?php include 'navbar.php'; ?>


  <!-- top banner -->
    <div class="top-banner">
        <p>online store</p>
    </div>

    <section class="main">
        <div class="main-top"></div>
        <div class="background-section">
        <div class="main-body">
            <h1></h1>
        </div>
        <table class="table-main">
            <tr class="tr-main">
                <th class="sanpham" colspan="2">Sản phẩm</th>
                <th class="doanhthu">Tổng tiền</th>
                <th class="vanchuyen">Phương thức thanh toán</th>
                <th class="thoigian">Thời gian đặt hàng</th>
                <th class="trangthai">Trạng thái</th>
            </tr>
        </table>
        <?php
        while ($row = $result->fetch_assoc()) {
            $tensp_array = explode('/', $row['tensp']);
            $soluong_array = explode('/', $row['soluong']);
            $count_slash = count($tensp_array); // Số lượng các phần tử trong $tensp_array

            // Output the table structure outside the loop
            ?>
            <table class="table-data">
                <tr class="tr-data">
                    <th class="mavandon" colspan="8">
                        Mã vận đơn: <?php echo $row['id']?>
                    </th>
                </tr>
                <?php foreach ($tensp_array as $key => $product) { ?>
                    <tr>
                    <td class="sanpham">
                        <?php echo $product?>
                    </td>
                    <td class="soluong">Số lượng: x<?php echo $soluong_array[$key]?></td>
                    <?php if ($key === 0)// Apply rowspan to the first occurrence of the cell
                    {
                        ?>
                        <td class="doanhthu" rowspan="<?php echo $count_slash?>">
                            <?php echo $row['tongtien'].'€'?>
                        </td>
                        <td class="vanchuyen" rowspan="<?php echo $count_slash?>">
                            <?php echo $row['payment']?>
                        </td>
                        <td class="date" rowspan="<?php echo $count_slash?>"><?php echo $row['time_shipping']?></td>
                        <td class="trangthai" rowspan="<?php echo $count_slash?>">
                            <?php
                            if ($row['xuly']==1){
                                echo 'Đơn chưa xác nhận';
                            }
                            else if ($row['xuly']==2){
                                echo 'Đơn đã xác nhận';
                            }
                            else if ($row['xuly']==3){
                                echo 'Đơn giao thành công';
                            }
                            else if ($row['xuly']==4){
                                echo 'Hủy đơn';
                            }
                            ?>
                        </td>
                        <?php
                    }
                    ?>
                </tr>
                <?php } ?>
                <tr>
                    <th class="name">Tên</th>
                    <th class="sdt">Số điện thoại</th>
                    <th colspan="6" class="address">Địa chỉ</th>
                </tr>
                <tr>
                    <td class="name">
                        <?php echo $row['hoten']?>
                    </td >
                    <td class="sdt">
                        <?php echo $row['sdt']?>
                    </td>
                    <td colspan="6" class="address">
                        <?php echo $row['diachi']?>
                    </td>
                </tr>
            </table>
            <?php
        }
        ?>
        <!-- nut quay lai trang-->
            <div class="button-back" title="Quay về trang trước">
                <a href="cart_statistic-admin.php?admin=<?php echo $username_admin?>">
                    <i class="fa-solid fa-backward-step fa-xl" style="color: black;"></i>
                </a>
            </div>
        </div>
    </section>


</div>
</body>

</html>