<?php
include 'config/config.php';
global $conn;
$temp = $_GET['temp'];
if (isset($_GET['action'])){
    if ($_GET['action'] == 'hide'){
        $sql = "UPDATE sanpham SET trang_thai = 0 WHERE tensp = '$temp'";
        $result = $conn->query($sql);
    }
    else if ($_GET['action'] == 'delete'){
        $sql = "DELETE FROM sanpham WHERE tensp = '$temp'";
        $result = $conn->query($sql);
    }
}
?>
