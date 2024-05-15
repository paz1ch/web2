<?php
include "config/config.php";
global $conn;
$admin = $_GET['admin'];
$sql = "SELECT hoten, count(id) as so_luong_van_don, SUM(tongtien) AS tong_luong_mua 
            FROM cart_detail 
            GROUP BY hoten 
            ORDER BY tong_luong_mua DESC";
$result = $conn->query($sql);
if (isset($_POST['search'])) {
    $from_date = $_POST['from-date'];
    $to_date = $_POST['to-date'];

    if (!empty($from_date) && !empty($to_date)) {

        $sql = "SELECT hoten, COUNT(*) AS so_luong_mua, SUM(tongtien) AS tong_luong_mua 
                FROM cart_detail 
                WHERE xuly='3' AND time_order BETWEEN '$from_date' AND '$to_date'
                GROUP BY hoten 
                ORDER BY tong_luong_mua DESC
                limit 5";
        $result = $conn->query($sql);
    }
    else{
        echo '<script>
        alert("Vui lòng nhập thời gian trước khi Lọc");
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
<link rel="stylesheet" href="style/style_statisticadmin.css" />
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
            <h1 style="text-transform: uppercase;">Lọc</h1>
        </div>
        <div>
            <form action="" class="form-search" method="post">
                <div style="padding-bottom: 10px;">
                <label for="" class="time">Từ</label>
                <input type="date" name="from-date" class="select">
                <label for="" class="time">Đến</label>
                <input type="date" name="to-date" class="select">
                <input type="submit" name="search" id="submitbutton" style="display: none">
                <label for="submitbutton">
                  <span class="button">Lọc</span>
                </label>
                <input type="submit" id="resetbutton" class="button" name="reset" value="Reset">
                </div>
            </form>
        </div>
    </div>

    <div class="background-section">
        <div class="main-body">
            <h1>THỐNG KÊ</h1>
        </div>
        <table style="border-collapse:collapse">
            <tr>
                <th>STT</th>
                <th>Họ và Tên</th>
                <th>Đơn hàng đã mua</th>
                <th>Tổng tiền</th>
                <th>Thông tin đơn hàng</th>
            </tr>
            <?php
            $count = 1;
            while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo htmlspecialchars($row['hoten']); ?></td>
                        <td><?php echo $row['so_luong_van_don']; ?></td>
                        <td><?php echo $row['tong_luong_mua'].'€'; ?></td>
                        <td>
                            <a href="donhang_user-admin.php?admin=<?php echo $admin?>&name=<?php echo htmlspecialchars($row['hoten']); ?>">
                                Chi tiết
                            </a>
                        </td>
                    </tr>
                <?php
                $count++;
                }
                ?>

        </table>
        <?php
            if($count==1){
                echo '<p style="padding-top: 10px">Khong tim thay</p>';
            }
            ?>
    </div>

    </section>

</div>
</body>
</html>