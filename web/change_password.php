<?php
include ('config/config.php');
session_start();
$mysqli = new mysqli('localhost','root','','web_php');
if (isset($_POST['submit'])){
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $new_password_confirmation = $_POST['confirm'];

    if ($new_password !== $new_password_confirmation) {
        echo 'New password and confirmation do not match.';
        exit();
    }

    $current_username = $_GET['username'];

    $checkOldPassword = "SELECT * FROM taikhoan WHERE username = '$current_username' AND password = '$old_password'";
    $query = mysqli_query($mysqli,$checkOldPassword);

    if (!$query) {
        echo 'The old password is incorrect.';
        exit();
    }

    // If the old password is correct, update to the new password
    $checkNewPassword = "UPDATE taikhoan SET password = '$new_password' WHERE username = '$current_username'";
    $query = mysqli_query($mysqli,$checkNewPassword);

    if($query){
        echo '<script type="text/javascript">
                alert("Update successful");
                window.location.href = "change_password.php?admin=' . ($current_username) . '";
              </script>';
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Thông tin cá nhân</title>
    <link rel="icon" type="image/jpg" href="images/iconuser.png">
    <meta charset="utf-8" />
    <meta name="viewpoint" content="width=device-width,initial-scal=1.0">
    <meta http-equip="X-UA-compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_topnav.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_ourteam.css" media="screen" type="text/css">
    <link rel="stylesheet" href="style/style_banner.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_serviece.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_pagination.css">
    <link rel="stylesheet" href="style/bootstrap.min.css" media="screen" type="text/css">
    <link rel="stylesheet" href="style/p_inf.css" media="screen" type="text/css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<body>
<section id="home">
    <?php include ('header_user.php')?>
</section>
<!-- top nav -->
<div>
    <div style="display: flex;">
        <?php include("link_personalinfo.php"); ?>
        <form action="" method="POST" style="display: contents">
            <div class="div_right">
                <div style="margin-left: 5%; margin-right: 5%;">
                    <h2 style="text-align: center;">Đổi mật khẩu</h2>
                    <hr style="border: 1px solid black;">
                    <br>

                    <div>
                        <label style="width: 30%;"><span class="red_dot">*</span>
                            Mật khẩu cũ
                        </label>
                        <input style="width: 50%;" type="password" name="old_password"
                               placeholder="Nhập mật khẩu cũ">
                    </div>
                    <br>

                    <div>
                        <label style="width: 30%;"><span class="red_dot">*</span>
                            Mật khẩu mới
                        </label>
                        <input style="width: 50%;" type="password" name="new_password"
                               placeholder="Nhập mật khẩu mới">
                    </div>
                    <br>

                    <div>
                        <label style="width: 30%;"><span class="red_dot">*</span>
                            Nhập lại mật khẩu mới
                        </label>
                        <input style="width: 50%;" type="password" maxlength="150" name="confirm"
                               placeholder="Nhập lại mật khẩu mới">
                    </div>
                    <br>

                    <div>
                        <input class="center edit_p_inf" type="submit"
                               name="submit" value="cập nhật"">
                    </div>
                    <br>
                </div>
            </div>
        </form>

    </div>
</div>

<?php include("footer.php");?>


</body>
</html>