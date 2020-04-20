<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';


if(isset($_POST['nom'])){
    $nom = htmlspecialchars(trim($_POST['nom']));
}else{
    $nom = "";
}

if(isset($_POST['prenom'])){
    $prenom = htmlspecialchars(trim($_POST['prenom']));
}else{
    $prenom = "";
}

if(isset($_POST['email'])){
    $email = htmlspecialchars(trim($_POST['email']));
}else{
    $email = "";
}

if(isset($_POST['sujet'])){
    $sujet = htmlspecialchars(trim($_POST['sujet']));
}else{
    $sujet = "";
}

if(isset($_POST['message'])){
    $messageform = htmlspecialchars(trim($_POST['message']));
}else{
    $messageform = "";
}


// Php mailer
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '**********';                     // SMTP username
    $mail->Password   = '**********';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($email, 'Formulaire de contact');
    $mail->addAddress('votreadresse@gmail.com', $nom.' '.$prenom);     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $sujet;
    $mail->Body    = $messageform;

    $mail->send();

    echo 'Le message a été bien envoyé';
} catch (Exception $e) {
    echo "Le message n'a pas pu être envoyé. Le message d'erreur : {$mail->ErrorInfo}";
}


?>
<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Contactez nous</title>
</head>
<body>
<div class="container">
    <div class="mt-5 mb-5">
        <h1>Contactez nous</h1>
    </div>
    <form method="post">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom">
        </div>

        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom">
        </div>

        <div class="form-group">
            <label for="email">Votre email</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>

        <div class="form-group">
            <label for="sujet">Sujet</label>
            <input type="text" name="sujet" class="form-control" id="sujet" placeholder="Sujet">
        </div>

        <div class="form-group">
            <label for="message">Votre message</label>
            <textarea class="form-control" name="message" id="message" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-outline-dark">Envoyer</button>
    </form>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
