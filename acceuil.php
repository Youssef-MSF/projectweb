<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Store</title>

    <?php

    include 'links.php';

    ?>
    <!-----styling  Buttons-------->
    <style>
        ul.navbar-nav form {
            display: flex;
        }

        ul.navbar-nav form li {
            flex: 1 1 0;
        }

        ul.navbar-nav form li button {
            background-color: #929FBA;
            transition-duration: 300ms;
            height: 100%;
            width: 100%;
            color: white;
            border: none;
            outline: none;
        }

        ul.navbar-nav form li button:hover {
            background-color: green;
        }

        @media screen and (max-width:630px) {
            ul.navbar-nav form {
                display: block;
            }

            ul.navbar-nav form li button {
                text-align: left;
            }
        }

        @media (max-width: 780px) {
            .productForm {
                width: 100%;
            }
        }

        @media (min-width: 780px) {
            .productForm {
                width: 30%;
            }
        }
    </style>

</head>

<body>
    <div class="" style="background-color: white">

        <?php

        include 'navbar.php';

        ?>


        <!------------------------------------------------------->
        <br><br><br>
        <div class="container-fluid" style="right: 0; left: 0;">
            <nav class="navbar navbar-expand-sm navbar-dark top-nav-collapse" style="background-color: #929FBA;" id="categories">

                <!-- Navbar brand -->
                <span class="navbar-brand">Catégories:</span>

                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">

                    <!-- Links -->
                    <ul class="navbar-nav mr-auto">
                        <form method="GET" action="traitementImage.php">
                            <li class="nav-item active">
                                <button type="submit" name="catg" value="Toutes les catégories">Toutes les catégories</button>
                                <!-- <a class="nav-link" href="#">Toutes les catégories</a>-->
                            </li>
                            <li class="nav-item">
                                <button type="submit" name="catg" value="Ordinateurs">Ordinateurs</button>
                                <!---<a class="nav-link" href="#">Ordinateurs</a>--->
                            </li>
                            <li class="nav-item">
                                <button type="submit" name="catg" value="Périphériques & accessoires">Périphériques & accessoires</button>
                                <!---<a class="nav-link" href="#">Périphériques & accessoires</a>-->
                            </li>
                            <li class="nav-item">
                                <button type="submit" name="catg" value="Stockage de données">Stockage de données</button>
                                <!--<a class="nav-link" href="#">Stockage de données</a>-->
                            </li>
                            <li class="nav-item">
                                <button type="submit" name="catg" value="Imprimantes & scanners">Imprimantes & scanners</button>
                                <!---<a class="nav-link" href="#">Imprimantes & scanners</a>-->
                            </li>
                            <li class="nav-item">
                                <button type="submit" name="catg" value="Logiciels">Logiciels</button>
                                <!--- <a class="nav-link" href="#">Logiciels</a>-->
                            </li>
                        </form>
                        <li class="nav-item" style="margin-left: 150px;">
                            <form class="form-inline" method="GET" action="traitementImage.php">
                                <div class="md-form my-0">
                                    <input name="catg" class="form-control mr-sm-2" type="text" placeholder="Chercher une catégorie" aria-label="Search">
                                    <button type="submit" class=" btn-info"><i class="fas fa-search" style="color: white;"></i></button>
                                </div>
                            </form>
                        </li>

                    </ul>
                    <!-- Links -->
                </div>
                <!-- Collapsible content -->

            </nav>
        </div>

        <!------------------------------------------------------->
        <br<br><br><br>

            <div class="container-fluid" id="products">
                <div id="middle_content">
                    <?php
                    if (!empty(($_SESSION["arrayImg"]))) {
                        $array = $_SESSION["arrayImg"];
                        if (count($array) > 1) {
                            $quantity = 1;
                            echo '<div>';
                            for ($i = 0; $i < count($array) - 1; $i++) {
                                echo ('
                                <form action="product.php" method="post" style="display:inline-block; flex-grow:1;" class="productForm">
                                <button type="submit" style="all: unset; width:100%;" id="product-button"> <div id="image_container" style="width:100%;">
                                <div id="image_info" style="width:100%;">
                                    <img height=200px class="image" src="data:image;base64,' . base64_encode($array[$i][4]) . '" alt="PC protable:Predator">
                                    <p class="info"><span style="color: blue;font-weight: bolder; font-size:20px;">' . $array[$i][3] . '</span><br><span style="color: red">' . $array[$i][1] . '</span><br>' . $array[$i][2] . 'DH</p>
                                    <input type="text" hidden="hidden" name="categorie" value="' . $array[$i][3] . '"> <input type="text" hidden="hidden" name="design" value="' . $array[$i][1] . '"> <input type="text" hidden="hidden" name="id" value="' . $array[$i][0] . '"><input type="text" hidden="hidden" name="prix" value="' . $array[$i][2] . '"><input type="text" hidden="hidden" name="quantity" value="' . $quantity . '">
                                    </div>
                             </div>
                             </button>
                             </form>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             ');
                            }
                            echo '</div>';
                        } else echo '<p style="font-size: 15px;text-align:center">Désolé le produit que vous demandez nexist pas à ce moment!!</p>';
                    }
                    if (empty($_SESSION['prpduitsListe'])) {
                        $_SESSION['prpduitsListe'] = new ArrayObject();
                    }
                    ?>
                </div>
            </div>

            <br><br><br>


            <?php

            if (!empty($_SESSION['email'])) {
                echo "Nice";
            }

            include 'footer.php';

            ?>



    </div>


</body>

</html>