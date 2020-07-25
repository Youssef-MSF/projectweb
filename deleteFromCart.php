<?php

session_start();

print_r($_SESSION['prpduitsListe']);

unset($_SESSION['prpduitsListe'][$_POST['index']]);

print_r($_SESSION['prpduitsListe']);

header("location:panier.php");

?>
