<?php
namespace App\Services;

use App\Entity\Tournament;
use App\Repository\TournamentRepository;
use Doctrine\ORM\EntityManagerInterface;

class TournamentService {

    private TournamentRepository $tournamentRepository;

    public function __construct(TournamentRepository $tournamentRepository) {
        $this->tournamentRepository = $tournamentRepository;
    }

    public function getTournament(string $id) : ?Tournament {
        return $this->tournamentRepository->getTournament($id);
    }

    public function saveTournament(Tournament $tournament) {
        $this->tournamentRepository->saveTournament($tournament);
    }
}