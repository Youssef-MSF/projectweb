<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>

    <?php

    include 'links.php';

    ?>

</head>

<body>

    <?php

    include 'navbar.php';

    ?>
    <br><br><br><br>

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-5 mb-4">

                <img src="images/raw.jpg" class="img-fluid">

            </div>



            <div class="col-md-6 mb-4" id="productInfo">

                <div class="p-4">

                    <div class="mb-3">
                        <a href="#">
                            <span class="badge alert-info">Ecran</span>
                        </a>
                    </div>

                    <p class="lead">
                        <span>$200</span>

                    </p>

                    <p class="lead font-weight-bold">Design</p>

                    <a href="#" class="btn btn-primary" id="ajouter">
                        Ajouter au panier
                        <i class="fi-shopping-cart"></i>
                    </a>
                    &nbsp;&nbsp;
                    <a href="#" class="btn btn-danger" id="retirer">
                        Retirer du panier
                        <i class="fi-trash"></i>
                    </a>

                </div>

            </div>

        </div>
    </div>

    <?php

    include 'footer.php';

    ?>


</body>

</html>








