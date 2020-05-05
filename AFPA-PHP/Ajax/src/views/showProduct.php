<?php

function connect(){
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=gestionProduit;charset=utf8', 'root', 'root');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

if(isset($_POST['id'])){
    $id = intval(htmlspecialchars(trim($_POST['id'])));
}else{
    $id = "";
}

$db = connect();

$sql = "SELECT * FROM products WHERE id = :ids";
$req = $db->prepare($sql);
$req->bindParam(':ids', $id);
$req->execute();

$results = array();

if($req->rowCount()>0){
    while($data = $req->fetchObject()){
        array_push($results, $data);
    }
}
//var_dump(json_encode($results));
return json_encode(array('success' => true, 'data' => $results));


