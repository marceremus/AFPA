<?php
	namespace produit_book_construct;
	class Book extends Product {

		public function __construct(string $name,float $price) {
			parent::__construct($name, $price);
		}

		function printTitle() :string{
			return 'titre de book';
		}

	}

