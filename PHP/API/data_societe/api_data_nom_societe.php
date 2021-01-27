<?php

	/*
	 * Affichage de données de la société en fonction de som nom
	 */
	/**
	 * @param $nomSociete
	 */
	function showDataByCompanyName($nomSociete){

		$url = file_get_contents("https://entreprise.data.gouv.fr/api/sirene/v1/full_text/".$nomSociete);

		$tab_company = json_decode($url);

		$tab_etablissement = $tab_company->etablissement;

		foreach ($tab_etablissement as $key => $etab){

			echo '<p>Siren : '.$etab->siren.'</p>';
			echo '<p>Siret : '.$etab->siret.'</p>';
			echo '<p>Nom : '.$etab->l1_normalisee.'</p>';
			echo '<p>Adresse : '.$etab->l4_normalisee.'</p>';
			echo '<p>Cp et ville  : '.$etab->l6_normalisee.'</p>';

		}
echo '<hr>';
	}

