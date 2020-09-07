<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>API PHP</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <h2>API php - affichage des coordonées en fonction du nom de la société</h2>

    <form method="get" action="">
        <div class="form-group">
            <label for="nomSociete">Nom société : </label>
            <input type="text" name="nomSociete" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Envoyer</button>
    </form>
	<?php
		require_once 'api_data_nom_societe.php';
		require_once 'api_data_num_siret.php';
if(isset($_GET['nomSociete']) && !empty($_GET['nomSociete'])){
    $nomSociete = $_GET['nomSociete'];
}else{
    $nomSociete = "";
}

		if(!empty($nomSociete)){
			showDataByCompanyName($nomSociete);
		}else{
            echo '<p>Le nom de la société doit être saisi</p>';
        }
	?>
    <br>
    <h2>API php - affichage des coordonées en fonction du numéro de SIRET</h2>
    <hr><br>
    <form method="get" action="">
        <div class="form-group">
            <label for="numSiret">Numéro SIRET de la  société : </label>
            <input type="text" name="numSiret" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Envoyer</button>
    </form>
    <br>
	<?php
		if(isset($_GET['numSiret']) && !empty($_GET['numSiret'])){
			$numSiret = $_GET['numSiret'];
		}else{
			$numSiret = null;
		}
		// '34926669200061'
		if(!empty($numSiret)) {
			showDataByCompanySitet( $numSiret );
		}else{
		    echo '<p>Le nom de la société doit être saisi</p>';
        }
	?>
</div>
<!-- JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
