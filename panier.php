<?php
session_start();
include 'links.php';

?>
<?php

include 'navbar.php';

?>
<title>Panier</title>
<main style="margin-top: 100px;" class=" bg-light">
    <div class="container">

        <div class="table-responsive" style="width: 100%;">
            <h2>Mon panier</h2>
            <table class="table table-striped table-hover table-condensed table-bordered" style="width: 100%; text-align:center;">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col"> </th>
                        <th scope="col">Article</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Prix * Quantité</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0;
                    $somme = 0;
                    if ($_SESSION['prpduitsListe'] != null) {
                        foreach ($_SESSION['prpduitsListe'] as $index => $product) { ?>
                            <tr>
                                <th scope="row"><?php echo $i + 1 ?></th>
                                <td><?php echo $product[2]; ?></td>
                                <td id="prix"><?php echo $product[1]; ?></td>
                                <td>
                                    <form action="managePlusMinusQte.php" method="POST" style="display:contents;">

                                        <input type="text" name="mp" value=<?php echo $product[3]; ?> hidden="hidden">


                                        <button type="submit" class="btn" name="minusBtn"><i class="fas fa-minus mr-2"></i></button>

                                        <?php echo $product[4]; ?>

                                        <button type="submit" class="btn" name="plusBtn"><i class="fas fa-plus ml-2"></i></button>

                                    </form>
                                </td>
                                <td id="qteXprix">

                                    <?php

                                    echo $product[1] * $product[4];

                                    ?> DH

                                </td>
                                <td>
                                    <form action="deleteFromCart.php" method="POST">
                                        <input type="text" name="index" hidden="hidden" value=<?php echo $index; ?>>
                                        <button type="submit" style='color: red;' class="btn">
                                            <i class="fas fa-trash float-center"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                    <?php $i++;
                            $somme += $product[1] * $product[4];
                        }
                    } ?>
                    <tr>
                        <td colspan="5"><b>Total à payer</b></td>
                        <td><b><?php echo $somme; ?> DH</b></td>
                    </tr>
                    <tr>
                        <td colspan="6">
                            <a class='btn btn-warning float-right ml-2' href='procederPaiment.php'>Procéder au paiment</a>
                            <a class='btn btn-primary float-right' href='acceuil.php'>Poursuivre l'achat</a>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>
</main>



<script>
    $(function() {

    });
</script>



<?php

include 'footer.php';

?>