<?php

namespace App\modules;

class Adresse extends Personne
{

    private $numRue;
    private $nomRue;
    private $cp;
    private $ville;

    /**
     * Adresse constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getNumRue()
    {
        return $this->numRue;
    }

    /**
     * @param mixed $numRue
     */
    public function setNumRue($numRue): void
    {
        $this->numRue = $numRue;
    }

    /**
     * @return mixed
     */
    public function getNomRue()
    {
        return $this->nomRue;
    }

    /**
     * @param mixed $nomRue
     */
    public function setNomRue($nomRue): void
    {
        $this->nomRue = $nomRue;
    }

    /**
     * @return mixed
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * @param mixed $cp
     */
    public function setCp($cp): void
    {
        $this->cp = $cp;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville): void
    {
        $this->ville = $ville;
    }



}