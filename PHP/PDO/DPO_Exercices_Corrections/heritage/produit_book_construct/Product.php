<?php
	namespace produit_book_construct;
	
	class Product {

		private $name;
		private $price;
		private $type;

		public function __construct(string $name,float $price, string $type = null) {
			$this->name = $name;
			$this->price = $price;
			$this->type = $type;
		}

		/**
		 * @return string
		 */
		public function getName(): string {
			return $this->name;
		}

		/**
		 * @param string $name
		 */
		public function setName( string $name ): void {
			$this->name = $name;
		}

		/**
		 * @return float
		 */
		public function getPrice(): float {
			return $this->price;
		}

		/**
		 * @param float $price
		 */
		public function setPrice( float $price ): void {
			$this->price = $price;
		}

		/**
		 * @return string
		 */
		public function getType(): string {
			return $this->type;
		}

		/**
		 * @param string $type
		 */
		public function setType( string $type ): void {
			$this->type = $type;
		}

	}
