<?php
require 'elements/head.php';
require 'elements/footer.php';
require 'elements/nav.php';
require '../config/config.php';
require '../models/connect.php';

$db = connection();

headPage('Liste agence');

nav('');

if(isset($_GET["add"])){
    $add = $_GET["add"];
}else{
    $add= "";
}

$sqlAgence = "SELECT * FROM Agence";
$reqAgence = $db->prepare($sqlAgence);
$reqAgence->execute();


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
                <th scope="col">Nom d'agence</th>
                <th scope="col">Num rue</th>
                <th scope="col">Adresse</th>
                <th scope="col">Code postal</th>
                <th scope="col">Ville</th>
                <th scope="col">Téléphone</th>
                <th scope="col">E-mail</th>
                <th scope="col">Actions</th>

            </tr>
            </thead>
            <tbody>
            <?php
            while ($agence = $reqAgence->fetchObject()){
                ?>
                <tr>
                    <th><?= $agence->idAgence; ?></th>
                    <td><?= $agence->nomAgence; ?></td>
                    <td><?= $agence->numRueAgence; ?></td>
                    <td><?= $agence->nomRueAgence; ?></td>
                    <td><?= $agence->cpAgence; ?></td>
                    <td><?= $agence->villeAgence; ?></td>
                    <td><?= $agence->phoneAgence; ?></td>
                    <td><?= $agence->emailAgence; ?></td>
                    <td>
                        <a href="modifierAgence.php?id=<?= $agence->idAgence; ?>" >
                            <button class="btn btn-success">Modifier</button>
                        </a>
                        <a href="suppAgence.php?id=<?= $agence->idAgence; ?>" >
                            <button class="btn btn-danger">Supprimer</button>
                        </a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>

    </div>
<?php

footer();