<?php

namespace App;

require 'vendor/autoload.php';

use App\modeles\RaceChien;
use App\modeles\RaceChat;
use App\modeles\RaceCheval;

$chien = new RaceChien();

$chien->setNomAnimal('Kaya');
$chien->setDateBirthday('2006-07-20');
$chien->setRaceChien('Cocker');

$monChien = "<p>Je m'appele ".$chien->getNomAnimal()."</p>
             <p>Je suis né le ".$chien->getDateBirthday()." de race ".$chien->getRaceChien()."</p>
             <p>".$chien->manger()."</p>
             <p>Je fais ".$chien->envoyerSong()."</p>";

echo $monChien;

echo '<br>--------------------------------------------<br>';

$chat = new RaceChat();

$chat->setNomAnimal('Tutu');
$chat->setDateBirthday('2012-10-03');
$chat->setRaceChat('Egiptien');

$monChat = "<p>Je m'appele ".$chat->getNomAnimal()."</p>
            <p>Je suis né le ".$chat->getDateBirthday()." de race ".$chat->getRaceChat()."</p>
            <p>".$chat->manger()."</p>
            <p>Je fais ".$chat->envoyerSong()."</p>";

echo $monChat;

echo '<br>--------------------------------------------<br>';

$monCheval = new RaceCheval();

$monCheval->setNomAnimal('Hupi');
$monCheval->setDateBirthday('2009-10-03');
$monCheval->setRaceCheval('Arabic');


$monCheval = "<p>Je m'appele ".$monCheval->getNomAnimal()."</p>
              <p>Je suis né le ".$monCheval->getDateBirthday()." de race ".$monCheval->getRaceCheval()."</p>
              <p>".$monCheval->manger()."</p>
              <p>Je fais ".$monCheval->envoyerSong()."</p>";

echo $monCheval;

