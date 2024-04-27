<span style="font-family: verdana, geneva, sans-serif;">
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>WEB ADMIN</title>
    <link rel="stylesheet" href="style/style_admin.css" />
    <link rel="stylesheet" href="style/chitiet1.css" />
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
            <h1 style="text-transform: uppercase;">Chi tiết</h1>
          </div>
          <table>
            <tr>
              <th rowspan="2" class="mavandon">Mã vận đơn</th>
              <th rowspan="2" class="soluong">Số lượng</th>
              <th rowspan="2" class="dongia">Đơn giá</th>
              <th rowspan="2" class="date">Ngày đặt</th>
              <th colspan="3" class="info">Thông tin người đặt</th>
              <th rowspan="2" class="date">Phương thức thanh toán</th>
            </tr>
            <tr></tr>
            <tr>
              <td class="mavandon">DH56345</td>
              <td class="soluong">2</td>
              <td class="dongia">563€</td>
              <td class="date">2023-03-15</td>
              <td class="name">Lưu Bị</td>
              <td class="sdt">0123 456 789</td>
              <td class="address" style="text-align:center">Trung Quốc</td>
              <td class="thanhtoan">Thẻ tín dụng</td>
            </tr>
            <tr>
              <td class="mavandon">DH965925</td>
              <td class="soluong">2</td>
              <td class="dongia">563€</td>
              <td class="date">2023-03-15</td>
              <td class="name">Albert Einstein</td>
              <td class="sdt">0123 456 789</td>
              <td class="address" style="text-align:center">Đức</td>
              <td class="thanhtoan">Tiền mặt</td>
            </tr>
            <tr>
              <td class="mavandon">DH632446</td>
              <td class="soluong">1</td>
              <td class="dongia">134€</td>
              <td class="date">2023-03-15</td>
              <td class="name">Spider-man</td>
              <td class="sdt">0123 456 789</td>
              <td class="address" style="text-align:center">New York</td>
              <td class="thanhtoan">Thẻ cào điện thoại</td>
            </tr>
          </table>
          <div class="button-back" title="Quay về trang trước">
            <a href="statistic-admin.php">
              <i class="fa-solid fa-backward-step fa-xl" style="color: black;"></i>
            </a>
          </div>
        </div>

      </section>
    </div>
  </body>

  </html>