<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            THÊM MỚI SẢN PHẨM
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="product-product_code">Mã sản phẩm</label>
                    <input type="text" class="form-control" id="product_code" name = "product_code">
                </div>
                <div class="form-group">
                    <label for="product-brand">Hãng</label>
                    <input type="text" class="form-control" id="product-brand" name = "brand">
                </div>
                <div class="form-group">
                    <label for="product-category">Loại</label>
                    <input type="text" class="form-control" id="product-category" name = "category">
                </div>
                <div class="form-group">
                    <label for="product-image">Hình ảnh</label>
                    <input type="text" class="form-control" id="product-image" name = "image">
                </div>
                <div class="form-group">
                    <label for="product-name">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="product-name" name = "name">
                </div>
                <div class="form-group">
                    <label for="product-ram">Ram</label>
                    <input type="text" class="form-control" id="product-ram" name="ram">
                </div>
                <div class="form-group">
                    <label for="product-cpu">CPU</label>
                    <input type="text" class="form-control" id="product-CPU" name = "cpu">
                </div>
                <div class="form-group">
                    <label for="product-card">Card đồ họa</label>
                    <input type="text" class="form-control" id="product-card" name="card">
                </div>
                <div class="form-group">
                    <label for="product-hard_disk">Ổ đĩa cứng</label>
                    <input type="text" class="form-control" id="product-hard_disk" name="hard_disk">
                </div>
                <div class="form-group">
                    <label for="product-screen">Màn hình</label>
                    <input type="text" class="form-control" id="product-screen" name="screen">
                </div>
                <div class="form-group">
                    <label for="product-operating">Hệ điều hành</label>
                    <input type="text" class="form-control" id="product-operating" name="operating">
                </div>
                <div class="form-group">
                    <label for="product-weight">Cân nặng</label>
                    <input type="text" class="form-control" id="product-weight" name="weight">
                </div>
                <div class="form-group">
                    <label for="product-description">Mô tả sản phẩm</label>
                    <textarea type="text" class="form-control" id="product-description" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="product-price">Giá</label>
                    <input type="text" class="form-control" id="product-price" name="price">
                </div>
                <button type="submit" class="btn btn-primary">Tạo mới</button>
                <a href="index.php?page=product-list" type="button" class="btn btn-secondary">Thoát</a>
            </form>
        </div>
    </div>
</div>