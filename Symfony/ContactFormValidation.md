# Contact form et exemple de validation (Assert)

## Validation des champs

````
<?php

namespace App\Form;

use App\Entity\Contact;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenom', TextType::class,[

                'label' => 'Prénom',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez renseigner votre prénom'
                    ]),
                    new Assert\Length([
                        'min' => 3,
                        'minMessage' => 'Votre prénom doit contenir au minimum 3 charactères',
                        'max' => 50,
                        'maxMessage' => 'votre prénom ne peux contenir que 50 charactères au maximum'
                    ]),
                ],
            ])
            ->add('nom', TextType::class,[

                'label' => 'Nom',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez renseigner votre nom'
                    ]),
                    new Assert\Length([
                        'min' => 3,
                        'minMessage' => 'Votre nom doit contenir au minimum {{3}} charactères',
                        'max' => 50,
                        'maxMessage' => 'votre nom ne peux contenir que {{50}} charactères au maximum'
                    ]),
                ],
            ])
            ->add('email', EmailType::class,[
                'required' => true,
                'label' => 'Email',
                'constraints' => [

                ],
            ])
            ->add('sujet', TextType::class,[

                'label' => 'Sujet',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez renseigner votre numéro de téléphone'
                    ]),
                    new Assert\Length([
                        'min' => 3,
                        'minMessage' => 'Votre rue doit contenir au minimum {{3}} charactères',
                        'max' => 150,
                        'maxMessage' => 'votre rue ne peux contenir que {{150}} charactères au maximum'
                    ]),
                ],
            ])
            ->add('message', TextareaType::class,[
                'required' => true,
                'label' => "Contenu du message",

                'constraints' => [

                    new Assert\Length([
                        'min' => 3,
                        'minMessage' => 'Votre rue doit contenir au minimum {{3}} charactères',
                        'max' => 3000,
                        'maxMessage' => 'votre rue ne peux contenir que {{3000}} charactères au maximum'
                    ]),
                ],
            ])
            /*->add('dateEnvoi', DateType::js, array('widget' => 'single_text'))*/
            ->add('envoyer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
            'translation_domain' => 'forms'
        ]);
    }
}

