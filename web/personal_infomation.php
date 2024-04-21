<?php
include('config/config.php');
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'web_php');

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if (isset($_POST['submit'])) {
    $ho = $_POST['ho'];
    $ten = $_POST['ten'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $username = $_POST['username'];


    // Prepare an update statement
    $stmt = $mysqli->prepare("UPDATE taikhoan SET ho = ?, ten = ?, phone = ?, email = ? WHERE username = ? LIMIT 1");
    $stmt->bind_param("sssss", $ho, $ten, $phone, $email, $username);
    $stmt->execute();

    // Check if the update was successful
    if ($stmt->affected_rows > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['ho'] = $ho;
        $_SESSION['ten'] = $ten;
        $_SESSION['phone'] = $phone;
        $_SESSION['email'] = $email;

        echo '<script type="text/javascript">
                alert("Update successful");
                window.location.replace("personal_infomation.php");
              </script>';

    } else {
        echo '<script type="text/javascript">
                alert("Update failed or no data changed");
                window.history.back();
              </script>';
    }

    $stmt->close();
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
                        <h2 style="text-align: center;">Cập nhật thông tin tài khoản</h2>
                        <hr style="border: 1px solid black;">
                        <br>

                        <div>
                            <label style="width: 30%;"><span class="red_dot">*</span>
                                Tên đăng nhập
                            </label>
                            <input style="width: 50%;" type="text" name="username" readonly
                                value="<?php
                                $username=$_SESSION['username'];
                                echo "$username";
                                ?>"
                            >
                        </div>
                        <br>

                        <div>
                            <label style="width: 30%;"><span class="red_dot">*</span>
                                Họ
                            </label>
                            <input style="width: 50%;" type="text" name="ho" required
                                   placeholder="Họ"
                                   value="<?php
                                   $ho=$_SESSION['ho'];
                                   echo "$ho";
                                   ?>"
                            >
                        </div>
                        <br>

                        <div>
                            <label style="width: 30%;"><span class="red_dot">*</span>
                                Tên:</label>
                            <input style="width: 50%;" type="text" maxlength="150" name="ten" required
                                   placeholder="Tên"
                                   value="<?php
                                   $ten=$_SESSION['ten'];
                                   echo "$ten";
                                   ?>"
                            >
                        </div>
                        <br>

                        <div>
                            <label style="width: 30%;"><span class="red_dot">*</span>
                                Điện thoại:</label>
                            <input style="width: 50%;" name="phone"
                                   placeholder="Số điện thoại"
                                   value="<?php
                                   $phone=$_SESSION['phone'];
                                   echo "$phone";
                                   ?>"
                            >
                        </div>
                        <br>

                        <div>
                            <label style="width: 30%;"><span class="red_dot">*</span>
                                Email:</label>
                            <input type="email" style="width: 50%;" name="email" required
                                   placeholder="Địa chỉ mail"
                                   value="<?php
                                   $email=$_SESSION['email'];
                                   echo "$email";
                                   ?>"
                            >
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