<?php
	require '../connection/connect.php';

	$db = connect("products");

	if(isset($_GET['id'])){
		$idUp = (int)$_GET['id'];
	} else {
		$idUp = null;
	}

	if(isset($_GET['description'])){
		$descriptionUp = $_GET['description'];
	} else {
		$descriptionUp = null;
	}

	if(isset($_GET['price'])){
		$priceUp = $_GET['price'];
	} else {
		$priceUp = null;
	}

	if(isset($_GET['categories'])){
		$categoriesUp = $_GET['categories'];
	} else {
		$categoriesUp = null;
	}

	//echo $idUp.' '.$descriptionUp.'  '.$priceUp.'  '.$categoriesUp;

	$req1 = $db->prepare("SELECT id FROM categories WHERE name= :cat1");

	$req1->bindParam(':cat1',$categoriesUp, PDO::PARAM_STR);
	$req1->execute();
	$idCat = $req1->fetchObject();
	$cat = (int)$idCat->id;
	//var_dump($cat);

	$query = "UPDATE products SET description = :descript, price = :prix, category_id = :cat1, created = now(), modified = now() WHERE id=:id ";

	$reqUpdateProduct = $db->prepare($query);
	//$reqUpdateProduct->bindParam(":descript",$description);
	//$reqUpdateProduct->bindParam(":prix",$price);
	//$reqUpdateProduct->bindParam(":cat1",$cat);
	//$reqUpdateProduct->bindParam(":id",$idUp);
	$reqUpdateProduct->execute(array(
		":descript" => $descriptionUp,
		":prix" => $priceUp,
		":cat1" => $cat,
		":id" => $idUp
	));

	if($reqUpdateProduct->rowCount()>0){
		header('Location: products.php');
	}
	//var_dump($reqUpdateProduct->rowCount());

