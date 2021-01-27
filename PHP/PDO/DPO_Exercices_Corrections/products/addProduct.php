<?php
	require '../connection/connect.php';

	$db = connect("products");

	if(isset($_POST['productName'])){
		$name = $_POST['productName'];
	} else {
		$name = null;
	}

	if(isset($_POST['description'])){
		$description = $_POST['description'];
	} else {
		$description = null;
	}

	if(isset($_POST['price'])){
		$price = $_POST['price'];
	} else {
		$price = null;
	}

	if(isset($_POST['categories'])){
		$categories = $_POST['categories'];
	} else {
		$categories = null;
	}

	if(isset($_POST['image'])){
		$image = $_POST['image'];
	} else {
		$image = null;
	}

	//echo $name.$description.$price.$categories.$image;
	try{
		$reqIdCat = "SELECT * FROM categories WHERE name = :nameCat";
		$reqCat = $db->prepare($reqIdCat);
		$reqCat->bindParam(':nameCat',$categories);
		$reqCat->execute();

		$data = $reqCat->fetchObject();
		$idCat = $data->id;

		$reqProd = "INSERT INTO products(products.name, products.description , products.price , products.category_id , products.image , products.created) VALUES(:nameProd, :descript, :prix, :catProd, :imageProd, now())";
		$reqProd = $db->prepare($reqProd);
		$reqProd->bindParam(':nameProd', $name, PDO::PARAM_STR);
		$reqProd->bindParam(':descript', $description, PDO::PARAM_STR);
		$reqProd->bindParam(':prix', $price, PDO::PARAM_INT);
		$reqProd->bindParam(':catProd', $idCat);
		$reqProd->bindParam(':imageProd', $image, PDO::PARAM_STR);
		$reqProd->execute();

		if($reqProd->rowCount() > 0) {
			header( 'Location: products.php' );
		}
	}catch (Exception $e){
		die("Error on delete : ".$e->getMessage());
	}
