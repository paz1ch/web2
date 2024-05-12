<?php
$username = $_GET['admin'];
?>
<nav>
    <div class="navbar">
        <a href="index.php?admin=<?php echo $username ?>" style="color: black;">
            <div class="logo">
                <img src="image/phuccac.jpg" alt="">
                <h1>Phúc</h1>
            </div>
        </a>
        <div class="account-type">Tài khoản: Admin</div>
        <ul>
            <li>
                <!-- drop down sidebar -->
                <div class="sidenav">
                    <button class="dropdown-btn">
                        <i class="fa-solid fa-user fa-xl"></i>
                        <span class="nav-item">Quản lý người dùng </span>
                    </button>
                    <div class="dropdown-container">
                        <a href="index.php?admin=<?php echo $username ?>" class="font-bold">Quản lý</a>
                        <a href="add_user-admin.php?admin=<?php echo $username ?>" class="font-bold">Thêm người dùng</a>
                    </div>
                    <button class="dropdown-btn">
                        <i class="fa-solid fa-cart-shopping fa-xl"></i>
                        <span class="nav-item">Quản lý đơn hàng </span>
                    </button>
                    <div class="dropdown-container">
                        <a href="cart-admin.php?admin=<?php echo $username ?>" class="font-bold">Danh sách đơn</a>
                    </div>
                    <button class="dropdown-btn">
                        <i class="fa-solid fa-list fa-xl"></i>
                        <span class="nav-item">Quản lý sản phẩm </span>
                    </button>
                    <div class="dropdown-container">
                        <a href="products-admin.php?admin=<?php echo $username ?>" class="font-bold">Chi tiết sản phẩm</a>
                        <a href="add_products-admin.php?admin=<?php echo $username ?>" class="font-bold">Thêm sản phẩm</a>
                    </div>

                    <button class="dropdown-btn">
                        <i class="fa-solid fa-chart-simple fa-xl"></i>
                        <span class="nav-item">Thống kê</span>
                    </button>
                    <div class="dropdown-container">
                        <a href="user_statistic-admin.php?admin=<?php echo $username ?>" class="font-bold">Theo khách hàng</a>
                        <a href="cart_statistic-admin.php?admin=<?php echo $username ?>" class="font-bold">Theo đơn hàng</a>
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
            <li class="bottom">
                <a href="#" class="logout" onclick="logOut()">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Đăng xuất</span>
                </a>
                <script>
                    function logOut() {
                        if (confirm('Đăng xuất ?')) {
                            alert("Đăng xuất thành công");
                            window.location.replace("../web/login.php");
                        }
                    }
                </script>
            </li>
        </ul>
    </div>
</nav>