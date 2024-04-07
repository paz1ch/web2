<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
  <html lang="en">
  <head>
    <title>WEB ADMIN</title>
    <link rel="stylesheet" href="style/style_admin.css" />
    <link rel="stylesheet" href="style/style_useradmin.css">
    <!-- Font Awesome Cdn Link -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>
  <body>
    <div class="container">
      <?php include 'navbar.php'; ?>

      <!-- top banner -->
    <!-- top banner -->
    <div class="top-banner">
      <p>online store</p>
    </div>

    <section class="main">
        <div class="main-top"></div>
        <div class="background-section">
          <div class="main-body">
            <h1>QUẢN LÝ TÀI KHOẢN NGƯỜI DÙNG</h1>
          </div>
          <table style="width:90%">
            <tr>
              <th class="stt">STT</th>
              <th>Họ và tên</th>
              <th>Tên đăng nhập</th>
              <th>Mật khẩu</th>
              <th>Tình trạng</th>
              <th>Khóa</th>
              <th colspan="2" class="thongtin">Thông tin</th>
            </tr>
            <tr>
              <td class="stt">1</td>
              <td class="stt">Phúc Đặng</td>
              <td>khongquenef@gmail.com</td>
              <td>094321351</td>
              <td class="stt">Đã khóa</td>
              <td class="status stt" >
                <i class="fa-solid fa-lock fa-xl" onclick="lock_1()"></i>
                <i class="fa-solid fa-lock-open fa-xl" onclick="open_lock_1()"></i>
                <script>
                  function lock_1(){
                    alert("Tài khoản đã bị khóa trước đó! Vui lòng mở khóa!!");
                  }
                  function open_lock_1(){
                    alert("Mở Khóa thành công");
                  }
                </script>
              </td>
              <td class="chitiet">
                <a href="user-info.php" class="chitiet">Chi tiết</a>
              </td>
              <td class="sua">
                <a href="edit_user-admin.php" class="sua">Sửa</a>
              </td>
            </tr>
          </table>
        </div>
    </section>
  </div>
  
  </body>
  </html>