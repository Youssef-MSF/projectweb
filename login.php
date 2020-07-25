<?php
session_start();

include 'links.php';

?>


<?php

include 'navbar.php';

?>

<br><br><br>

<?php



?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 d-none d-md-block image-container" style="background-color: white;">
            <img src="images/man.png" id="pic1">
        </div>
        <div class="col-lg-6 col-md-6 form-container">
            <div class="col-lg-8 col-md-12 col-sm-9 form-box text-center">
                <div class="heading mb-4">
                    <h4>S'identifier à votre compte ici</h4>
                    <h3 style="color: red;"><?php if(isset($_SESSION['varname'])){ echo $_SESSION['varname']; $_SESSION['varname']=" ";}?></h3>
                </div>
                <form action="traitementLogin.php" method="post">
                    <div class="form-input">
                        <span><i class="fa fa-envelope"></i></span>
                        <input type="email" name="email" placeholder="Votre adresse email" required>
                    </div>
                    <div class="form-input">
                        <span><i class="fa fa-lock"></i></span>
                        <input type="password" name="password" placeholder="Votre mot de passe" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6 d-flex">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="cb1">
                                <label class="custom-control-label text-white" for="cb1">Se souvenir de moi ?</label>
                            </div>
                        </div>
                        <div class="col-6 text-right">
                            <a href="forget.php" class="forget-link">Mot de passe oublié ?</a>
                        </div>
                    </div>
                    <div class="text-left mb-3">
                        <button type="submit" name="log" class="btn">S'identifier</button>
                    </div>
                    <div style="color: #1a1a00;">Vous avez pas encore un compte ?
                        <a href="signup.php" class="signup-link"> S'inscrire ici</a>

                    </div>
                </form>
            </div>
        </div>
    </div>



</div>

<?php

include 'footer.php';

?>