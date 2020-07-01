<?php

namespace App\Form;

use App\Entity\Color;
use App\Entity\Marque;
use App\Entity\Options;
use App\Entity\TypeVehicule;
use App\Entity\Vehicule;
use App\Repository\MarqueRepository;
use App\Repository\OptionsRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VehiculeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('nomVehicule',TextType::class, array(
                'label' => 'Nom véhicule'
            ) )
            ->add('numImmat', TextType::class, array(
                'label' => "Numéro d'immatriculation"
            ))
            ->add('prixHt')
            ->add('nbPorte')
            ->add('marque', EntityType::class, array(
                'class' => Marque::class,
                'choice_label' => 'nomMarque',
                'multiple' => false,
                'required' => false
            ))
            ->add('options', EntityType::class, array(
                'class' => Options::class,
                'choice_label' => 'nomOption',
                'multiple' => false,
                'required' => false
            ))
            ->add('typeVehicule', EntityType::class, array(
                'class' => TypeVehicule::class,
                'choice_label' => 'nomTypeVehicule',
                'multiple' => false,
                'required' => false
            ))
            ->add('color', EntityType::class, array(
                'class' => Color::class,
                'choice_label' => 'nomColor',
                'multiple' => false,
                'required' => false
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Vehicule::class,
        ]);
    }
}
