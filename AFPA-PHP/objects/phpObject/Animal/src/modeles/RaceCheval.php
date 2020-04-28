<?php
namespace App\modeles;

class RaceCheval extends Cheval
{

    private $raceCheval;

    /**
     * Race constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getRaceCheval()
    {
        return $this->raceCheval;
    }

    /**
     * @param mixed $raceCheval
     */
    public function setRaceCheval($raceCheval): void
    {
        $this->raceCheval = $raceCheval;
    }


}