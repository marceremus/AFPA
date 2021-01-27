<?php

	/*
    * Affichage de données de la société en fonction de som numéro SIRET
    */
	function showDataByCompanySitet($numSiret){

		//$numSiret = '84392416800019';

		$url = file_get_contents("https://entreprise.data.gouv.fr/api/sirene/v1/siret/".$numSiret);

		$tab_company = json_decode($url);

		foreach ( $tab_company as $key => $item ) {

			echo '<p>Siret : '.$item->siret.'</p>';
			echo '<p>Nom de la société : '.$item->l1_normalisee.'</p>';
			echo '<p>Adress : '.$item->l4_normalisee.'</p>';
			echo '<p>CP : '.$item->code_postal.'</p>';
			echo '<p>Adress ville : '.$item->l6_normalisee.'</p>';
		}

	}
