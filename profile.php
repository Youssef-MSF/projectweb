<?php

session_start();
include 'links.php';

include 'navbar.php';

echo "<br><br><br>";

$db = mysqli_connect("localhost", "root", "", "projetweb");
if (isset($_POST['loga'])) {

    $apass = $_POST['Apass'];
    $npass = $_POST['npass'];
    $nvpass = $_POST['nvpass'];

    if (trim($apass) != "" && trim($npass) != "" && trim($nvpass) != "") {
        if (trim($apass) == $_SESSION["pass"]) {
            if (trim($npass) == trim($nvpass)) {
                $sql = "UPDATE client SET password='" . $nvpass . "' WHERE password='" . $_SESSION["pass"] . "' ";
                $result = mysqli_query($db, $sql);
                echo "<script>window.alert('le mot de passe est changeé')</script>";
            } else {
                echo "<script>window.alert('les nouveaux mots de passe doivent etre égaux')</script>";
            }
        } else {
            echo "<script>window.alert('le mot de passe actuel nest pas correct')</script>";
        }
    } else {
        echo "<script>window.alert('Vérifier si tous les champs est rempleé')</script>";
    }
}

$ida = $_SESSION["id"];
$sql1 = "SELECT id_comm FROM commande WHERE id_client = '$ida'";
$result1 = mysqli_query($db, $sql1);
$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
$_SESSION["id_comm"] = $row1["id_comm"];


$user = 'root';
$pass = '';
$ida2 = $_SESSION["id_comm"];
$pde = new PDO('mysql:host=localhost;dbname=projetweb', $user, $pass, [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
$products = $pde->query("SELECT id_article, quantite, prix_unitaire FROM ligne WHERE id_comm = '$ida2'")->fetchAll();

?>


<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/stylo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
        <a class="navbar-brand"><b>Espace Client</b></a>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class=" col-md-8">
                <div class="card">
                    <div class="card-header"><b>Votre Profile</b>

                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="nom">Nom</label>
                                    <input type="text" class="form-control" name="nom" id="nom" Value=<?php echo $_SESSION["nom"] ?>>
                                    <br>
                                    <label for="age">Age</label>
                                    <input type="text" class="form-control" name="age" id="age" Value=<?php echo $_SESSION["age"] ?>>
                                </div>
                                <div class="col-md-6">
                                    <label for="pre">Prénom</label>
                                    <input type="text" class="form-control" name="pre" id="pre" Value=<?php echo $_SESSION["prenom"] ?>>
                                    <br>
                                    <label for="vil">Ville</label>
                                    <input type="text" class="form-control" name="vil" id="vil" Value=<?php echo $_SESSION["ville"] ?>><br>
                                </div>

                                <div class="col-md-12">
                                    <label for="adr">Adresse</label>
                                    <input type="text" class="form-control" name="adr" id="adr" Value=<?php echo $_SESSION["adresse"] ?>><br>


                                </div>
                                <div class="col-md-12">
                                    <label for="tel">Téléphone mobile</label>
                                    <input type="text" class="form-control" name="tel" id="tel" Value=<?php echo $_SESSION["tele"] ?>><br>


                                </div>
                                <div class="col-md-12">
                                    <label for="ema">Email</label>
                                    <input type="text" class="form-control" name="ema" id="ema" Value=<?php echo $_SESSION["mail"] ?>><br>


                                </div>


                            </div>

                        </form>


                    </div>

                    <div class="card-header"><b>Modifier votre mot de passe</b> </div>
                    <div class="card-body">
                        <form method="post" form-box>
                            <div class="row">

                                <div class="col-md-12">

                                    <input type="password" class="form-control" name="Apass" id="Apass" placeholder="Mot de passe actuel">
                                    <br></div>
                                <div class="col-md-6">

                                    <input type="password" class="form-control" name="npass" id="npass" placeholder="Nouveau Mot de passe">
                                    <br></div>
                                <div class="col-md-6">

                                    <input type="password" class="form-control" name="nvpass" id="nvpass" placeholder="Saisissez à nouveau le mot de passe">
                                    <br></div>
                                <div class="col-md-6 text-left mb-3 ">
                                    <button type="submit" name="loga" class="btn-primary">Enregistrer</button>
                                </div>

                            </div>
                        </form>


                    </div>
                </div>

            </div>
            <div class=" col-md-4">
                <div class="card">
                    <div class="card-header"><b>Vos commandes</b> </div>
                    <div class="card-body">
                        <form>

                            <?php
                            echo "<hr>";
                            foreach ($products as $product) : ?>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Article :</th>
                                            <th> <?php
                                                    $ida0 = $product['id_article'];
                                                    $pde = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '', [
                                                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                                                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                                                    ]);
                                                    $nomaart = $pde->query("SELECT design FROM article WHERE id = '$ida0'")->fetchAll();
                                                    echo $nomaart[0]["design"];
                                                    ?> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">&nbsp;&nbsp;&nbsp;Prix Unitaire :</th>
                                            <th><?= $product['prix_unitaire'] ?></th>

                                        </tr>
                                        <tr>
                                            <th scope="row">&nbsp;&nbsp;&nbsp;Quantité :</th>
                                            <th><?= $product['quantite'] ?></th>
                                        </tr>
                                        <tr>
                                            <th scope="row">&nbsp;&nbsp;&nbsp;Catégorie :</th>
                                            <th>
                                                <?php
                                                $ida0 = $product['id_article'];
                                                $pde = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '', [
                                                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                                                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                                                ]);
                                                $nomaart = $pde->query("SELECT categorie FROM article WHERE id = '$ida0'")->fetchAll();
                                                echo $nomaart[0]["categorie"];
                                                ?>

                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                            <?php endforeach ?>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php

    include 'footer.php';

    ?>




</body>


</html>