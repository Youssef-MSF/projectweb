<?php

session_start();

if (isset($_POST['plusBtn'])) {

    foreach ($_SESSION['prpduitsListe'] as &$product) {

        if ($product[3] == $_POST['mp']) {
            if($product[4]>=0){
                $product[4]++;
            }
        }
    }
}else{
    foreach ($_SESSION['prpduitsListe'] as &$product) {

        if($product[3] == $_POST['mp']){
            if($product[4]>0){
                $product[4]--;
            }
        }
    
    }
}

header("location:panier.php");
?>