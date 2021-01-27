<?php
	namespace vehicule;
	require 'Vehicule.php';
	require 'Camion.php';
	require 'VehiculeTurisme.php';

	$vehicule = new Vehicule("VL", "BMW","X6");

	$camion = new Camion(40,"PL","VOLVO","S40");

	$vehTuris = new VehiculeTurisme(4,"VL", "Audi","A8");

	echo "Le vehicule - type : ".$vehicule->getType()."<br>";
	echo "Le vehicule - marque : ".$vehicule->getMarque()."<br>";
	echo "Le vehicule - modèle : ".$vehicule->getModel()."<br>";
	echo '<br>';
	echo "Le camion - type : ".$camion->getType()."<br>";
	echo "Le camion - marque : ".$camion->getMarque()."<br>";
	echo "Le camion - modèle : ".$camion->getModel()."<br>";
	echo "Le camion - tonnage : ".$camion->getTonnage()." tonnes<br>";
	$camion->verifierPortes();
	echo '<br>';
	echo '<br>';
	echo "Le véhicule de turisme - type : ".$vehTuris->getType()."<br>";
	echo "Le véhicule de turisme - marque : ".$vehTuris->getMarque()."<br>";
	echo "Le véhicule de turisme - modèle : ".$vehTuris->getModel()."<br>";
	echo "Le véhicule de turisme - nombre de portes : ".$vehTuris->getNbPortes()." portes<br>";
	$vehTuris->ajouterRemorque();
	$vehTuris->setNbPortes(6);
	var_dump($vehTuris);

	error_log("Error test",0,"../log/error_log.txt");
	echo "<br>";
	echo "<br>";



