<?php
	/*
	 * Template name: tarif
	 */
	get_header();

	if(isset($_POST["tarifHide"])){
		$tarifHide = $_POST["tarifHide"];
	}else{
		$tarifHide = 0;
	}

	if(isset($_POST["nom"])){
		$nom = $_POST["nom"];
	}else{
		$nom = "";
	}

	if(isset($_POST["prenom"])){
		$prenom = $_POST["prenom"];
	}else{
		$prenom = "";
	}

	if(isset($_POST["typecarte"])){
		$typecarte = $_POST["typecarte"];
	}else{
		$typecarte = "";
	}

	if(isset($_POST["numberCb"])){
		$numberCb = $_POST["numberCb"];
	}else{
		$numberCb = "";
	}

	if(isset($_POST["dateExp"])){
		$dateExp = $_POST["dateExp"];
	}else{
		$dateExp = "";
	}

?>
    <!--TITRE PAIEMENT-->
    <form action="" method="post">
        <div class="d-block bg-warning mx-center p-4 mt-5 mb-5">
            <h2 class="text-center ">PAIEMENT</h2>
        </div>

        <!--TITRE MODE DE PAIEMENT-->
        <div class="container border border border-dark">

            <div class="row">
                <div class="col-4 bg-warning mx-auto p-4 mt-3 mb-5 d-block text-center rounded">
                    <h4>MODE DE PAIEMENT</h4>
                </div>
            </div>

            <!--IMAGE DES MOYENS DE PAIEMENT POSSIBLE-->
            <div class="row">
                <img src="<?php echo get_template_directory_uri();  ?>/img/CB.jpg" class="d-block w-50 mx-auto pb-5" alt="Responsive image">
            </div>


            <!--FORMULAIRE A REMPLIR POUR LA CB-->

            <!--NOM DU TITULAIRE DE LA CARTE -->
            <div id="datacarte" class="row justify-content-center">
                <div class="col-6">
                    <div class="">
                        <label for="titulaire">Nom du titulaire</label>
                        <input type="text" class="form-control" value="<?php echo $nom.' '.$prenom  ?>" name="titulaire" placeholder="Titulaire">
                    </div>

                    <!--TYPE DE CARTE DE PAIEMENT-->
                    <div class="">
                        <label for="typecarte">Type de Carte</label>
                        <div class="form-group">
                            <select name="typecarte" name="typecarte" class="form-control" id="typeloca">
                                <option></option>
                                <option value="Visa">Visa</option>
                                <option value="Mastercard">Mastercard</option>
                                <option value="CB">CB</option>
                            </select>
                        </div>


                        <!--NUMERO DE CARTE DE PAIEMENT-->
                        <div class="">
                            <div class="">
                                <label for="numberCb">Numéro Carte</label>
                                <input type="text" name="numberCb" class="form-control" placeholder="Numéro Carte">
                            </div>
                        </div>
                        <div class="">
                            <!--DATE D EXPIRATION CARTE -->
                            <div class="">

                                <label for="dateExp">Date d'Expiration</label>
                                <input type="text" name="dateExp" class="form-control" placeholder="MM/AA">
                            </div>
                            <!--CVV CRYPTOGRAME-->
                            <div class="">
                                <label for="cryptograme">CVV (Cryptograme)</label>
                                <input type="text" name="cryptograme" class="form-control" placeholder="123">
                            </div>
                        </div>
                        <div class="">
                            <label for="montant">Montant €</label>
                            <input type="text" name="montant" class="form-control" value="<?php echo $tarifHide  ?>">

                            <!--BOUTON DE VALIDATION DE LA TRANSACTION-->
                            <input class="btn btn-success mt-5 mb-5" type="submit" name="insert" value="VALIDER">
                        </div>
                    </div>
    </form>
<?php

    var_dump($_POST);

    global $wpdb;


	// insert paiement
	$tablePaiement = $wpdb->prefix."paiement";
	$tablePaiement = array(
		"numero_carte" => $numberCb,
		"date_expiration" => $dateExp,
		"name_carte" => $typecarte
	);
	$formatPaiement = array(
		"%s",
		"%s",
		"%s"
	);

	$sqlPaiement = $wpdb->insert( $tablePaiement, $tablePaiement,$formatPaiement);

	$wpdb->insert( $sqlPaiement);

    //      Je vérifie si l'insert dans la bd a été correctement faite
		if($sqlPaiement == true){
			echo '<script>alert("OK paiement")</script>';
		}else{
			echo '<script>alert("NOT OK paiement")</script>';
		}


	// insert panier_has_articles
	$sqlAdresse = $wpdb->insert( "adresse", array(
			"nom_rue" => $ville,
			"numero_rue" => $adresse,
			"ville_idville" => $sqlIDVille
		)
	);
	$lastIdAddress = $wpdb->insert_id;


//	$wpdb->insert( $tablePanieHasArticles, $dataPanierHasArticles, $formatPanierHasArticles );

	// insert panier_has_forfaits
	$tablePanieHasForfaits = $wpdb->prefix."panier_has_articles";
	$dataPanierHasForfaits = array(
		"panier_ville" => $villeloc,
		"panier_idPanier" => "",
		"panier_paiement_idPaiement" => 0,
		//"forfaits_idForfaits" => $forfaitsByChoise->idForfaits
	);
	$formatPanierHasForfaits = array(
		"%i",
		"%i",
		"%i",
		"%i"
	);

	if($sqlIDVille == true && $sqlUsers == true && $sqlAdresse == true){
		//redirectToTarif();
	}else{
		//echo '<script>alert("NOT redirect")</script>';
	}

	get_footer();

