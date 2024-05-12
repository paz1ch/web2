<?php
include('../web/config/config.php');
$username_admin = $_GET["admin"];
$sql = "SELECT * from sanpham";
?>
<span style="font-family: verdana, geneva, sans-serif;">
<!DOCTYPE html>
<html lang="en">
<head>
<title>WEB ADMIN</title>
    <link rel="stylesheet" href="style/style_admin.css" />
    <link rel="stylesheet" href="style/style_product-admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <?php include 'navbar.php'; ?>
        <!-- top banner -->
        <div class="top-banner">
            <p>Online Store</p>
        </div>

        <section class="main">
        <div class="main-top"></div>
        <div class="background-section">
            <div class="main-body">
                <h1 style="text-transform: uppercase;">chi tiết sản phẩm</h1>
            </div>
            <table>
                <tr>
                    <th class="masanpham">Mã sản phẩm</th>
                    <th class="planloai">Phân loại</th>
                    <th class="anh">Ảnh</th>
                    <th class="name">Tên sản phẩm</th>
                    <th class="gia">Giá</th>
                    <th class="mota">Mô tả</th>
                    <th class="chucnang" colspan="2">Chức năng</th>
                </tr>
                <?php ?>
                <tr>
                    <td class="masanpham">1</td>
                    <td class="phanloai">Giường</td>
                    <td class="anh">
                        <img src="image/bed1.jpg" alt="" width="80px" height="80px">
                    </td>
                    <td class="name">Giường-1</td>
                    <td class="gia">20tr/cái</td>
                    <td class="mota">dành cho nhà giàu</td>
                    <td class="chucnang">
                        <a href="suasanpham.php" style="color: blue;">Sửa</a>
                        <a href="suasanpham.php?admin=<?php echo $username_admin?>" style="color: blue;">Sửa</a>
                    </td>
                    <td class="xoa" onclick="buttonXoa()">Xóa</td>
                </tr>
            </table>
        </div>
      </section>
    </div>
</body>

</html>