<?php
require 'elements/head.php';
require 'elements/footer.php';
require 'elements/nav.php';

headPage('Ajout option');

nav('../views/');


?>
    <div class="container mb-5">
        <div class="mt-5">
            <form action="addOptionBase.php" method="post">

                <div class="form-group">
                    <label for="option">Nom option</label>
                    <input type="text" name="option" class="form-control" id="option">
                </div>

                <div class="form-group">
                    <label for="quantite">Quantité</label>
                    <input type="number" name="quantite" class="form-control" id="quantite">
                </div>


                <button type="submit" class="btn btn-outline-dark">
                    Enregistrer
                </button>

                <a href="option.php" >
                    <button type="button" class="btn btn-outline-dark">
                        Annuler
                    </button>
                </a>
            </form>
        </div>
    </div>
<?php

footer();
