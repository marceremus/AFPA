<?php

namespace App\modules;


class Salaire extends Metier
{

    private $nomSalaire;
    private $montantSalaire;
    private $datePaiement;

    /**
     * Salaire constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getNomSalaire()
    {
        return $this->nomSalaire;
    }

    /**
     * @param mixed $nomSalaire
     */
    public function setNomSalaire($nomSalaire): void
    {
        $this->nomSalaire = $nomSalaire;
    }

    /**
     * @return mixed
     */
    public function getMontantSalaire()
    {
        return $this->montantSalaire;
    }

    /**
     * @param mixed $montantSalaire
     */
    public function setMontantSalaire($montantSalaire): void
    {
        $this->montantSalaire = $montantSalaire;
    }

    /**
     * @return mixed
     */
    public function getDatePaiement()
    {
        return $this->datePaiement;
    }

    /**
     * @param mixed $datePaiement
     */
    public function setDatePaiement($datePaiement): void
    {
        $this->datePaiement = $datePaiement;
    }



}