<?php
require 'elements/head.php';
require 'elements/footer.php';
require 'elements/nav.php';
require '../config/config.php';
require '../models/connect.php';

headPage('Agence - Modification');

nav('../views/');

$db = connection();

if(isset($_GET["add"])){
    $add = $_GET["add"];
}else{
    $add= "";
}

if(isset($_GET['id'])){
    $id = htmlspecialchars(trim($_GET['id']));
}else{
    $id = "";
}

$sqlListOptions = "SELECT * FROM Options WHERE idOptions = :ids";
$reqListOptions = $db->prepare($sqlListOptions);
$reqListOptions->bindParam(':ids', $id);
$reqListOptions->execute();

$option = $reqListOptions->fetchObject();

?>


<div class="container mb-5">
    <div class="mt-5">
        <h1>Modifier les options</h1>
    </div>

    <div class="container mb-5">
        <div class="mt-5">
            <form action="modifierOptionBase.php" method="post">

                <div class="form-group hidden">
                    <input type="text" name="id" value="<?= $option->idOptions ?>" class="form-control d-none" id="id">
                </div>

                <div class="form-group">
                    <label for="option">Nom option</label>
                    <input type="text" name="option" value="<?= $option->nomOption ?>" class="form-control" id="option">
                </div>

                <div class="form-group">
                    <label for="quantite">Quantité</label>
                    <input type="number" name="quantite"  value="<?= $option->quantite ?>"  class="form-control" id="quantite">
                </div>

                <div class="form-group">
                    <select class="form-control" name="statut" id="statut">
                        <option value="1">Active</option>
                        <option value="0">Non active</option>
                    </select>
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
