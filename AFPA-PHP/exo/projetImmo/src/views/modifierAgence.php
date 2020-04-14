<?php
require 'elements/head.php';
require 'elements/footer.php';
require 'elements/nav.php';
require '../config/config.php';
require '../models/connect.php';

$db = connection();

headPage('Agence');

nav('../views/');


if(isset($_GET['id'])){
    $id = htmlspecialchars(trim($_GET['id']));
}else{
    $id = "";
}

?>

    <div class="container mb-5">
<?php

$sqlAgences = "SELECT * FROM Agence";

$reqAgences = $db->prepare($sqlAgences);
$reqAgences->bindParam(':ids', $id);
$reqAgences->execute();

while($agence = $reqAgences->fetchObject()) {

    ?>

    <div class="mt-5">
        <form method="post" action="modifierAgenceBase.php">
            <div class="form-group d-none">
                <input type="text" name="id" class="form-control d-none" value="<?= $agence->idAgence; ?>"
                >
            </div>

            <div class="form-group">
                <label for="nomAgence">Nom agence</label>
                <input type="text" name="nomAgence" class="form-control" value="<?= $agence->nomAgence; ?>"
                       id="nomAgence">
            </div>

            <div class="form-group">
                <label for="numRueAgence">Num rue</label>
                <input type="text" name="numRueAgence" value="<?= $agence->numRueAgence; ?>"
                       class="form-control" id="numRueAgence">
            </div>

            <div class="form-group">
                <label for="nomRueAgence">Nom rue</label>
                <input type="text" class="form-control" value="<?= $agence->nomRueAgence; ?>"
                       name="nomRueAgence" id="nomRueAgence">
            </div>

            <div class="form-group">
                <label for="cpAgence">Code postal</label>
                <input type="text" class="form-control" value="<?= $agence->cpAgence; ?>" name="cpAgence"
                       id="cpAgence">
            </div>

            <div class="form-group">
                <label for="nomVilleAgence">Nom ville</label>
                <input type="text" class="form-control" value="<?= $agence->villeAgence; ?>"
                       name="nomVilleAgence" id="nomVilleAgence">
            </div>

            <div class="form-group">
                <label for="phoneAgence">Téléphone</label>
                <input type="tel" class="form-control" value="<?= $agence->phoneAgence; ?>" name="phoneAgence"
                       id="phoneAgence">
            </div>

            <div class="form-group">
                <label for="emailAgence">Email</label>
                <input type="email" class="form-control" value="<?= $agence->emailAgence; ?>" name="emailAgence"
                       id="emailAgence">
            </div>

            <button type="submit" class="btn btn-outline-dark">Enregistrer</button>
            <a href="votreAgence.php" ><button type="button" class="btn btn-danger">Annuler</button></a>
        </form>
    </div>
    </div>
    <?php
}
?>

    </div>
<?php

footer();
