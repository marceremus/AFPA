<?php
require '../config/config.php';
require '../models/connect.php';

$db = connection();

if(isset($_POST["id"])){
    $id = htmlspecialchars(trim($_POST["id"]));
}else{
    $id = "";
}

if(isset($_POST["option"])){
    $option = htmlspecialchars(trim($_POST["option"]));
}else{
    $option = "";
}

if(isset($_POST["quantite"])){
    $quantite = htmlspecialchars(trim($_POST["quantite"]));
}else{
    $quantite = "";
}

if(isset($_POST["statut"])){
    $statut = htmlspecialchars(trim($_POST["statut"]));
}else{
    $statut = "";
}

//["id"]=> string(1) "2" ["option"]=> string(6) "Balcon" ["quantite"]=> string(1) "1" ["statut"]=> string(1) "1"

$sqlModifOption = "UPDATE Options SET nomOption=:option, quantite=:quantite, statut=:statut WHERE idOptions=:ids";

$reqUpdateoption = $db->prepare($sqlModifOption);
$reqUpdateoption->bindParam(':option', $option);
$reqUpdateoption->bindParam(':quantite', $quantite);
$reqUpdateoption->bindParam(':statut', $statut);
$reqUpdateoption->bindParam(':ids', $id);
$reqUpdateoption->execute();

if($reqUpdateoption->rowCount() == 1){
    header('Location: option.php?add=success');
}else{
    header('Location: option.php?add=erreur');
}