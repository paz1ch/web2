<?php session_start();
include ('config/config.php');
global $mysqli;
$username = $_GET['username'];
$query="SELECT * FROM taikhoan where username ='$username'";
$result = mysqli_query($mysqli,$query);
$row = mysqli_fetch_array($result);
?>
<div class="topnav">
    <div style="display: inline-flex;" class="dangxuat">
        <a href="index.php" class="dangxuat">Đăng xuất</a>
    </div>

    <div style="display: inline-flex;" class="dangnhap">
        <a href="personal_infomation.php?username=<?php echo $row['username']?>">
            <img src="images/iconuser.png" class="editphucadmin" style="width: 22px">
            <section style="display: inline-block">
                <?php echo $row['username']?>
            </section>
        </a>
    </div>

    <a class="active" href="user.php?username=<?php echo $row['username']?>" style="background-color: black;">Trang chủ</a>
    <a href="sanpham_trangchu.php?username=<?php echo $row['username']?>">Sản phẩm</a>
    <a href="cart.php?username=<?php echo $row['username']?>">Giỏ hàng</a>
    <a  href="timkiem_trangchu.php?username=<?php echo $row['username']?>" class="account">Tìm kiếm</a>
    <div class="search-container">
        <form action="timkiem_trangchu.php?username=<?php echo $row['username']?>">
            <input type="text" placeholder="Tìm kiếm.." name="search">
            <button type="submit"><i class="fa fa-search"> </i></button>
        </form>
    </div>
</div>
