<?php
namespace App\modeles;

class RaceChat extends Chat
{

    private $raceChat;

    /**
     * Race constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getRaceChat()
    {
        return $this->raceChat;
    }

    /**
     * @param mixed $raceChat
     */
    public function setRaceChat($raceChat): void
    {
        $this->raceChat = $raceChat;
    }



}