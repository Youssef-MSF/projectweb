<?php

//session_start();

if (isset($_SESSION['prpduitsListe'])) {
    $nbrProduit = $_SESSION['prpduitsListe']->count();
}

?>

<style>
    #nbre_produits {
        background-color: #92C78C;
        color: white;
        border-radius: 50%;
        display: flex;
        position: absolute;
        width: 20px;
        height: 20px;
        padding-left: 5px;
    }

    #panier_icon {
        position: absolute;
        top: 35;
        right: 420;
    }
</style>



<header id="header">

    <nav class="navbar navbar-expand-sm bg-success navbar-dark fixed-top top-nav-collapse scrolling-navbar" id="head">
        <!-- Brand -->
        <div class="container-fluid">
            <a class="navbar-brand fa-spin" href="acceuil.php"><img src="images/02.png"></a>
            <a class="navbar-brand" href="acceuil.php">Online Store</a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <?php
                    if (isset($_SESSION['mail'])) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link mx-3" href="logout.php">Se déconnecter</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mx-3" href="profile.php">Profile</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mx-3" href="panier.php"><span id="nbre_produits" style="position: absolute; left:50%;"><?php if (isset($nbrProduit)) {
                                                                                                                                        echo $nbrProduit;
                                                                                                                                    } else {
                                                                                                                                        echo 0;
                                                                                                                                    } ?></span><i class="fas fa-shopping-cart" id="panier_icon" style="position: absolute; left:51%;width: 10px;"></i></a>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="acceuil.php">Acceuil</a>
                    </li>
                    <?php if (!isset($_SESSION['mail'])) { ?>
                        <li class="nav-item">
                            <button class="container bg-success" style="border: none; "> <a class="nav-link mx-3" href="signup.php">S'inscrire</a></button>
                        </li>
                        <li class="nav-item">
                            <button class="container bg-success" style="border: none; "> <a class="nav-link mx-3" href="login.php">S'identifier</a></button>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <button class="container bg-success" style="border: none; "> <a class="nav-link mx-3" href=<?php
                        if(isset($_SESSION['adminLogin'])){echo "EspaceAdmin.php";}else{echo "adminLogin.php";}
                        ?>>Administration</a></button>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>