<?php
include('config/config.php');
$conn = new mysqli('localhost', 'root', '', 'web_php');
$sql = "SELECT * FROM taikhoan";
$result = $conn->query($sql);

if (isset($_POST['submitFix'])) {
    $username = $_POST['username'];
    session_start();
    $_SESSION['username'] = $username;
    echo '<script type="text/javascript">
                window.location.replace("edit_user-admin.php");
              </script>';
}

if (isset($_POST['submit'])) {
    $username = $_POST['username']; // Get the username from the hidden input field
    $status = isset($_POST['lock']) ? 1 : 0; // Check if the checkbox is checked

    // Update the status for the specified username
    $stmt = $conn->prepare("UPDATE taikhoan SET status = ? WHERE username = ? LIMIT 1");
    $stmt->bind_param("is", $status, $username);
    $stmt->execute();

    session_start();

    if ($stmt->affected_rows > 0) {

        echo '<script type="text/javascript">
                alert("Đã khóa tài khoản thành công. Vui lòng mở khóa lại nếu bạn có nhu cầu");
                window.location.replace("index.php");
              </script>';
    }

    $stmt->close();
}
?>


<span style="font-family: verdana, geneva, sans-serif;">
<!DOCTYPE html>
  <html lang="en">
  <head>
    <title>WEB ADMIN</title>
    <link rel="stylesheet" href="style/style_admin.css" />
    <link rel="stylesheet" href="style/style_useradmin.css">
    <!-- Font Awesome Cdn Link -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>
  <body>
    <div class="container">
    <?php include 'navbar.php' ?>;
    <!-- top banner -->
    <div class="top-banner">
      <p>online store</p>
    </div>

    <section class="main">
        <div class="main-top"></div>
        <div class="background-section">
          <div class="main-body">
            <h1>QUẢN LÝ TÀI KHOẢN NGƯỜI DÙNG</h1>
          </div>
          <table style="width:90%">
            <tr>
              <th class="stt">STT</th>
              <th>Họ và tên</th>
              <th>Tên đăng nhập</th>
              <th>Mật khẩu</th>
              <th style="width: 12%;">Tình trạng tài khoản</th>
              <th>Khóa</th>
              <th class="thongtin">Thông tin</th>
            </tr>
            <tr>
                <?php
                if ($result->num_rows > 0) {
                    $x=1;
                    // output data of each row
                    while ($row = $result->fetch_assoc() ) {
                        if ($row['isadmin']==0){
                ?>
                        <td class="stt">  <?php echo ($x++) ?> </td>
                        <td class="stt">  <?php echo ($row['ho']." ".$row['ten']) ?> </td>
                        <td class="stt">  <?php echo ($row['username']) ?> </td>
                        <td class="stt">  <?php echo $row['password'] ?> </td>

                        <!--chuc nang-->
                        <form method="POST">

                            <td class="status stt">
                                <input type="hidden" name="username"
                                       value="<?php echo $row['username']; ?>">
                                <input type="checkbox" name="lock"
                                       value="1"<?php if ($row['status'] == 1) echo "checked"; ?>>
                            </td>

                            <td class="khoa">
                                <input type="submit" name="submit" value="Thao tác">
                            </td>

                            <td class="sua">
                                <input type="submit" name="submitFix" class="sua" value="Sửa">
                            </td>

                        </form>
                </tr>

                <?php
                        }
                    }
                }
                ?>
          </table>
        </div>
    </section>
  </div>
  
  </body>
  </html>