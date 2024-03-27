<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
  <html lang="en">
  <head>
    <title>WEB ADMIN</title>
    <link rel="stylesheet" href="style/style_admin.css"/>
    <link rel="stylesheet" href="style/style_addproducts.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  </head>
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
      <div class="top-banner">
        <p>Online store</p>
      </div>

      <section class="main">
          <div class="main-top"></div>
          <div class="background-section">
          <div class="main-body">
              <h1>THÊM SẢN PHẨM</h1>
          </div>
          <div class="main-body">
            <img src="image/none-image.png" alt="add image">
            <form action="">
              <input type="file" name="uploadfile" id="img" style="display: none;">
              <label for="img" class="img" >
                <span class="add-image">Thêm hình ảnh</span>
              </label>
            </form>
          </div>
          <br>
          <br>
          <table>
            <tr>
              <th>Mã sản phẩm</th>
              <th>Phân loại</th>
              <th>Tên sản phẩm</th>
            </tr>
            <tr>
              <td>
                <form action="">
                  <input type="text" placeholder="Nhập mã sản phẩm">
                </form>
              </td>
              <td>
                <form action="">
                  <select name="" id="" class='form-control'>
                    <option value="">--Chọn--</option>
                    <option value="">Giường</option>
                    <option value="">Gương</option>
                    <option value="">Bàn</option>
                    <option value="">Ghế</option>
                  </select>
                </form>
              </td>
              <td>
                <form action="">
                  <input type="text" placeholder="Nhập tên sản phẩm">
                </form>
              </td>
            </tr>
            <tr>
              <th>Số lượng</th>
              <th>Giá</th>
              <th>Mô tả sản phẩm</th>
            </tr>
            <tr>
              <td>
                <form action="">
                  <input type="text" placeholder="Nhập số lượng sản phẩm" >
                </form>
              </td>
              <td>
                <form action="">
                  <input type="text" placeholder="Nhập giá sản phẩm" >
                </form>
              </td>
              <td>
                <form action="">
                  <input type="text" placeholder="Nhập mô tả" >
                </form>
              </td>
              </tr>
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
            <label class="buttonsubmit" for="buttonsubmit">Thêm</label>
            <script>
              function clickSubmit(){
                location.reload();
                alert("Thêm sản phẩm thành công!!");
              }
            </script>
          </form>
        </div>
      </section>
    </div>
  
  </body>
  </html>