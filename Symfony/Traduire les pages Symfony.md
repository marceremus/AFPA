# Traduire les pages Symfony


## Dans votre fichier FormType.php
```

	namespace App\Form;


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
			->add('address')
			->add('postal_code')
			->add('sold')
		;
	}


```

### ajoutez la ligne suivante : 'translation_domain' => 'forms'


```
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => Property::class,
			'translation_domain' => 'forms'
		]);
	}
	
```

## Créer un fichier forms.fr.yaml (ici il porte le nom "forms"). Ce nom doit correspondre au nom que vous avez placé dans 'translation_domain' => 'forms'

titre: Titre
description: Description 

.... etc.

