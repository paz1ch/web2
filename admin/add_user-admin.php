<?php
include('../web/config/config.php');
$conn = new mysqli("localhost", "root", "", "web_php");
$username_admin = $_GET["admin"];

if (isset($_POST['submit'])) {
  $ho = $_POST['ho'];
  $ten = $_POST['ten'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $sex = $_POST['sex'];
  $date = date('Y-m-d', strtotime($_POST['date']));
  $username = $_POST['username'];
  $password = $_POST['password'];

  // check if username exists
  $stmt = $mysqli->prepare("SELECT * FROM taikhoan WHERE username = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();

  if ($stmt->get_result()->num_rows > 0) {
    echo '<script type="text/JavaScript">
            alert("username đã tồn tại, vui lòng thử lại");
          </script>';
    echo '<script type="text/javascript">history.back();</script>';
    exit();
  }

  // Check if email exists
  $stmt = $mysqli->prepare("SELECT * FROM taikhoan WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  if ($stmt->get_result()->num_rows > 0) {
    echo '<script type="text/JavaScript">
            alert("email đã tồn tại, vui lòng thử lại");
          </script>';
    echo '<script type="text/javascript">history.back();</script>';
    exit();
  }

  // Check if phone number exists
  $stmt = $mysqli->prepare("SELECT * FROM taikhoan WHERE phone = ?");
  $stmt->bind_param("s", $phone);
  $stmt->execute();
  if ($stmt->get_result()->num_rows > 0) {
    echo '<script type="text/JavaScript">
            alert("Số điện thoại đã tồn tại, vui lòng thử lại");
          </script>';
    echo '<script type="text/javascript">history.back();</script>';
    exit();
  }

  // insert value into database table
  $query = "INSERT INTO taikhoan (ho, ten, phone, email, sex, date, username, password) 
          VALUES ('$ho', '$ten', '$phone', '$email', '$sex', '$date', '$username', '$password')";

  $result = mysqli_query($conn, $query);

  if ($result) {
    echo '<script type="text/JavaScript">
         alert("Thêm thành công"); 
         window.location.href = "index.php?admin=' . $username_admin . '";
      </script>';
  }
}
?>

<span style="font-family: verdana, geneva, sans-serif;">
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>WEB ADMIN</title>
    <link rel="stylesheet" href="style/style_admin.css" />
    <link rel="stylesheet" href="style/style_add-user.css" />
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
            <h1>THÊM NGƯỜI DÙNG</h1>
          </div>
          <form method="POST" action="" autocomplete="on">
            <table>
              <tr>
                <th>Họ</th>
                <th>Tên</th>
                <th>Ngày sinh</th>
              </tr>
              <tr>
                <td>
                  <input name="ho" id="ho" type="text" placeholder="Nhập họ" autocomplete="ho" required>
                </td>
                <td>
                  <input name="ten" type="text" placeholder="Nhập tên" required>
                </td>
                <td>
                  <input name="date" type="date" placeholder="dd-mm-yyyy">
                </td>
              </tr>
              <tr>
                <th>Giới tính</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ Email</th>
              </tr>
              <tr>
                <td>
                  <select name="sex" class='form-control'>
                    <option value="1">Nam</option>
                    <option value="2">Nữ</option>
                  </select>
                </td>
                <td>
                  <input type="text" name="phone" placeholder="Nhập số điện thoại" required>
                </td>
                <td>
                  <input type="email" placeholder="Nhập địa chỉ Email" name="email" required>
                </td>

              <tr>
                <th>Tên đăng nhập</th>
                <th>Mật khẩu</th>
              </tr>

              <tr>
                <td>
                  <input name="username" type="text" placeholder="Nhập tên đăng nhập" required>
                </td>
                <td>
                  <input name="password" type="password" placeholder="Nhập mật khẩu">
                </td>
              </tr>
              </tr>
            </table>
            <div class="reset-form">
              <label class="buttonReset" for="buttonreset" onclick="window.location.replace('add_user-admin.php?admin=<?php echo $username_admin ?>')">Reset</label>
            </div>

            <div class="submit-form">
              <input type="submit" id="buttonsubmit" name="submit" style="display: none;">
              <label class="buttonsubmit" for="buttonsubmit">Thêm</label>
            </div>
          </form>
        </div>
    </div>
    </section>

  </body>

  </html>