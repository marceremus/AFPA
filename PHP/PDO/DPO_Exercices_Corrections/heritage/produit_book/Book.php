<?php
	namespace produit_book;
	class Book extends Product {

		public function __construct( string $name, float $price) {
			parent::__construct( $name, $price, "Book");
		}

		function printTitle() :string{
			return 'titre de book';
		}
	}

