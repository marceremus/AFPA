<?php
namespace App\modeles;

class Chat extends Animal implements Song
{
    public function __construct()
    {
    }

    public function envoyerSong()
    {
        return 'miahou miahou ';
    }

    public function manger()
    {
        return 'Je manges des souries';
    }
}