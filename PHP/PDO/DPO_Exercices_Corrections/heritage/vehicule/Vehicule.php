<?php
	namespace vehicule;

	class Vehicule {
		private $type;
		private $marque;
		private $model;

		public function __construct(string $type, string $marque, string $model) {
			$this->type = $type;
			$this->marque = $marque;
			$this->model = $model;
		}

		public function fermerLesPortes(){
			echo "Les portes sont fermées :)";
		}

		public function accrocherRemorque(){
			echo "La remorque est accrochée <br>";
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

		/**
		 * @return string
		 */
		public function getMarque(): string {
			return $this->marque;
		}

		/**
		 * @param string $marque
		 */
		public function setMarque( string $marque ): void {
			$this->marque = $marque;
		}

		/**
		 * @return string
		 */
		public function getModel(): string {
			return $this->model;
		}

		/**
		 * @param string $model
		 */
		public function setModel( string $model ): void {
			$this->model = $model;
		}


	}
