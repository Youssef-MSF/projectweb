<?php

session_start();

$id = $_POST['id'];
$_SESSION['idCommun'] = $_POST['id'];
$_SESSION['id_produit'] = $_POST['id'];
$_SESSION['prix'] = $_POST['prix'];
$_SESSION['categorie'] = $_POST['categorie'];
$_SESSION['design'] = $_POST['design'];
$_SESSION['quantity'] = $_POST['quantity'];


try {
    // Connecter à Mysql
    $conn = new PDO('mysql:host=localhost; dbname=projetweb;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Détails</title>

    <?php

    include 'links.php';

    ?>

</head>

<body>

    <?php

    include 'navbar.php';

    ?>
    <br><br><br><br>

    <?php

    foreach ($conn->query("SELECT image FROM article WHERE id=$id") as $row) {
        $myImg = $row['image'];


    ?>

        <div class="container-fluid">

            <div class="row">
                <div class="col-md-5 mb-4">

                    <img src=<?php echo 'data:image;base64,' . base64_encode($myImg); ?> class="img-fluid">

                </div>

            <?php

        }

            ?>



            <div class="col-md-6 mb-4" id="productInfo">

                <div class="p-4">

                    <div class="mb-3">
                        <a href="#">
                            <span class="badge alert-info"><?php echo $_POST['categorie']; ?></span>
                            <input type="text" hidden="hidden" value=<?php echo $_POST['categorie']; ?> name="categorie">
                        </a>
                    </div>

                    <p class="lead">
                        <span>$<?php echo $_POST['prix']; ?></span>
                        <input type="text" name="prix" hidden="hidden" value=<?php echo $_POST['prix']; ?>>

                    </p>

                    <p class="lead font-weight-bold"><?php echo $_POST['design']; ?></p>
                    <input type="text" name="design" value=<?php echo $_POST['design']; ?> hidden="hidden">

                    <a href="productDetailTraitement.php" class="btn btn-primary" id="ajouter" name="ajouterPanier">
                        Ajouter au panier
                        <i class="fi-shopping-cart"></i>
                    </a>
                    &nbsp;&nbsp;
                    <a href="acceuil.php" class="btn btn-danger" id="retirer" name="retirerPanier">
                        <i class="fas fa-arrow-left"></i>
                        Retour
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