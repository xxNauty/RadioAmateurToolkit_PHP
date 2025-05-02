<?php

namespace App\Entity;

use App\Repository\NATOPhoneticLetterRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NATOPhoneticLetterRepository::class)]
#[ORM\Table(name: 'nato_phonetic_letter')]
class NATOPhoneticLetter
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 1)]
    private ?string $letter = null;

    #[ORM\Column(length: 10)]
    private ?string $codeWord = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getLetter(): ?string
    {
        return $this->letter;
    }

    public function setLetter(string $letter): static
    {
        $this->letter = $letter;

        return $this;
    }

    public function getCodeWord(): ?string
    {
        return $this->codeWord;
    }

    public function setCodeWord(string $codeWord): static
    {
        $this->codeWord = $codeWord;

        return $this;
    }
}
