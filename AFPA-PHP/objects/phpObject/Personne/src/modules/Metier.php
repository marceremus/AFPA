<?php

namespace App\modules;

class Metier extends Personne
{
    private $nomMetier;

    /**
     * Metier constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getNomMetier()
    {
        return $this->nomMetier;
    }

    /**
     * @param mixed $nomMetier
     */
    public function setNomMetier($nomMetier): void
    {
        $this->nomMetier = $nomMetier;
    }


}