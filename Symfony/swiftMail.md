        $sujetMessage = "Questionnaire ";
        $nom = $newQuestionnaire->getNom();
        $prenom = $newQuestionnaire->getPrenom();
        $adresse = $newQuestionnaire->getNumRue().' '.$newQuestionnaire->getNomRue().' '.$newQuestionnaire->getCp().' '.$newQuestionnaire->getCp().' '.$newQuestionnaire->getVille();
        $email = $newQuestionnaire->getEmail();
        $phone = $newQuestionnaire->getPhone();

        $messageBody = "message";

        $message = (new Swift_Message($sujetMessage))
            ->setFrom([$email => $nom." ".$prenom])
            ->setTo(['votreemail@gmail.com', 'votreemail@gmail.com' => 'A name'])
            //->setBody(file_get_contents("../view/Emails/email.html"));
            ->setBody($messageBody);

        $message->setContentType("text/html");

        // Send the message
        return $mailer->send($message);
