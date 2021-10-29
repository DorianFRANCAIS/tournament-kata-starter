<?php

namespace App\Model;

class Tournament
{
    public string $id;
    public string $name;
    public $participants = [];

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function getParticipants() {
        return $this->participants;
    }

    public function addParticipant($participant) {
        array_push($this->participants, $participant);
    }
}