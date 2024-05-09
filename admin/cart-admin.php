<?php
include ('config/config.php');
global $conn;
$username_admin = $_GET['admin'];
if (isset($_POST['update'])){
    $username = $_POST['username'];
    $selection = $_POST['selection'];
    if($selection!=''){
        $sql = "UPDATE cart_detail SET xuly = '$selection' WHERE username = '$username';";
        $result = $conn->query($sql);
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
          <div>
            <form action="" class="form-search">
              <h5 class="h5-search">--Tìm kiếm--</h5>
              <label for="" class="label">Từ ngày:</label>
              <input type="date" class="select">
              <label for="" class="label">Đến ngày:</label>
              <input type="date" class="select">
              <input type="submit" id="submitbutton" style="display: none">
              <label for="submitbutton">
                <span  class="button">Tìm</span>
              </label>
              <input type="reset" id="resetbutton" class="button" title="Reset">
            </form>
          </div>
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
            <th class="thoigian">Thời gian tạo đơn</th>
            <th class="trangthai">Trạng thái</th>
            <th class="thaotac" colspan="2">Cập nhật tình trạng đơn</th>
        </tr>
        </table>
        <?php
        $sql = "SELECT * from cart_detail";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $tensp_array = explode('/', $row['tensp']);
            $soluong_array = explode('/', $row['soluong']);
            $count_slash = count($tensp_array); // Count the number of elements in $tensp_array

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
                            <td class="date" rowspan="<?php echo $count_slash?>">11/12/1999</td>
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
                                    <input type="submit" name="update" value="Cập nhật">
                                </td>
                            </form>
                        <?php } ?>
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
        <?php } ?>
        </div>
      </section>
    </div>
  </body>

  </html>