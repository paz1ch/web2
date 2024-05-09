<span style="font-family: verdana, geneva, sans-serif;">
<<<<<<< HEAD

<?php
  $id_sp = $_POST['id_sp'];
  $tensp = $_POST['tensp'];
  $id_danhmuc = $_POST['loaisp'];
  $gia = $_POST['gia'];
  $motangan = $_POST['mota'];
  $image_sp = $_POST['uploadfile'];

  if(isset($_POST['them'])){

    $sql_them = "INSERT INTO sanpham (id_sp, id_danhmuc, tensp, gia, motangan, image_sp) 
    VALUES ('$id_sp', 'id_danhmuc', '$tensp', '$gia', '$motangan', '$image_sp')";

  }
?>

=======
>>>>>>> 47e6464423d52b2ab23100740df177c532e5f55e
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
        <div class="main-body">
          <img src="image/none-image.png" alt="add image">
          <form action="" method="post">
            <input type="file" name="uploadfile" id="img" style="display: none;">
            <label for="img" class="img">
              <span class="add-image">Thêm hình ảnh</span>
            </label>
          </form>
        </div>
        <br>
        <br>
        <table>
          <tr>
            <th>Mã sản phẩm</th>
            <th>Phân loại</th>
            <th>Tên sản phẩm</th>
          </tr>
          <tr>
            <td>
              <form action="" method="post">
                <input name="id_sp" type="text" placeholder="Nhập mã sản phẩm">
              </form>
            </td>
            <td>
              <form action="" method="post">
                <select name="loaisp" id="" class='form-control'>
                  <option value="">--Chọn--</option>
                  <option value="1">Giường</option>
                  <option value="2">Gương</option>
                  <option value="3">Bàn</option>
                  <option value="4">Ghế</option>
                </select>
              </form>
            </td>
            <td>
              <form action="" method="post">
                <input name="tensp" type="text" placeholder="Nhập tên sản phẩm">
              </form>
            </td>
          </tr>
          <tr>
            <th>Giá</th>
            <th>Mô tả sản phẩm</th>
          </tr>
          <tr>
            <td>
              <form action="" method="post">
                <input name="gia" type="text" placeholder="Nhập giá sản phẩm">
              </form>
            </td>
            <td>
              <form action="" method="post">
                <textarea name="mota" id="" placeholder="Nhập mô tả" rows="10" cols="50"></textarea>
              </form>
            </td>
          </tr>
          </tr>
        </table>
        <form class="reset-form" method="post">
<<<<<<< HEAD
          <input type="reset" id="buttonreset" style="display: none;" onclick="clickReset()">
=======
          <input type="submit" id="buttonreset" style="display: none;" >
>>>>>>> 47e6464423d52b2ab23100740df177c532e5f55e
          <label class="buttonReset" for="buttonreset">Reset</label>
        </form>
        <form class="submit-form" method="post">
<<<<<<< HEAD
          <input name="them" type="submit" id="buttonsubmit" style="display: none;" onclick="clickSubmit()">
=======
          <input type="submit" id="buttonsubmit" style="display: none;">
>>>>>>> 47e6464423d52b2ab23100740df177c532e5f55e
          <label class="buttonsubmit" for="buttonsubmit">Thêm</label>
        </form>
      </div>
    </section>
  </div>

</body>

</html>