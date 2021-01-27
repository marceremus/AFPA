<?php
	require 'connect.php';

	$db = connect();
try{
	// les variables
	$tvaRate = 20;
	$articleFree = 1;

	$req = $db->prepare(
		'SELECT nom_article, price_ht_article, type_article FROM articles WHERE rate_tva_article = :tvarate AND article_free = :artfree');

	$req->bindParam(":tvarate", $tvaRate, PDO::PARAM_INT);
	$req->bindParam(":artfree", $articleFree, PDO::PARAM_INT);

	$req->execute();

/*
	while($data = $req->fetchAll()){
		//var_dump($data);
		foreach ($data as $key => $value){
				echo '<p>La clef : '.$key.'  => la valeur :'.$value['nom_article'].'  '.$value["price_ht_article"]." ".$value["type_article"].'</p>';
		}
	}
*/
/*
	while($data = $req->fetch(PDO::FETCH_ASSOC)){
		//var_dump($data);
		echo $data['nom_article'].' '.$data["price_ht_article"]." ".$data["type_article"].'</br>';
	}

*/
		 while($data = $req->fetchObject()){
			//var_dump($data);
			echo '<p>'.$data->nom_article.'  '.$data->price_ht_article.'  '.$data->type_article.'  </p>';
		}
} catch (Exception $e){
	die("Error : ".$e->getMessage().$e->getCode());
}

