<?php

namespace App\Tests\Acceptance;
use Symfony\Component\HttpFoundation\Response;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;

class TournamentTest extends ApiTestCase
{
    public function testTournamentCreation(): void
    {
        $client = static::createClient();
        $client->request('POST', '/api/tournaments', [
            'headers' => [
                'Content-Type: application/json',
                'Accept: application/json',
            ],
            'body' => json_encode(['name' => 'Tournament'])
        ]);

        $this->assertResponseIsSuccessful();
        $response = $client->getResponse()->toArray();

        $this->assertIsString($response["id"]);
    }

    public function testTournamentCreationShouldEnableToRetrieveAfter(): void
    {
        $client = static::createClient();
        $client->request('POST', '/api/tournaments', [
            'headers' => [
                'Content-Type: application/json',
                'Accept: application/json',
            ],
            'body' => json_encode(['name' => 'Tournament'])
        ]);

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
        $client = static::createClient();
        $client->request('POST', '/api/tournaments', [
            'headers' => [
                'Content-Type: application/json',
                'Accept: application/json',
            ],
            'body' => json_encode([])
        ]);

        $this->assertResponseStatusCodeSame(Response::HTTP_BAD_REQUEST);
        $this->assertJsonContains(['errorMessage' => 'Parametre name non renseigne']);
    }

}
