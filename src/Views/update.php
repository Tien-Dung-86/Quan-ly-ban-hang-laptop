<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            CẬP NHẬT SẢN PHẨM
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="product-product_code">Mã sản phẩm</label>
                    <input type="text" class="form-control" id="product_code" name = "product_code" value ="<?php echo $product['product_code'] ?>" >
                </div>
                <div class="form-group">
                    <label for="product-brand">Hãng</label>
                    <input type="text" class="form-control" id="product-brand" name = "brand" value = "<?php echo $product['brand'] ?>">
                </div>
                <div class="form-group">
                    <label for="product-category">Loại</label>
                    <input type="text" class="form-control" id="product-category" name = "category" value = "<?php echo $product['category'] ?>">
                </div>
                <div class="form-group">
                    <label for="product-image">Hình ảnh</label>
                    <input type="text" class="form-control" id="product-image" name = "image" value = "<?php echo $product['image'] ?>">
                </div>
                <div class="form-group">
                    <label for="product-name">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="product-name" name = "name" value = "<?php echo $product['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="product-ram">Ram</label>
                    <input type="text" class="form-control" id="product-ram" name="ram" value = "<?php echo $product['ram'] ?>">
                </div>
                <div class="form-group">
                    <label for="product-cpu">CPU</label>
                    <input type="text" class="form-control" id="product-CPU" name = "cpu" value = "<?php echo $product['cpu'] ?>">
                </div>
                <div class="form-group">
                    <label for="product-card">Card đồ họa</label>
                    <input type="text" class="form-control" id="product-card" name="card" value = "<?php echo $product['card'] ?>">
                </div>
                <div class="form-group">
                    <label for="product-hard_disk">Ổ đĩa cứng</label>
                    <input type="text" class="form-control" id="product-hard_disk" name="hard_disk" value = "<?php echo $product['hard_disk'] ?>">
                </div>
                <div class="form-group">
                    <label for="product-screen">Màn hình</label>
                    <input type="text" class="form-control" id="product-screen" name="screen" value = "<?php echo $product['screen'] ?>">
                </div>
                <div class="form-group">
                    <label for="product-operating">Hệ điều hành</label>
                    <input type="text" class="form-control" id="product-operating" value = "<?php echo $product['operating_system'] ?>" name="operating">
                </div>
                <div class="form-group">
                    <label for="product-weight">Cân nặng</label>
                    <input type="text" class="form-control" id="product-weight" value = "<?php echo $product['weight'] ?>" name="weight">
                </div>
                <div class="form-group">
                    <label for="product-description">Mô tả</label>
                    <textarea type="text" class="form-control" id="product-description" name="description"><?php echo $product['description'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="product-price">Giá</label>
                    <input type="text" class="form-control" id="product-price" name="price" value = "<?php echo $product['price'] ?>">
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a href="index.php?page=product-list" type="button" class="btn btn-secondary">Thoát</a>
            </form>
        </div>
    </div>
</div>
