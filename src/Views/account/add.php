<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            ADD NEW ACCOUNT
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="account-name">Tên người dùng</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="account-email">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="account-email" name="email">
                </div>
                <div class="form-group">
                    <label for="account-password">Password</label>
                    <input type="text" class="form-control" id="account-password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="index.php?page=account-list" type="button" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>