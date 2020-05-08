<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>

    <link rel="stylesheet" href="fonts/foundation-icons/foundation-icons.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php

    include 'nav-1/one.php';

    ?>

    <style>
        #productInfo {
            margin-top: 100px;
        }

        #ajouter,
        #retirer {
            width: 170px;
        }

        @media (max-width: 420px) {
            #retirer {
                margin-top: 10px;
            }
        }

        @media (min-width: 770px) and (max-width: 880px) {
            #retirer {
                margin-top: 10px;
            }
        }

        @media (max-width: 1000px) {
            #productInfo {
                margin-top: 0px;
            }
        }
    </style>

    <br><br><br><br>

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-6 mb-4">

                <img src="images/14.jpg" class="img-fluid">

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

        <?php

        include 'footer-1/footer-1/footer.php';

        ?>


</body>

</html>