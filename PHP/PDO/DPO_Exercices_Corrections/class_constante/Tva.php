<?php

	class Tva {
		const TVA20 = 20;
		const TVA55 = 5.5;
		const TVA10 = 10;
	}

	echo Tva::TVA10;
	echo '<br>';
	echo Tva::TVA20;
	echo '<br>';

	function prixTTC(float $prixArticle) :void {
		echo "Le prix de l'article TTC est de : ". ($prixArticle*(1 + Tva::TVA55/100));
		echo '<br>';
		echo "Le prix de l'article TTC est de : ". ($prixArticle*(1 + Tva::TVA20/100));
		echo '<br>';
		echo "Le prix de l'article TTC est de : ". ($prixArticle*(1 + Tva::TVA10/100));
	}
	prixTTC(200.990);
