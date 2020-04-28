<?php

namespace App;

require 'vendor/autoload.php';

use App\modules\Salaire;

$pers1 = new Salaire();

$pers1->setNomPersonne("Dupont");
$pers1->setPrenomPersonne('Pierre');
$pers1->setDateNaissancePersonne('1990-04-13');
$pers1->setPhonePersonne('06 79 87 66 52');
$pers1->setEmailPersonne('pierre@dupont.fr');
$pers1->setNomMetier('Formateur');
$pers1->setNomSalaire('Salaire Brute');
$pers1->setMontantSalaire(1780);
$pers1->setDatePaiement('2020-03-31');

$affichePersonne1 = "<p>Le nom du salarié : ".$pers1->getNomPersonne()."</p>";
$affichePersonne1 .= "<p>Le prénom du salarié : ".$pers1->getPrenomPersonne()."</p>";
$affichePersonne1 .= "<p>Sa date de naissance : ".$pers1->getDateNaissancePersonne()."</p>";
$affichePersonne1 .= "<p>Numéro de tél. : ".$pers1->getPhonePersonne()."</p>";
$affichePersonne1 .= "<p>E-mail : ".$pers1->getEmailPersonne()."</p>";
$affichePersonne1 .= "<p>Métier : ".$pers1->getNomMetier()."</p>";
$affichePersonne1 .= "<p>Type de salaire : ".$pers1->getNomSalaire()."</p>";
$affichePersonne1 .= "<p>Montant du salaire : ".$pers1->getMontantSalaire()."</p>";
$affichePersonne1 .= "<p>Date du paiement de salaire : ".$pers1->getDatePaiement()."</p>";


echo $affichePersonne1;

echo '<br>------------------------------------------------------<br>';

$pers2 = new Salaire();

$pers2->setNomPersonne("Leclerc");
$pers2->setPrenomPersonne('Alain');
$pers2->setDateNaissancePersonne('2000-11-30');
$pers2->setPhonePersonne('06 34 76 90 22');
$pers2->setEmailPersonne('alain@leclerc.com');
$pers2->setNomMetier('Formateur DWWM');
$pers2->setNomSalaire('Salaire Brute');
$pers2->setMontantSalaire(1810);
$pers2->setDatePaiement('2020-03-31');

$affichePersonne2 = "<p>Le nom du salarié : ".$pers2->getNomPersonne()."</p>";
$affichePersonne2 .= "<p>Le prénom du salarié : ".$pers2->getPrenomPersonne()."</p>";
$affichePersonne2 .= "<p>Sa date de naissance : ".$pers2->getDateNaissancePersonne()."</p>";
$affichePersonne2 .= "<p>Numéro de tél. : ".$pers2->getPhonePersonne()."</p>";
$affichePersonne2 .= "<p>E-mail : ".$pers2->getEmailPersonne()."</p>";
$affichePersonne2 .= "<p>Métier : ".$pers2->getNomMetier()."</p>";
$affichePersonne2 .= "<p>Type de salaire : ".$pers2->getNomSalaire()."</p>";
$affichePersonne2 .= "<p>Montant du salaire : ".$pers2->getMontantSalaire()."</p>";
$affichePersonne2 .= "<p>Date du paiement de salaire : ".$pers2->getDatePaiement()."</p>";


echo $affichePersonne2;