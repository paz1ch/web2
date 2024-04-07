<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
  <html lang="en">
  <head>
    <title>WEB ADMIN</title>
    <link rel="stylesheet" href="style/style_admin.css"/>
    <link rel="stylesheet" href="style/style_edit-useradmin.css"/>
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
              <h1>CẬP NHẬT THÔNG TIN NGƯỜI DÙNG</h1>
          </div>

          <div class="main-body">
            <img src="image/phuccac.jpg" alt="add image" class="avatar">
            <form action="" style="padding-bottom: 30px;">
              <input type="file" name="uploadfile" id="img" style="display: none;">
              <label for="img" class="img" >
                <span class="add-image">Sửa hình ảnh</span>
              </label>
            </form>
          </div>

          <table>
            <tr>
              <th>Họ và tên</th>
              <th>Giới tính</th>
              <th>Ngày sinh</th>
            </tr>
            <tr>
              <td>
                <form action="">
                  <input type="text" placeholder="Nhập họ tên" value="Hùng Phúc">
                </form>
              </td>
              <td>
                <form action="">
                  <select name="" id="" class='form-control'>
                    <option value="">Nữ</option>
                    <option value="">Nam</option>
                  </select>
                </form>
              </td>
              <td>
                <form action="">
                  <input type="date" placeholder="Nhập ngày sinh" value="2004-10-31">
                </form>
              </td>
            </tr>
            <tr>
                <th>Số điện thoại</th>
                <th>Địa chỉ Email</th>
                <th>Địa chỉ giao hàng</th>
            </tr>

            <tr>
                <td>
                  <form action="">
                    <input type="text" placeholder="Nhập số điện thoại" value="094321351">
                  </form>
                </td>
                <td>
                  <form action="">
                    <input type="email" placeholder="Nhập địa chỉ email" value="khongquenef@gmail.com">
                  </form>
                </td>
                <td>
                 <form action="">
                  <input type="text" placeholder="Nhập địa chỉ giao hàng" value="504/58 Kinh Dương Vương, Bình Tân">
                 </form>
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
          </table>
          <form class="reset-form">
            <input type="reset" id="buttonreset" style="display: none;" onclick="clickReset()">
            <label class="buttonReset" for="buttonreset">Reset</label>
            <script>
              function clickReset(){
                location.reload();
                alert("Reset thành công!!");
              }
            </script>
          </form>
          <form class="submit-form">
            <input type="submit" id="buttonsubmit" style="display: none;" onclick="clickSubmit()">
            <label class="buttonsubmit" for="buttonsubmit">Cập nhật</label>
            <script>
              function clickSubmit(){
                location.reload();
                alert("Cập nhật thông tin thành công!!");
              }
            </script>
          </form>
          <div class="button-back" title="Quay về trang trước">
            <a href="user-admin.php" >
              <i class="fa-solid fa-backward-step fa-xl" style="color: black;"></i>
            </a>
          </div>
        </div>
      </section>
    </div>
  
  </body>
  </html>