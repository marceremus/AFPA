<?php
namespace App\modeles;

class RaceChien extends Chien
{

    private $raceChien;

    /**
     * Race constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getRaceChien()
    {
        return $this->raceChien;
    }

    /**
     * @param mixed $raceChien
     */
    public function setRaceChien($raceChien): void
    {
        $this->raceChien = $raceChien;
    }


}