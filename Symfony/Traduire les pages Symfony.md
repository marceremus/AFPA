# Traduire les pages Symfony

	<pre>
		<?php

		namespace App\Form;

		use App\Entity\Option;
		use App\Entity\Property;
		use Symfony\Bridge\Doctrine\Form\Type\EntityType;
		use Symfony\Component\Form\AbstractType;
		use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
		use Symfony\Component\Form\Extension\Core\Type\FileType;
		use Symfony\Component\Form\FormBuilderInterface;
		use Symfony\Component\OptionsResolver\OptionsResolver;

		class PropertyType extends AbstractType
		{
		    public function buildForm(FormBuilderInterface $builder, array $options)
		    {
			$builder
			    ->add('title')
			    ->add('description')
			    ->add('surface')
			    ->add('rooms')
			    ->add('bedrooms')
			    ->add('floor')
			    ->add('price')
			    ->add('heat', ChoiceType::class,array(
				'choices' => $this->getChoices()
			    ))
				->add('options', EntityType::class, array(
					'class' => Option::class,
				    'choice_label' => 'name',
					'multiple' => true,
					'required' => false
				))
				->add('imageFile', FileType::class, array(
					'required' => false
				))
			    ->add('city')
			   // ->add('city', null, array(
			    //	'label' => "Ville"
			    //))
			    ->add('address')
			    ->add('postal_code')
			    ->add('sold')
			    //->add('created_at')
			;
		    }

		    public function configureOptions(OptionsResolver $resolver)
		    {
			$resolver->setDefaults([
			    'data_class' => Property::class,
				'translation_domain' => 'forms'
			]);
		    }

			private function getChoices() {
			$choices = Property::HEAT;
			$outout = array();
			foreach ($choices as $key => $choice){
				$outout[$choice] = $key;
			    }
			return $outout;
			}
		}

	</pre>
