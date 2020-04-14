<?php
require 'elements/head.php';
require 'elements/footer.php';
require 'elements/nav.php';

headPage('Agence');

nav('../views/');


if(isset($_GET["add"])){
    $add = $_GET["add"];
}else{
    $add= "";
}

?>


    <div class="container mb-5">
        <div class="mt-5">
            <h1>Ajouter une agence</h1>
        </div>

        <?php
        if($add === "success"){
            ?>
            <div class="alert alert-success" role="alert">
                <p>L'agence a été bien enregistrée</p>
            </div>

            <?php
        }
        if($add === "erreur"){
            ?>
            <div class="alert alert-danger" role="alert">
                <p>L'agence n'a pas été enregistrée</p>
            </div>
            <?php
        }

        ?>



        <div class="mt-5">
            <form method="post" action="addAgenceBase.php">
                <div class="form-group">
                    <label for="nomAgence">Nom agence</label>
                    <input type="text" name="nomAgence" class="form-control" id="nomAgence">
                </div>

                <div class="form-group">
                    <label for="numRueAgence">Num rue</label>
                    <input type="text" name="numRueAgence" class="form-control" id="numRueAgence">
                </div>

                <div class="form-group">
                    <label for="nomRueAgence">Nom rue</label>
                    <input type="text" class="form-control" name="nomRueAgence" id="nomRueAgence">
                </div>

                <div class="form-group">
                    <label for="cpAgence">Code postal</label>
                    <input type="text" class="form-control" name="cpAgence" id="cpAgence">
                </div>

                <div class="form-group">
                    <label for="nomVilleAgence">Nom ville</label>
                    <input type="text" class="form-control" name="nomVilleAgence" id="nomVilleAgence">
                </div>

                <div class="form-group">
                    <label for="phoneAgence">Téléphone</label>
                    <input type="tel" class="form-control" name="phoneAgence" id="phoneAgence">
                </div>

                <div class="form-group">
                    <label for="emailAgence">Email</label>
                    <input type="email" class="form-control" name="emailAgence" id="emailAgence">
                </div>

                <button type="submit" class="btn btn-outline-dark">Enregistrer</button>
            </form>
        </div>
    </div>

<?php

footer();
