<?php
include('../web/config/config.php');
$conn = new mysqli("localhost", "root", "", "web_php");
$username_admin = $_GET["admin"];
$id_sp = $_GET["id_sp"];
$sql = "SELECT sp.*, dm.* 
        FROM sanpham sp
        JOIN danhmucsp dm ON sp.id_danhmuc = dm.id_danhmuc
        WHERE sp.id_sp = '$id_sp'";
$result = $conn->query($sql);
if (isset($_POST['submit'])){
    $image_sp = basename($_FILES['uploadfile']['name']);
    $upload_dir = "image/";
    $upload_file = $upload_dir . $image_sp;
    if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $upload_file)){
        $sql = "UPDATE sanpham SET image_sp = '$image_sp' WHERE id_sp = '$id_sp'";
        if ($conn->query($sql) === TRUE) {
            header('Location: suasanpham.php?admin=' . $username_admin . '&id_sp=' . $id_sp);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
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
            <?php
            while ($row = $result->fetch_assoc()){

            ?>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="main-body">
                    <img id="preview-image" src="image/<?php echo $row['image_sp']?>" alt="add image" width="200px">
                    <br><br>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <div class="add-image" style="display: inline-block; text-align: center; margin-left: 356px;">
                        <label for="img" style="cursor: pointer">Chọn ảnh</label>
                    </div>
                    <input for="img" class="img add-image" type="file" name="uploadfile" accept=".jpg,.jpeg,.png" id="img" style="visibility: hidden">

                    <script>
                    const fileInput = document.getElementById('img');
                    const previewImage = document.getElementById('preview-image');
                    fileInput.addEventListener('change', function(event) {
                      const file = event.target.files[0];
                      if (file) {
                        const reader = new FileReader();
                        reader.addEventListener('load', function() {
                          previewImage.setAttribute('src', reader.result);
                        });
                        reader.readAsDataURL(file);
                      }
                    });
                    </script>

                </div>
                <br><br>
                <table>
                    <tr>
                        <th>Phân loại</th>
                        <th>Sửa phân loại</th>
                        <th>Tên sản phẩm</th>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" placeholder="Nhập tên sản phẩm" value="<?php echo $row['tendanhmuc']?>" readonly>
                        </td>
                        <td>
                            <!--chua lam-->
                            <select name="" id="" class='form-control'>
                                <option value="">--Chọn--</option>
                                <option value="1">Giường</option>
                                <option value="2">Ghế</option>
                                <option value="3">Bàn</option>
                                <option value="4">Gương</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" placeholder="Nhập tên sản phẩm" value="<?php echo $row['tensp']?>">
                        </td>
                    </tr>

                    <tr>
                      <th>Giá</th>
                      <th>Mô tả sản phẩm</th>
                      <th>Mô tả chi tiết</th>
                    </tr>

                    <tr>
                        <td>
                            <input type="text" placeholder="Nhập giá sản phẩm" value="<?php echo $row['gia'].'€'?>">
                        </td>
                        <td>
                            <input type="text" placeholder="Nhập mô tả" value="<?php echo $row['motangan']?>">
                        </td>
                        <td>
                            <textarea type="text" placeholder="Nhập mô tả"><?php echo $row['motachitiet']?></textarea>
                        </td>
                    </tr>
                    <?php } ?>
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