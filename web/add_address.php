<?php
include ('config/config.php');
session_start();
$mysqli = new mysqli('localhost','root','','web_php');
$sql = "SELECT taikhoan.*, address.* FROM taikhoan INNER JOIN address ON taikhoan.username = address.username";
$result = $mysqli->query($sql);
$username=$_GET['username'];

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone= $_POST['phone'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $district = $_POST['district'];
    $addressdetail = $_POST['addressdetail'];
    $payment = $_POST['payment'];

    if($payment == 2){
        $payment = 'Thanh toán khi nhận hàng';
        $_SESSION['payment'] = $payment;
    }
    else if($payment==1){
        $payment = 'Ví điện tử';
        $_SESSION['payment'] = $payment;
    }
    else if($payment == 0){
        $payment = $_SESSION['payment'];
        $_SESSION['payment'] = $payment;
    }

    $stmt= $mysqli->prepare("INSERT INTO address (name, phone, country, city, district, detail, payment, username) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('ssssssss', $name, $phone, $country, $city, $district, $addressdetail, $payment, $username);
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        echo '<script type="text/javascript">
            alert("Add successful");
            window.location.href = "address.php?admin=' . ($username) . '";
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
                <div class="nav">
                    <div class="nav_address" >
                        <h4>Thêm địa chỉ</h4>
                    </div>
                </div>
                <div style="margin-left: 2%; margin-right: 5%;">
                    <hr style="border: 1px solid rgba(0,0,0,.9);">
                    <br>
                    <div>
                        <label style="width: 30%;"><span class="red_dot">*</span>Tên:</label>
                        <input style="width: 50%;" type="text" maxlength="150"
                               name="name" required placeholder="Tên">
                    </div>
                    <br>

                    <div>
                        <label style="width: 30%;"><span class="red_dot">*</span>Điện thoại:</label>
                        <input style="width: 50%;" name="phone" required
                               placeholder="Số điện thoại">
                    </div>
                    <br>

                    <div>
                        <label style="width: 30%;"><span class="red_dot">*</span>
                            Quốc gia:</label>
                        <input type="text" name="country" id="" style="width: 50%;"
                               placeholder="Quốc gia" required>
                    </div>
                    <br>

                    <div>
                        <label style="width: 30%;"><span class="red_dot">*</span>
                            Tỉnh/Thành phố:</label>
                        <input type="text" name="city" id="" style="width: 50%;"
                               placeholder="Tỉnh/Thành phố" required>
                    </div>
                    <br>

                    <div>
                        <label style="width: 30%;"><span class="red_dot">*</span>
                            Quận/Huyện:</label>
                        <input type="text" name="district" id="" style="width: 50%;"
                               placeholder="Quận/Huyện" required>
                    </div>
                    <br>

                    <div>
                        <label style="width: 30%;"><span class="red_dot">*</span>
                            Địa chỉ chi tiết:</label>
                        <input style="width: 50%;" name="addressdetail"
                               placeholder="Địa chỉ chi tiết" required>
                    </div>
                    <br>

                    <div>
                        <label style="width: 30%;"><span class="red_dot">*</span>
                            Phương thức thanh toán:</label>
                        <select name="payment" style="width: 50%" required>
                            <option value="1">Ví điện tử</option>
                            <option value="2">Thanh toán khi nhận hàng</option>
                        </select>
                    </div>
                    <br>
                    <div style="display: inline-flex; margin-left: 20%; padding-bottom: 20px">
                        <input class="center edit_p_inf" type="button"
                               onclick="window.location.replace
                               ('address.php?admin=<?php echo urlencode($username); ?>')"
                               value="Quay lại">
                        <input class="center edit_p_inf" type="submit" name="submit" value="Thêm"">
                    </div>
                    <br>
                </div>
            </div>
        </form>
    </div>
</div>
<br>
<br>
<br>
<br>

<?php include("footer.php");?>
</body>
</html>