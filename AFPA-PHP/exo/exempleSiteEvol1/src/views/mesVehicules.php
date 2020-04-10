<?php
include_once 'elements/head.php';
include_once 'elements/footer.php';
require '../models/connect.php';

$db = connection();

$vehiculeMarque = array(
    array(1 => array( "Audi" => "A1")),
    array(2 => array( "BMW" => "X6")),
    array(3 => array( "Mercedes" => "class A"))
);


/*var_dump($vehiculeMarque);

foreach ($vehiculeMarque as $tabVeh){
    foreach ($tabVeh as $indece =>$sousTabVeh){
        echo $indece.'<br>';
        foreach ($sousTabVeh as $marque=>$modele){
            echo $marque;
            echo $modele;
        }
    }
}*/

head();
?>

    <h1>Liste de mes véhicules</h1>
    <hr>
    <table class="table table-hover mt-5 mb-5">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
            foreach ($vehiculeMarque as $tabVeh){
            foreach ($tabVeh as $indece => $sousTabVeh) {
            ?>
            <td><?= $indece ?></td>

            <?php
            foreach ($sousTabVeh as $marque => $modele) {
            ?>
            <td><?= $marque ?></td>
            <td><?= $modele ?></td>
            <td>
                <a href="detailProduit.php?id=<?= $indece; ?>&marque=<?= $marque; ?>&modele=<?= $modele ?>" >
                    <button class="btn btn-outline-dark">Voir +</button>
                </a>
            </td>
            </a>
        </tr>
        <?php
        }
        }
        }
        ?>

        </tbody>
    </table>
    <div>
        <a href="../../index.php">
            <button type="button" class="btn btn-outline-dark">
                Accueil
            </button>
        </a>
    </div>

<?php
footer();