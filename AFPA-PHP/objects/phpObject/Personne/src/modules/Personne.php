<?php

namespace App\modules;

class Personne
{

    private $nomPersonne;
    private $prenomPersonne;
    private $dateNaissancePersonne;
    private $phonePersonne;
    private $emailPersonne;

    /**
     * Personne constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getNomPersonne()
    {
        return $this->nomPersonne;
    }

    /**
     * @param mixed $nomPersonne
     */
    public function setNomPersonne($nomPersonne): void
    {
        $this->nomPersonne = $nomPersonne;
    }

    /**
     * @return mixed
     */
    public function getPrenomPersonne()
    {
        return $this->prenomPersonne;
    }

    /**
     * @param mixed $prenomPersonne
     */
    public function setPrenomPersonne($prenomPersonne): void
    {
        $this->prenomPersonne = $prenomPersonne;
    }

    /**
     * @return mixed
     */
    public function getDateNaissancePersonne()
    {
        return $this->dateNaissancePersonne;
    }

    /**
     * @param mixed $dateNaissancePersonne
     */
    public function setDateNaissancePersonne($dateNaissancePersonne): void
    {
        $this->dateNaissancePersonne = $dateNaissancePersonne;
    }

    /**
     * @return mixed
     */
    public function getPhonePersonne()
    {
        return $this->phonePersonne;
    }

    /**
     * @param mixed $phonePersonne
     */
    public function setPhonePersonne($phonePersonne): void
    {
        $this->phonePersonne = $phonePersonne;
    }

    /**
     * @return mixed
     */
    public function getEmailPersonne()
    {
        return $this->emailPersonne;
    }

    /**
     * @param mixed $emailPersonne
     */
    public function setEmailPersonne($emailPersonne): void
    {
        $this->emailPersonne = $emailPersonne;
    }



}