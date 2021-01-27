<?php
	session_start();

	require '../connection/connect.php';

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
	$query = "SELECT users.email as email, users.password as password, typeUsers.id_typeUser as idRole, typeUsers.actived as actived
			  FROM users, typeUsers 
			  WHERE users.Id_typeUser = typeUsers.id_typeUser
			  AND email = :email 
			  AND password = :password";

	$req = $db->prepare($query);

	$req->bindParam(":email", $email, PDO::PARAM_STR);
	$req->bindParam(":password", $password);

	$req->execute() ;

	$data = $req->fetchObject();

	$_SESSION['idRole'] = $data->idRole;
	$_SESSION['email'] = $data->email;
	$_SESSION['actived'] = $data->actived;
//var_dump($_SESSION['idRole']);
//var_dump($data->idRole);
	if($data){
		if($data->actived === (string)0){
			header('Location: signIt.php');
		}else{
			if($data->idRole === (string)1){
				header('Location: admin.php');
			}elseif ($data->idRole == (string)2 ){
				header('Location: autor.php');
			}else{
				header('Location: editor.php');
			}
		}
	}else{
		header('Location: signit.php');
	}


