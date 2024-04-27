<?php
include('config/config.php');

$username_admin = $_GET['admin'];
$username_user = $_GET['user'];
session_start();

if(isset($_POST['submit'])){
    $ho = $_POST['ho'];
    $ten = $_POST['ten'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $sex = $_POST['sex'];
    $date = date( 'Y-m-d', strtotime($_POST['date']));
    $new_password = $_POST['new_password'];

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

    $query = "select * from taikhoan where username = '$username_user'";
    $run = mysqli_query($conn, $query);
    $row = $run->fetch_assoc();

    // Check if email exists
    if ($email != $row['email']){
        $stmt = $conn->prepare("SELECT * FROM taikhoan WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        if ($stmt->get_result()->num_rows > 0) {
            echo '<script type="text/JavaScript">
            alert("email đã tồn tại, vui lòng thử lại");
          </script>';
            echo '<script type="text/javascript">history.back();</script>';
            exit();
        }
    }

    // Check if phone number exists
    if($phone != $row['phone']){
        $stmt = $conn->prepare("SELECT * FROM taikhoan WHERE phone = ?");
        $stmt->bind_param("s", $phone);
        $stmt->execute();
        if ($stmt->get_result()->num_rows > 0) {
            echo '<script type="text/JavaScript">
            alert("Số điện thoại đã tồn tại, vui lòng thử lại");
          </script>';
            echo '<script type="text/javascript">history.back();</script>';
            exit();
        }
    }

    $stmt = $conn->prepare("UPDATE taikhoan SET ho = ?, ten = ?, phone = ?, email = ?, sex=?,date=?, password=? WHERE username = ? LIMIT 1");
    $stmt->bind_param("ssssssss", $ho,$ten, $phone, $email,$sex,$date, $new_password,$username_user,);
    $stmt->execute();

    if($stmt->affected_rows > 0){
        echo '<script type="text/JavaScript">
             alert("Update successful"); 
             window.location.href="edit_user-admin.php?admin='.$username_admin.
            ' &user='.$username_user.'";
          </script>';
        exit();
    }
    $stmt->close();

}
?>

<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
  <html lang="en">
  <head>
    <title>WEB ADMIN</title>
    <link rel="stylesheet" href="style/style_admin.css"/>
    <link rel="stylesheet" href="style/style_edit-useradmin.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    
    <div class="container">
      <?php include 'navbar.php'; ?>

      
      <!-- top banner -->
      <div class="top-banner">
        <p>online store</p>
      </div>

      <section class="main">

          <div class="main-top"></div>
          <div class="background-section">
          <div class="main-body">
              <h1>CẬP NHẬT THÔNG TIN NGƯỜI DÙNG</h1>
          </div>

          <br>

          <form method="POST" action="">
            <table>
            <tr>
              <th>Họ</th>
              <th>Tên</th>
              <th>Số điện thoại</th>
            </tr>
            <tr>
                <?php
                $sql = "SELECT * FROM taikhoan where username = '$username_user' and isadmin = 0";
                $result = mysqli_query($conn, $sql);
                $row = $result->fetch_assoc();
                ?>
                 <td>
                     <input type="text" placeholder="Nhập họ" value="<?php echo ($row['ho']) ?>" name="ho" required>
                 </td>
                 <td>
                     <input type="text" placeholder="Nhập tên" value="<?php echo ($row['ten']) ?>" name="ten" required>
                 </td>
                 <td>
                     <input type="text" placeholder="Nhập số điện thoại"
                            value="<?php echo ($row['phone']) ?>" required name="phone">
                 </td>

            </tr>

            <tr>
                <th>Địa chỉ Email</th>
                <th>Giới tính</th>
                <th>Ngày sinh</th>
            </tr>

            <tr>
                <td>
                    <input required type="text" placeholder="Nhập Email"
                           value="<?php echo ($row['email']) ?>" name="email">
                </td>
                <td>
                    <select name="sex" required>
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
                </td>
                <td>
                    <input type="date" name="date" required
                           value="<?php echo ($row['date']) ?>"
                    >
                </td>
            </tr>

            <tr>
                <th>Đổi mật khẩu</th>
            </tr>

            <tr>
                <td>
                    <input type="password" placeholder="Nhập mật khẩu mới"
                           name="new_password" value="<?php echo $row['password']?>">
                </td>
            </tr>
          </table>

          <div class="reset-form">
                <label class="buttonReset" for="buttonreset"
                       onclick="window.location.href='edit_user-admin.php?' +
                               'admin=<?php echo $username_admin;?>'
                               + '&user=' + <?php echo $username_user?>">
                    Reset</label>
          </div>

          <div class="submit-form">
              <input type="submit" id="buttonsubmit" name="submit" style="display: none;">
              <label class="buttonsubmit" for="buttonsubmit">Cập nhật</label>
          </div>
          </form>

          <div class="button-back" title="Quay về trang trước">
            <a href="index.php?admin=<?php echo $username_admin?>" >
              <i class="fa-solid fa-backward-step fa-xl" style="color: black;"></i>
            </a>
          </div>

        </div>
      </section>
    </div>
  </body>
  </html>