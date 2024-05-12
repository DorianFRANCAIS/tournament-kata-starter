<?php
namespace App\Services;

use App\Entity\Participant;
use App\Repository\ParticipantRepository;

class ParticipantService {

    private ParticipantRepository $participantRepository;

    public function __construct(ParticipantRepository $participantRepository) {
        $this->participantRepository = $participantRepository;
    }

    public function addParticipantToTournament(Array $parametersAsArray, int $tournamentId) : ?Participant {
        $participant = new Participant();
        $participant->setName($parametersAsArray["name"]);
        $participant->setElo($parametersAsArray["elo"]);
        $participant->setTournamentId($tournamentId);
        $this->participantRepository->addParticipantToTournament($participant);
        return $participant;
    }

    public function saveTournament(Tournament $tournament) {
        $this->tournamentRepository->saveTournament($tournament);
    }
}