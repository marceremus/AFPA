<?php
	$folder = "/wordpress";
	require_once($_SERVER['DOCUMENT_ROOT'] . $folder . '/wp-config.php');
	require_once($_SERVER['DOCUMENT_ROOT'] . $folder . '/wp-load.php');

	//var_dump($_POST);
	$param = $_POST['loc'];

	global $wpdb;
	$priceTtc = $wpdb->get_results("SELECT prix FROM forfaits WHERE nom_forfait='".$param."'");
	$prix = $priceTtc[0];
	echo $prix->prix;



