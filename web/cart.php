<?php
include ('config/config.php');
global $mysqli;

$username = $_GET['username'];

// them sp vao gio hang
if (isset($_POST['themvaogiohang'])) {

    $id_sp = $_POST['id_product'];
    $soluong = $_POST['quantity'];
    // Query to get product details
    $sql_sanpham = "SELECT * FROM sanpham WHERE id_sp='$id_sp'";
    $result = $mysqli->query($sql_sanpham);
    $row = $result->fetch_assoc();

    // Product details
    $tensp = $row['tensp'];
    $gia = $row['gia'];
    $image_sp = $row['image_sp'];

    // Check if the product already exists in the cart for the user
    $check = "SELECT * FROM cart WHERE id_sp='$id_sp' AND username='$username'";
    $result_check = $mysqli->query($check);

    if ($result_check->num_rows > 0) {
        $row_cart = $result_check->fetch_assoc();
        $soluong = $row_cart['soluong'] + $soluong;
        $tong = intval($gia) * $soluong;

        $sql_update_soluong = "UPDATE cart SET soluong='$soluong', tong='$tong' WHERE id_sp='$id_sp' AND username='$username'";
        $result_update = $mysqli->query($sql_update_soluong);
    }
    else {
        // Product doesn't exist in the cart, insert a new record
        $tong = intval($gia) * $soluong;
        $sql_insert = "INSERT INTO cart (id_sp, username, tensp, image_sp, gia, soluong, tong) 
                       VALUES ('$id_sp', '$username', '$tensp', '$image_sp', '$gia', '$soluong', '$tong')";
        $result_insert = $mysqli->query($sql_insert);
    }
}
// xoa
if (isset($_GET['action'])){
    $id_sp=$_GET['id'];
    $username=$_GET['username'];
    $sql = "DELETE FROM cart WHERE id_sp='$id_sp' and username='$username'";
    $result_delete = $mysqli->query($sql);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Giỏ hàng</title>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="images/cart.png">
    <link rel="stylesheet" href="style/style_banner.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_web_cart.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_topnav.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_cart.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<section id="home">
    <?php
    include('header_user.php');
    ?>
</section>
<div id="site">
    <div id="content">
        <header id="masthead"></header>
        <h1>Giỏ hàng của bạn</h1>
        <?php
            $count = "SELECT COUNT(*) FROM cart WHERE username='$username'";
            $result_count = $mysqli->query($count);
            if($result_count->fetch_row()[0] == 0){ ?>
                <div class="cart-empty div-cart-img">
                    <img src="images/cart_empty.png" class="cart-empty cart-img">
                </div>
                <div class="cart-empty">Giỏ hàng của bạn còn trống</div>
            <?php }
            else{ ?>
                <form id="shopping-cart" action="cart.php?action=submit" method="post">
            <table class="shopping-cart">
                <tr class="item">
                    <th class="product-number">Stt</th>
                    <th class="product-name">Sản phẩm</th>
                    <th class="product-img">Ảnh sản phẩm</th>
                    <th class="product-price"> Đơn giá</th>
                    <th class="product-quantity">Số lượng</th>
                    <th class="product-money">Thành tiền</th>
                    <th class="product-delete">Thao tác</th>
                </tr>
                <?php
                $sql = "SELECT * FROM cart WHERE username='$username'";
                $run = $mysqli->query($sql);
                $num = 1;
                $sum = 0;
                $tensp = ''; // Initialize variables
                $gia = '';
                $soluong = '';
                $tong = '';

                while ($row = $run->fetch_assoc()) {
                    ?>
        <tr>
            <td class="product-number"><?= $num++; ?></td>
            <td class="product-name"><?= $row['tensp'] ?></td>
            <td class="product-img">
                <img id="product-img" src="http://localhost/web2/web/images/<?= $row['image_sp'] ?>">
            </td>
            <td class="product-price"><?= $row['gia'] ?></td>
            <td class="product-quantity"><?= $row['soluong'] ?></td>
            <td class="product-money"><?= $row['tong'] . '€' ?></td>
            <td class="product-delete">
                <a href="cart.php?username=<?= $username ?>&action=delete&id=<?= $row['id_sp'] ?>">Xóa</a>
            </td>
        </tr>
        <?php
        // Concatenate values
        $tensp .= $row['tensp'] . '/';
        $gia .= $row['gia'] . '/';
        $soluong .= $row['soluong'] . '/';
        $tong .= $row['tong'] . '/';
        $sum += $row['tong'];
        }
        // Store session variables after loop
        $_SESSION['tensp'] = rtrim($tensp, '/'); // Remove trailing slash
        $_SESSION['gia'] = rtrim($gia, '/');
        $_SESSION['soluong'] = rtrim($soluong, '/');
        $_SESSION['tong'] = rtrim($tong, '/');
        $_SESSION['tongtien'] = $sum;
        ?>
        <tr id="row-total">
            <th class="product-number">Tổng tiền</th>
            <th class="product-name">&nbsp;</th>
            <th class="product-img">&nbsp;</th>
            <th class="product-price">&nbsp;</th>
            <th class="product-quantity">&nbsp;</th>
            <th class="product-money"><?= $sum . '€' ?></th>
            <th class="product-delete"></th>
        </tr>

        </table>
        <ul id="shopping-cart-actions">
            <li>
                <a href="select_address.php?username=<?php echo urldecode($username) ?>" id="thanhtoan" class="btn">Thanh toán</a>
            </li>
            <li>
                <a href="sanpham_trangchu.php?username=<?php echo urldecode($username) ?>" class="btn">Tiếp tục mua sắm</a>
            </li>
        </ul>
        </form>
            <?php } ?>
    </div>
</div>
</body>

</html>