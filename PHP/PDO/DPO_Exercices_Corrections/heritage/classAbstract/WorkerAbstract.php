<?php

	namespace classAbstract;

	abstract class WorkerAbstract {

		abstract public function getName();

		public function getType(){
			return 'Type de la class';
		}
		abstract public function getMarque();
	}
