<?php
include('../web/config/config.php');
$conn = new mysqli("localhost", "root", "", "web_php");
$username_admin = $_GET["admin"];
if(isset($_POST["submit"])){
    //
}
?>
<span style="font-family: verdana, geneva, sans-serif;">
<!DOCTYPE html>
<html lang="en">

<head>
    <title>WEB ADMIN</title>
    <link rel="stylesheet" href="style/style_admin.css" />
    <link rel="stylesheet" href="style/style_edit-products.css" />
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
                <h1 style="text-transform: uppercase;">chỉnh sửa sản phẩm</h1>
            </div>
            <div class="main-body">
                <img src="image/bed1.jpg" alt="add image">
                <form action="" style="padding-bottom: 30px;">
                    <input type="file" name="uploadfile" id="img" style="display: none;">
                    <label for="img" class="img">
                        <span class="add-image">Sửa hình ảnh</span>
                    </label>
                </form>
            </div>
            <form action="" method="">
                <table>
                    <tr>
                        <th>Phân loại</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                    </tr>
                    <tr>
                        <td>
                            <select name="" id="" class='form-control'>
                                <option value="">Giường</option>
                                <option value="">Gương</option>
                                <option value="">Bàn</option>
                                <option value="">Ghế</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" placeholder="Nhập tên sản phẩm" value="Giường-1">
                        </td>
                        <td>
                            <input type="text" placeholder="Nhập số lượng sản phẩm" value="10">
                        </td>
                    </tr>

                    <tr>
                      <th>Giá</th>
                      <th>Mô tả sản phẩm</th>
                    </tr>

                    <tr>
                        <td>
                            <input type="text" placeholder="Nhập giá sản phẩm" value="20.000.000">
                        </td>
                        <td>
                            <input type="text" placeholder="Nhập mô tả" value="Dành cho nhà giàu">
                        </td>
                    </tr>
                </table>
                <div class="reset-form">
                    <input type="button" id="buttonreset" style="display: none;">
                    <label class="buttonReset" for="buttonreset">Reset</label>
                </div>
                <div class="submit-form" method="post">
                    <input type="submit" id="buttonsubmit" style="display: none;" name="submit">
                    <label class="buttonsubmit" for="buttonsubmit">Cập nhật</label>
                </div>
            </form>

            <div class="button-back" title="Quay về trang trước">
                <a href="products-admin.php?admin=<?php echo $username_admin?>">
                    <i class="fa-solid fa-backward-step fa-xl" style="color: black;"></i>
                </a>
            </div>
        </div>
      </section>
    </div>
</body>

</html>