
	require 'connect.php';

	$db = connect();

	$nomArt = "Vélo 567";
	$descArt = "Description du vélo 3";
	$priceArt = "9.10";
	$rateArt = "20";
	$typeArt = "Vélo éléctrique";
	$artFree = 1;

	try{
		// preparation de la requette
		$req = $db->prepare("INSERT INTO articles (nom_article, description_article, price_ht_article, rate_tva_article, type_article, article_free) VALUES (:nomArt, :descArt, :priceArt, :rateArt , :typeArt, :artFree)");

		// changement des paramètres et controle des champs

		$req->bindParam(":nomArt", $nomArt, PDO::PARAM_STR);
		$req->bindParam(":descArt", $descArt,PDO::PARAM_STR);
		$req->bindParam(":priceArt", $priceArt, PDO::PARAM_STR);
		$req->bindParam(":rateArt", $rateArt, PDO::PARAM_INT);
		$req->bindParam(":typeArt", $typeArt, PDO::PARAM_STR);
		$req->bindParam(":artFree", $artFree, PDO::PARAM_INT);

		// execution de la requette
		$req->execute();
		header('Location: confirm.php');
	} catch (Exception $e){
		echo $e->getMessage();
	}

