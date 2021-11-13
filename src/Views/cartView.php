<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>

<div class="card col-10 m-auto">
    <div class="card-header">
        Sản phẩm bạn đã chọn
    </div>
    <div class="card-body p-0">
        <?php foreach ($_SESSION['cart'] as $product['id'] => $product) { ?>
        <div class="p-2 border">STT</div>
        <div class="p-2 border col-4"><?php echo $product['name'] ?></div>
        <div class="p-2 border col-3 border text-center">
            <div class="input-group">
                <span class="input-group-text btn btn-danger"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()"> -     </span>
                <input type="number" value="<?php echo $product['quantity'] ?>" class="form-control text-center" min="1"
                       max="100">
                <span class="input-group-text btn btn-success"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()"> +    </span>
            </div>
        </div>
        <div class="p-2 border col-2 border text-end"><?php echo $product['price'] ?></div>
        <div class="p-2 border flex-grow-1 text-end"><a href="#" class="btn btn-default ">
                <i class="bi bi-trash"></i>
            </a></div>
    </div>
    <?php }; ?>
</div>

