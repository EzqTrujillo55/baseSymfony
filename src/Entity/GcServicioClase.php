<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcServicioClase
 *
 * @ORM\Table(name="gc_servicio_clase")
 * @ORM\Entity
 */
class GcServicioClase
{
    /**
     * @var int
     *
     * @ORM\Column(name="sc_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $scId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sc_codigo", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $scCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sc_nombre", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $scNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sc_observacion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $scObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sc_tipo", type="string", length=1, nullable=false, options={"default"="'1'","fixed"=true})
     */
    private $scTipo = '\'1\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sc_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $scEstado = '\'C\'';

    public function getScId(): ?string
    {
        return $this->scId;
    }

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function setEmId(string $emId): self
    {
        $this->emId = $emId;

        return $this;
    }

    public function getScCodigo(): ?string
    {
        return $this->scCodigo;
    }

    public function setScCodigo(string $scCodigo): self
    {
        $this->scCodigo = $scCodigo;

        return $this;
    }

    public function getScNombre(): ?string
    {
        return $this->scNombre;
    }

    public function setScNombre(string $scNombre): self
    {
        $this->scNombre = $scNombre;

        return $this;
    }

    public function getScObservacion(): ?string
    {
        return $this->scObservacion;
    }

    public function setScObservacion(string $scObservacion): self
    {
        $this->scObservacion = $scObservacion;

        return $this;
    }

    public function getScTipo(): ?string
    {
        return $this->scTipo;
    }

    public function setScTipo(string $scTipo): self
    {
        $this->scTipo = $scTipo;

        return $this;
    }

    public function getScEstado(): ?string
    {
        return $this->scEstado;
    }

    public function setScEstado(string $scEstado): self
    {
        $this->scEstado = $scEstado;

        return $this;
    }


}
