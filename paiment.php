<?php

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
</style>

<!-- Principale formulaire de paiment -->

<main>
    <div class="container">
        <h2 class="text-center">Paiment</h2>
        <hr>
        <div class="row">
            <div class="col-md-8 mb-4">
                <div class="card">
                    <form method="POST" class="card-body">

                        <h3>Adresse de livraison</h3>

                        <div class="md-form mb-5">
                            <input type='text' placeholder='Adresse' id='adresse' name='adresse' class='form-control'>
                        </div>

                        <div class="md-form mb-5">
                            <input type='text' placeholder='adresse 2 (optionnelle)' id='adresse2' name='adresse2' class='form-control'>

                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-12 mb-4">
                                <label for="country">Ville</label>
                                <?php

                                include 'countries.php';

                                ?>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <label for="zip">Code postal</label>
                                <input type='text' placeholder='Code postal' id='zip' name='zip' class='form-control'>
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
                                            <td class="container"><input type='text' placeholder='Numéro de carte bancaire' id='numeroCarteBancaire' name='numeroCarteBancaire' class='form-control'></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="stripe-form-row">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="save" id="save_carte_info">
                                        <label class="custom-control-label" for="save_carte_info">Enregistrer pour les prochains achats</label>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Payer</button>

                    </form>

                </div>

            </div>

            <div class="col-md-4 mb-4">
                <div class="col-md-12 mb-4">
                    <h4 class="d-flex justify-content-between">
                        <span class="text-center">Votre panier</span>
                        <span class="badge badge-secondary">1</span>
                    </h4>
                    <ul class="list-group mb-3 z-depth-1">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">1 x Predator</h6>
                                <small class="text-muted">Laptop</small>
                            </div>
                            <span class="text-muted">1000 DH</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (MAD)</span>
                            <strong>1000 DH</strong>
                        </li>
                    </ul>

                </div>


            </div>

        </div>

    </div>
</main>

<?php

include 'footer.php';

?>