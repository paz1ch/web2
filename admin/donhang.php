<?php
include ('config/config.php');
$username_admin = $_GET['admin'];
if (isset($_GET['action'])){

}
?>

<span style="font-family: verdana, geneva, sans-serif;">
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>WEB ADMIN</title>
    <link rel="stylesheet" href="style/style_admin.css" />
    <link rel="stylesheet" href="style/style_product-info.css" />

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
            <h1>CHI TIẾT ĐƠN HÀNG</h1>

          </div>
          <table class="table-main">
            <tr class="tr-main">
              <th class="user">Thông tin người đặt</th>
              <th class="sanpham">Sản phẩm</th>
              <th class="doanhthu">Tổng tiền</th>
              <th class="vanchuyen">Đơn vị vận chuyển</th>
              <th class="thoigian">Thời gian tạo đơn</th>
              <th class="trangthai">Trạng thái</th>
            </tr>
          </table>
          <table class="table-data">
            <tr class="tr-data">
              <th class="mavandon" colspan="9">Mã vận đơn: 122315</th>
            </tr>
            <tr>
            <tr>
              <th class="name">Tên</th>
              <th class="sdt">Số điện thoại</th>
              <th class="address">Địa chỉ nhận hàng</th>
              <td class="sanpham">Tên</td>
              <td class="soluong">SL</td>
              <td class="doanhthu" rowspan="2">
                <div>60tr</div>
                <div class="pttt">Thanh toán khi nhận hàng</div>
              </td>
              <td class="vanchuyen" rowspan="2">Hàng không</td>
              <td class="date" rowspan="2">
                <div style="margin-bottom: 8px;">Ngày: 11/12/1999</div>
                <div>Giờ: 11h45p33s</div>
              </td>
              <td class="trangthai" rowspan="2">Chưa xử lý</td>
            </tr>
            <td class="name">Nhật Trường</td>
            <td class="sdt">031664694</td>
            <td class="address">504/58 kinh dương vương quận bình tân</td>
            <td class="sanpham">
              <div class="sanpham">Giường-1</div>
              <div class="sanpham">Giường-2</div>
            </td>
            <td class="soluong">
              <div class="soluong">x3</div>
              <div class="soluong">x1</div>
            </td>
            </tr>

          </table>
          <div class="button-back">
            <a href="cart-admin.php?admin=<?php echo $username_admin?>">
              <i class="fa-solid fa-backward-step fa-xl" style="color: black;" title="Quay lại trang trước"></i>
            </a>
          </div>
        </div>
      </section>
    </div>
  </body>

  </html>