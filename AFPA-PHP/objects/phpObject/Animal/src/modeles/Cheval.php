<?php
namespace App\modeles;

class Cheval extends Animal implements Song
{
    public function __construct()
    {
    }

    public function envoyerSong()
    {
        return 'io io io ';
    }

    public function manger()
    {
        return 'Je manges du blé';
    }


}