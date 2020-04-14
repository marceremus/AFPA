<?php
require '../config/config.php';
require '../models/connect.php';

$db = connection();

if(isset($_GET['id'])){
    $id = htmlspecialchars(trim($_GET['id']));
}else{
    $id = "";
}

$sqlSupBien = "DETETE FROM Bien WHERE id = :ids";
$reqSupBien = $db->prepare($sqlSupBien);
$reqSupBien->execute();

if($reqSupBien->rowCount() == 1){
    header('Location: biens.php?add=success');
}else{
    header('Location: biens.php?add=erreur');
}