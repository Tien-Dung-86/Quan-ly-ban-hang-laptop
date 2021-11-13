<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        th, td{
            text-align: center;
        }
        #car{
            width: 100%;
            text-align: left;
        }
    </style>
</head>
<body>
<div class="container">
    <div id="car">
        <div class="header">
            Product list
        </div>
        <div class="body">
            <a href="index.php?page=product-add" type="button" class="btn btn-primary mb-3">Add New Product</a>
        </div>
    </div>
</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Brand</th>
        <th scope="col">Category</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col" colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($products)) {
        foreach ($products as $product):;
            ?>
            <tr>
                <td> <?php echo $product['id'] ?></td>
                <td> <?php echo $product['brand'] ?></td>
                <td> <?php echo $product['category'] ?></td>
                <td><img src="Images/Gaming/<?php echo $product['image'] ?>"></td>
                <td> <?php echo $product['name'] ?></td>
                <td> <?php echo $product['price'] ?></td>
                <td><a href="index.php?page=product-update&id=<?php echo $product['id'] ?>" type="button"
                       class="btn btn-warning">Edit</a></td>
                <td><a onclick="return confirm('Are you want to Delete?')"
                       href="index.php?page=product-delete&id=<?php echo $product['id'] ?>" type="button"
                       class="btn btn-danger">Delete</a></td>
                <td><a href="index.php?page=product-detail&id=<?php echo $product['id'] ?>" type="button"
                       class="btn btn-info">Detail</a></td>
            </tr>
        <?php endforeach;
    }; ?>
    </tbody>
</table>
