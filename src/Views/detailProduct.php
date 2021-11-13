<style>
    h4 {
        font-family: Impact, sans-serif;
        font-size: 35px;
        font-weight: bold;
        padding-bottom: 0;
        margin: 0;
        background-image: linear-gradient(45deg, #FA8BFF 0%, #2BD2FF 52%, #2BFF88 90%);
        -webkit-background-clip: text;
        color: transparent;
    }

    #foot {
        background-color: slategrey;
        color: white;
        width: 100%;
        float: left;
    }

    .main {
        position: relative;
    }

    .left {
        float: left;
        width: 45%;
        align-content: center;
    }

    .right {
        float: left;
        width: 50%;
    }

    img {
        width: 80%;
        padding-top: 0;
        margin-top: 0;
    }

    #butt {
        width: 200px;
        height: 50px;
        font-size: 20px;
        border-radius: 15px;
        background-color: black;
    }
</style>
</head>
<body>
<form name="actionCart">
    <input type="hidden" name="id">
    <input type="hidden" name="action">
</form>
<div class="main">
    <?php if (isset($product)) { ?>
        <div class="left">
            <img src="Images/Gaming/<?php echo $product['image'] ?>" alt="Laptop Gaming"/>
        </div>
        <div class="right">
            <p style="font-size: x-large"><?php echo strtoupper("LAPTOP " . $product['name'] . " - " . $product['product_code'] . ", " . $product['card'] . ", " . $product['cpu'] . ", " . $product['hard_disk'] . ", " . $product['screen'] . ", " . $product['operating']); ?></p>
            <span>Giá bán: </span><span
                    style="color: white;font-size: x-large;background-color:crimson "><?php echo number_format($product['price'] . "đ") ?></span>
            <table class="table">
                <tr>
                    <th colspan="2" style="font-size: x-large">Thông số kỹ thuật</th>
                </tr>
                <tr>
                    <td>Ram:</td>
                    <td><?php echo $product['ram'] ?></td>
                </tr>
                <tr>
                    <td>CPU:</td>
                    <td><?php echo $product['cpu'] ?></td>
                </tr>
                <tr>
                    <td>Card đồ họa:</td>
                    <td><?php echo $product['card'] ?></td>
                </tr>
                <tr>
                    <td>Ổ cứng:</td>
                    <td><?php echo $product['hard_disk'] ?></td>
                </tr>
                <tr>
                    <td>Màn hình:</td>
                    <td><?php echo $product['screen'] ?></td>
                </tr>
                <tr>
                    <td>Hệ điều hành:</td>
                    <td><?php echo $product['operating'] ?></td>
                </tr>
                <tr>
                    <td>Cân nặng:</td>
                    <td><?php echo $product['weight'] ?></td>
                </tr>
                <tr>
                    <td>Mô tả sản phẩm:</td>
                    <td><?php echo $product['description']; ?></td>
                </tr>
            </table>
            <div style="margin-top: 10px;">
                <button type="submit" class="btn btn-success btn-sm" name="addCart" id="butt">Thêm vào giỏ hàng
                </button>
            </div>
        </div>
    <?php }; ?>
</div>
<div class="text-left" id="foot">
    <h4>TD Laptop</h4>
    <br>
    <b class="mt-3">Địa chỉ: <br> <span>&nbsp &nbsp</span>- Trụ sở chính: Số 123 Đường A - Phường b - Quận C, TP. D.
        <br><span>&nbsp &nbsp</span>- Chi nhánh: Số 23, Lô TT01, KĐT Mon City, Mỹ Đình 2, Nam Từ Liêm, Hà Nội. </b>

    <div class="text-center">
        <p class="mt-3">TD Laptop &copy; 2021 <br> SĐT: 123456789 hoặc 987654321 --- Email: tdcomputer@gmail.com
        </p>
    </div>
</div>
</div>
</body>

<script type="text/javascript">
    function addToCart(id) {
        document.actionCart.id.value = id;
        document.actionCart.action.value = "AddCart";
        document.actionCart.submit();
    }
</script>

