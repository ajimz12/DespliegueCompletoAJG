<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "secretosAJG")]
class TablaAJG
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;
    #[ORM\Column(type: "string", length: 255)]
    private string $fraseAJG;
    public function getId(): int
    {
        return $this->id;
    }
    public function getFraseAJG(): string
    {
        return $this->fraseAJG;
    }
    public function setFraseAJG(string $fraseAJG): self
    {
        $this->fraseAJG = $fraseAJG;
        return $this;
    }
}
