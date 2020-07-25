<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Store</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="css/mystyle02.css">
    <link rel="stylesheet" type="text/css" href="css/styleLogin.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/c939d0e917.js"></script>
    <link rel="stylesheet" href="fonts/foundation-icons/foundation-icons.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>

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

        #image_info ul {
            display: flex;
            list-style: none;
            padding: 0;
            justify-content: space-around;
        }

        #image_info ul li {
            transition-duration: 300ms;
        }

        #image_info ul input {
            display: block;
            border: none;
            color: snow;
            outline: none;
            border-radius: 10px;
        }

        #image_info ul li input:nth-child(1) {
            background-color: red;
            padding: 10px 15px;
        }

        #image_info ul li:nth-child(2) input {
            background-color: green;
            padding: 10px 20px;
        }

        #image_info ul li:hover {
            transform: scale(1.1);
        }

        #image_info ul li:nth-child(1) {
            background-color: red;
            color: snow;
        }

        #image_info ul li:nth-child(2) {
            background-color: green;
            color: snow;
        }

        @media screen and (max-width:630px) {
            ul.navbar-nav form {
                display: block;
            }

            ul.navbar-nav form li button {
                text-align: left;
            }
        }

        #image_container {
            margin-right: 30px;
        }

        @media (max-width: 780px) {
            #image_container {
                width: 100%;
            }
        }

        @media (min-width: 780px) {
            #image_container {
                width: 30%;
            }
        }

        #exit-admin {
            position: absolute;
            font-size: 10px;
            width: 10px;
            top: 295px;
            text-align: center;
            color: antiquewhite
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
                        <form method="POST" action="EspaceAdminTrait.php">
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
                                <button type="submit" name="catg" value="Stockage de données">Stockage de donnees</button>
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
                            <form class="form-inline" method="POST" action="EspaceAdminTrait.php">
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

            <div>

                <h1 style="text-align: center;text-align: center;
    background-color: cadetblue;
    padding: 10px;font-family: fantasy;" id="admin-titre"><a href="logout.php"><i class="fas fa-sign-out-alt" style="float: left; color:red;"></i>
                        <div id="exit-admin">Se déconnecter</div>
                    </a> Espace d'administrateur <a href="ajouter.php" style="color: white;"><i class="fas fa-plus" style="float: right;">&nbsp;&nbsp; Ajouter Produit</i></a></h1>
            </div>

            <div class="container-fluid" id="products">
                <div id="middle_content">
                    <?php
                    if (!is_null($_SESSION["arrayImg"])) {
                        $array = $_SESSION["arrayImg"];
                        //print_r($array);
                        if (count($array) > 1) {
                            for ($i = 0; $i < count($array) - 1; $i++) {
                                $_SESSION['immg'] = $array[$i][4];
                                echo ('<form method="POST" action="modifier.php">
                                <div id="image_container">
                                <div id="image_info" style="width:100%;">
                                    <img height=200px class="image" src="data:image;base64,' . base64_encode($array[$i][4]) . '" alt="Image">
                                    <p class="info"><span style="color: blue;font-weight: bolder; font-size: x-large;">' . $array[$i][3] . '</span><br><span style="color: red">' . $array[$i][1] . '</span><br>' . $array[$i][2] . 'DH</p><br>
                                    <input type="text" hidden="hidden" name="categorie" value="' . $array[$i][3] . '"><input type="text" hidden="hidden" name="id" value="' . $array[$i][0] . '"> <input type="text" hidden="hidden" name="design" value="' . $array[$i][1] . '"><input type="text" hidden="hidden" name="prix" value="' . $array[$i][2] . '">
                                    <textarea name="image" style="display: none;">' . $_SESSION['immg'] . '</textarea>
                                    <ul>
                                        <li><input type="submit" name="supprimer" value="Supprimer"></li>
                                        <li><input type="submit" name="modifier" value="modifier"></li>
                                    </ul><br>
                                </div>
                             </div>
                             </form>
                            ');
                            }
                        } else echo '<p style="font-size: 15px;text-align:center">Désolé le produit que vous demandez nexist pas à ce moment!!</p>';
                    } else {
                        echo "ihmo";
                    }
                    ?>
                </div>
            </div>
            <br><br><br>
            <?php


            include 'footer.php';

            ?>



    </div>

    <script>
        $(function() {
            $("#admin-titre").animate({
                margin: '30px',
                padding: '20px',
                color: 'white'
            }, 1000);
        });
    </script>

</body>

</html>