    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="form" method="post" action="auth.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <br>
            <a href="" data-bs-toggle="modal" data-bs-target="#resetPassword">Forgot Your Password?</a>
        </div>
        <div class="modal-footer">
            
        </div>
        </div>
    </div>
    </div>
    <!-- Login Modal End -->

    <!-- SignUp Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Signup For New Account</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="form" method="post" action="signup.php">
            <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Full Name</label>
                    <input type="text" name="fullname" class="form-control" id="exampleInputText1" aria-describedby="textHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                    <input type="password" name="confirmpassword" class="form-control" id="exampleInputPassword2">
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
        </div>
        <div class="modal-footer">

        </div>
        </div>
    </div>
    </div>
    <!-- SignUp Modal End -->
    <!-- ChangePassword Modal -->
    <div class="modal fade" id="changePassModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="form" method="post" action="changepassword.php">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Old Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword2" class="form-label">New Password</label>
                    <input type="password" name="newpassword" class="form-control" id="exampleInputPassword2">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword3" class="form-label">Confirm Password</label>
                    <input type="password" name="confirmpassword" class="form-control" id="exampleInputPassword3">
                </div>
                <button type="submit" class="btn btn-primary">Change Password</button>
            </form>
        </div>
        <div class="modal-footer">

        </div>
        </div>
    </div>
    </div>
    <!-- ChangePassword Modal End -->

    <!-- Reset Password Modal -->
    <div class="modal fade" id="resetPassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Send me reset Password Link</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Send Password Link</button>
            </form>
        </div>
        </div>
    </div>
    </div>
    <!-- Reset Password Modal End -->