<?php
require '../config/config.php';
require '../models/connect.php';

$db = connection();

if(isset($_GET["id"])){
    $id = $_GET["id"];
}else{
    $id= "";
}


$sqlSelectOptions = "DELETE FROM Options WHERE idOptions = :ids";
$reqOptions = $db->prepare($sqlSelectOptions);
$reqOptions->bindParam(':ids', $id);
$reqOptions->execute();

if($reqOptions->rowCount() == 1 ){
    header('Location: option.php?add=success');
}else{
    header('Location: option.php?add=erreur');
}
