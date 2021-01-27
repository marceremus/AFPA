## INTERFACE



	interface NameInterface{
		public function getName() : string ;
	}

	interface TypeInterface{
		public function getType() : string;
	}

	interface SizeInterface{

	}

	class Car implements NameInterface, TypeInterface {
		public function getName(): string {
			return "Ford";
		}

		public function getType(): string {
			return "Véhicule ";
		}
	}

	$car = new Car();
	echo $car->getName();
	echo $car->getType();
	//var_dump($car instanceof SizeInterface);
