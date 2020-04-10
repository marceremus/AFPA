<?php
include_once 'elements/head.php';
include_once 'elements/footer.php';
require '../models/connect.php';

$db = connection();

$elablishment = array("Afpa", "M2i", "Eyrol");

head();
?>

    <h1>Mon établissement</h1>
    <hr>

<?php

    foreach ($elablishment as $etab){
        ?>

        <a href="detailEtab.php?nom=<?= $etab ?>" >
            <p><?= $etab ?></p>
        </a>

        <?php
    }

?>

    <div>
        <a href="../../index.php">
            <button type="button" class="btn btn-outline-dark">
                Accueil
            </button>
        </a>
    </div>

<?php
footer();