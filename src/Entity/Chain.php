<?php

namespace App\Entity;

use App\Repository\ChainRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChainRepository::class)]
class Chain
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $occurence = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOccurence(): ?string
    {
        return $this->occurence;
    }

    public function setOccurence(?string $occurence): self
    {
        $this->occurence = $occurence;

        return $this;
    }
}
