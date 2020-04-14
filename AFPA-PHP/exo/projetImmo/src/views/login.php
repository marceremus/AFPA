<?php
require 'elements/head.php';
require 'elements/footer.php';
require 'elements/nav.php';

headPage('Accueil');

nav('');

?>

    <div class="container mb-5">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6  col-lg-6  col-xl-6 d-flex="auto">
            <form method="post" class="mt-5">

                <!-- Nom  -->
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="nom">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Votre email">
                    </div>
                </div>

                <!-- prénom  -->
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="mdp">Mot de passe</label>
                        <input type="password" class="form-control" id="mdp">
                    </div>
                </div>

                <button type="submit" class="btn btn-outline-secondary">Envoyer</button>
            </form>
        </div>
    </div>
<?php

footer();