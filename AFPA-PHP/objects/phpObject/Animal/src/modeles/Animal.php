<?php
namespace App\modeles;

class Animal
{

    private $nomAnimal;
    private $dateBirthday;

    /**
     * Animal constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getNomAnimal()
    {
        return $this->nomAnimal;
    }

    /**
     * @param mixed $nomAnimal
     */
    public function setNomAnimal($nomAnimal): void
    {
        $this->nomAnimal = $nomAnimal;
    }

    /**
     * @return mixed
     */
    public function getDateBirthday()
    {
        return $this->dateBirthday;
    }

    /**
     * @param mixed $dateBirthday
     */
    public function setDateBirthday($dateBirthday): void
    {
        $this->dateBirthday = $dateBirthday;
    }

}