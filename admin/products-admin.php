<?php
include('config/config.php');
global $conn;
$username_admin = $_GET["admin"];
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
        <?php
        $sql = "SELECT sanpham.id_sp, sanpham.tensp, sanpham.image_sp, sanpham.gia, sanpham.motangan, danhmucsp.tendanhmuc FROM sanpham INNER JOIN danhmucsp on sanpham.id_danhmuc = danhmucsp.id_danhmuc order by sanpham.id_sp";
        $result = $conn->query($sql);
        ?>
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
            <form action="" method="post">
                <table>
                    <tr>
                        <th class="masanpham">Mã sản phẩm</th>
                        <th class="planloai">Phân loại</th>
                        <th class="anh">Ảnh</th>
                        <th class="name">Tên sản phẩm</th>
                        <th class="gia">Giá</th>
                        <th class="mota">Mô tả</th>
                        <th class="chucnang" colspan="2">Chức năng</th>
                    </tr>
                    <?php
                        while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td class="masanpham"> <?php echo $row['id_sp'] ?> </td>
                        <td class="phanloai"><?php echo $row['tendanhmuc'] ?></td>
                        <td class="anh">
                            <img src="image/<?php echo $row['image_sp'] ?>" alt="image" width="80px" height="80px">
                        </td>
                        <td class="name" style="width: 15%"><?php echo $row['tensp']?></td>
                        <td class="gia"><?php echo $row['gia'].'€' ?>/cái</td>
                        <td class="mota"><?php echo $row['motangan'] ?></td>
                        <td class="chucnang">
                            <a href="suasanpham.php?admin=<?php echo $username_admin?>&id_sp=<?php echo $row['id_sp'] ?>" style="color: blue;">Sửa</a>
                        </td>
                        <td class="xoa">Xóa</td>
                    </tr>
                    <?php } ?>
                </table>
            </form>
        </div>
        </section>
    </div>
</body>
</html>