<?php

namespace App\Controller;

use App\Entity\Tournament;
use App\Entity\Participant;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\TournamentService;
use App\Services\ParticipantService;
use Symfony\Component\Uid\Uuid;
use Symfony\Component\HttpFoundation\JsonResponse;

class TournamentController extends AbstractController
{
    private TournamentService $tournamentService;
    private ParticipantService $participantService;

    public function __construct(TournamentService $tournamentService, ParticipantService $participantService)
    {
        $this->tournamentService = $tournamentService;
        $this->participantService = $participantService;
    }

    /**
     * @Route("/api/tournaments", name="create_tournament", methods={"POST"})
     */
    public function addTournament(Request $request): Response
    {
        $parametersAsArray = json_decode($request->getContent(), true);

        if(!isset($parametersAsArray["name"]) || $parametersAsArray["name"] == ""){
            return new JsonResponse(['errorMessage' => 'Parametre name non renseigne'], 400);
        }else{
            $tournament = new Tournament();
            $tournament->setName($parametersAsArray["name"]);
            $this->tournamentService->saveTournament($tournament);
            return $this->json([
                'id' => $tournament->getId(),
            ]);
        }
    }

    /**
     * @Route("/api/tournaments/{id}", name="get_tournament", methods={"GET"})
     */
    public function getTournament(string $id): Response
    {
        $tournament = $this->tournamentService->getTournament($id);
        if (null == $tournament) {
            return new JsonResponse(['errorMessage' => 'Le tournoi n\'existe pas'], 404);
        }
        return $this->json($tournament);
    }

     /**
     * @Route("/api/tournaments/{tournamentId}/participants", name="add_participant_to_tournament", methods={"POST"})
     */
    public function addParticipantToTournament(Request $request, string $tournamentId): Response
    {
        $parametersAsArray = json_decode($request->getContent(), true);


        $tournament = $this->tournamentService->getTournament($tournamentId);
        if (null == $tournament) {
            return new JsonResponse(['errorMessage' => 'Le tournoi n\'existe pas'], 404);
        }else{
            if(!isset($parametersAsArray["name"]) || $parametersAsArray["name"] == "" || !isset($parametersAsArray["elo"]) || $parametersAsArray["elo"] == ""){
                return new JsonResponse(['errorMessage' => 'le nom ou l\'elo sont incorrects'], 400);
            }else{
                if($tournament)
                $participant = $this->participantService->addParticipantToTournament($parametersAsArray, $tournamentId);
               
                return new JsonResponse(['id' => $participant->getId()], 201);
            }
        }       
    }
}
