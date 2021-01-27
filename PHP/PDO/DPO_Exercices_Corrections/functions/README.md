## Objectif de l'exercice: 
1) savoir manipuler la création des fonctions
2) savoir différencier les fonction qui renvoie les valeurs
3) savoir gérer le typage des fonctions
4) connaitre d'autres fonction existante en php

// ------------------------------------------------------------------------

//fonction qui envoie "toto" et l'affiche sur l'écran
    
    		// création de la fonction
    
    		function affiche(){
    			echo 'toto';
    		}
    		// utilisation de la fonction
    		affiche();
    
    		// --------------------------------------------------
    
    		//fonction qui transforme une chaine de caractère en majuscule et l’affiche cette valeur
    		// création de la fonction
    		function textToUpper($a){
    			echo mb_strtoupper($a);
    		}
    		// utilisation de la fonction
    		$text = "bla bla";
    		textToUpper($text);
    
    		// fonction qui multiplie un montant passé en paramètre par le taux de TVA passé également en paramètre
    		// création de la fonction
    		/**
    		 * @param float $mts
    		 * @param double $tva
    		 *
    		 * @return float
    		 */
    		function mult($mts,$tva=20.0) :float {
    			$c = $tva/100;
    			return $mts*$c;
    		}
    		// utilisation de la fonction
    		?>
    		<table class="table table-hover">
    			<tbody>
    			<th scope="row">Prénoms</th>
    			<?php
    				foreach ($tab as $key => $value){
    					echo '<tr><td>'.$value.'</td></tr>';
    				}
    			?>
    			</tbody>
    		</table>
    		<?php
    	}
    
    	// utilisation de la fonction
    	$tableau = array("Toto","Tata","Sabine","Brice","Yann");
    	sowTab($tableau);
    
    	// fonction qui prend en paramètre un tableau qui return le tableau trié dans l'ordre croissant
    	// création de la fonction
    	/**
    	 * @param array $tab
    	 *
    	 * @return array
    	 */
    	function sortTableau($tab):array {
    		sort($tab,SORT_NUMERIC | SORT_STRING);
    		return $tab;
    	}
    	// utilisation de la fonction
    	$tableauATrier = [2, -3, 5, -2, 8];
    	// tri des integer
    	var_dump(sortTableau($tableauATrier));
    	echo '<br>';
    	// tri des chaines de caractères
    	var_dump(sortTableau($tableau));
    	echo '<br>';
    
    	//fonction qui prend en paramètre un tableau qui return le tableau trié l'ordre décroissant
    	/**
    	 * @param array $tab
    	 *
    	 * @return array
    	 */
    	function tableauATrierDecroissant($tab):array  {
    		rsort($tab,SORT_NUMERIC | SORT_STRING);
    		return $tab;
    	}
    	// utilisation de la fonction
    	$tableauATrierDecroissant = [2, -3, 5, -2, 8];
    	// tri des integer
    	var_dump(tableauATrierDecroissant($tableauATrier));
    	echo '<br>';
    	// tri des chaines de caractères
    	var_dump(tableauATrierDecroissant($tableau));
    	echo '<br>';
    	echo '<br>';
    
    	//fonction qui prend en paramètre une date et qui revoie la date sous format jour-mois-année
    	// création de la fonction
    	/**
    	 * @param $date
    	 *
    	 * @return false|string
    	 * @throws Exception
    	 */
    	function dateFormat($date){
    		$date = new DateTime($date);
    		return date_format($date, 'd-m-Y');
    	}
    	// utilisation de la fonction
    	echo dateFormat("2019-09-20");
    	echo '<br>';
    	//fonction qui prend en paramètre deux dates et qui revoie le nombre de jours entre les deux dates
    // création de la fonction
    	/**
    	 * @param $date1
    	 * @param $date2
    	 *
    	 * @return integer
    	 * @throws Exception
    	 */
    	function nbJour($date1, $date2) :int {
    		$date1 = new DateTime($date1);
    		$date2 = new DateTime($date2);
    
    		$interval = $date1->diff($date2);
    		$interval->format('%R% jours');
    		return $interval->days;
    	}
    
    	// utilisation de la fonction
    	echo 'La différence entre deux dates : '.nbJour("2019-09-01", "2019-09-20");
    	echo '<br>';
    
    	//fonction qui prend en paramètre deux tableaux et qui envoie un seul tableau
    	// la création de la fonction
    	/**
    	 * @param array $tab1
    	 * @param array $tab2
    	 *
    	 * @return array
    	 */
    	function consolideDeuxTableau($tab1, $tab2) :array{
    		return array_merge($tab1,$tab2);
    	}
    	// utilisation de la fonction
    	$tab1 = array(1, 3,5,7);
    	$tab2 = array(2,4,6,8,10);
    	$deuxtableau = consolideDeuxTableau($tab1, $tab2);
    	var_dump($deuxtableau);
    	echo '<br>';
    
    
    	//fonction qui ajoute au tableau (à la fin de celui ci), passé en paramètre, une variable passée en paramètre
    	// création de la fontion
    	/**
    	 * @param array $tab
    	 * @param mixed $val
    	 *
    	 * @return array
    	 */
    	function ajouterValeurAlaFinDuTableau($tab, $val) :array{
    		array_push($tab,$val);
    		return $tab;
    	}
    	// utilisation de la fonction
    	$tab1 = array(1, 3,5,7);
    	var_dump(ajouterValeurAlaFinDuTableau($tab1, 12));
