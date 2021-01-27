<?php
	require_once '../connection/connect.php';

	$db = connect("products");

	if(isset($_GET['id'])){
		$id = $_GET['id'];
	} else {
		$id = null;
	}
	echo $id;

	try{
	$req = $db->prepare("DELETE FROM products WHERE id = $id");
	$req->execute();
		header('Location: products.php');
	}catch (Exception $e){
		die("Error on delete : ".$e->getMessage());
	}
