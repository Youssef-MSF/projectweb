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
            <div class="col-lg-8 col-md-12 col-sm-9 form-box">
                <div class="reset-form d-block">
                    <form class="reset-password-form">
                        <h4 class="mb-3">Réintialiser votre mot de passe</h4>
                        <p class="mb-3 text-white">Veuillez entrer votre adresse mail</p>
                        <div class="form-input">
                            <span><i class="fa fa-envelope"></i></span>
                            <input type="email" placeholder="Email Address" required>
                        </div>
                        <div class="mb-3">
                            <button class="btn" type="submit">Envoyer</button>
                        </div>
                    </form>
                </div>
                <div class="reset-confirmation d-none">
                    <div class="mb-4">
                        <h4 class="mb-3">Lien bien envoyé</h4>
                        <h6 class="text-white">Veuillez vérifier votre boite mail</h6>
                    </div>
                    <div>
                        <a href="login.php">
                            <button type="submit" class="btn">S'identifier</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
<script type="text/javascript">
    function PasswordReset() {
        $('form.reset-password-form').on('submit', function(e) {
            e.preventDefault();
            $('.reset-form').removeClass('d-block').addClass('d-none');
            $('.reset-confirmation').addClass('d-block');
        });
    }
    window.addEventListener('load', function() {
        PasswordReset();
    })
</script>

<?php

include 'footer.php';

?>