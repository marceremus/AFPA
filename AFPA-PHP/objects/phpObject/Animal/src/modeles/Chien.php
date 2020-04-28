<?php
namespace App\modeles;

class Chien extends Animal implements Song
{
    public function __construct()
    {
    }

    public function envoyerSong()
    {
        return 'Hhoof whoof';
    }

    public function manger()
    {
        return 'Je manges des os';
    }


}