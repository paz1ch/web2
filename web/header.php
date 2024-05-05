<?php
if (isset($_GET['search'])) {
    $search = $_GET['searchtext'];

    if (isset($_GET['page'])) {
        $get_page = $_GET['page'];
    } else {
        $get_page = '';
    }
    if ($get_page == '' || $get_page == 1) {
        $page1 = 0;
    } else {
        $page1 = ($get_page * 8) - 8;
    }

    $sql = "SELECT * FROM sanpham WHERE tensp LIKE '%$search%' ORDER BY id_sp DESC LIMIT $page1,8";
    
    $sql_sanpham = mysqli_query($mysqli, $sql);
}
?>
<div class="topnav" >
    <div style="display: flex;" class="dangxuat">
        <a href="register.php" class="dangxuat">Đăng ký</a>
    </div>
    <div style="display: inline-flex;" class="dangnhap">
        <a href="login.php">Đăng nhập</a>
    </div>

    <a class="active"  href="index.php">Trang chủ</a>
    <a href="products.php">Sản phẩm</a>
    <a href="#" id="giohang">Giỏ hàng</a>
    <script>
        button = document.getElementById("giohang");
        button.onclick = function() {
            alert("Hãy đăng nhập trước để vào giỏ hàng");
            location.assign("login.php");
        }
    </script>
    <a href="product_search.php" class="account">Tìm kiếm</a>
    <div class="search-container">
        <form action="product_search.php" method="get">
            <input type="text" placeholder="Search.." name="searchtext">
            <button type="submit" name="search">
                <i class="fa fa-search"></i>
            </button>
        </form>
    </div>
</div>