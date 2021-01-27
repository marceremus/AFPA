## Class Final

	class Time { 
		const SECOND = 1;
		const MINUT = self::SECOND*60;
		const HOUR = self::MINUT*60;
		const DAY = self::HOUR*24;
		const YEAR = self::DAY*360;
	}

	class Date extends Time{
	const MONTH = self::DAY*30;
	}

	echo Time::DAY;
	echo Date::MONTH;


- ------------------------------------------------------

	class Constants {
		const TABLE_NAME = "users";
		private $name;

		public function __construct(string $name) {
			$this->name = $name;
			self::TABLE_NAME;
		}

	}
	
	echo Time::DAY/3600;
	echo '<br>';
	echo Date::MONTH/3600/30;

	$con = new Date();
	echo '<br>';
	echo $con::MONTH/3600/30;
