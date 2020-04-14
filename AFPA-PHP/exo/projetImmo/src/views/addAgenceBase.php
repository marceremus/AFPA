<?php
require '../config/config.php';
require '../models/connect.php';

$db = connection();

if(isset($_POST["nomAgence"])){
    $nomAgence = htmlspecialchars(trim($_POST["nomAgence"]));
}else{
    $nomAgence = "";
}

if(isset($_POST["numRueAgence"])){
    $numRueAgence = htmlspecialchars(trim($_POST["numRueAgence"]));
}else{
    $numRueAgence = "";
}

if(isset($_POST["nomRueAgence"])){
    $nomRueAgence = htmlspecialchars(trim($_POST["nomRueAgence"]));
}else{
    $nomRueAgence = "";
}

if(isset($_POST["cpAgence"])){
    $cpAgence = htmlspecialchars(trim($_POST["cpAgence"]));
}else{
    $cpAgence = "";
}


if(isset($_POST["nomVilleAgence"])){
    $nomVilleAgence = htmlspecialchars(trim($_POST["nomVilleAgence"]));
}else{
    $nomVilleAgence = "";
}

if(isset($_POST["phoneAgence"])){
    $phoneAgence = htmlspecialchars(trim($_POST["phoneAgence"]));
}else{
    $phoneAgence = "";
}

if(isset($_POST["emailAgence"])){
    $emailAgence = htmlspecialchars(trim($_POST["emailAgence"]));
}else{
    $emailAgence = "";
}



$sql = "INSERT INTO Agence (nomAgence, numRueAgence, nomRueAgence, cpAgence, villeAgence, phoneAgence, emailAgence) VALUES (:nomAgence, :numRueAgence, :nomRueAgence, :cpAgence, :villeAgence, :phoneAgence, :emailAgence)";

$reqAjoutAgenc = $db->prepare($sql);
$reqAjoutAgenc->bindParam(':nomAgence', $nomAgence);
$reqAjoutAgenc->bindParam(':numRueAgence', $numRueAgence);
$reqAjoutAgenc->bindParam(':nomRueAgence', $nomRueAgence);
$reqAjoutAgenc->bindParam(':cpAgence', $cpAgence);
$reqAjoutAgenc->bindParam(':villeAgence', $nomVilleAgence);
$reqAjoutAgenc->bindParam(':phoneAgence', $phoneAgence);
$reqAjoutAgenc->bindParam(':emailAgence', $emailAgence);

$reqAjoutAgenc->execute();

$nbInsert = $reqAjoutAgenc->rowCount();

if($nbInsert == 1){
    header('Location: addAgence.php?add=success');
}else{
    header('Location: addAgence.php?add=erreur');
}