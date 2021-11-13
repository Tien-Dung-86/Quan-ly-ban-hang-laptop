<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .shopping-mall {
            font-variant: small-caps;
        }

        .shopping-mall > h1 {
            font-family: Impact, sans-serif;
            font-size: 50px;
            font-weight: bold;
            padding-bottom: 0;
            margin: 0;
            background-image: linear-gradient(45deg, #FA8BFF 0%, #2BD2FF 52%, #2BFF88 90%);
            -webkit-background-clip: text;
            color: transparent;
        }

        .shopping-mall > h5 {
            margin-top: 5px;
            letter-spacing: 1px;
            color: blue;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="col-12 col-md-12 shopping-mall">
    <h1>TD Laptop</h1>
    <h5>Sự lựa chọn tốt nhất cho Gamer</h5>

</div>
<div style="text-align: right;"><?php echo $_SESSION['name'] ?? '' ?></div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark mt-2">
    <a class="navbar-brand" href="index.php?page=product-home">Trang chủ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=product-procedure">Giới thiệu</a>
            </li>
            <?php if (!isset($_SESSION['name'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=login">Đăng nhập</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=register">Đăng ký</a>
                </li>
            <?php endif; ?>
            <?php if (!isset($_SESSION['name'])): ?>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#"><?php echo $_SESSION['accountname'] ?? '' ?></a>
                </li>
                <li class="nav-item">
                    <a onclick=" return confirm ('Bạn muốn đăng xuất')" class="nav-link"
                       href="index.php?page=logout">Đăng xuất</a>
                </li>
            <?php endif; ?>

            <?php if ($_SESSION['email'] == 'admin'): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Quản lý
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php?page=product-list">Danh sách sản phẩm</a>
                        <a class="dropdown-item" href="index.php?page=account-list">Danh sách tài khoản</a>
                    </div>
                </li>
            <?php endif ?>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="get">
            <input class="form-control mr-sm-2" type="search" name="search"
                   value="<?php echo $_REQUEST['search'] ?? '' ?>" placeholder="Từ khoá" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
        </form>
    </div>
</nav>

