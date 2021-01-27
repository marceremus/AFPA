<?php
	namespace produit_book_simple;

	class Product {
		private $type;
		private $name;
		public function __construct(string $type, string $name) {
			$this->type = $type;
			$this->name = $name;
		}

		function showName() :string
		{
			return 'Je suis un nom';
		}

		/**
		 * @return mixed
		 */
		public function getType() {
			return $this->type;
		}

		/**
		 * @param mixed $type
		 */
		public function setType( $type ): void {
			$this->type = $type;
		}

		/**
		 * @return mixed
		 */
		public function getName() {
			return $this->name;
		}

		/**
		 * @param mixed $name
		 */
		public function setName( $name ): void {
			$this->name = $name;
		}



	}
