<?php
require 'elements/head.php';
require 'elements/footer.php';
require 'elements/nav.php';

headPage('Agence');

nav('../views/');

?>

    <div class="container mb-5">

        <div class="text-center">
            <div class="row mt-5">
                <div class="col-4">
                    <a href="biens.php">
                        <button type="button" class="btn btn-outline-dark">
                            Liste des biens
                        </button>
                    </a>
                </div>

                <div class="col-4">
                    <a href="addBien.php">
                        <button type="button" class="btn btn-outline-dark">
                            Ajouter un bien
                        </button>
                    </a>
                </div>

            </div>

            <div class="row mt-5">
                <div class="col-4">
                    <a href="listAgence.php">
                        <button type="button" class="btn btn-outline-dark">
                            Liste des agences
                        </button>
                    </a>
                </div>

                <div class="col-4">
                    <a href="addAgence.php">
                        <button type="button" class="btn btn-outline-dark">
                            Ajouter l'agence
                        </button>
                    </a>
                </div>

            </div>

            <div class="row mt-5">

                <div class="col-4">
                    <a href="option.php">
                        <button type="button" class="btn btn-outline-dark">
                            Liste des options
                        </button>
                    </a>
                </div>

                <div class="col-4">
                    <a href="addOption.php">
                        <button type="button" class="btn btn-outline-dark">
                            Ajouter l'option
                        </button>
                    </a>
                </div>


            </div>
        </div>
    </div>

<?php

footer();
