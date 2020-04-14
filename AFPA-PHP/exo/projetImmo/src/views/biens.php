<?php
require 'elements/head.php';
require 'elements/footer.php';
require 'elements/nav.php';
require '../config/config.php';
require '../models/connect.php';

$db = connection();

headPage('Accueil');

nav('');

if(isset($_GET["add"])){
    $add = $_GET["add"];
}else{
    $add= "";
}


$sqlBiens = "SELECT * 
             FROM Bien
             INNER JOIN Options ON Bien.Options_idOptions = Options.idOptions
             INNER JOIN Agence ON Bien.Agence_idAgence = Agence.idAgence";
$reqBiens = $db->prepare($sqlBiens);
$reqBiens->execute();

$listeBiens = array();


while($biens = $reqBiens->fetchObject()){
    array_push($listeBiens, $biens);
}
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
                <th scope="col">Agence</th>
                <th scope="col">Nom </th>
                <th scope="col">Prix</th>
                <th scope="col">Num</th>
                <th scope="col">CP</th>
                <th scope="col">Ville</th>
                <th scope="col">Commission</th>
                <th scope="col">Image</th>
                <th scope="col">Surface Bien</th>
                <th scope="col">Suface Terrain</th>
                <th scope="col">Options</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($listeBiens as $bien){
                ?>
                <tr>
                    <td><?= $bien->idBien; ?></td>
                    <td><?= $bien->nomAgence; ?></td>
                    <td><?= $bien->nomBien; ?></td>
                    <td><?= $bien->prixBien; ?></td>
                    <td><?= $bien->numAdresseBien; ?></td>
                    <td><?= $bien->nomAdresseBien; ?></td>
                    <td><?= $bien->villeBien; ?></td>
                    <td><?= $bien->commissionBien; ?></td>
                    <td><?= $bien->photoBien; ?></td>
                    <td><?= $bien->surfaceBien; ?></td>
                    <td><?= $bien->sufaceTerrain; ?></td>
                    <td><?= $bien->nomOption; ?></td>
                    <td>
                        <a href="modifierBien.php?id=<?= $bien->idBien; ?>" >
                            <button class="btn btn-success">Modifier</button>
                        </a>
                        <a href="suppBien.php?id=<?= $bien->idBien; ?>" >
                            <button class="btn btn-danger">Supprimer</button>
                        </a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <!--    nomBien	prixBien	numAdresseBien	nomAdresseBien	cpBien	villeBien	commissionBien	photoBien	statut	surfaceBien	sufaceTerrain	Options_idOptions	Agence_idAgence
        -->
    </div>
<?php
footer();