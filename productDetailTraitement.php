<?php

session_start();

foreach ($_SESSION['prpduitsListe'] as &$product) {
    if ($product[3] == $_SESSION['idCommun']) {
        $product[4] += 1;
        header("location:panier.php");
        exit();
    }
}
$_SESSION['prpduitsListe']->append(array($_SESSION['categorie'], $_SESSION['prix'], $_SESSION['design'], $_SESSION['id_produit'], $_SESSION['quantity']));

header("location:panier.php");

?>