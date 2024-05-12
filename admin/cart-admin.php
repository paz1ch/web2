<?php
include ('config/config.php');
global $conn;
$username_admin = $_GET['admin'];
$sql_offset = "SELECT * from cart_detail";

if (isset($_POST['update'])){
    $username = $_POST['username'];
    $selection = $_POST['selection'];
    $id_mvd= $_POST['id_mvd'];
    if(!empty($selection)){
        $sql_offset = "UPDATE cart_detail SET xuly = '$selection' WHERE username = '$username' and id='$id_mvd';";
        $result_offset = $conn->query($sql_offset);
        echo '<script>
        alert("Cập nhật thành công");
        window.location.href="cart-admin.php?admin='.$username_admin.'";
        </script>';
    }
    else{
        echo '<script>
        alert("Vui lòng chọn Tình trạng đơn hàng trước khi cập nhật");
        </script>';
    }
}
function search(&$sql_offset)
{
    if (isset($_POST['search'])) {
        // Sanitize input
        $from_date = $_POST['from-date'];
        $to_date = $_POST['to-date'];
        $donhang = $_POST['donhang'];
        $city = $_POST['city'];
        $district = $_POST['district'];

        if (!empty($from_date) && !empty($to_date)) {
            $sql_offset .= " AND `time_shipping` BETWEEN '$from_date' AND '$to_date'";
        }
        if (!empty($donhang)) {
            $sql_offset .= " AND `xuly` = '$donhang'";
        }
        if (!empty($city)) {
            $sql_offset .= " AND `diachi` LIKE '%$city%'";
        }
        if (!empty($district)) {
            $sql_offset .= " AND `diachi` LIKE '%$district%'";
        }
        if (empty($from_date) && empty($to_date) && empty($donhang) && empty($city) && empty($district)) {
            echo '<script>
        alert("Vui lòng nhập liệu trước khi Lọc");
        </script>';
        }
    }

}
?>
<span style="font-family: verdana, geneva, sans-serif;">
<!DOCTYPE html>
<html lang="en">

<head>
<title>WEB ADMIN</title>
<link rel="stylesheet" href="style/style_admin.css" />
<link rel="stylesheet" href="style/style_cartadmin.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
<div class="container">
    <?php include 'navbar.php'; ?>
  <!-- top banner -->
    <div class="top-banner">
        <p>Online store</p>
    </div>

    <section class="main">
    <div class="main-top"></div>
    <div class="background-section">
        <div class="main-body">
            <h1>TÌM KIẾM ĐƠN HÀNG</h1>
        </div>
            <form action="" class="form-search" method="post">
                <h5 class="h5-search">- - Tìm kiếm - -</h5>

                <!--    tim kiem theo thoi gian nhan hang    -->
                <div class="date-search-cart-admin">
                    <label for="" class="label">Từ ngày:</label>
                    <input type="date" name="from-date" class="select">
                    <label for="" class="label">Đến ngày:</label>
                    <input type="date" class="select" name="to-date">
                </div>

                <!--    tim kiem theo dia chi    -->
                <div class="address-search-cart-admin">
                    <input class="label2" type="text" name="city" placeholder="Tỉnh thành phố">
                    <input class="label3" type="text" name="district" placeholder="Quận huyện">
                </div>

                <!--    Tim kiem theo tinh trang don hang    -->
                <div class="abcde">
                    <label for="" class="label">Tình trạng đơn hàng</label>
                    <select name="donhang" >
                        <option value="">--Chọn--</option>
                        <option value="1">Chưa xác nhận</option>
                        <option value="2">Xác nhận</option>
                        <option value="3">Giao thành công</option>
                        <option value="4">Hủy đơn</option>
                    </select>
                </div>
                <div class="nut-loc-va-reset">
                    <input type="submit" name="search" id="submitbutton" style="display: none">
                    <label for="submitbutton">
                    <span  class="button">Lọc</span>
                    </label>
                    <input type="submit" id="resetbutton" name="reset" class="button" value="Reset">
                </div>
            </form>
    </div>
    <div class="background-section">
        <div class="main-body">
        <h1>QUẢN LÝ ĐƠN HÀNG</h1>
    </div>
    <table class="table-main">
    <tr class="tr-main">
        <th class="sanpham" colspan="2">Sản phẩm</th>
        <th class="doanhthu">Tổng tiền</th>
        <th class="vanchuyen">Phương thức thanh toán</th>
        <th class="thoigian">Thời gian nhận hàng (dự kiến)</th>
        <th class="trangthai">Trạng thái</th>
        <th class="thaotac" colspan="2">Cập nhật tình trạng đơn</th>
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

    // Sửa đổi truy vấn SQL để chỉ trả về số lượng bản ghi phù hợp cho trang hiện tại=
    $sql_offset .= " WHERE 1=1 ";
    search($sql_offset); // Call the search function to modify the query
    $sql_offset .= " LIMIT $records_per_page OFFSET $offset"; // Add LIMIT and OFFSET clauses
    $result_offset = $conn->query($sql_offset);

    // Tạo liên kết phân trang
    $pagination = "<div class='pagination' style='font-size: 20px;'> Trang ";
    for ($i = 1; $i <= $total_pages; $i++) {
        $pagination .= "<a style='text-decoration: none; padding: 0; min-width: 2.5rem; text-align: center; height: 1.875rem; font-size: 1.25rem; 
        margin-left: .9375rem; margin-right: .9375rem; color: rgba(0,0,0,.4); 
        display: inline; justify-content: center;' href='?admin=$username_admin&page=$i'>$i</a>";
    }
    $pagination .= "</div>";

    // xuat du lieu ra table cart_detail
    $dem_fail=0;
    while ($row = $result_offset->fetch_assoc()) {
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
                    <form method="post">
                        <td class="option" rowspan="<?php echo $count_slash?>">
                            <select name="selection">
                                <option value="">--Chọn--</option>
                                <option value="1">Chưa xác nhận</option>
                                <option value="2">Xác nhận</option>
                                <option value="3">Giao thành công</option>
                                <option value="4">Hủy đơn</option>
                            </select>
                        </td>
                        <td class="capnhat" rowspan="<?php echo $count_slash?>">
                            <input type="hidden" name="username" value="<?php echo $row['username']?>">
                            <input type="hidden" name="id_mvd" value="<?php echo $row['id']?>">
                            <input type="submit" name="update" value="Cập nhật">
                        </td>
                    </form>
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

    // Hiển thị phân trang
    echo $pagination;
    ?>
    </div>

    </section>

</div>
</body>
</html>