.env

<pre>
###> symfony/swiftmailer-bundle ###
# For Gmail as a transport, use: "gmail://username:password@localhost"
# For a generic SMTP server, use: "smtp://localhost:25?encryption=&auth_mode="
# Delivery is disabled by default via "null://localhost"
# MAILER_URL=null://localhost
MAILER_URL=gmail://marcuxlab@gmail.com:********@localhost
###< symfony/swiftmailer-bundle ###
</pre>

      
# A ajouter dans la partie : " if($questionnaire->isSubmitted() && $questionnaire->isValid()){"
<pre>
$sujetMessage = "Questionnaire ";
$nom = $newQuestionnaire->getNom();
$prenom = $newQuestionnaire->getPrenom();
$adresse = $newQuestionnaire->getNumRue().' '.$newQuestionnaire->getNomRue().' '.$newQuestionnaire->getCp().' '.$newQuestionnaire->getCp().' '.$newQuestionnaire->getVille();
$email = $newQuestionnaire->getEmail();
$phone = $newQuestionnaire->getPhone();

$messageBody = "message";

$message = (new Swift_Message($sujetMessage))
    ->setFrom([$email => $nom." ".$prenom])
    ->setTo(['marceremus@gmail.com', 'marceremus@gmail.com' => 'A name'])
    //->setBody(file_get_contents("../view/Emails/email.html"));
    ->setBody($messageBody);

$message->setContentType("text/html");

// Send the message
return $mailer->send($message);

</pre>
