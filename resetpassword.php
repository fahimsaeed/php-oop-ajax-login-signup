<?php include('header.php') ?>
<div class="container">
    <?php include('navbar.php'); ?>
    <div class="mt-4 p-5 bg-light text-black rounded">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <h2>Reset Password</h2>
            <form>
                <div class="mb-3">
                    <label for="exampleInputPassword2" class="form-label">New Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword2">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword3" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword3">
                </div>
                <button type="submit" class="btn btn-primary">Change Password</button>
            </form>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>

