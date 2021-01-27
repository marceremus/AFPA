<?php
	/*
	 * Template name: addproduct
	 */
	get_header();
	//get_template_part( "contact", "contact");
	//get_template_part( "list_products", "list_products");
?>
	<section>
        <h3>Ajoutez vos produits</h3>
		<form method="POST">
			<div class="form-group">
				<label for="nom">Le nom du produit : </label>
				<input name="nom" type="text" class="form-control" id="nom">
			</div>
			<div class="form-group">
				<label for="description">La description : </label>
				<input type="text" class="form-control" id="description" name="description">
			</div>
			<div class="form-group">
				<label for="prix">Le prix : </label>
				<input type="number" class="form-control" id="prix" name="prix">
			</div>
			<div class="form-group">
				<label for="cat">Example select</label>
				<select class="form-control" id="cat">
					<?php

						$categories = getAllCategories();
						foreach ($categories as $cat){
					?>
					<option name="cat" value="<?php echo $cat->id; ?>"><?php echo $cat->name; ?>
						<?php
							}
						?>
					</option>
				</select>
			</div>
			<div class="custom-file">
				<input type="file" class="custom-file-input" id="imageproduct">
				<label class="custom-file-label" for="imageproduct" name="filename" data-browse="Image du produit">Veuillez choisir l'image du produit</label>
			</div>
			<div>
				<br>
				<input class="btn btn-success" type="submit" name="insert" value="Save">
			</div>
		</form>
	</section>
<?php

		$nom = $_POST['nom'];
		$description = $_POST['description'];
		$prix = $_POST['prix'];
		$cat = $_POST['cat'];
		$filename = $_POST['filename'];


	if(isset($_POST['insert']) == "Save"){
		global $wpdb;

		$sql = $wpdb->insert(
			'wp_products',
			array(
				"name" => $nom,
				"description" => $description,
				"price" => $prix,
				"category_id" =>$cat
			)
		);
		if($sql == true){
			echo '<script>alert("OK")</script>';
		}else{
			echo '<script>alert("NOT OK")</script>';
		}

	}

	get_footer();
