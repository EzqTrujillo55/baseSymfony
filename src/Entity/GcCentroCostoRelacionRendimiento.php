<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCentroCostoRelacionRendimiento
 *
 * @ORM\Table(name="gc_centro_costo_relacion_rendimiento", indexes={@ORM\Index(name="ind_relacionrendimiento_ccit", columns={"em_id", "cc_id", "it_id"}), @ORM\Index(name="indice_gc_centrocostorelacionrendimiento", columns={"em_id", "cr_id"})})
 * @ORM\Entity
 */
class GcCentroCostoRelacionRendimiento
{
    /**
     * @var int
     *
     * @ORM\Column(name="cr_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $crId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cc_id", type="bigint", nullable=false)
     */
    private $ccId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="it_id", type="bigint", nullable=false)
     */
    private $itId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_id", type="bigint", nullable=false)
     */
    private $peId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cr_valor_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $crValorPorcentaje = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cr_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $crEstado = '\'C\'';

    public function getCrId(): ?string
    {
        return $this->crId;
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

    public function getCcId(): ?string
    {
        return $this->ccId;
    }

    public function setCcId(string $ccId): self
    {
        $this->ccId = $ccId;

        return $this;
    }

    public function getItId(): ?string
    {
        return $this->itId;
    }

    public function setItId(string $itId): self
    {
        $this->itId = $itId;

        return $this;
    }

    public function getPeId(): ?string
    {
        return $this->peId;
    }

    public function setPeId(string $peId): self
    {
        $this->peId = $peId;

        return $this;
    }

    public function getCrValorPorcentaje(): ?float
    {
        return $this->crValorPorcentaje;
    }

    public function setCrValorPorcentaje(float $crValorPorcentaje): self
    {
        $this->crValorPorcentaje = $crValorPorcentaje;

        return $this;
    }

    public function getCrEstado(): ?string
    {
        return $this->crEstado;
    }

    public function setCrEstado(string $crEstado): self
    {
        $this->crEstado = $crEstado;

        return $this;
    }


}
