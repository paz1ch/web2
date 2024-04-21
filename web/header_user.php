<?php session_start(); ?>
<div class="topnav">
    <div style="display: inline-flex;" class="dangxuat">
        <a href="index.php" class="dangxuat">Đăng xuất</a>
    </div>

    <div style="display: inline-flex;" class="dangnhap">
        <a href="personal_infomation.php">
            <img src="images/iconuser.png" class="editphucadmin" style="width: 22px">
            <section style="display: inline-block">
                <?php
                    $username = $_SESSION['username'];
                    echo "$username";
                ?>
            </section>
        </a>
    </div>

    <a class="active" href="trangchu.php" style="background-color: black;">Trang chủ</a>
    <a href="sanpham_trangchu.php">Sản phẩm</a>
    <a href="cart.php">Giỏ hàng</a>
    <a  href="timkiem_trangchu.php" class="account">Tìm kiếm</a>
    <div class="search-container">
        <form action="timkiem_trangchu.php">
            <input type="text" placeholder="Tìm kiếm.." name="search">
            <button type="submit"><i class="fa fa-search"> </i></button>
        </form>
    </div>
</div>
