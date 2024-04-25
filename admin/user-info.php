<?php
    include('config/config.php');
    $mysqli = new mysqli('localhost','root','','web_php');
    $sql = "select * from taikhoan";
    $result=$mysqli->query($sql)
?>
<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
      <title>WEB ADMIN</title>
      <link rel="stylesheet" href="style/style_admin.css" />
      <link rel="stylesheet" href="style/style_user-info.css">
    
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    </head>
    <body>
      <div class="container">
        <?php include 'navbar.php' ?>;
        <!-- top banner -->
        <!-- top banner -->
        <div class="top-banner">
          <p>Online Store</p>
        </div>
    
        <section class="main">
            <div class="main-top"></div>
            
            <div class="background-section">
              <div class="main-body">
                  <h1>THÔNG TIN CHI TIẾT NGƯỜI DÙNG</h1>
              </div>
            <div>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Họ và tên</th>
                        <th>Ảnh đại diện</th>
                        <th>Giới tính</th>
                        <th>Ngày sinh</th>
                        <th>Email</th>
                        <th>SDT</th>
                        <th>Địa chỉ giao hàng</th>
                        <th>Phương thức thanh toán</th>
                    </tr>
                    <tr>
                        <td style="text-align: center;">1</td>
                        <td style="text-align: center;">Hùng Phúc</td>
                        <td>
                          <img src="image/phuccac.jpg" alt="" width="80px" height="80px">
                        </td>
                        <td style="text-align: center;">Nữ</td>
                        <td>31/10/2004</td>
                        <td>khongquenef@gmail.com</td>
                        <td>094321351</td>
                        <td>504/58 Kinh Dương Vương, Bình Tân</td>
                        <td style="text-align: center;">Ví điện tử</td>
                    </tr>
                </table>
                <div class="button-back" title="Quay về trang trước">
                  <a href="index.php" >
                    <i class="fa-solid fa-backward-step fa-xl" style="color: black;"></i>
                  </a>
                </div>
            </div>
            </div>
        </section>
      </div>
    </body>
    </html>