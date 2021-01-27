<?php
	/*
	 * Template name: reservation
	 */

	get_header();

?>
    <!--BANDEAU RESERVATION -->
    <section>
        <form method="POST" action="<?php echo get_home_url(); ?>/tarif">
            <h2 class="bg-warning text-center p-3 mb-5 border border-dark">RESERVATION</h2>

            <!--TITRE COORDONNES-->
            <div class="">
                <h4 class="bg-warning text-center p-3 mt-5  rounded ">COORDONNEES</h4>
            </div>
            <!--SELECTION PARTICULIER OU PROFESSIONNEL-->
            <div class="mt-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="profession" value="particulier">
                    <label class="form-check-label" for="profession">Particulier</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="profession"  value="professionnal">
                    <label class="form-check-label" for="profession">Professionnel</label>
                </div>
            </div>

            <!--FORMULAIRE COORDONNEES CLIENT-->

            <div class="row mt-3">
                <div class="col-md-3 ">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" class="form-control" placeholder="Nom">
                </div>
                <div class="col-md-4">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" class="form-control" placeholder="Prénom">
                </div>
                <div class="col-md-4">
                    <label for="adresse">Adresse</label>
                    <input type="text" name="adresse" class="form-control" placeholder="Adresse">
                </div>
                <div class="col-md-4">
                    <label for="cp">CP</label>
                    <input type="text" name="cp" class="form-control" placeholder="cp">
                </div>
                <div class="col-md-4">
                    <label for="ville">Ville</label>
                    <input type="text" name="ville" class="form-control" placeholder="Ville">
                </div>
            </div>
            <div class="row mt-3">
                <!--FORMULAIRE DEUXIEME LIGNE-->
                <div class="col-md-3">
                    <label for="tel">Téléphone</label>
                    <input type="tel" id="tel" name="tel" class="form-control" placeholder="Telephone">
                </div>
                <div class="col-md-3">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Votre E-mail">
                </div>
                <div class="col-md-3">
                    <label for="societe">Société</label>
                    <input type="text" id="societe" name="societe" class="form-control" placeholder="Societe">
                </div>
            </div>


            <!--TITRE LOCATION-->
            <div class="mt-3 mb-3">
                <h4 class="bg-warning text-center p-3 mt-5  rounded ">LOCATION</h4>
            </div>

            <!--TEXT SELECTION POUR VILLE VELO DUREE ect ....-->

            <!--FORMULAIRE LOCATION ****** selection ville-->
            <div class="row">
                <div class="dropdown col-md-3">
                    <h4 class="d-block">Choisissez la ville concernée</h4>
                    <div class="form-group">
                        <select name="villeloc" class="form-control" id="exampleFormControlSelect1">
                            <option></option>
                            <option value="paris">Paris</option>
                            <option value="lille">Lille</option>
                            <option value="lyon">Lyon</option>
                            <option value="bordeaux">Bordeaux</option>
                        </select>
                    </div>
                </div>

                <!--CHOIX DU VELO ELECTRIQUE OU CLASSIQUE-->

                <div class="dropdown col-md-3">
                    <h4 class="d-block">Type de Vélo</h4>
                    <div class="form-group">
                        <select name="typeVelo" class="form-control" id="exampleFormControlSelect1">
                            <option></option>
                            <option value="electrique">Electrique</option>
                            <option value="classique">Classique</option>
                        </select>
                    </div>
                </div>

                <!--SELECTION TYPE DE LOCATION-->

                <div class="dropdown col-md-3">
                    <h4 class="d-block">Type de Location</h4>
                    <div class="form-group">
                        <select name="typeloca" class="form-control" id="typeloca">
							<?php
								global $wpdb;
								$tarifs = $wpdb->get_results("SELECT * FROM forfaits");
								$nomTarif .= $tarif->nom_forfait;
							?>
                            <option></option>
							<?php

								foreach ($tarifs as $key => $tarif){
									?>
                                    <option value="<?php echo $tarif->nom_forfait; ?>"><?php echo $tarif->nom_forfait; ?></option>
									<?php
								}
							?>
                        </select>
                    </div>
                </div>
            </div>
			<?php

			?>

            <!--MONTANT TOTAL-->
            <div class="mt-3 mb-3">
                <h4 class="bg-warning text-center p-3 mt-5  rounded ">MONTANT</h4>
            </div>

            <div class="row" id="tarif">
                <p>
                    <span></span> EUROS
                </p>
            </div>
            <div class="d-none">
                <label for="tarifHide"></label>
                <input type="text" id="tarifHide" name="tarifHide" value="">
            </div>
            <!--CONDITION D ACCEPTATION -->
            <div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" name="condition" type="checkbox" value="confirme" id="condition" required>
                        <label class="form-check-label" for="condition">
                            <h6 class="font-italic">J'accepte les conditions de location</h6>
                        </label>
                    </div>
                </div>
                <input class="btn btn-success mb-5" type="submit" name="insert" value="valider">

        </form>

    </section>
<?php
	if(isset($_POST["profession"])){
		$profession = $_POST["profession"];
	}else{
		$profession = "";
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

	if(isset($_POST["adresse"])){
		$adresse = $_POST["adresse"];
	}else{
		$adresse = "";
	}

	if(isset($_POST["ville"])){
		$ville = $_POST["ville"];
	}else{
		$ville = "";
	}

	if(isset($_POST["cp"])){
		$cp = $_POST["cp"];
	}else{
		$cp = "";
	}

	if(isset($_POST["tel"])){
		$tel = $_POST["tel"];
	}else{
		$tel = "";
	}

	if(isset($_POST["email"])){
		$email = $_POST["email"];
	}else{
		$email = "";
	}

	if(isset($_POST["societe"])){
		$societe = $_POST["societe"];
	}else{
		$societe = "";
	}

	if(isset($_POST["villeloc"])){
		$villeloc = $_POST["villeloc"];
	}else{
		$villeloc = "";
	}

	if(isset($_POST["typeVelo"])){
		$typeVelo = $_POST["typeVelo"];
	}else{
		$typeVelo = "";
	}

	if(isset($_POST["typeloca"])){
		$typeloca = $_POST["typeloca"];
	}else{
		$typeloca = 0;
	}


	if(isset($_POST["condition"])){
		$condition = $_POST["condition"];
	}else{
		$condition = "";
	}


	if('valider' == $_REQUEST['insert']){

		// insert ville
		$sqlIDVille = $wpdb->insert("ville", array(
			"cp" => $cp,
			"nom_ville" => $ville
		), array(
				'%s',
				'%s'
			)
		);

//      Je vérifie si l'insert dans la bd a été correctement faite
//		if($sqlIDVille == true){
//			echo '<script>alert("OK ville")</script>';
//		}else{
//			echo '<script>alert("NOT OK ville")</script>';
//		}

		$sqlIDVille = $wpdb->insert_id;

		// insert adresse
		$sqlAdresse = $wpdb->insert( "adresse", array(
				"nom_rue" => $ville,
				"numero_rue" => $adresse,
				"ville_idville" => $sqlIDVille
			)
		);
		$lastIdAddress = $wpdb->insert_id;

//      Je vérifie si l'insert dans la bd a été correctement faite
//		if($sqlAdresse == true){
//			echo '<script>alert("OK adresse")</script>';
//		}else{
//			echo '<script>alert("NOT OK adresse")</script>';
//		}

		// insert user
		$sqlUsers = $wpdb->insert("users", array(
			"nom" => $nom,
			"prenom" => $prenom,
			"email" => $email,
			"particulier" => $profession,
			"tel_users" => $tel,
			"nom_societe" => $societe,
			"adresse_idVilles" => $lastIdAddress
		)   , array(
			'%s',
			'%s',
			'%s',
			'%s',
			'%s',
			'%s',
			'%i'
		));

//      Je vérifie si l'insert dans la bd a été correctement faite
//		if($sqlUsers == true){
//			echo '<script>alert("OK user")</script>';
//		}else{
//			echo '<script>alert("NOT OK user")</script>';
//		}

	}

?>

    <script>
        $(document).ready(function() {

            $('#typeloca').on('change', function () {
                var typeLoc = $("#typeloca")[0];
                var loc = typeLoc.value;
                var mts = $("#tarif p span")[0];
                var tarifHide = $("#tarifHide")[0];
                ajaxurl = "<?php echo get_template_directory_uri().'/admin-ajax.php'  ?>";

                $.post({
                    url: ajaxurl,
                    type: 'POST',
                    data: {
                        action : 'get_ajax_posts',
                        loc : loc
                    },
                    success: function( data ) {
                        mts.innerHTML = data;
                        tarifHide.innerHTML = parseInt(data);
                        tarifHide.value = parseInt(data);
                    }
                });
            });
        });
    </script>

<?php

	get_footer();
