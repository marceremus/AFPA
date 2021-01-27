<?php
	namespace produit_book_simple;
	class Book extends Product {

		private $collection;

		public function __construct($collection, $type, $name) {
			$this->collection = $collection;
			parent::__construct($type, $name);
		}

		function printTitle() :string{
			return 'titre du book';
		}

		/**
		 * @return mixed
		 */
		public function getCollection() {
			return $this->collection;
		}

		/**
		 * @param mixed $collection
		 */
		public function setCollection( $collection ): void {
			$this->collection = $collection;
		}

	}

