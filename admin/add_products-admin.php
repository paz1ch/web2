<?php
include('config/config.php');
$conn = new mysqli("localhost", "root", "", "web_php");

$username_admin = $_GET["admin"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_sp = $_POST['id_sp'];
    $tensp = $_POST['tensp'];
    $id_danhmuc = $_POST['id_danhmuc'];
    $gia = $_POST['gia'];
    $motangan = $_POST['motangan'];
    $motachitiet = $_POST['motachitiet'];
    $image_sp = $_FILES['image_sp']['name'];
    
    // File upload
    $upload_dir = "uploads/"; // Directory where the file will be saved
    $upload_file = $upload_dir . basename($_FILES["image_sp"]["name"]);

    if (move_uploaded_file($_FILES["image_sp"]["tmp_name"], $upload_file)) {
        echo "File uploaded successfully.";
    } else {
        echo "Error uploading file.";
    }

    // SQL query
    $sql_add = "INSERT INTO sanpham (id_sp, id_danhmuc, tensp, gia, motangan, motachitiet, image_sp)
                VALUES ('$id_sp','$id_danhmuc','$tensp','$gia','$motangan','$motachitiet', '$image_sp')";
    if ($conn->query($sql_add) === TRUE) {
        echo '<script>
                alert("Đặt hàng thành công");
                window.location.href="add_products-admin.php?admin='.$username_admin.'";
              </script>';
    } else {
        echo "Error: " . $sql_add . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>WEB ADMIN</title>
  <link rel="stylesheet" href="style/style_admin.css" />
  <link rel="stylesheet" href="style/style_addproducts.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="container">
    <?php include 'navbar.php'; ?>
    <!-- top banner -->
    <div class="top-banner">
      <p>Online store</p>
    </div>
    <section class="main">
      <div class="main-top"></div>
      <div class="background-section">
        <div class="main-body">
          <h1>THÊM SẢN PHẨM</h1>
        </div>
        <form method="POST" action="" autocomplete="on" enctype="multipart/form-data">
          <table>
            <tr>
              <th>ID SẢN PHẨM</th>
              <th>TÊN SẢN PHẨM</th>
              <th>LOẠI SẢN PHẨM</th>
            </tr>
            <tr>
              <td><input name="id_sp" id="" type="text" placeholder="Nhập mã sản phẩm" required></td>
              <td><input name="tensp" type="text" placeholder="Nhập tên sản phẩm" required></td>
              <td>
                <select name="id_danhmuc" class='form-control'>
                  <option value="1">GIƯỜNG</option>
                  <option value="2">GHẾ</option>
                  <option value="3">BÀN</option>
                  <option value="4">GƯƠNG</option>
                </select>
              </td>
            </tr>
            <tr>
              <th>GIÁ</th>
              <th>MÔ TẢ NGẮN</th>
              <th>MÔ TẢ CHI TIẾT</th>
            </tr>
            <tr>
              <td><input name="gia" type="text" placeholder="Nhập giá" required></td>
              <td><input type="text" name="motangan" placeholder="Mô tả ngắn" required></td>
              <td><textarea type="text" placeholder="Mô tả chi tiết" name="motachitiet" required rows="5" cols="50"></textarea></td>
            </tr>
            <tr>
              <th>Ảnh sản phẩm</th>
            </tr>
            <tr>
              <td colspan="3">
                <input required type="file" accept=".jpg,.jpeg,.png" name="image_sp" id="file-input">
                <img id="img-preview" src=""/>
              </td>
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
    </section>
  </div>
  <script>
    const input = document.getElementById('file-input');
    const image = document.getElementById('img-preview');
    
    input.addEventListener('change', (e) => {
        if (e.target.files.length) {
            const src = URL.createObjectURL(e.target.files[0]);
            image.src = src;
        }
    });
  </script>
</body>
</html>
