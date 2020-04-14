<?php
require 'elements/head.php';
require 'elements/footer.php';
require 'elements/nav.php';
require '../config/config.php';
require '../models/connect.php';

headPage('Accueil');

nav('');

$db = connection();


if(isset($_GET["add"])){
    $add = $_GET["add"];
}else{
    $add= "";
}


$sqlSelectOptions = "SELECT * FROM Options";
$reqOptions = $db->prepare($sqlSelectOptions);
$reqOptions->execute();

?>

<div class="container mb-5">

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


    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom d'option</th>
            <th scope="col">Quantité</th>
            <th scope="col">Statut</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($option = $reqOptions->fetchObject()) {
            ?>
            <tr>
                <td><?= $option->idOptions; ?></td>
                <td><?= $option->nomOption; ?></td>
                <td><?= $option->quantite; ?></td>
                <!--<td><?/*= $option->statut; */?></td>-->
                <td>
                    <select class="form-control" name="statut" id="statut">
                        <option value="1">Active</option>
                        <option value="0">Non active</option>
                    </select>
                </td>
                <td>
                    <a href="modifierOption.php?id=<?= $option->idOptions; ?>" >
                        <button class="btn btn-success">
                            Modifier
                        </button>
                    </a>
                    <a href="suppOption.php?id=<?= $option->idOptions; ?>" >
                        <button class="btn btn-danger">
                            Supprimer
                        </button>
                    </a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>

</div>
