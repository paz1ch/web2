<?php
include_once("config/config.php");
$mysqli = new mysqli("localhost", "root", "", "web_php");

if (isset($_POST['submit'])) {
    $user_name = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM taikhoan WHERE username = '$user_name' and password = '$password'";

    $result = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        // check xem tai khoan co bi khoa hay ko;
        $checkAdmin = "SELECT * from taikhoan WHERE isadmin = 1 and username = '$user_name' and password = '$password'";
        $result_admin = mysqli_query($mysqli, $checkAdmin);

        if (mysqli_num_rows($result_admin) == 0){
            $checkStatus = "Select * from taikhoan where status = 0 and username = '$user_name' and password = '$password'";
            $result_status = mysqli_query($mysqli, $checkStatus);
            if (mysqli_num_rows($result_status) > 0) {
                echo 'tai khoan bi khoa';
                exit();
            }
            else {
                // Lấy thông tin người dùng từ cơ sở dữ liệu
                $row = mysqli_fetch_assoc($result);

                session_start();
                $_SESSION['username'] = $row['username'];


                // Chuyển hướng người dùng đến trang user.php
                header("location: user.php");
            }
        }
        else {
            header("location: ../admin/index.php");
        }
    }
    else {
        echo 'loi tai khoan hoac mat khau';
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="vi" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="style/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="style/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="style/app.css" type="text/css">
    <meta name="viewpoint" content="width=device-width,initial-scal=1.0">
    <meta http-equip="X-UA-compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_topnav.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_ourteam.css" media="screen" type="text/css">
    <link rel="stylesheet" href="style/style_banner.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_serviece.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_product.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_pagination.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- header -->
    <section id="home">
    <?php
            include 'header.php';
            ?>
	</section>
    <!-- end header -->
    <div style="margin-bottom: 10%;"></div>
    <main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <form name="frmdangnhap" id="frmdangnhap" method="post" action="#">
            <div class="container mt-4">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card-group">
                            <div class="card p-4">
                                <div class="card-body">
                                    <h1>Đăng nhập</h1>
                                    <p class="text-muted">Nhập thông tin Tài khoản</p>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="icon-user"></i>
                                            </span>
                                        </div>
                                        <input class="form-control" type="text" name="username"
                                            placeholder="Tên đăng nhập">
                                    </div>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="icon-lock"></i>
                                            </span>
                                        </div>
                                        <input class="form-control" type="password" name="password"
                                            placeholder="Mật khẩu">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <input class="btn btn-primary px-4" type="submit" name="submit" value="Đăng nhập">
                                        </div>
                                        <div class="col-6 text-right">
                                            <button class="btn btn-link px-0" type="button"><a href="">Quên mật khẩu?</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                                <div class="card-body text-center">
                                    <div>
                                        <h2>Đăng ký</h2>
                                        <p>Đăng ký để làm thành viên của Trang web bán hàng. Bạn sẽ được một số quyền
                                            lợi nhất định khi làm thành viên của Chúng tôi.</p>
                                        <a class="btn btn-primary active mt-3" href="register.php">Đăng ký ngay!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- End block content -->
    </main>

</body>

</html>