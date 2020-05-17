<?php

include 'links.php';

?>


<?php

include 'navbar.php';

?>

<br><br><br>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 d-none d-md-block image-container">
            <img src="images/man.png" id="pic1">
        </div>
        <div class="col-lg-6 col-md-6 form-container">
            <div class="col-lg-8 col-md-12 col-sm-9 form-box text-center">
                <div class="heading mb-4">
                    <h4>Login into your account</h4>
                </div>
                <form>
                    <div class="form-input">
                        <span><i class="fa fa-envelope"></i></span>
                        <input type="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-input">
                        <span><i class="fa fa-lock"></i></span>
                        <input type="password" placeholder="Password" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6 d-flex">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="cb1">
                                <label class="custom-control-label text-white" for="cb1">Remember</label>
                            </div>
                        </div>
                        <div class="col-6 text-right">
                            <a href="forget.php" class="forget-link">Forget Password ?</a>
                        </div>
                    </div>
                    <div class="text-left mb-3">
                        <button type="submit" class="btn">Login</button>
                    </div>
                    <div style="color: #1a1a00;">Don't have an account
                        <a href="signup.html" class="signup-link"> SignUp here</a>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

include 'footer.php';

?>