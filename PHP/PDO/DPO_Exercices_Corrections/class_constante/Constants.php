<?php

	class Constants {
		const TABLE_NAME = "users";
		private $name;

		public function __construct(string $name) {
			$this->name = $name;
			self::TABLE_NAME;
		}

	}

	echo Constants::TABLE_NAME;
