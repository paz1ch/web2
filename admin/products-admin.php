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
        echo '<script>
            if (confirm("Bạn có muốn Ẩn sản phẩm không ????")){
                window.location.href="delete_hide.php?action=hide'. '&temp='.$temp.'";
                alert("Ẩn sản phẩm thành công");
                window.location.href="products-admin.php?admin=' . $username_admin .'";
            }
            </script>';
    }
    else {
        $temp = $tensp;
        echo '<script>
            if (confirm("Bạn có muốn Xóa sản phẩm không ????")){
                window.location.href="delete_hide.php?action=delete' . '&temp='.$temp.'";
                alert("Xoá sản phẩm thành công");
                window.location.href="products-admin.php?admin=' . $username_admin .'";
            }
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
    <link rel="stylesheet" href="style/style_product-admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

<body>
    <div class="container">
        <?php include 'navbar.php'; ?>
        <?php
        $page1 = 0;
        $sql = "SELECT sanpham.id_sp, sanpham.tensp, sanpham.image_sp, sanpham.gia, sanpham.motangan, danhmucsp.tendanhmuc 
        FROM sanpham 
        INNER JOIN danhmucsp ON sanpham.id_danhmuc = danhmucsp.id_danhmuc 
        WHERE sanpham.trang_thai = 1 ";

        if (isset($_GET['page'])) {
            $get_page = (int)$_GET['page'];
            if ($get_page > 1) {
                $page1 = ($get_page * 8) - 8;
            }
        }

        if (isset($_GET['search'])) {
            $tensp = $_GET['tensp'];
            $phanloai = $_GET['phanloai'];

            if (!empty($tensp)) {
                $sql .= "AND sanpham.tensp LIKE '%" . $tensp . "%' ";
            }

            if (!empty($phanloai)) {
                $sql .= "AND sanpham.id_danhmuc = '" . $phanloai . "' ";
            }

            if (empty($tensp) && empty($phanloai)) {
                echo '<script>
                alert("Vui lòng nhập liệu trước khi tìm kiếm !!!");
              </script>';
            }
        }

        $sql .= "ORDER BY sanpham.id_sp LIMIT $page1, 10";

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
            <h1>TÌM KIẾM SẢN PHẨM</h1>
        </div>
            <form action="" class="form-search" method="get">
                <h5 class="h5-search">- - Tìm kiếm - -</h5>
                <input type="hidden" name="admin" value="<?php echo $username_admin?>">

                <!--    tim kiem theo thoi gian nhan hang    -->
                <div class="date-search-cart-admin">
                    <label for="" class="label">Tên sản phẩm</label>
                    <input type="text" name="tensp" class="select">
                </div>

                <!--    Tim kiem theo tinh trang don hang    -->
                <div class="abcde">
                    <label for="" class="label">Phân loại</label>
                    <select name="phanloai" >
                        <option value="">--Chọn--</option>
                        <option value="1">Giường</option>
                        <option value="2">Ghế</option>
                        <option value="3">Bàn</option>
                        <option value="4">Gương</option>
                    </select>
                </div>
                <div class="nut-loc-va-reset">
                    <input type="submit" name="search" id="submitbutton" style="display: none">
                    <label for="submitbutton">
                    <span  class="button">Lọc</span>
                    </label>
                    <input type="submit" id="resetbutton" name="reset" class="button" value="Reset">
                </div>
            </form>
    </div>
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
                        <th class="tensp" style="width: 25%">Tên sản phẩm</th>
                        <th class="gia">Giá</th>
                        <th class="chucnang" colspan="2">Chức năng</th>
                    </tr>
                    <?php
                        $count=0;
                        while ($row = $result->fetch_assoc()) {
                            $count++;
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
            <?php if ($count==0) {
                echo '<p>Không tìm thấy sản phẩm</p>';
                exit;
            }
            ?>
            <div style="text-align: center;">
                <p style="font-size: 20px;">Trang :
                    <?php
                    $sql_trang = "SELECT sanpham.id_sp, sanpham.tensp, sanpham.image_sp, sanpham.gia, sanpham.motangan, danhmucsp.tendanhmuc 
                    FROM sanpham 
                    INNER JOIN danhmucsp ON sanpham.id_danhmuc = danhmucsp.id_danhmuc 
                    WHERE sanpham.trang_thai = 1 ";
                    if (isset($_GET['search'])) {
                        $tensp = $_GET['tensp'];
                        $phanloai = $_GET['phanloai'];

                        if (!empty($tensp)) {
                            $sql_trang .= "AND sanpham.tensp LIKE '%" . $tensp . "%' ";
                        }

                        if (!empty($phanloai)) {
                            $sql_trang .= "AND sanpham.id_danhmuc = '" . $phanloai . "' ";
                        }
                        $result = $conn->query($sql_trang);
                        $count = mysqli_num_rows($result);
                        $a = ceil($count / 10);
                        for ($b = 1; $b <= $a; $b++) {
                            echo '<a class="phantrang" href="?admin='.$username_admin.
                                '&page=' . $b .
                                '&tensp='. $tensp.
                                '&phanloai='. $phanloai.
                                '&search=Submit'.
                                '" style="text-decoration:none;">' . ' ' . $b . ' ' . '</a>';
                        }
                    }
                    else{
                        $result = $conn->query($sql_trang);
                        $count = mysqli_num_rows($result);
                        $a = ceil($count / 10);
                        for ($b = 1; $b <= $a; $b++) {
                            echo '<a class="phantrang" href="?admin='.$username_admin.'&page=' . $b . '" style="text-decoration:none;">' . ' ' . $b . ' ' . '</a>';
                        }
                    }
                    ?>
                </p>
            </div>

        </div>
        </section>
    </div>
</body>
</html>