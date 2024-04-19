<?php
include_once("config/config.php");
$mysqli = new mysqli("localhost","root","","web_php");

    if(isset($_POST['submit'])){
        $user_name = $_POST['kh_tendangnhap'];
        $password = $_POST['kh_matkhau'];
        $ho = $_POST['kh_ho'];
        $ten = $_POST['kh_ten'];
        $phone = $_POST['kh_dienthoai'];
        $email = $_POST['kh_email'];

        $checkUsername = mysqli_query($mysqli, "SELECT * from taikhoan WHERE username = '$user_name'");
        if (mysqli_num_rows($checkUsername) > 0) {
            echo 'Username taken.';
            exit();
        }
        else{
            $queryEmail = "SELECT * from taikhoan WHERE email = '$email'";
            $checkEmail = mysqli_query($mysqli,$queryEmail );
            if (mysqli_num_rows($checkEmail) > 0) {
                echo 'Email taken.';
                exit();
            }
            else{
                $checkPhone = mysqli_query($mysqli, "SELECT * from taikhoan WHERE phone = '$phone'");
                if (mysqli_num_rows($checkPhone) > 0) {
                    echo 'SDT taken.';
                    exit();
                }
                else{
                    $insert = "INSERT INTO taikhoan (username, password, ho,ten, phone, email,status)
                    VALUES ('$user_name', '$password', '$ho','$ten' ,'$phone', '$email', true) ";

                    $query = mysqli_query($mysqli,$insert);

                    if($query){
                        echo '<script type="text/JavaScript">  
                                 alert("dang ki thanh cong"); 
                                 window.location.replace("login.php");
                              </script>';
                    }
                    else
                    {
                        echo "Lỗi!";
                    }
                }
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="vi" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Đăng ký tài khoản</title>
    <link rel="stylesheet" href="style/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="style/font-awesome.min.css" type="text/css">
    <!-- <link rel="stylesheet" href="style/app.css" type="text/css"> -->
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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="script/jquery.store.js"></script>
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

    <div style="margin-bottom: 5%;"></div>
    <main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <form name="frmdangky" id="frmdangky" method="post">
            <div class="container mt-4">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card mx-4">
                            <div class="card-body p-4">
                                <h1>Đăng ký</h1>
                                <br>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Họ" name="kh_ho" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Tên" name="kh_ten" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Tên tải khoản"
                                           name="kh_tendangnhap" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="password" placeholder="Mật khẩu"
                                           name="kh_matkhau" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Điện thoại"
                                        name="kh_dienthoai" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="email" placeholder="Email" name="kh_email" required>
                                </div>
                            
                                <input class="btn btn-block btn-success" type="submit" name="submit" value="Đăng ký">
                            
                            </div>
                            <div class="card-footer p-4">
                                <div class="row">
                                    <div class="col-12">
                                        <center>Nếu bạn đã có Tài khoản, xin mời Đăng nhập</center>
                                        <a class="btn btn-primary form-control"
                                            href="login.php">Đăng nhập</a>
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