<?php
require_once 'src/views/elements/head.php';
require_once 'src/views/elements/footer.php';

head();

?>
    <h1>Site de mes véhicules</h1>
    <hr>
    <div>
        <?php
            if(isset($_GET['empty'])){
                if($_GET['empty'] == true){
                    ?>
                    <div class="alert alert-danger" role="alert">
                        Ces champs ne peuvent pas être vides.
                    </div>
                    <?php
                }
            }
        ?>
        <?php
        if(isset($_GET['existe'])){
            if($_GET['existe'] == true){
                ?>
                <div class="alert alert-danger" role="alert">
                    La marque et le modele existent déja.
                </div>
                <?php
            }
        }
        ?>

        <form class="form-row mt-5" method="post" action="src/views/mesVehicules.php">
            <div class="form-group col-lg-12">
                <label for="model">Le modèle</label>
                <input type="text" class="form-control" id="model" name="model">
            </div>
            <div class="form-group col-lg-12">
                <label for="marque">La marque</label>
                <input type="text" class="form-control" id="marque" name="marque">
            </div>
            <br>
            <button type="submit" class="btn btn-outline-dark">Envoyer</button>
        </form>

    </div>
 <?php
footer();