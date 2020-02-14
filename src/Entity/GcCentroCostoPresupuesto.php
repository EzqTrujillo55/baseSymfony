<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCentroCostoPresupuesto
 *
 * @ORM\Table(name="gc_centro_costo_presupuesto", indexes={@ORM\Index(name="indice_centrocostopresupuesto", columns={"em_id", "cp_id"})})
 * @ORM\Entity
 */
class GcCentroCostoPresupuesto
{
    /**
     * @var int
     *
     * @ORM\Column(name="cp_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cpId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cp_tipo", type="bigint", nullable=false)
     */
    private $cpTipo = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cp_fecha", type="date", nullable=false, options={"default"="'2010-01-01'"})
     */
    private $cpFecha = '\'2010-01-01\'';

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

    public function getCpId(): ?string
    {
        return $this->cpId;
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

    public function getCpTipo(): ?string
    {
        return $this->cpTipo;
    }

    public function setCpTipo(string $cpTipo): self
    {
        $this->cpTipo = $cpTipo;

        return $this;
    }

    public function getCpFecha(): ?\DateTimeInterface
    {
        return $this->cpFecha;
    }

    public function setCpFecha(\DateTimeInterface $cpFecha): self
    {
        $this->cpFecha = $cpFecha;

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
