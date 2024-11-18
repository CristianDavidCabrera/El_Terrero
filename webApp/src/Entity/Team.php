<?php

namespace App\Entity;

use App\Repository\TeamRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TeamRepository::class)]
class Team
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $division = null;

    #[ORM\ManyToOne(inversedBy: 'id_teams')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Club $club = null;

    #[ORM\Column(nullable: true)]
    private ?int $id_fighter = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDivision(): ?string
    {
        return $this->division;
    }

    public function setDivision(string $division): static
    {
        $this->division = $division;

        return $this;
    }

    public function getIdClub(): ?Club
    {
        return $this->club;
    }

    public function setIdClub(?Club $club): static
    {
        $this->club = $club;

        return $this;
    }

    public function getIdFighter(): ?int
    {
        return $this->id_fighter;
    }

    public function setIdFighter(?int $id_fighter): static
    {
        $this->id_fighter = $id_fighter;

        return $this;
    }

}
