<?php session_start();
if(isset($_SESSION['cart'])){
} ?>

<head>
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
        }

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
        }
        #txt{
            font-weight: bold;
            color: royalblue;
        }
        #pri{
            color: black;
        }
        img{
            ali
        }
    </style>
</head>
<div class="row">
    <article class="col-12 col-sm-9 mt-2">
        <div class="col-12 col-sm-12 row mb-2" id="txt">
            <?php
            if (isset($products)) {
                foreach ($products as $product): ?>
                    <div class="col-sm-4">
                        <div class="card text-center">
                            <div class="card-header">
                             <a href="index.php?page=product-detail&id=<?php echo $product['id'] ?>"><?php echo $product['name'] ?></a>
                            </div>
                            <div class="card-body">
                                <a href="index.php?page=product-detail&id=<?php echo $product['id'] ?>"><img src="Images/Gaming/<?php echo $product['image'] ?>" style="width: 100%" alt="Laptop Gaming"/></a>
                            </div>
                            <div class="card-header" id="pri">
                               Giá: <?php echo number_format($product['price']). 'đ' ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach;
            } ?>
        </div>
    </article>
    <aside class="col-12 col-sm-3">
        <div class="card poly-cart">
            <div class="card-body row">
                <a href="index.php?page=product-addCart&id=<?php echo $product['id']?>"><img class="col-sm-5" src="Images/shoppingcart.gif" id="img1" alt="cart"/></a>
                <ul class="col-sm-7">
                    <?php if(isset($_SESSION['success'])) :?>
                    <li><p class="text-danger"><?php echo $_SESSION['success'] ?></p></li>
                    <li>$56.8</li>
                    <li><a href="#">Xem giỏ hàng</a></li>
                    <?php endif; unset($_SESSION['success']) ?>
                </ul>
            </div>
        </div>
        <div class="list-group">
            <a href="" type="button" class="list-group-item list-group-item-action active">
                Hãng
            </a>
            <a href="index.php?search=Acer" type="button" class="list-group-item list-group-item-action"><img src="Images/Gaming/Acer-logo.jpg" style="width: 100px; object-position: center" ></a>
            <a href="index.php?search=MSI" type="button" class="list-group-item list-group-item-action"><img src="Images/Gaming/Msi-logo.png" style="width: 100px; object-position: center" ></a>
            <a href="index.php?search=Asus" type="button" class="list-group-item list-group-item-action"><img src="Images/Gaming/Asus-logo.png" style="width: 100px; object-position: center" ></a>
            <a href="index.php?search=Dell" type="button" class="list-group-item list-group-item-action"><img src="Images/Gaming/Dell-logo.jpg" style="width: 100px; object-position: center" ></a>
        </div>
    </aside>
</div>
<footer class="card mb-2">
    <div class="text-left" id="foot">
        <h4>TD Laptop</h4>
        <br>
        <b class="mt-3">Địa chỉ: <br> <span>&nbsp &nbsp</span>- Trụ sở chính: Số 123 Đường A - Phường b - Quận C, TP. D.
            <br><span>&nbsp &nbsp</span>- Chi nhánh: Số 23, Lô TT01, KĐT Mon City, Mỹ Đình 2, Nam Từ Liêm, Hà Nội. </b>

        <div class="text-center">
            <p class="mt-3">TD Laptop &copy; 2021 <br> SĐT: 123456789 hoặc 987654321 --- Email: tdlaptop@gmail.com
            </p>
        </div>
    </div>
</footer>
</div>


