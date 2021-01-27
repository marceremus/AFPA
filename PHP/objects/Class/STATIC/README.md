## Définition des propriétés et méthodes statiques
Une propriété ou une méthode statique est une propriété ou une méthode qui ne va pas appartenir à une instance de classe ou à un objet en particulier mais qui va plutôt appartenir à la classe dans laquelle elle a été définie.

Les méthodes et propriétés statiques vont donc avoir la même définition et la même valeur pour toutes les instances d’une classe et nous allons pouvoir accéder à ces éléments sans avoir besoin d’instancier la classe.

Pour être tout à fait précis, nous n’allons pas pouvoir accéder à une propriété statique depuis un objet. En revanche, cela va être possible dans le cas d’une méthode statique.


## Attention 
Attention à ne pas confondre propriétés statiques et constantes de classe : une propriété statique peut tout à fait changer de valeur au cours du temps à la différence d’une constante dont la valeur est fixée. Simplement, la valeur d’une propriété statique sera partagée par tous les objets issus de la classe dans laquelle elle a été définie.

De manière générale, nous n’utiliserons quasiment jamais de méthode statique car il n’y aura que très rarement d’intérêt à en utiliser. En revanche, les propriétés statiques vont s’avérer utiles dans de nombreux cas.

	<pre>
		<?php
	    class Admin extends Utilisateur{
		protected static $ban;
		public const ABONNEMENT = 5;

		public function __construct($n, $p, $r){
		    $this->user_name = strtoupper($n);
		    $this->user_pass = $p;
		    $this->user_region = $r;
		}

		public function setBan(...$b){
		    foreach($b as $banned){
			self::$ban[] .= $banned;
		    }
		}
		public function getBan(){
		    echo 'Utilisateurs bannis : ';
		    foreach(self::$ban as $valeur){
			echo $valeur .', ';
		    }
		}

		public function setPrixAbo(){
		    if($this->user_region === 'Sud'){
			return $this->prix_abo = self::ABONNEMENT;
		    }else{
			return $this->prix_abo = parent::ABONNEMENT / 2;
		    }
		}
	    }
	?>
	</pre>
