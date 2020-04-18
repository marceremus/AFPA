## Class Final

// final enpeche extend

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