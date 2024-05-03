<?php session_start();
include('config/config.php');
global $mysqli;
$username = $_GET['username'];
$query = "SELECT * FROM taikhoan where username ='$username'";
$result = mysqli_query($mysqli, $query);
$row = mysqli_fetch_array($result);
?>

<?php
if (isset($_POST['search'])) {
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


<div class="topnav">
    <div style="display: inline-flex;" class="dangxuat">
        <a href="index.php" class="dangxuat">Đăng xuất</a>
    </div>

    <div style="display: inline-flex;" class="dangnhap">
        <a href="personal_infomation.php?username=<?php echo $row['username'] ?>">
            <img src="images/iconuser.png" class="editphucadmin" style="width: 22px">
            <section style="display: inline-block">
                <?php echo $row['username'] ?>
            </section>
        </a>
    </div>

    <a class="active" href="user.php?username=<?php echo $row['username'] ?>" style="background-color: black;">Trang chủ</a>
    <a href="sanpham_trangchu.php?username=<?php echo $row['username'] ?>">Sản phẩm</a>
    <a href="cart.php?username=<?php echo $row['username'] ?>">Giỏ hàng</a>
    <a href="timkiem_trangchu.php?username=<?php echo $row['username'] ?>" class="account">Tìm kiếm</a>
    <div class="search-container">
        <form action="sanpham_timkiem_trangchu.php?username=<?php echo $row['username'] ?>" method="POST">
            <input type="text" placeholder="Tìm kiếm.." name="search">
            <input type="submit" class="fa fa-search" name="search" value='Search'>
        </form>
    </div>
</div>