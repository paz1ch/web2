<span style="font-family: verdana, geneva, sans-serif;">
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>WEB ADMIN</title>
    <link rel="stylesheet" href="style/style_admin.css" />
    <link rel="stylesheet" href="style/style_statisticadmin.css" />
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
            <h1 style="text-transform: uppercase;">Tìm kiếm</h1>
          </div>
          <div>
            <form action="#" class="form-search">
              <div style="padding-bottom: 10px;">
                <h5 class="h5-search"></h5>
                <select name="" id="" class="select">
                  <option value="">Tất cả</option>
                  <option value="">Giường</option>
                  <option value="">Bàn</option>
                  <option value="">Ghế</option>
                  <option value="">Gương</option>
                </select>
                <input type="text" placeholder="Tìm kiếm tên sản phẩm" class="select">
                <label for="" class="time">Từ</label>
                <input type="date" class="select">
                <label for="" class="time">Đến</label>
                <input type="date" class="select">
                <input type="submit" id="submitbutton" style="display: none">
                <label for="submitbutton">
                  <span onclick="searchFunc()" class="button">Tìm</span>
                </label>
                <input type="reset" id="resetbutton" class="button" onclick="buttonReset()" title="Reset tìm kiếm">
              </div>
              <script>
                function searchFunc() {
                  alert("Tìm kiếm thành công!!!");
                }

                function buttonReset() {
                  location.reload();
                  alert("Reset thành công!!!");
                }
              </script>
            </form>
          </div>
        </div>

        <div class="background-section">
          <div class="main-body">
            <h1>THỐNG KÊ</h1>
          </div>

          <table style="margin-bottom: 30px; border-collapse:collapse">
            <tr>
              <th>Sản phẩm bán ra</th>
              <th>Số lượng bán</th>
              <th>Doanh thu</th>
            </tr>
            <tr>
              <td style=" align-items:center; text-align:center">
                <img src="image/products.png" alt="" style="width: 35px;height:35px;object-fit:cover;margin-left: 0px">
                <p style=" padding:10px 15px;">4</p>
              </td>
              <td style=" align-items:center; text-align:center">
                <img src="image/cart.png" alt="" style="width: 35px;height:35px;object-fit:cover;margin-left: 0px">
                <p style=" padding:10px 15px;">17</p>
              </td>
              <td style=" align-items:center; text-align:center">
                <img src="image/salary.jpg" alt="" style="width: 35px;height:35px;object-fit:cover;margin-left: 0px">
                <p style=" padding:10px 15px;">1282€</p>
              </td>
            </tr>
          </table>
          <table style="border-collapse:collapse">
            <tr>
              <th>STT</th>
              <th>Loại</th>
              <th colspan="2">Tên sản phẩm</th>
              <th>Số lượng bán</th>
              <th>Doanh thu</th>
              <th>Thông tin</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Giường</td>
              <td><img src="image/bed1.jpg" alt=""></td>
              <td>Giường siêu thấm</td>
              <td>7</td>
              <td>373€</td>
              <td>
                <a href="chitiet1.php">Chi tiết</a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Gương</td>
              <td><img src="image/mirror1.jpg" alt=""></td>
              <td>Gương chống dính</td>
              <td>3</td>
              <td>107€</td>
              <td>
                <a href="chitiet2.php">Chi tiết</a>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Ghế</td>
              <td><img src="image/sofa5.jpg" alt="" style="height:50px"></td>
              <td>Ghế siêu êm</td>

              <td>2</td>
              <td>500€</td>
              <td>
                <a href="chitiet3.php">Chi tiết</a>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Bàn</td>
              <td><img src="image/table1.jpg" style="height: 50px;" alt=""></td>
              <td>Bàn DJ cực chất</td>

              <td>5</td>
              <td>302€</td>
              <td>
                <a href="chitiet4.php">Chi tiết</a>
              </td>
            </tr>
          </table>
        </div>
      </section>
    </div>
  </body>

  </html>