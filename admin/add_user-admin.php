<?php
    include('../web/config/config.php');
    $mysqli = new mysqli("localhost","root","","web_php");
    if(isset($_POST['submit'])){
    }
?>

<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
  <html lang="en">
  <head>
    <title>WEB ADMIN</title>
    <link rel="stylesheet" href="style/style_admin.css"/>
    <link rel="stylesheet" href="style/style_add-user.css"/>
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
              <h1>THÊM NGƯỜI DÙNG</h1>
          </div>
              <form method="POST" action = "#">
                  <div class="main-body">
                    <img src="image/none-image.png" alt="add image">
                      <input type="file" name="uploadfile" id="img" style="display: none;">
                      <br>
                      <label for="img" class="img" >
                        <span class="add-image">Thêm hình ảnh</span>
                      </label>
                  </div>
                  <br>
                  <table>
                    <tr>
                      <th>Họ và tên</th>
                      <th>Giới tính</th>
                      <th>Ngày sinh</th>
                    </tr>
                    <tr>
                      <td>
                          <input name="name" type="text" placeholder="Nhập họ tên" required>
                      </td>
                      <td>
                          <select name="sex" id="" class='form-control'>
                            <option value="">Nam</option>
                            <option value="">Nữ</option>
                          </select>
                      </td>
                      <td>
                          <input name="date" type="date" placeholder="Nhập ngày sinh">
                      </td>
                    </tr>
                    <tr>
                      <th>Tên đăng nhập</th>
                      <th>Mật khẩu</th>
                      <th>Xác nhận lại mật khẩu</th>
                    </tr>
                    <tr>
                      <td>
                          <input name="username" type="text" placeholder="Nhập tên đăng nhập" >
                      </td>
                      <td>
                          <input name="password" type="password" placeholder="Nhập mật khẩu" >
                      </td>
                      <td>
                          <input placeholder="Nhập lại mật khẩu" >
                      </td>

                      <tr>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ Email</th>
                        <th>Địa chỉ giao hàng</th>
                      </tr>

                      <tr>
                        <td>
                            <input name="phone" type="text" placeholder="Nhập số điện thoại" >
                        </td>
                        <td>
                            <input name="email" type="email" placeholder="Nhập địa chỉ email" >
                        </td>
                        <td>
                          <input name="address" type="text" placeholder="Nhập địa chỉ giao hàng">
                        </td>
                      </tr>
                      <tr>
                        <th>Phương thức thanh toán</th>
                      </tr>
                      <tr>
                        <td>
                          <form action="">
                            <select name="" id="">
                              <option value="">Ví điện tử</option>
                              <option value="">Khi nhận hàng</option>
                            </select>
                          </form>
                        </td>
                      </tr>
                      </tr>
                  </table>
                  <div class="reset-form">
                    <input type="reset" id="buttonreset" style="display: none;" onclick="clickReset()">
                    <label class="buttonReset" for="buttonreset">Reset</label>
                    <script>
                      function clickReset(){
                          location.reload();
                          alert("Reset thành công!!");
                      }
                    </script>
                  </div>
                  <div class="submit-form">
                    <input type="submit" id="buttonsubmit" style="display: none;" onclick="clickSubmit()">
                    <label class="buttonsubmit" for="buttonsubmit">Thêm</label>
                    <script>
                      function clickSubmit(){
                          location.reload();
                          alert("Thêm người dùng thành công!!");
                      }
                    </script>
                  </div>
              </form>
        </div>
    </div>
      </section>

  </body>
  </html>