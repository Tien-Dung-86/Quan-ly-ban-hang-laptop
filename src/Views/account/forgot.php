<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            FIND ACCOUNT
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
                <button type="submit" class="btn btn-primary">Confirm</button>
                <div class="form-group">
                    <input type="text" class="form-control" id="account-email" name = "email" value = "<?php echo $account['email'] ?>" placeholder="Enter email">
                </div>
            </form>
        </div>
    </div>
</div>

