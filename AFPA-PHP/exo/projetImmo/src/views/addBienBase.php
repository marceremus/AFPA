<?php
require 'elements/head.php';
require 'elements/footer.php';
require 'elements/nav.php';
require '../config/config.php';
require '../models/connect.php';

$db = connection();

//var_dump($_POST);
if(isset($_POST["nombien"])) {
    $nombien = htmlspecialchars(trim($_POST["nombien"]));
}else{
    $nombien = "";
}

if(isset($_POST["prixbien"])) {
    $prixbien = htmlspecialchars(trim($_POST["prixbien"]));
}else{
    $prixbien = "";
}

if(isset($_POST["numAdresseBien"])) {
    $numAdresseBien = htmlspecialchars(trim($_POST["numAdresseBien"]));
}else{
    $numAdresseBien = "";
}

if(isset($_POST["nomAdresseBien"])) {
    $nomAdresseBien = htmlspecialchars(trim($_POST["nomAdresseBien"]));
}else{
    $nomAdresseBien = "";
}


if(isset($_POST["cpBien"])) {
    $cpBien = htmlspecialchars(trim($_POST["cpBien"]));
}else{
    $cpBien = "";
}

if(isset($_POST["nomville"])) {
    $nomville = htmlspecialchars(trim($_POST["nomville"]));
}else{
    $nomville = "";
}

if(isset($_POST["commission"])) {
    $commission = htmlspecialchars(trim($_POST["commission"]));
}else{
    $commission = "";
}

if(isset($_POST["photobien"])) {
    $photobien = htmlspecialchars(trim($_POST["photobien"]));
}else{
    $photobien = "";
}

if(isset($_POST["statut"])) {
    $statut = htmlspecialchars(trim($_POST["statut"]));
}else{
    $statut = "";
}

if(isset($_POST["surfacebien"])) {
    $surfacebien = htmlspecialchars(trim($_POST["surfacebien"]));
}else{
    $surfacebien = "";
}

if(isset($_POST["surfaceterrain"])) {
    $surfaceterrain = htmlspecialchars(trim($_POST["surfaceterrain"]));
}else{
    $surfaceterrain = "";
}

if(isset($_POST["agence"])) {
    $agence = htmlspecialchars(trim($_POST["agence"]));
}else{
    $agence = "";
}

if(isset($_POST["option"])) {
    $option = htmlspecialchars(trim($_POST["option"]));
}else{
    $option = "";
}


$sqlInsertBien = "INSERT INTO Bien (nomBien, prixBien, numAdresseBien , nomAdresseBien ,cpBien , villeBien , commissionBien , photoBien , statut , surfaceBien , sufaceTerrain, Options_idOptions , Agence_idAgence) VALUES (:nomBien, :prixBien, :numAdresseBien , :nomAdresseBien ,:cpBien , :villeBien , :commissionBien , :photoBien , :statut , :surfaceBien , :surfaceTerrain, :idOptions, :idAgence )";

$reqInsertBien = $db->prepare($sqlInsertBien);
$reqInsertBien->bindParam(':nomBien',$nombien);
$reqInsertBien->bindParam(':prixBien',$prixbien);
$reqInsertBien->bindParam(':numAdresseBien',$numAdresseBien);
$reqInsertBien->bindParam(':nomAdresseBien',$nomAdresseBien);
$reqInsertBien->bindParam(':cpBien',$cpBien);
$reqInsertBien->bindParam(':villeBien',$nomville);
$reqInsertBien->bindParam(':commissionBien',$commission);
$reqInsertBien->bindParam(':photoBien',$photobien);
$reqInsertBien->bindParam(':statut',$statut);
$reqInsertBien->bindParam(':surfaceBien',$surfacebien);
$reqInsertBien->bindParam(':surfaceTerrain',$surfaceterrain);
$reqInsertBien->bindParam(':idAgence',$agence);
$reqInsertBien->bindParam(':idOptions',$option);

$reqInsertBien->execute();


if($reqInsertBien->rowCount() == 1){
    header('Location: biens.php?add=success');
}else{
    header('Location: biens.php?add=erreur');
}