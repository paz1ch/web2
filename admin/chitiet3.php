<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
      <title>WEB ADMIN</title>
      <link rel="stylesheet" href="style/style_admin.css" />
      <link rel="stylesheet" href="style/chitiet1.css" />
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
                  <td class="mavandon">DH745633</td>
                  <td class="soluong">2</td>
                  <td class="dongia">1119€</td>
                  <td class="date">2023-03-15</td>
                  <td class="name">Tào Tháo</td>
                  <td class="sdt">0123 456 789</td>
                  <td class="address" style="text-align:center">Trung Quốc</td>
                  <td class="thanhtoan">Thẻ tín dụng</td>
                </tr>
              </table>
              <div class="button-back" title="Quay về trang trước">
                <a href="statistic-admin.html" >
                  <i class="fa-solid fa-backward-step fa-xl" style="color: black;"></i>
                </a>
              </div>
            </div>
            
        </section>
      </div>
    </body>
    </html>