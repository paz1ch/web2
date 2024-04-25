<?php
// dung lay du lieu (xai cach khac cung duoc)
if (session_status() == PHP_SESSION_NONE) {
    session_start();

    global $result_getTaikhoan;
    global $result_getAddress;

    // query for table taikhoan and address
    $row_taikhoan = mysqli_fetch_assoc($result_getTaikhoan);
    $row_address = mysqli_fetch_assoc($result_getAddress);

    // get data from table taikhoan
    $_SESSION['username'] = $row_taikhoan['username'];
    $_SESSION['ho'] = $row_taikhoan[' '];
    $_SESSION['ten'] = $row_taikhoan['ten'];
    $_SESSION['phone'] = $row_taikhoan['phone'];
    $_SESSION['email'] = $row_taikhoan['email'];
    $_SESSION['name'] = $row_taikhoan['ho']  . $row_taikhoan['ten'];
    $_SESSION['sex']= $row_taikhoan['sex'];

    // get data from table address
    $_SESSION['country'] = $row_address['country'];
    $_SESSION['city'] = $row_address['city'];
    $_SESSION['district'] = $row_address['district'];
    $_SESSION['addressdetail'] = $row_address['detail'];
    $_SESSION['payment']= $row_address['payment'];

    // set password to current user
    $_SESSION['old_password'] = '';
    $_SESSION['new_password'] = '';
    $_SESSION['new_password_confirmation'] = '';
}