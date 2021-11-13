<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            UPDATE ACCOUNT
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="account-name">Name</label>
                    <input type="text" class="form-control" id="name" name = "name" value ="<?php echo $account['name'] ?>" placeholder="Enter code">
                </div>
                <div class="form-group">
                    <label for="account-email">Email</label>
                    <input type="text" class="form-control" id="account-email" name = "email" value = "<?php echo $account['email'] ?>" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="account-password">Password</label>
                    <input type="text" class="form-control" id="account-password" name = "password" value = "<?php echo $account['password'] ?>" placeholder="Enter password">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="index.php?page=account-list" type="button" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>

