<?php

session_start();
include 'links.php';



?>


<?php

include 'navbar.php';

?>



<br><br><br><br><br>

<style>
    input[type=text] {
        background: transparent;
        border: none;
        border-bottom: 1px solid gray;
    }

    .ui-dialog.ui-widget-content {
        background: red;
    }
</style>

<!-- Principale formulaire de paiment -->

<main>
    <div class="container">
        <h2 class="text-center">Paiment</h2>
        <h4 style="color: red;"><?php if (isset($_SESSION['codeBanqueInvalid'])) {
                                    echo $_SESSION['codeBanqueInvalid'];
                                }
                                $_SESSION['codeBanqueInvalid'] = "" ?></h4>
        <hr>
        <div class="row">
            <div class="col-md-8 mb-4">
                <div class="card">
                    <form method="POST" action="traitementPaiment.php" class="card-body">

                        <h3>Adresse de livraison</h3>

                        <div class="md-form mb-5">
                            <input type='text' placeholder='Adresse' id='adresse' name='adresse' class='form-control' required="true" value=<?php echo $_SESSION['adresse']; ?>>
                        </div>

                        <div class="md-form mb-5">
                            <input type='text' placeholder='adresse 2 (optionnelle)' id='adresse2' name='adresse2' class='form-control'>

                        </div>

                        <div class="md-form mb-5">
                            <input type='text' placeholder='Téléphone' id='tel' name='tel' class='form-control' value=<?php echo $_SESSION['tele']; ?>>

                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-12 mb-4">
                                <label for="country">
                                    <h3>Ville</h3>
                                </label>
                                <select id="ville" name="ville" class="form-control" style="background-color: transparent;border: none;border-bottom: 1px solid gray;" required="true">
                                    <option>Selectionner votre pays</option>
                                    <?php

                                    try {
                                        // Connecter à Mysql
                                        $db = new PDO('mysql:host=localhost; dbname=projetweb;charset=utf8', 'root', '');
                                    } catch (Exception $e) {
                                        die('Erreur : ' . $e->getMessage());
                                    }

                                    $reponse = $db->query('SELECT * FROM ville ORDER BY ville');

                                    while ($donnees = $reponse->fetch()) {
                                        if ($donnees['ville'] == $_SESSION["ville"]) {
                                            echo "<option value=\"" . $donnees['ville'] . "\" selected=\"selected\">" . $donnees['ville'] . "</option>";
                                        } else {
                                            echo "<option value=\"" . $donnees['ville'] . "\">" . $donnees['ville'] . "</option>";
                                        }
                                    }

                                    ?>

                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <label for="zip">
                                    <h3>Code postal</h3>
                                </label>
                                <input type='text' placeholder='Code postal' id='zip' name='zip' class='form-control' required="true">
                            </div>
                        </div>


                        <hr>

                        <h3>Paiment</h3>

                        <div class="d-block my-3">
                            <div class="new-card-form">
                                <div class="md-form mb-5 input-icons">
                                    <table>
                                        <tr>
                                            <td><i class="fas fa-credit-card" style="font-size: 25px;color: cornflowerblue;"></i></td>
                                            <td class="container"><input type='text' placeholder='Numéro de carte bancaire' id='numeroCarteBancaire' name='numeroCarteBancaire' class='form-control' required="true"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="stripe-form-row">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="save" id="enregistrer_prochains_achats">
                                        <label class="custom-control-label" for="enregistrer_prochains_achats">Enregistrer pour les prochains achats</label>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit" id="payer">Payer</button>

                    </form>

                </div>

            </div>

            <div id="myDialog" title="Erreur !!!">
                <p><b>Votre code de carte banquaire est incorrecte, vérifier le s'il vous plait !!!</b></p>
            </div>

            <div class="col-md-4 mb-4">
                <div class="col-md-12 mb-4">
                    <h4 class="d-flex justify-content-between">
                        <span class="text-center">Votre panier</span>
                        <span class="badge badge-secondary"><?php echo $_SESSION['prpduitsListe']->count(); ?></span>
                    </h4>
                    <?php
                    $i = 0;
                    foreach ($_SESSION['prpduitsListe'] as $product) { ?>
                        <ul class="list-group mb-3 z-depth-1">
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0"><?php echo $product[4]; ?> x <?php echo $product[2]; ?></h6>
                                    <small class="text-muted"><?php echo $product[0]; ?></small>
                                </div>
                                <span class="text-muted"><?php echo $product[1] * $product[4]; ?> DH</span>
                            </li>
                        <?php
                        $i += $product[1] * $product[4];
                    } ?>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (MAD)</span>
                            <strong><?php echo $i; ?> DH</strong>
                        </li>
                        </ul>

                </div>


            </div>

        </div>

    </div>
</main>

<script>
    $(document).ready(function() {

        var regex = /^[0-9]+$/

        $("#myDialog").dialog({
            autoOpen: false,
            buttons: {
                Fermer: function() {
                    $(this).dialog("close");
                }
            }
        });

        $("#payer").click(function() {
            var len = $("#numeroCarteBancaire").val().length;

            if (len == 16 && regex.test($("#numeroCarteBancaire").val())) {
                console.log("Done");
            } else {
                $("form").submit(function(e) {
                    $("#myDialog").dialog("open");
                    e.preventDefault(e);
                    for (i = 0; i < 5; i++) {
                        location.reload(true);
                    }
                });

            }
        })
    });
</script>


<?php

include 'footer.php';

?>