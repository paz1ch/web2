<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    global $result_getInfo;
    $row = mysqli_fetch_assoc($result_getInfo);
    $_SESSION['username'] = $row['username'];
    $_SESSION['ho'] = $row['ho'];
    $_SESSION['ten'] = $row['ten'];
    $_SESSION['phone'] = $row['phone'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['name'] = $row['ho'] . ' ' . $row['ten'];;
    $_SESSION['country'] = '';
    $_SESSION['city'] = '';
    $_SESSION['district'] = '';
    $_SESSION['addressdetail'] = '';
    $_SESSION['old_password'] = '';
    $_SESSION['new_password'] = '';
    $_SESSION['new_password_confirmation'] = '';
}