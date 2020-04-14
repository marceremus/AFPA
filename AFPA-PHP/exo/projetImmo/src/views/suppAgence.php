<?php
require '../config/config.php';
require '../models/connect.php';

$db = connection();

if(isset($_GET['id'])){
    $id = htmlspecialchars(trim($_GET['id']));
}else{
    $id = "";
}

$sqlSupp = "DELETE FROM Agence WHERE idAgence=:ids";
$reqSupp = $db->prepare($sqlSupp);
$reqSupp->bindParam(':ids', $id);
$reqSupp->execute();

$nbInsert = $reqSupp->rowCount();

if($nbInsert == 1){
    header('Location: votreAgence.php?add=success');
}else{
    header('Location: votreAgence.php?add=erreur');
}
