<?php
session_start();
$id = isset($_GET['id']) ?? $_GET['id'];
if (isset($_SESSION['cart'])) {
    if (isset($_SESSION['cart'][$id]['qty'])) {
        $_SESSION['cart'][$id]['qty'] += 1;
    } else {
        $_SESSION['cart'][$id]['qty'] = 1;
    }
    $_SESSION['success'] = ' Tồn tại giỏ hàng ! Cập nhập mới thành công';
    header('Location:index.php?page=product-home');
    exit();
} else {
    $_SESSION['cart'][$id]['qty'] = 1;
    $_SESSION['success'] = ' Tạo mới giỏ hàng thành công !!! ';
    header('Location:index.php?page=product-home');
    exit();
}

