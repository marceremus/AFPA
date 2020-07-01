<?php

namespace App\Entity;

use App\Repository\OptionsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OptionsRepository::class)
 */
class Options
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
    private $nomOption;

    /**
     * @ORM\OneToMany(targetEntity=Vehicule::class, mappedBy="options")
     * @ORM\Column(type="string")
     */
    private $vehicules;

    /**
     * Options constructor.
     */
    public function __construct()
    {
        $this->vehicules = new ArrayCollection();
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getNomOption(): ?string
    {
        return $this->nomOption;
    }

    /**
     * @param string $nomOption
     * @return $this
     */
    public function setNomOption(string $nomOption): self
    {
        $this->nomOption = $nomOption;

        return $this;
    }

    /**
     * @return Collection|Vehicule[]
     */
    public function getVehicules(): Collection
    {
        return $this->vehicules;
    }

    /**
     * @param Vehicule $vehicule
     * @return $this
     */
    public function addVehicule(Vehicule $vehicule): self
    {
        if (!$this->vehicules->contains($vehicule)) {
            $this->vehicules[] = $vehicule;
            $vehicule->setOptions($this);
        }

        return $this;
    }

    /**
     * @param Vehicule $vehicule
     * @return $this
     */
    public function removeVehicule(Vehicule $vehicule): self
    {
        if ($this->vehicules->contains($vehicule)) {
            $this->vehicules->removeElement($vehicule);
            // set the owning side to null (unless already changed)
            if ($vehicule->getOptions() === $this) {
                $vehicule->setOptions(null);
            }
        }

        return $this;
    }
}
