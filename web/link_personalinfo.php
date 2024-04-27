<?php include('config/config.php');
$mysqli = new mysqli('localhost', 'root', '', 'web_php');
$username = $_GET['username'];
$query = "SELECT * FROM taikhoan where username ='$username'";
$result = mysqli_query($mysqli, $query);
$row = mysqli_fetch_array($result);
?>
<div class="div_left">
    <h2 style="text-align: center; background-color: #343a40; color: #ffff ;">Tài khoản</h2><br>
    <!--    <h4 style="text-align: center; background-color: #343a40; color: #ffff ;">Tài khoản</h4><br>-->
    <div class="div_content_left" style="text-align: left;">
        <ul>
            <li><a title="Thông tin tài khoản" href="personal_infomation.php?username=<?php echo $row['username'] ?>">Thông tin tài khoản</a></li>
            <br>

            <li><a title="Đổi mật khẩu" href="change_password.php?username=<?php echo $row['username'] ?>">Đổi mật khẩu</a></li>
            <br>

            <li><a title="Địa chỉ" href="address.php?username=<?php echo $row['username'] ?>">Địa chỉ</a></li>
            <br>

            <li><a title="Xem lại đơn hàng" href="lichsudonhang.php?username=<?php echo $row['username'] ?>">Lịch sử đơn hàng</a></li>
            </li>
            <br>

            <li><a title="Đăng xuất" href="index.php">Đăng xuất</a></li>
        </ul>
    </div>
</div>