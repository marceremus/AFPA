<?php
require 'elements/head.php';
require 'elements/footer.php';
require 'elements/nav.php';
require '../config/config.php';
require '../models/connect.php';

$db = connection();

headPage('Agence');

nav('../views/');

if(isset($_GET["add"])){
    $add = $_GET["add"];
}else{
    $add= "";
}
?>

    <div class="container mb-5">
        <?php
        if($add === "success"){
            ?>
            <div class="alert alert-success" role="alert">
                <p>L'agence a été bien supprimée</p>
            </div>

            <?php
        }
        if($add === "erreur"){
            ?>
            <div class="alert alert-danger" role="alert">
                <p>L'agence n'a pas été supprimé</p>
            </div>

            <?php
        }

        ?>



        <?php

        $sqlAgences = "SELECT * FROM Agence";

        $reqAgences = $db->prepare($sqlAgences);
        $reqAgences->execute();

        $dataAgence = array();

        while($data = $reqAgences->fetchObject()){
            array_push($dataAgence, $data);
        }

        ?>

        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Nom agence</th>
                <th>Num rue</th>
                <th>Nom rue </th>
                <th>Cp</th>
                <th>Ville</th>
                <th>Téléphone</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php
                foreach ($dataAgence as $agance){
                ?>
                <td><?= $agance->idAgence; ?></td>
                <td><?= $agance->nomAgence; ?></td>
                <td><?= $agance->numRueAgence; ?></td>
                <td><?= $agance->nomRueAgence; ?></td>
                <td><?= $agance->cpAgence; ?></td>
                <td><?= $agance->villeAgence; ?></td>
                <td><?= $agance->phoneAgence; ?></td>
                <td><?= $agance->emailAgence; ?></td>
                <td>
                    <a href="modifierAgence.php?id=<?= $agance->idAgence;  ?>">
                        <button class="btn btn-info">
                            Modifier
                        </button>
                    </a>
                    <a href="suppAgence.php?id=<?= $agance->idAgence;  ?>">
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
<?php

footer();
