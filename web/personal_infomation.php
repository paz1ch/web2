<?php
include('config/config.php');
session_start();
$mysqli = new mysqli('localhost','root','','web_php');
$sql = "SELECT taikhoan.*, address.* FROM taikhoan INNER JOIN address ON taikhoan.username = address.username";
$result = $mysqli->query($sql);
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
    $sex = $_POST['sex'];
    $date = date( 'Y-m-d', strtotime($_POST['date']));

    if($sex == 2){
        $sex = 'Nữ';
        $_SESSION['sex'] = $sex;
    }
    else if($sex==1){
        $sex = 'Nam';
        $_SESSION['sex'] = $sex;
    }
    else if($sex==0){
        $sex = $_SESSION['sex'];
        $_SESSION['sex'] = $sex;
    }

    // Check if email exists
    if ($email != $_SESSION['email']){
        $stmt = $mysqli->prepare("SELECT * FROM taikhoan where email=?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        if ($stmt->get_result()->num_rows > 0 ) {
            echo '<script type="text/JavaScript">
                alert("email đã tồn tại, vui lòng thử lại");
              </script>';
            echo '<script type="text/javascript">history.back();</script>';
            exit();
        }
    }

    // Check if phone number exists
    if ($phone != $_SESSION['phone']){
        $stmt = $mysqli->prepare("SELECT * FROM taikhoan WHERE username=? and phone =?");
        $stmt->bind_param("ss", $username,$phone);
        $stmt->execute();
        if ($stmt->get_result()->num_rows == 0) {
            echo '<script type="text/JavaScript">
                alert("Số điện thoại đã tồn tại, vui lòng thử lại");
              </script>';
            echo '<script type="text/javascript">history.back();</script>';
            exit();
        }
    }

    // Prepare an update statement
    $stmt = $mysqli->prepare("UPDATE taikhoan SET ho = ?, ten = ?, phone = ?, email = ?, sex=?,date=? WHERE username = ? LIMIT 1");
    $stmt->bind_param("sssssss", $ho, $ten, $phone, $email,$sex,$date, $username);
    $stmt->execute();

    // Check if the update was successful
    if ($stmt->affected_rows > 0) {
        echo '<script type="text/javascript">
                alert("Update successful");
                window.location.replace("personal_infomation.php");
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
                        <?php
                        if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {

                        $username = $_SESSION['username'];

                        if ($row['isadmin']==0 && $row['username']==$username) {
                        ?>
                        <div>
                            <label style="width: 30%; display: none"><span class="red_dot">*</span>
                                Tên đăng nhập
                            </label>
                            <input style="width: 50%;" type="hidden" name="username" readonly
                                value="<?php echo ($row['username']) ?>"
                            >
                        </div>
                        <br>

                        <div>
                            <label style="width: 30%;"><span class="red_dot">*</span>
                                Họ
                            </label>
                            <input style="width: 50%;" type="text" name="ho" required
                                   placeholder="Họ"
                                   value="<?php echo ($row['ho']) ?>"
                            >
                        </div>
                        <br>

                        <div>
                            <label style="width: 30%;"><span class="red_dot">*</span>
                                Tên:</label>
                            <input style="width: 50%;" type="text" maxlength="150" name="ten" required
                                   placeholder="Tên"
                                   value="<?php echo ($row['ten']) ?>"
                            >
                        </div>
                        <br>


                        <div>
                            <label style="width: 30%;"><span class="red_dot">*</span>
                                Giới tính:</label>
                            <select name="sex" style="width: 50%" required>
                                <option value="0">
                                    <?php
                                    $sex = $row['sex'];
                                    if ($sex != 'Nam' && $sex != ''){
                                    echo ($sex);
                                    ?>
                                </option>

                                <option value="1">Nam</option>
                                <?php
                                }
                                else if ($sex != 'Nữ' && $sex != ''){
                                    echo ($sex);
                                    ?>
                                    <option value="2">Nữ</option>
                                    <?php
                                }
                                else if($sex == ''){
                                    ?>
                                    <option value="1">Nam</option>
                                    <option value="2">Nữ</option>
                                    <?php
                                }
                                ?>
                            </select>

                        </div>
                        <br>

                        <div>
                            <label style="width: 30%;"><span class="red_dot">*</span>
                                Ngày sinh:</label>
                            <input type="date" style="width: 50%;" name="date" required
                                   placeholder="Ngày sinh"
                                   value="<?php echo ($row['date']) ?>"
                            >
                        </div>
                        <br>

                        <div>
                            <label style="width: 30%;"><span class="red_dot">*</span>
                                    Số điện thại:</label>
                            <input style="width: 50%;" type="text" maxlength="150" name="phone" required
                                   placeholder="Số điện thoại"
                                   value="<?php $_SESSION['phone']=$row['phone'];
                                   echo ($row['phone']) ?>"
                            >
                        </div>
                        <br>

                        <div>
                            <label style="width: 30%;"><span class="red_dot">*</span>
                                Email:</label>
                            <input type="email" style="width: 50%;" name="email" required
                                   placeholder="Địa chỉ mail"
                                   value="<?php $_SESSION['email']=$row['email'];
                                   echo ($row['email']) ?>"
                            >
                        </div>
                        <br>
                        <?php
                                }
                            }
                        }
                        ?>
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