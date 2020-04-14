<?php
require '../config/config.php';
require '../models/connect.php';

$db = connection();

if(isset($_POST["id"])){
    $id = htmlspecialchars(trim($_POST['id']));
}else{
    $id = "";
}

if(isset($_POST["nomAgence"])){
    $nomAgence = htmlspecialchars(trim($_POST['nomAgence']));
}else{
    $nomAgence = "";
}

if(isset($_POST["numRueAgence"])){
    $numRueAgence = htmlspecialchars(trim($_POST['numRueAgence']));
}else{
    $numRueAgence = "";
}

if(isset($_POST["nomRueAgence"])){
    $nomRueAgence = htmlspecialchars(trim($_POST['nomRueAgence']));
}else{
    $nomRueAgence = "";
}

if(isset($_POST["cpAgence"])){
    $cpAgence = htmlspecialchars(trim($_POST['cpAgence']));
}else{
    $cpAgence = "";
}

if(isset($_POST["nomVilleAgence"])){
    $nomVilleAgence = htmlspecialchars(trim($_POST['nomVilleAgence']));
}else{
    $nomVilleAgence = "";
}

if(isset($_POST["phoneAgence"])){
    $phoneAgence = htmlspecialchars(trim($_POST['phoneAgence']));
}else{
    $phoneAgence = "";
}

if(isset($_POST["emailAgence"])){
    $emailAgence = htmlspecialchars(trim($_POST['emailAgence']));
}else{
    $emailAgence = "";
}

$sqlUpdateAgence = "UPDATE Agence SET nomAgence = :nomAgence, numRueAgence = :numRueAgence, nomRueAgence = :nomRueAgence , cpAgence = :cpAgence, villeAgence = :villeAgence, phoneAgence = :phoneAgence, emailAgence =:emailAgence  WHERE idAgence = :ids";
//idAgence//numRueAgence//nomRueAgence//cpAgence//villeAgence//phoneAgence

$reqUpdateAgence = $db->prepare($sqlUpdateAgence);
$reqUpdateAgence->bindParam(':nomAgence',$nomAgence);
$reqUpdateAgence->bindParam(':numRueAgence',$numRueAgence);
$reqUpdateAgence->bindParam(':nomRueAgence',$nomRueAgence);
$reqUpdateAgence->bindParam(':cpAgence',$cpAgence);
$reqUpdateAgence->bindParam(':villeAgence',$villeAgence);
$reqUpdateAgence->bindParam(':phoneAgence',$phoneAgence);
$reqUpdateAgence->bindParam(':emailAgence',$emailAgence);
$reqUpdateAgence->bindParam(':ids',$id);
$reqUpdateAgence->execute();

if($reqUpdateAgence->rowCount() == 1){
    header('Location: listAgence.php?add=success');
}else{
    header('Location: listAgence.php?add=erreur');
}