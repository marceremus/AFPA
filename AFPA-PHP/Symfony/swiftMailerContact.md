# SwiftMailer

## fichier swiftmailer.yaml
- pour localhost: 
    <pre>
    swiftmailer:
        url: '%env(MAILER_URL)%'
        spool: { type: 'memory' }
    </pre>


</pre>

## fichier .env
- MAILER_URL=gmail://votremail@gmail.com:votreMotDePasse@localhost


## fichier : ContactController.php
    <pre>
        <?php

        namespace App\Controller;


        use App\Entity\Contact;
        use App\Form\ContactType;
        use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
        use Symfony\Component\HttpFoundation\Request;
        use Symfony\Component\HttpFoundation\Response;
        use Symfony\Component\Routing\Annotation\Route;

        class ContactController extends AbstractController
        {
            /**
             * @Route("/contact", name="contact")
             */
            public function index(Request $request, \Swift_Mailer $mailer):Response
            {
                $contact = new Contact();
                $form = $this->createForm(ContactType::class, $contact);
                $form->handleRequest($request);

                if ($form->isSubmitted() && $form->isValid()) {

                    // Une méthode
                    $sujet = $contact->getSujet();
                    $mes = $contact->getMessage();
                    $from = $contact->getPrenom().' '.$contact->getNom();
                    $addEmail = $contact->getEmail();


                    // Deuxième méthode

                    /*
                    $vals = $request->request->filter('contact');

                    $sujet = $vals["sujet"];
                    $mes = $vals["message"];
                    $from = $vals["nom"].' '.$vals["prenom"];
                    $addEmail = $vals["email"];
        */
                    $textBody = "<h3>".$from."</h3><p>Le sujet : ".$sujet."</p><p>Votre message</p><p>".$mes."</p><p>Votre adresse e-mail : </p>".$addEmail;


                    $message = (new \Swift_Message($sujet))
                        ->setFrom($addEmail)
                        ->setTo('marceremus@gmail.com')
                        ->setBody($textBody, 'text/html', 'utf-8');

                    $mailer->send($message);

                    $entityManager = $this->getDoctrine()->getManager();

                    $entityManager->persist($contact);

                    $entityManager->flush();

                    return $this->redirectToRoute('home');

                }

                return $this->render('contact/index.html.twig', [
                    'controller_name' => 'ContactController',
                    'form' => $form->createView(),

                ]);
            }
        }
    </pre>
