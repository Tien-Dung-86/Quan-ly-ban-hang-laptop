<?php
session_start();
$error = $_SESSION['error'];
unset($_SESSION['error']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        body{
            background-image: url("Images/Gaming/nvidia.jpg") ;
        }
        .header {
            color: darkslateblue;
            text-align: center;
            font-size: 30px;
        }

        #register {
            position: relative;
            margin: auto;
            width: 380px;
            top: 100px;
        }

        #name, #email, #password {
            height: 68px;
            width: 350px;
            margin: 5px;
            font-size: 18px;
            border: 0;
            background-color: antiquewhite;
            padding: 0 20px 0 30px;
        }

        #submitRegister {
            margin: 5px;
            width: 350px;
            height: 68px;
            background-color: #827ffe;
            border: 0;
            color: white;
            font-size: 20px;
        }

        input {
            border-radius: 15px;
        }

        #submitRegister {
            border-radius: 15px;
        }

    </style>
</head>
<body>
<form id="register" method="post" action="index.php?page=register">
    <div class="header">
        <h3>ĐĂNG KÝ</h3>
    </div>
    <table>
        <tr>
            <td colspan="2"><input type="text" id="name" name="name" placeholder="Tên"></td>
        </tr>
        <tr>
            <td style="color: red;text-align:center;margin-top: 2px"><?php echo $error['name'] ?? ''; ?></td>
        </tr>
        <tr>
            <td colspan="2"><input type="text" id="email" name="email" placeholder="Email"></td>
        <tr>
            <td style="color: red;text-align:center;margin-top: 2px"><?php echo $error['email'] ?? ''; ?></td>
        </tr>
        </tr>
        <tr>
            <td colspan="2"><input type="password" id="password" name="password" placeholder="Password"></td>
        <tr>
            <td style="color: red;text-align:center;margin-top: 2px"><?php echo $error['password'] ?? ''; ?></td>
        </tr>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" id="submitRegister">Đăng ký
            </td>
        </tr>
    </table>
</form>
</body>
</html>

