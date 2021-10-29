<?php

namespace App\Tests\Acceptance;
use Symfony\Component\HttpFoundation\Response;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;

class TournamentTest extends ApiTestCase
{
    public function createTournament($name)
    {
        $client = static::createClient();
        $client->request('POST', '/api/tournaments', [
            'headers' => [
                'Content-Type: application/json',
                'Accept: application/json',
            ],
            'body' => json_encode(['name' => $name])
        ]);

        return $client;
    }

    public function addParticipantToTournament($client, $tournamentId, $name, $elo)
    {
        $client->request('POST', '/api/tournaments/'.$tournamentId.'/participants', [
            'headers' => [
                'Content-Type: application/json',
                'Accept: application/json',
            ],
            'body' => json_encode(['name'=>$name,'elo'=>$elo])
        ]);
        return $client;
    }

    public function testTournamentCreation(): void
    {
        $client = $this->createTournament("Tournament");

        $this->assertResponseIsSuccessful();
        $response = $client->getResponse()->toArray();

        $this->assertIsString($response["id"]);
    }

    public function testTournamentCreationShouldEnableToRetrieveAfter(): void
    {
        $client = $this->createTournament("Tournament");

        $this->assertResponseIsSuccessful();
        $response = $client->getResponse()->toArray();

        $this->assertIsString($response["id"]);

        $client->request('GET', '/api/tournaments/' . $response["id"]);
        $this->assertResponseIsSuccessful();
        $response = $client->getResponse()->toArray();
        $this->assertEquals("Tournament", $response["name"]);
    }

    public function testShouldReturnEmptyIfTournamentDoesNotExist(): void
    {
        static::createClient()->request('GET', '/api/tournaments/123');

        $this->assertResponseStatusCodeSame(404);
        $this->assertJsonContains(['errorMessage' => 'Le tournoi n\'existe pas']);
    }

    public function testTournamentCreationErrorEmptyName(): void
    {
        $client = $this->createTournament("");

        $this->assertResponseStatusCodeSame(Response::HTTP_BAD_REQUEST);
        $this->assertJsonContains(['errorMessage' => 'Parametre name non renseigne']);
    }

    public function testTournamentAddPartcipant(): void
    {   
        $client = $this->createTournament("Tournament");

        $tournamentId = $client->getResponse()->toArray()["id"];

        $client = $this->addParticipantToTournament($client, $tournamentId,'toto',5);

        $this->assertResponseIsSuccessful();
        $response = $client->getResponse()->toArray();
        $this->assertIsString($response["id"]);
    }

    public function testTournamentAddPartcipantIsEmpty(): void
    {
        $client = $this->createTournament("Tournament");

        $tournamentId = $client->getResponse()->toArray()["id"];

        $client = $this->addParticipantToTournament($client, $tournamentId,'','');

        $this->assertResponseStatusCodeSame(Response::HTTP_BAD_REQUEST);
        $this->assertJsonContains(['errorMessage' => 'le nom ou l\'elo sont incorrects']);
    }

    public function testTournamentDoesntExist(): void
    {      
        $tournamentId = "abc";
        $client = static::createClient();
        $client = $this->addParticipantToTournament($client,$tournamentId, "","");

        $this->assertResponseStatusCodeSame(Response::HTTP_NOT_FOUND);
        $this->assertJsonContains(['errorMessage' => 'Le tournoi n\'existe pas']);
    }

}
