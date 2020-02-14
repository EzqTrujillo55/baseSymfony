<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcComisionPorcentaje
 *
 * @ORM\Table(name="gc_comision_porcentaje")
 * @ORM\Entity
 */
class GcComisionPorcentaje
{
    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cp_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cpId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_tipo", type="string", length=20, nullable=false, options={"default"="'*'"})
     */
    private $cpTipo = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cp_id_relacionado", type="bigint", nullable=false)
     */
    private $cpIdRelacionado = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cp_inicio", type="integer", nullable=false)
     */
    private $cpInicio = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cp_fin", type="integer", nullable=false)
     */
    private $cpFin = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cp_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $cpPorcentaje = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_observacion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $cpObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $cpEstado = '\'C\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getCpId(): ?string
    {
        return $this->cpId;
    }

    public function getCpTipo(): ?string
    {
        return $this->cpTipo;
    }

    public function setCpTipo(string $cpTipo): self
    {
        $this->cpTipo = $cpTipo;

        return $this;
    }

    public function getCpIdRelacionado(): ?string
    {
        return $this->cpIdRelacionado;
    }

    public function setCpIdRelacionado(string $cpIdRelacionado): self
    {
        $this->cpIdRelacionado = $cpIdRelacionado;

        return $this;
    }

    public function getCpInicio(): ?int
    {
        return $this->cpInicio;
    }

    public function setCpInicio(int $cpInicio): self
    {
        $this->cpInicio = $cpInicio;

        return $this;
    }

    public function getCpFin(): ?int
    {
        return $this->cpFin;
    }

    public function setCpFin(int $cpFin): self
    {
        $this->cpFin = $cpFin;

        return $this;
    }

    public function getCpPorcentaje(): ?float
    {
        return $this->cpPorcentaje;
    }

    public function setCpPorcentaje(float $cpPorcentaje): self
    {
        $this->cpPorcentaje = $cpPorcentaje;

        return $this;
    }

    public function getCpObservacion(): ?string
    {
        return $this->cpObservacion;
    }

    public function setCpObservacion(string $cpObservacion): self
    {
        $this->cpObservacion = $cpObservacion;

        return $this;
    }

    public function getCpEstado(): ?string
    {
        return $this->cpEstado;
    }

    public function setCpEstado(string $cpEstado): self
    {
        $this->cpEstado = $cpEstado;

        return $this;
    }


}
