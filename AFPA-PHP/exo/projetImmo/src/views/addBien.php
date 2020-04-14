<?php
require 'elements/head.php';
require 'elements/footer.php';
require 'elements/nav.php';
require '../config/config.php';
require '../models/connect.php';

headPage('Accueil');

nav('');

$db = connection();

// Selection des agences
$sqlAgence = "SELECT * FROM Agence";
$reqSelectAgence = $db->prepare($sqlAgence);
$reqSelectAgence->execute();

// Selection des options
$sqlOption = "SELECT * FROM Options";
$reqSelectOption = $db->prepare($sqlOption);
$reqSelectOption->execute();



?>

    <div class="container mb-5">
        <div class="mt-5">
            <h1>Ajouter un bien</h1>
        </div>
        <div class="mt-5">
            <form action="addBienBase.php" method="post">
                <div class="form-group">
                    <label for="nombien">Nom du bien</label>
                    <input type="text" name="nombien" required class="form-control" id="nombien">
                </div>

                <div class="form-group">
                    <label for="prixbien">Prix du bien</label>
                    <input type="number" name="prixbien"  required  class="form-control" id="prixbien">
                </div>

                <div class="form-group">
                    <label for="numAdresseBien">Numéro rue</label>
                    <input type="text" class="form-control" required  name="numAdresseBien" id="numAdresseBien">
                </div>

                <div class="form-group">
                    <label for="nomAdresseBien">Non rue</label>
                    <input type="text" class="form-control" required  name="nomAdresseBien" id="nomAdresseBien">
                </div>

                <div class="form-group">
                    <label for="cpBien">Code postal</label>
                    <input type="text" class="form-control" required  name="cpBien" id="cpBien">
                </div>

                <div class="form-group">
                    <label for="nomville">Nom ville</label>
                    <input type="text" class="form-control" required  name="nomville" id="nomville">
                </div>


                <div class="form-group">
                    <label for="commission">Commission en % </label>
                    <input type="text" class="form-control" required  name="commission" id="commission">
                </div>

                <div class="form-group">
                    <label for="photobien">Photo</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="photobien" id="photobien">
                        <label class="custom-file-label" for="photobien">Photo du bien</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="statut">Statut</label>
                    <select class="form-control" name="statut" required  id="statut">
                        <option value="1">A vendre</option>
                        <option value="0">Vendu</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="surfacebien">Surface du bien</label>
                    <input type="number" class="form-control" required  name="surfacebien" id="surfacebien">
                </div>

                <div class="form-group">
                    <label for="surfaceterrain">Surface terrain</label>
                    <input type="number" class="form-control" required  name="surfaceterrain" id="surfaceterrain">
                </div>

                <div class="form-group">
                    <label for="agence">Nom d'agence</label>
                    <select class="form-control" name="agence" required  id="agence">
                        <?php
                        while ($agence = $reqSelectAgence->fetchObject()){
                            ?>
                            <option value="<?= $agence->idAgence;  ?>"><?= $agence->nomAgence;  ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="option">Nom d'option</label>
                    <select class="form-control" name="option" required  id="option">
                        <?php
                        while ($option = $reqSelectOption->fetchObject()){
                            ?>
                            <option value="<?= $option->idOptions;  ?>"><?= $option->nomOption;  ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>


                <button type="submit" class="btn btn-outline-dark">Enregistrer</button>
                <a href="biens.php" >
                    <button type="button" class="btn btn-danger">Annuler</button>
                </a>
            </form>
        </div>
    </div>
<?php
footer();