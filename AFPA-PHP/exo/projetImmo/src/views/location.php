<?php
require 'elements/head.php';
require 'elements/footer.php';
require 'elements/nav.php';
require '../config/config.php';
require '../models/connect.php';

$db = connection();

headPage('Location ');

nav('');


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

    <div class="container">

        <div class="row mt-5">
            <h1>Voici une sélection de nos biens immobiliers </h1>
        </div>
        <div class="row">
            <?php
            foreach ($listeBiens as $bien){
                ?>
                <div class="card-group col-4 mt-3">
                    <div class="card location">
                        <img class="card-img-top" src="<?php echo $bien->photoBien;  ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?=  $bien->nomBien;  ?></h5>
                            <p class="card-text"><?=  $bien->description;  ?></p>
                            <div class="row">
                                <a href="detail.php?id=<?=  $bien->idBien;  ?>">
                                    <span class="btn btn-outline-secondary">Voir +</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-footer">
                            <h6>130 000 Euro net vendeur</h6>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
<?php

footer();