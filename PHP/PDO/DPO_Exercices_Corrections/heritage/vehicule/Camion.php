<?php
	namespace vehicule;
	class Camion extends Vehicule {
		private $tonnage;

		public function __construct(int $tonnage, string $type, string $marque, string $model ) {
			$this->tonnage = $tonnage;
			parent::__construct( $type, $marque, $model );
		}

		public function verifierPortes(){
			parent::fermerLesPortes();
		}

		/**
		 * @return int
		 */
		public function getTonnage(): int {
			return $this->tonnage;
		}


		/**
		 * @param int $tonnage
		 */
		public function setTonnage( int $tonnage ): void {
			$this->tonnage = $tonnage;
		}


	}
