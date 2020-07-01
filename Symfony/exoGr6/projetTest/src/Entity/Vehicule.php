<?php

namespace App\Entity;

use App\Repository\VehiculeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VehiculeRepository::class)
 * @ORM\Entity
 * @ORM\Table(name="vehicule")
 */
class Vehicule
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomVehicule;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $numImmat;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $prixHt;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbPorte;

    /**
     * @ORM\ManyToOne(targetEntity=Marque::class, inversedBy="vehicules")
     */
    private $marque;

    /**
     * @ORM\ManyToOne(targetEntity=Options::class, inversedBy="vehicules")
     */
    private $options;

    /**
     * @ORM\ManyToOne(targetEntity=TypeVehicule::class, inversedBy="vehicules")
     */
    private $typeVehicule;

    /**
     * @ORM\ManyToOne(targetEntity=Color::class, inversedBy="vehicules")
     */
    private $color;


    /**
     * @return Marque|null
     */
    public function getMarque(): ?Marque
    {
        return $this->marque;
    }

    /**
     * @param Marque|null $marque
     * @return $this
     */
    public function setMarque(?Marque $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNomVehicule()
    {
        return $this->nomVehicule;
    }

    /**
     * @param mixed $nomVehicule
     */
    public function setNomVehicule($nomVehicule): void
    {
        $this->nomVehicule = $nomVehicule;
    }

    /**
     * @return mixed
     */
    public function getNumImmat()
    {
        return $this->numImmat;
    }

    /**
     * @param mixed $numImmat
     */
    public function setNumImmat($numImmat): void
    {
        $this->numImmat = $numImmat;
    }

    /**
     * @return mixed
     */
    public function getPrixHt()
    {
        return $this->prixHt;
    }

    /**
     * @param mixed $prixHt
     */
    public function setPrixHt($prixHt): void
    {
        $this->prixHt = $prixHt;
    }

    /**
     * @return mixed
     */
    public function getNbPorte()
    {
        return $this->nbPorte;
    }

    /**
     * @param mixed $nbPorte
     */
    public function setNbPorte($nbPorte): void
    {
        $this->nbPorte = $nbPorte;
    }

    public function getOptions(): ?Options
    {
        return $this->options;
    }

    public function setOptions(?Options $options): self
    {
        $this->options = $options;

        return $this;
    }

    public function getTypeVehicule(): ?TypeVehicule
    {
        return $this->typeVehicule;
    }

    public function setTypeVehicule(?TypeVehicule $typeVehicule): self
    {
        $this->typeVehicule = $typeVehicule;

        return $this;
    }

    public function getColor(): ?Color
    {
        return $this->color;
    }

    public function setColor(?Color $color): self
    {
        $this->color = $color;

        return $this;
    }


}
