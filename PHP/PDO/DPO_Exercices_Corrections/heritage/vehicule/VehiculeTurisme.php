<?php
	namespace vehicule;

	class VehiculeTurisme extends Vehicule {

		private $nbPortes = 4;

		public function __construct(int $nbPortes, string $type, string $marque, string $model ) {
			$this->nbPortes = $nbPortes;
			parent::__construct( $type, $marque, $model );
		}


		public function ajouterRemorque(){
			parent::accrocherRemorque();
		}

		/**
		 * @return mixed
		 */
		public function getNbPortes() {
			return $this->nbPortes;
		}


		/**
		 * @param mixed $nbPortes
		 */
		public function setNbPortes( $nbPortes ): void {
			$this->nbPortes = $nbPortes;
		}

	}
