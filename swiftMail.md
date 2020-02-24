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

      
# A ajouter dans la partie ContactController : " if($contact->isSubmitted() && $contact->isValid()){"
<pre>

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


php.ini
sendmail_path =/usr/sbin/sendmail -t -i -f  votreEmail


# Autre méthode

<pre>
// Create the Transport

$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587,'tls'))
    ->setUsername('marceremus@gmail.com')
    ->setPassword()
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

$mes = file_get_contents("../view/Emails/email.html");


// Create a message
$message = (new Swift_Message($sujet))
    ->setFrom(['marceremus@gmail.com' => 'marc eremus'])
    ->setTo(['marceremus@gmail.com', 'marceremus@gmail.com' => 'A name'])
    ->setBody(file_get_contents("../view/Emails/email.html"));

$message->setContentType("text/html");

if(isset($_FILES["fileName"])){
    if(!empty($_FILES["fileName"]["name"])){
        $message->attach(Swift_Attachment::fromPath($_FILES["fileName"]["tmp_name"])
                ->setFilename($_FILES["fileName"]["name"]));
    }else{
        $result = $mailer->send($message);
    }
}

// Send the message
$result = $mailer->send($message);
if($result){
    header("location: messageForm.php?emailSend=OK");
}else{
    throw new Exception("Le e-mail n'a pas pu être envoyé. ");
}
</pre>
