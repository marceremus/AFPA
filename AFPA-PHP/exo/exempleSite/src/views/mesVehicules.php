<?php
include_once 'elements/head.php';
include_once 'elements/footer.php';
require '../models/connect.php';

$db = connection();

var_dump($db);

$vehiculeMarque = array(
    "Audi" => "A1",
    "Audi" => "A4",
    "Audi" => "A6",
    "BMW" => "Serie 4",
    "BMW" => "Serie 7",
    "BMW" => "Serie X6",
    "PEUGEOT" => "208",
    "PEUGEOT" => "5008",
    "Ford" => "Fiesta",
    "PEUGEOT" => "S-Max",
);

head();
?>

    <h1>Liste de mes véhicules</h1>
    <hr>
    <table class="table table-hover mt-5 mb-5">
        <thead class="thead-dark">
        <tr>
            <th>Marque</th>
            <th>Modèle</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
            foreach ($vehiculeMarque as $marque=>$modele){
            ?>
            <td><?= $marque ?></td>
            <td><?= $modele ?></td>
        </tr>
        <?php
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