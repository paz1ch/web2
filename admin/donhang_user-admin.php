<?php
include ('config/config.php');
global $conn;
$username_admin = $_GET['admin'];
$hoten = $_GET['name'];
$sql = "SELECT * from cart_detail where hoten = '$hoten' order by CAST(tongtien AS DECIMAL(10,2))  desc";
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
            <h1>Các đơn hàng của khách hàng <?php echo $hoten?></h1>
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
        $records_per_page = 5; // Số bản ghi mỗi trang

        // Tính tổng số bản ghi
        $sql_count = "SELECT COUNT(*) AS total_records FROM cart_detail";
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
        $sql_offset = "SELECT * FROM cart_detail LIMIT $records_per_page OFFSET $offset";
        $result_offset = $conn->query($sql_offset);

        // Tạo liên kết phân trang
        $pagination = "<div class='pagination'>";
        for ($i = 1; $i <= $total_pages; $i++) {
            $pagination .= "<a href='?admin=$username_admin&name=$hoten&page=$i'>$i</a>";
        }
        $pagination .= "</div>";

        // xuat du lieu ra table cart_detail
        $dem_fail=0;
        while ($row = $result->fetch_assoc()) {
            $dem_fail++;
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

        // Kiểm tra nếu không tìm thấy bản ghi
        if ($dem_fail==0) {
            echo 'Không tìm thấy san pham';
            exit;
        }
        ?>
        <!-- nut quay lai trang-->
            <div class="button-back" title="Quay về trang trước">
                <a href="user_statistic-admin.php?admin=<?php echo $username_admin?>">
                    <i class="fa-solid fa-backward-step fa-xl" style="color: black;"></i>
                </a>
            </div>
        </div>
    </section>


</div>
</body>

</html>