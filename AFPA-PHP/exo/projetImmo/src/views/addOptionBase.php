<?php
require 'elements/head.php';
require 'elements/footer.php';
require 'elements/nav.php';
require '../config/config.php';
require '../models/connect.php';

$db = connection();

var_dump($_POST);
if((isset($_POST['option'])) && (isset($_POST['quantite']))){
    $nomOption = htmlspecialchars(trim($_POST['option']));
    $quantite = htmlspecialchars(trim($_POST['quantite']));
}

$sqlInsertOption = "INSERT INTO Options (nomOption, quantite, statut) VALUES (:nomOption, :quantite, 1)";
$reqInsertOption = $db->prepare($sqlInsertOption);
$reqInsertOption->bindParam(':nomOption', $nomOption);
$reqInsertOption->bindParam(':quantite', $quantite);
$reqInsertOption->execute();

if($reqInsertOption->rowCount() == 1){
    header('Location: option.php?add=success');
}else{
    header('Location: option.php?add=erreur');
}