span style="font-family: verdana, geneva, sans-serif;">
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
          <form action="">
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
              <form action="">
                <input type="text" placeholder="Nhập mã sản phẩm">
              </form>
            </td>
            <td>
              <form action="">
                <select name="" id="" class='form-control'>
                  <option value="">--Chọn--</option>
                  <option value="">Giường</option>
                  <option value="">Gương</option>
                  <option value="">Bàn</option>
                  <option value="">Ghế</option>
                </select>
              </form>
            </td>
            <td>
              <form action="">
                <input type="text" placeholder="Nhập tên sản phẩm">
              </form>
            </td>
          </tr>
          <tr>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Mô tả sản phẩm</th>
          </tr>
          <tr>
            <td>
              <form action="">
                <input type="text" placeholder="Nhập số lượng sản phẩm">
              </form>
            </td>
            <td>
              <form action="">
                <input type="text" placeholder="Nhập giá sản phẩm">
              </form>
            </td>
            <td>
              <form action="">
                <textarea name="" id="" placeholder="Nhập mô tả" rows="10" cols="50"></textarea>
              </form>
            </td>
          </tr>
          </tr>
        </table>
        <form class="reset-form">
          <input type="reset" id="buttonreset" style="display: none;" onclick="clickReset()">
          <label class="buttonReset" for="buttonreset">Reset</label>
          <script>
            function clickReset() {
              location.reload();
              alert("Reset thành công!!");
            }
          </script>
        </form>
        <form class="submit-form">
          <input type="submit" id="buttonsubmit" style="display: none;" onclick="clickSubmit()">
          <label class="buttonsubmit" for="buttonsubmit">Thêm</label>
          <script>
            function clickSubmit() {
              location.reload();
              alert("Thêm sản phẩm thành công!!");
            }
          </script>
        </form>
      </div>
    </section>
  </div>

</body>

</html>