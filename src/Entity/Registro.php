<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Registro
 *
 * @ORM\Table(name="registro")
 * @ORM\Entity
 */
class Registro
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="notas", type="integer", nullable=false)
     */
    private $notas;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNotas(): ?int
    {
        return $this->notas;
    }

    public function setNotas(int $notas): self
    {
        $this->notas = $notas;

        return $this;
    }


}
