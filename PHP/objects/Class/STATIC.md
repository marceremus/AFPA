## Class Statique 

Cette page décrit l'utilisation du mot clé static qui permet de définir des méthodes et des propriétés statiques. static peut aussi être utilisé pour définir des variables statiques et pour finir des liaisons statiques. Reportez-vous à ces pages pour plus d'informations sur la signification de static.

Le fait de déclarer des propriétés ou des méthodes comme statiques vous permet d'y accéder sans avoir besoin d'instancier la classe. On ne peut accéder à une propriété déclarée comme statique avec l'objet instancié d'une classe (bien que ce soit possible pour une méthode statique).

#### Avertissement
En PHP 7, l'appel statique de méthodes non-statiques est déconseillé et génèrera une alerte E_DEPRECATED. La prise en charge de l'appel statique de méthodes non-statiques sera supprimé dans le futur.


			
		<?php
		class Foo
		{
		    public static $my_static = 'foo';

		    public function staticValue() {
		        return self::$my_static;
		    }
		}

		class Bar extends Foo
		{
		    public function fooStatic() {
		        return parent::$my_static;
		    }
		}


		print Foo::$my_static . "\n";

		$foo = new Foo();
		print $foo->staticValue() . "\n";
		print $foo->my_static . "\n";      // "Propriété" my_static non définie

		print $foo::$my_static . "\n";
		$classname = 'Foo';
		print $classname::$my_static . "\n"; // Depuis PHP 5.3.0

		print Bar::$my_static . "\n";
		$bar = new Bar();
		print $bar->fooStatic() . "\n";
		?>	