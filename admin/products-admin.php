<?php
include('config/config.php');
global $conn;
$username_admin = $_GET["admin"];
function  checkSanpham($tensp,&$temp)
{
    global $conn;
    $sql = "SELECT * from cart_detail";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()){
        $tensp_array = explode('/', $row['tensp']);
        foreach ($tensp_array as $key => $value){
            if ($value==$tensp) {
                $temp = $value;
                return true;
            }
        }
    }
    return false;
}
if (isset($_GET['action'])) {
    $tensp = $_GET['tensp'];
    $temp = '';

    if (checkSanpham($tensp, $temp)) {
        $sql = "UPDATE sanpham SET trang_thai = 0 WHERE tensp = '$temp'";
        $result = $conn->query($sql);
        echo '<script>
            alert("Ẩn sản phẩm thành công");
            window.location.href="products-admin.php?admin=' . $username_admin . '";
            </script>';

    }
    else {
        $sql = "DELETE FROM sanpham WHERE tensp = '$temp'";
        $result = $conn->query($sql);
        echo '<script>
            alert("Xoá sản phẩm thành công");
            window.location.href="products-admin.php?admin=' . $username_admin . '";
            </script>';    }
}


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
        if (isset($_GET['page'])) {
            $get_page = $_GET['page'];
        } else {
            $get_page = '';
        }
        if ($get_page == '' || $get_page == 1) {
            $page1 = 0;
        } else {
            $page1 = ($get_page * 10) - 10;
        }
        $sql = "SELECT sanpham.id_sp, sanpham.tensp, sanpham.image_sp, sanpham.gia, sanpham.motangan, danhmucsp.tendanhmuc 
        FROM sanpham INNER JOIN danhmucsp ON sanpham.id_danhmuc = danhmucsp.id_danhmuc 
        WHERE sanpham.trang_thai = 1
        ORDER BY sanpham.id_sp
        limit $page1,10";
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
                        <th class="anh" style="width: 15%">Ảnh</th>
                        <th class="name" style="width: 25%">Tên sản phẩm</th>
                        <th class="gia">Giá</th>
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
                        <td class="chucnang">
                            <a href="suasanpham.php?admin=<?php echo $username_admin?>&id_sp=<?php echo $row['id_sp'] ?>" style="color: blue;">Sửa</a>
                        </td>
                        <td class="xoa" >
                            <a href="?admin=<?php echo $username_admin?>&tensp=<?php echo $row['tensp']?>&action=delete" style="color: blue;">Xóa/Ẩn</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </form>
            <br><br>
            <div style="text-align: center;">
                <p style="font-size: 20px;">Trang :
                    <?php
                    $sql_trang = mysqli_query($conn, "SELECT * FROM sanpham");
                    $count = mysqli_num_rows($sql_trang);
                    $a = ceil($count / 10);

                    for ($b = 1; $b <= $a; $b++) {
                        echo '<a class="phantrang" href="products-admin.php?admin='.$username_admin.'&page=' . $b . '" style="text-decoration:none;">' . ' ' . $b . ' ' . '</a>';
                    }
                    ?>
                </p>
            </div>
        </div>
        </section>
    </div>
</body>
</html>