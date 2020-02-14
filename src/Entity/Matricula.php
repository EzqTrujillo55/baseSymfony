<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matricula
 *
 * @ORM\Table(name="matricula", indexes={@ORM\Index(name="IDX_15DF1885B54DBBCB", columns={"materia_id"}), @ORM\Index(name="IDX_15DF188559590C39", columns={"estudiante_id"})})
 * @ORM\Entity
 */
class Matricula
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
     * @var string
     *
     * @ORM\Column(name="horario", type="string", length=255, nullable=false)
     */
    private $horario;

    /**
     * @var \Estudiantes
     *
     * @ORM\ManyToOne(targetEntity="Estudiantes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estudiante_id", referencedColumnName="id")
     * })
     */
    private $estudiante;

    /**
     * @var \Materia
     *
     * @ORM\ManyToOne(targetEntity="Materia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="materia_id", referencedColumnName="id")
     * })
     */
    private $materia;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHorario(): ?string
    {
        return $this->horario;
    }

    public function setHorario(string $horario): self
    {
        $this->horario = $horario;

        return $this;
    }

    public function getEstudiante(): ?Estudiantes
    {
        return $this->estudiante;
    }

    public function setEstudiante(?Estudiantes $estudiante): self
    {
        $this->estudiante = $estudiante;

        return $this;
    }

    public function getMateria(): ?Materia
    {
        return $this->materia;
    }

    public function setMateria(?Materia $materia): self
    {
        $this->materia = $materia;

        return $this;
    }


}
