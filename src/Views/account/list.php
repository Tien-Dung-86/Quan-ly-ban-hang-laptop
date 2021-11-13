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
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Account list
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Tên đăng nhập</th>
                    <th scope="col">Mật khẩu</th>
                    <th scope="col" colspan="2">Chức năng</th>
                </tr>
                </thead>
                <tbody>
                <?php if (isset($accounts)) {
                    foreach ($accounts as $account):;
                        ?>
                        <tr>
                            <td> <?php echo $account['id'] ?></td>
                            <td> <?php echo $account['name'] ?></td>
                            <td> <?php echo $account['email'] ?></td>
                            <td> <?php echo $account['password'] ?></td>
                            <td><a href="index.php?page=account-updateAccount&id=<?php echo $account['id'] ?>" type="button"
                                   class="btn btn-warning">Chỉnh sửa</a></td>
                            <td><a onclick="return confirm('Bạn có muốn xóa không?')"
                                   href="index.php?page=account-delete&id=<?php echo $account['id'] ?>" type="button"
                                   class="btn btn-danger">Xóa</a></td>
                        </tr>
                    <?php endforeach;
                }; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

