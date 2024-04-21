<?php
include ('config/config.php');
session_start();
$mysqli = new mysqli('localhost','root','','web_php');
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $district = $_POST['district'];
    $addressdetail = $_POST['addressdetail'];
    $username=$_SESSION['username'];


    $sql = "UPDATE address SET name='$name', phone='$phone', country='$country', city='$city', district='$district', detail='$addressdetail'
    WHERE username='$username' limit 1";

    $query = mysqli_query($mysqli,$sql);

    $_SESSION['username'] = $username;
    $_SESSION['name'] = $name;
    $_SESSION['phone'] = $phone;
    $_SESSION['country'] = $country;
    $_SESSION['city'] = $city;
    $_SESSION['district'] = $district;
    $_SESSION['addressdetail'] = $addressdetail;
    if ($query){
        echo '<script type="text/JavaScript">
                alert("Registration successful");
                window.location.replace("address.php");
              </script>';
    }
    else{
        echo'failed';
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
    <link rel="stylesheet" href="style/style_product.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_pagination.css">
    <link rel="stylesheet" href="style/style_products.css" media="screen" type="text/css">
    <link rel="stylesheet" href="style/bootstrap.min.css" media="screen" type="text/css">
    <link rel="stylesheet" href="style/p_inf.css" media="screen" type="text/css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="script/jquery.store.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <section id="home">
        <?php include ('header_user.php')?>
    </section>
<!-- top nav -->

    <div>
    <div style="display: flex;">
        <?php include ('link_personalinfo.php')?>
        <form method="POST" action="" style="display: contents" >
            <div class="div_right">
                <div style="margin-left: 5%; margin-right: 5%;">
                        <h2 style="text-align: center;">Địa chỉ</h2>
                        <hr style="border: 1px solid black;">
                        <br>

                        <div>
                            <label style="width: 30%;"><span class="red_dot">*</span>Tên:</label>
                            <input style="width: 50%;" type="text" maxlength="150"
                                   name="name" required placeholder="Tên"
                                   value="<?php
                                   $name = $_SESSION['name'];
                                   echo "$name";
                                   ?>"
                            >
                        </div>
                        <br>

                        <div>
                            <label style="width: 30%;"><span class="red_dot">*</span>Điện thoại:</label>
                            <input style="width: 50%;" name="phone" required
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
                            Quốc gia:</label>
                        <input type="text" name="country" id="" style="width: 50%;"
                               placeholder="Quốc gia" required
                               value="<?php
                               $country=$_SESSION['country'];
                               echo "$country";
                               ?>"
                        >
                    </div>
                    <br>

                    <div>
                        <label style="width: 30%;"><span class="red_dot">*</span>
                            Tỉnh/Thành phố:</label>
                        <input type="text" name="city" id="" style="width: 50%;"
                               placeholder="Tỉnh/Thành phố" required
                               value="<?php
                               $city=$_SESSION['city'];
                               echo "$city";
                               ?>"
                        >
                    </div>
                    <br>

                    <div>
                        <label style="width: 30%;"><span class="red_dot">*</span>
                            Quận/Huyện:</label>
                        <input type="text" name="district" id="" style="width: 50%;"
                               placeholder="Quận/Huyện" required
                               value="<?php
                               $district=$_SESSION['district'];
                               echo "$district";
                               ?>"
                        >
                    </div>
                    <br>

                    <div>
                        <label style="width: 30%;"><span class="red_dot">*</span>
                            Địa chỉ chi tiết:</label>
                        <input style="width: 50%;" name="addressdetail"
                               placeholder="Địa chỉ chi tiết" required
                               value="<?php
                               $addressdetail=$_SESSION['addressdetail'];
                               echo "$addressdetail";
                               ?>">
                    </div>
                    <br>

                    <div>
                        <input class="center edit_p_inf" type="submit" name="submit" value="cập nhật"">
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