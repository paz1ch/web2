<?php
include('config/config.php');
global $conn;
$username_admin = $_GET['admin'];

if (isset($_POST['submitFix'])) {
  $username_user = $_POST['username'];
  header("Location: edit_user-admin.php?admin=" . ($username_admin) . "&user=" . ($username_user));
}

if (isset($_POST['submit'])) {
    $username_user = $_POST['username']; // Get the username from the hidden input field
    $status = isset($_POST['lock']) ? 1 : 0; // Check if the checkbox is checked

    // Update the status for the specified username
    $sql_offset = "UPDATE taikhoan SET status = '$status' WHERE username = '$username_user' LIMIT 1";
    $result_offset = $conn->query($sql_offset);

    if ($result_offset && $conn->affected_rows > 0 && $status==0) {
        echo '<script type="text/javascript">
            alert("Đã khóa tài khoản thành công. Vui lòng mở khóa lại nếu bạn có nhu cầu");
            window.location.replace("index.php?admin=' . $username_admin . '");
            </script>';
    }
    if ($result_offset && $conn->affected_rows > 0 && $status==1) {
        echo '<script type="text/javascript">
            alert("Mở khóa tài khoản thành công !!!");
            window.location.replace("index.php?admin=' . $username_admin . '");
            </script>';
    }
}

if(isset($_POST['xoa'])){
    $username = $_POST['username'];
    $sql_offset = "DELETE FROM taikhoan WHERE username = '$username' LIMIT 1";
    $result_offset = $conn->query($sql_offset);
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

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
        <?php
        $records_per_page = 10; // Số bản ghi mỗi trang

        // Tính tổng số bản ghi
        $sql_count = "SELECT COUNT(*) AS total_records FROM cart_detail";
        $result_count = $conn->query($sql_count);
        $row_count = $result_count->fetch_assoc();
        $total_records = $row_count['total_records'];

        // Tính tổng số trang
        $total_pages = ceil($total_records / $records_per_page);

        // Xác định trang hiện tại
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

        // Tính OFFSET cho truy vấn SQL mới
        $offset = ($current_page - 1) * $records_per_page;

        // Sửa đổi truy vấn SQL để chỉ trả về số lượng bản ghi phù hợp cho trang hiện tại
        $sql_offset = "SELECT * FROM taikhoan where isadmin = 0 LIMIT $records_per_page OFFSET $offset";
        $result_offset = $conn->query($sql_offset);

        // Tạo liên kết phân trang
        $pagination = "<div class='pagination' style='font-size: 20px;'> Trang ";
        for ($i = 1; $i <= $total_pages; $i++) {
            $pagination .= "<a style='text-decoration: none; padding: 0; min-width: 2.5rem; text-align: center; height: 1.875rem; font-size: 1.25rem; margin-left: .9375rem; margin-right: .9375rem; color: rgba(0,0,0,.4); display: inline; justify-content: center;' href='?admin=$username_admin&page=$i'>$i</a>";
        }
        $pagination .= "</div>";
        ?>
        <table style="width:90%">
        <tr>
            <th class="stt">STT</th>
            <th>Họ và tên</th>
            <th>Tên đăng nhập</th>
            <th>Mật khẩu</th>
            <th style="width: 18%;" colspan="2">Tình trạng tài khoản</th>
            <th class="thongtin">Thông tin</th>
            <th class="delete">Xóa</th>
        </tr>
        <tr>
            <?php
            if ($result_offset->num_rows > 0) {
            $x = 1;
            // output data of each row
                while ($row = $result_offset->fetch_assoc()) {
            ?>
                <td class="stt"> <?php echo ($x++) ?> </td>
                <td class="stt"> <?php echo ($row['ho'] . " " . $row['ten']) ?> </td>
                <td class="stt"> <?php echo ($row['username']) ?> </td>
                <td class="stt"> <?php echo $row['password'] ?> </td>

              <!--chuc nang-->
                <form method="POST">
                    <td class="status stt">
                        <input type="hidden" name="username" value="<?php echo ($row['username']); ?>">
                        <input type="checkbox" name="lock" value="1" <?php if ($row['status'] == 1) echo "checked"; ?>>
                    </td>

                    <td class="khoa">
                        <input type="submit" name="submit" value="Thao tác">
                    </td>

                    <td class="sua">
                        <input type="submit" name="submitFix" class="sua" value="Sửa">
                    </td>

                    <td class="sua">
                        <input type="submit" name="xoa" class="delete" value="Xóa">
                    </td>
              </form>
        </tr>
        <?php } } ?>
        </table>
        <div style="padding-top: 30px">
        <?php
            echo $pagination;
        ?>
    </div>
    </section>

</div>
</body>
</html>