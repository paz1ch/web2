<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
      <title>WEB ADMIN</title>
      <link rel="stylesheet" href="style/style_admin.css" />
      <link rel="stylesheet" href="style/style_cartadmin.css" />

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
                <h1>TÌM KIẾM ĐƠN HÀNG</h1>
              </div>
              <div>
                <form action="#" class="form-search">
                  <h5 class="h5-search">--Tìm kiếm--</h5>
                  <label for="" class="label">Từ ngày:</label>
                  <input type="date" class="select">
                  <label for="" class="label">Đến ngày:</label>
                  <input type="date" class="select">
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
                <h1>QUẢN LÝ ĐƠN HÀNG</h1>
                </div>
                <table class="table-main">
                  <tr class="tr-main">
                    <th class="sanpham" colspan="2">Sản phẩm</th>
                    <th class="doanhthu">Tổng tiền</th>
                    <th class="vanchuyen">Đơn vị vận chuyển</th>
                    <th class="thoigian">Thời gian tạo đơn</th>
                    <th class="trangthai">Trạng thái</th>
                    <th class="duyet">Thao tác</th>
                    <th class="thongtin">Thông tin</th>
                  </tr>
                </table>
                <table class="table-data">
                    <tr class="tr-data" >
                      <th class="mavandon" colspan="9" >Mã vận đơn: 122315</th>
                    </tr>
                    <tr>
                      <td class="sanpham">Giường-1</td>
                      <td class="soluong">Số lượng: x3</td>
                      <td class="doanhthu" rowspan="2">60tr</td>
                      <td class="vanchuyen" rowspan="2">Hàng không</td>
                      <td class="date" rowspan="2">11/12/1999 </td>
                      <td class="time" rowspan="2"> 11h45p33s</td>
                      <td class="trangthai"rowspan="2">Chưa xử lý</td>
                      <td class="duyet"rowspan="2">
                        <form action="" class="">
                          <input type="checkbox" id="myCheck" onclick="myFunction()">                        
                        </form>
                      </td>
                      <td class="thongtin" rowspan="2">
                        <a href="donhang1.html" style="color: blue;">Chi tiết</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="sanpham">Giường-2</td>
                      <td class="soluong">Số lượng: x1</td>
                    </tr>
                </table>
                <table class="table-data">
                  <tr class="tr-data" >
                    <th class="mavandon" colspan="9" >Mã vận đơn: 122316</th>
                  </tr>
                  <tr>
                    <td class="sanpham">Giường-3</td>
                    <td class="soluong">Số lượng: x3</td>
                    <td class="doanhthu" rowspan="2">60tr</td>
                    <td class="vanchuyen" rowspan="2">Hàng không</td>
                    <td class="date" rowspan="2">11/12/1999 </td>
                    <td class="time" rowspan="2"> 11h45p33s</td>
                    <td class="trangthai"rowspan="2">Chưa xử lý</td>
                    <td class="duyet"rowspan="2">
                      <form action="" class="">
                        <input type="checkbox" id="myCheck" onclick="myFunction()">                        
                      </form>
                    </td>
                    <td class="thongtin" rowspan="2">
                      <a href="donhang2.html" style="color: blue;">Chi tiết</a>
                    </td>
                  </tr>
              </table>

            </div>
        </section>
      </div>
    </body>
    </html>