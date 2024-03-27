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
      <nav>
        <div class="navbar">
          <a href="index.html" style="color: black;">
            <div class="logo">
              <img src="image/phuccac.jpg" alt="">
              <h1>Phúc</h1>
            </div>
          </a>  
          <div class="account-type">Tài khoản: Admin</div>

          <ul>
            <li>
             <!-- drop down sidebar -->
              <div class ="sidenav">
                <button class="dropdown-btn">
                  <i class="fa-solid fa-user fa-xl"></i>
                  <span class="nav-item">Quản lý người dùng </span>
                </button>
                <div class="dropdown-container">
                  <a href="user-admin.html" class="font-bold">Quản lý</a>
                  <a href="add_user-admin.html" class="font-bold">Thêm người dùng</a>
                </div>  
                <button class="dropdown-btn">
                  <i class="fa-solid fa-cart-shopping fa-xl"></i>
                  <span class="nav-item">Quản lý đơn hàng </span>
                </button>
                <div class="dropdown-container">
                  <a href="cart-admin.html" class="font-bold">Danh sách đơn</a>
                </div>  
                <button class="dropdown-btn">
                  <i class="fa-solid fa-list fa-xl"></i>
                  <span class="nav-item">Quản lý sản phẩm </span>
                </button>
                <div class="dropdown-container">
                  <a href="products-admin.html" class="font-bold">Chi tiết sản phẩm</a>
                  <a href="add_products-admin.html" class="font-bold">Thêm sản phẩm</a>
                </div>  
                <script>
                  var dropdown = document.getElementsByClassName("dropdown-btn");
                  var i;
                  
                  for (i = 0; i < dropdown.length; i++) {
                    dropdown[i].addEventListener("click", function() {
                      this.classList.toggle("active");
                      var dropdownContent = this.nextElementSibling;
                      if (dropdownContent.style.display === "block") {
                        dropdownContent.style.display = "none";
                      } else {
                        dropdownContent.style.display = "block";
                      }
                    });
                  }
                </script>
              </div>
            </li>
            <li >
              <a href="statistic-admin.html" class="font-bold">
                <i class="fa-solid fa-chart-simple fa-xl"></i>
                <span class="nav-item">Thống kê</span>
              </a>
            </li>
            <li class="bottom">
              <a href="#" class="logout" onclick="logOut()"> 
                <i class="fas fa-sign-out-alt"></i>
                <span class="nav-item">Đăng xuất</span>
              </a>
              <script>
                function logOut(){
                  if (confirm('Đăng xuất ?')) {
                    alert("Đăng xuất thành công");
                    location.reload();
                  }
                }
              </script>
            </li>
          </ul>
        </div>
      </nav>

      <!-- top banner -->
    <!-- top banner -->
    <div class="top-banner">
      <p>online store</p>
    </div>

    <section class="main">
        <div class="main-top"></div>
        <div class="background-section">
          <div class="main-body">
            <h1>TÌM KIẾM NGƯỜI DÙNG</h1>
          </div>
          <div>
            <form action="#" class="form-search">
              <h5 class="h5-search">--Tìm kiếm--</h5>
              <select name="" id="" class="select" style="padding-inline: 5px;">
                <option value="">Tên</option>
                <option value="">SDT</option>
                <option value="">Email</option>
              </select>
              <input type="text" placeholder="Nhập" class="select" style="padding-inline: 10px;">
              <input type="submit" id="submitbutton" style="display: none">
              <label for="submitbutton">
                <span onclick="searchFunc()" class="button">Tìm</span>
              </label>
              <input type="reset" id="resetbutton" class="button" onclick="buttonReset()" title="Reset tìm kiếm">
              <script>
                function searchFunc(){
                  alert("Tìm kiếm thành công!!!");
                }
                function buttonReset(){
                  location.reload();
                  alert("Reset thành công!!!");
                }
              </script>
            </form>
          </div>

        </div>
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
                <a href="user-info.html" class="chitiet">Chi tiết</a>
              </td>
              <td class="sua">
                <a href="edit_user-admin.html" class="sua">Sửa</a>
              </td>
            </tr>
          </table>
        </div>
    </section>
  </div>
  
  </body>
  </html>