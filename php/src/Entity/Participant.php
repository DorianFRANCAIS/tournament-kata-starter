<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ParticipantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ParticipantRepository::class)
 */
#[ApiResource]
class Participant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $elo;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tournamentId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getElo(): ?int
    {
        return $this->elo;
    }

    public function setElo(int $elo): self
    {
        $this->elo = $elo;

        return $this;
    }

    public function getTournamentId(): ?int
    {
        return $this->tournamentId;
    }

    public function setTournamentId(?int $tournamentId): self
    {
        $this->tournamentId = $tournamentId;

        return $this;
    }
}
