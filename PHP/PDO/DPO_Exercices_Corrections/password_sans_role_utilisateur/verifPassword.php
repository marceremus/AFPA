<?php
	require '../connection/connect.php';
	//$db = new PDO('mysql:host=localhost;dbname=password;charset=utf8', 'root', 'root');
$db = connect("password");

	if(isset($_POST['email'])){
		$email = $_POST['email'];
	}else{
		$email = null;
	}

	if(isset($_POST['password'])){
		$password = sha1(trim($_POST['password']));
	}else{
		$password = null;
	}

	//echo $email.$password;
	$query = "SELECT * FROM signit WHERE email = :email AND password = :password";

	$req = $db->prepare($query);

	$req->bindParam(":email", $email, PDO::PARAM_STR);
	$req->bindParam(":password", $password);

	$data = $req->execute() ;

	$da = $req->fetch();
	if(!$da){
		header('Location: signIt.php');
	}else{
		header('Location: connected.php');
	}


