# L'installation Vich UploaderBundle


### Dans le fichier  Entity/Vehicule - fichier à modifier
	
```

	<?php

	namespace App\Entity;

	use DateTime;
	use Doctrine\ORM\Mapping as ORM;
	use Exception;
	use Symfony\Component\HttpFoundation\File\UploadedFile;
	use Symfony\Component\HttpFoundation\File\File;
	use Symfony\Component\Validator\Constraints as Assert;
	use Vich\UploaderBundle\Mapping\Annotation as Vich;


	/**
	 * @ORM\Entity(repositoryClass="App\Repository\VehiculeRepository")
	 * @Vich\Uploadable()
	 *
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
	     * @ORM\Column(type="string", length=100)
	     */
	    private $nomVehicule;

	    /**
	     * @ORM\Column(type="text")
	     */
	    private $description;

	    /**
	     * @ORM\Column(type="decimal", precision=10, scale=2)
	     */
	    private $prixHt;

	    /**
	     * @ORM\Column(type="date")
	     */
	    private $datePMC;

	    /**
	     * @ORM\Column(type="integer")
	     */
	    private $cv;

	    /**
	     * @ORM\ManyToOne(targetEntity="App\Entity\Marque", inversedBy="vehicules")
	     * @ORM\JoinColumn(nullable=false)
	     */
	    private $marque;

	    /**
	     * @ORM\ManyToOne(targetEntity="App\Entity\Modele", inversedBy="vehicules")
	     * @ORM\JoinColumn(nullable=false)
	     */
	    private $modele;

	    /**
	     * @ORM\ManyToOne(targetEntity="App\Entity\Color", inversedBy="vehicules")
	     */
	    private $color;

	    /**
	     * @ORM\ManyToOne(targetEntity="App\Entity\TypeVehicule", inversedBy="vehicules")
	     */
	    private $typeVehicule;

	    /**
	     * @ORM\ManyToOne(targetEntity="App\Entity\Energy", inversedBy="vehicules")
	     */
	    private $energy;

	    /**
	     * @var string|null
	     * @ORM\Column(type="string", length=255)
	     */
	    private $filename;

	    /**
	     * @var File|null
	     * @Assert\Image(mimeTypes={"image/jpeg", "image/jpg", "image/png"})
	     * @Vich\UploadableField(mapping="product_image", fileNameProperty="filename")
	     *
	     */
	    private $imageFile;


	    public function getId(): ?int
	    {
	        return $this->id;
	    }

	    public function getNomVehicule(): ?string
	    {
	        return $this->nomVehicule;
	    }

	    public function setNomVehicule(string $nomVehicule): self
	    {
	        $this->nomVehicule = $nomVehicule;

	        return $this;
	    }

	    public function getDescription(): ?string
	    {
	        return $this->description;
	    }

	    public function setDescription(string $description): self
	    {
	        $this->description = $description;

	        return $this;
	    }

	    public function getPrixHt(): ?string
	    {
	        return $this->prixHt;
	    }

	    public function setPrixHt(string $prixHt): self
	    {
	        $this->prixHt = $prixHt;

	        return $this;
	    }

	    public function getDatePMC(): ?\DateTimeInterface
	    {
	        return $this->datePMC;
	    }

	    public function setDatePMC(\DateTimeInterface $datePMC): self
	    {
	        $this->datePMC = $datePMC;

	        return $this;
	    }


	    public function getCv(): ?int
	    {
	        return $this->cv;
	    }

	    public function setCv(int $cv): self
	    {
	        $this->cv = $cv;

	        return $this;
	    }

	    public function getMarque(): ?Marque
	    {
	        return $this->marque;
	    }

	    public function setMarque(?Marque $marque): self
	    {
	        $this->marque = $marque;

	        return $this;
	    }

	    public function getModele(): ?Modele
	    {
	        return $this->modele;
	    }

	    public function setModele(?Modele $modele): self
	    {
	        $this->modele = $modele;

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

	    public function getTypeVehicule(): ?TypeVehicule
	    {
	        return $this->typeVehicule;
	    }

	    public function setTypeVehicule(?TypeVehicule $typeVehicule): self
	    {
	        $this->typeVehicule = $typeVehicule;

	        return $this;
	    }

	    public function getEnergy(): ?Energy
	    {
	        return $this->energy;
	    }

	    public function setEnergy(?Energy $energy): self
	    {
	        $this->energy = $energy;

	        return $this;
	    }

	    /**
	     * @return string|null
	     */
	    public function getFilename(): ?string
	    {
	        return $this->filename;
	    }

	    /**
	     * @param string|null $filename
	     * @return Vehicule
	     */
	    public function setFilename(?string $filename): Vehicule
	    {
	        $this->filename = $filename;
	        return $this;
	    }


	    /**
	     * @ORM\Column(type="datetime")
	     * @var null|DateTime
	     */
	    private $updated_at;

	    /**
	     * @return File|null
	     */
	    public function getImageFile(): ?File
	    {
	        return $this->imageFile;
	    }


	    /**
	     * @param File|null $imageFile
	     *
	     * @throws Exception
	     */
	    public function setImageFile( ?File $imageFile ): void {
	        $this->imageFile = $imageFile;
	        if($this->imageFile instanceof UploadedFile){
	            $this->updated_at = new \DateTime('now');
	        }
	        //return $this;
	    }
	}


```


### VehiculeType - formulaire 

```

	class VehiculeType extends AbstractType
	{
	    public function buildForm(FormBuilderInterface $builder, array $options)
	    {
	        $builder
	            ->add('nomVehicule')
	            ->add('description')
	            ->add('prixHt')
	            ->add('datePMC')
	            ->add('cv')
	            ->add('marque', EntityType::class, array(
	                'class' => Marque::class,
	                'label' => 'Marque',
	                'required' => false,
	                'choice_label' => 'nomMarque',
	                'multiple' => false
	            ))
	            ->add('modele', EntityType::class, array(
	                'class' => Modele::class,
	                'label' => "Modele",
	                'required' => false,
	                'choice_label' => 'nomModele',
	                'multiple' => false
	            ))
	            ->add('typeVehicule', EntityType::class, array(
	                'class' => TypeVehicule::class,
	                'label' => "Type de véhicule",
	                'required' => false,
	                'choice_label' => 'nomTypeVehicule',
	                'multiple' => false
	            ))
	            ->add('color', EntityType::class, array(
	                'class' => Color::class,
	                'label' => "Couleur",
	                'required' => false,
	                'choice_label' => 'nomColor',
	                'multiple' => false
	            ))
	            ->add('energy', EntityType::class, array(
	                'class' => Energy::class,
	                'label' => "Carbourant",
	                'required' => false,
	                'choice_label' => 'nomEnergy',
	                'multiple' => false
	            ))
	            ->add('imageFile', FileType::class, array(
	            'required' => false
	        ))
	        ;
	    }


```


### Vehicule index.html.twig


```

    <h1>Vehicule index</h1>
    <div class="mt-5 mb-5">
        {% if (app.user != null) %}
            <a href="{{ path('vehicule_new') }}">
                <button type="button" class="btn btn-outline-secondary" >Create new</button>
            </a>
        {% endif %}
    </div>
    <div class="row">
        {%  for pag in pagination %}
            <div class="col-6 mb-5">
                <h5>Nom de véhicule  {{ pag.nomVehicule }}</h5>
                <hr>
                {% if pag.filename %}
                {% endif %}
                <img src="{{ vich_uploader_asset(pag, 'imageFile') }}" style="width:100%; height: auto" class="card-img-top" alt="">
                {#<img src="images/vehicule/{{ pag.filename }}" class="card-img-top" alt="">#}
                <p><b>Description: </b> <br>{{ pag.description }}</p>
                <p><b>Prix </b>{{ pag.prixHt | format_currency('EUR') }}</b></p>
                <p><b>Nombre de CV: </b> {{ pag.cv }}</p>
                <p><b>Première mise en circulation : </b>{{ pag.datePMC|date("d-m-Y") }}</p>
                <p><b>Marque : </b>{{ pag.marque.nomMarque }}</p>
                <p><b>Nom de la marque : </b>{{ pag.modele.nomModele }}</p>
                <p><b>Couleur : </b>{{ pag.color.nomColor }}</p>
                <p><b>Type de véhicule : </b>{{ pag.typeVehicule.nomTypeVehicule }}</p>
                <p><b>Carbourant : </b>{{ pag.energy.nomEnergy }}</p>

                <div class="row">
                    <a href="{{ path('vehicule_show', {'id': pag.id}) }}">
                        <button type="button" class="btn btn-outline-secondary" >show</button>
                    </a>
                    <a href="{{ path('vehicule_edit', {'id': pag.id}) }}">
                        <button type="button" class="btn btn-outline-secondary" >edit</button>
                    </a>
                </div>
            </div>
        {% endfor %}
    </div>
    <div class="pagination mb-5">
        {{ knp_pagination_render(pagination) }}
    </div>

```


### créer un fichier vich_uploader.yaml dans config/package

```

	vich_uploader:
    db_driver: orm
    mappings:
        product_image:
            uri_prefix: /images/vehicule
            upload_destination: '%kernel.project_dir%/public/images/vehicule'
            namer: Vich\UploaderBundle\Naming\SmartUniqueNamer

```


### Créer le fichier knp_paginator.yml dans dans config/package

```

	knp_paginator:
	  page_range: 5                       # number of links showed in the pagination menu (e.g: you have 10 pages, a page_range of 3, on the 5th page you'll see links to page 4, 5, 6)
	  default_options:
	    page_name: page                 # page query parameter name
	    sort_field_name: sort           # sort field query parameter name
	    sort_direction_name: direction  # sort direction query parameter name
	    distinct: true                  # ensure distinct results, useful when ORM queries are using GROUP BY statements
	    filter_field_name: filterField  # filter field query parameter name
	    filter_value_name: filterValue  # filter value query parameter name
	  template:
	    #    pagination: '@KnpPaginator/Pagination/sliding.html.twig'     # sliding pagination controls template
	    pagination: '@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig'     # sliding pagination controls template
	    sortable: '@KnpPaginator/Pagination/twitter_bootstrap_v3_sortable_link.html.twig' # sort link template
	    filtration: '@KnpPaginator/Pagination/filtration.html.twig'  # filters template

			    
```		


