<?php
require 'elements/head.php';
require 'elements/footer.php';
require 'elements/nav.php';
require '../config/config.php';
require '../models/connect.php';

$db = connection();

headPage('Détail bien');
nav('');

if(isset($_GET['id'])){
    $id = htmlspecialchars(trim($_GET['id']));
}else{
    $id = "";
}


$sqlBiens = "SELECT * 
             FROM Bien
             INNER JOIN Options ON Bien.Options_idOptions = Options.idOptions
             INNER JOIN Agence ON Bien.Agence_idAgence = Agence.idAgence 
             WHERE idBien = :ids";
$reqBiens = $db->prepare($sqlBiens);
$reqBiens->bindParam(':ids', $id);
$reqBiens->execute();

$biens = $reqBiens->fetchObject();


?>
    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-xs-5 col-sm-5 col-md-5  col-lg-4  col-xl-4 ">
            <img class="card-img-top" src="<?php echo $biens->photoBien; ?>" alt="Card image cap">
        </div>

        <div class="col-xs-5 col-sm-5 col-md-5  col-lg-5  col-xl-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $biens->nomBien; ?></h5>
                    <hr>
                    <p class="card-text mt-5"><?php echo $biens->description ?></p>
                    <a href="location.php">
                        <button type="button" class="btn btn-outline-dark">
                            Retour
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>