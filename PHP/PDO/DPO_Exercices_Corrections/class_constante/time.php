<?php
//final class Time{ // final enpeche extend
	class Time {
		const SECOND = 1;
		const MINUT = self::SECOND*60;
		const HOUR = self::MINUT*60;
		const DAY = self::HOUR*24;
		const YEAR = self::DAY*360;
		const MONTH = self::DAY*30;
	}
// impossible de faire cela si la class est finale:
//	class Date extends Time{
//		const MONTH = self::DAY*30;
//	}

	echo Time::DAY/3600;
	echo '<br>';
	echo Time::MONTH/3600/30;
	echo '<br>';
