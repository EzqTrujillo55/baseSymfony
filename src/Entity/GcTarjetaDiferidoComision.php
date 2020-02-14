<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcTarjetaDiferidoComision
 *
 * @ORM\Table(name="gc_tarjeta_diferido_comision")
 * @ORM\Entity
 */
class GcTarjetaDiferidoComision
{
    /**
     * @var int
     *
     * @ORM\Column(name="tdc_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tdcId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tdc_tt_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tdcTtId = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="tdc_plazo", type="float", precision=10, scale=0, nullable=true)
     */
    private $tdcPlazo = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="tdc_comision", type="float", precision=10, scale=0, nullable=true)
     */
    private $tdcComision = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getTdcId(): ?string
    {
        return $this->tdcId;
    }

    public function getTdcTtId(): ?string
    {
        return $this->tdcTtId;
    }

    public function getTdcPlazo(): ?float
    {
        return $this->tdcPlazo;
    }

    public function setTdcPlazo(?float $tdcPlazo): self
    {
        $this->tdcPlazo = $tdcPlazo;

        return $this;
    }

    public function getTdcComision(): ?float
    {
        return $this->tdcComision;
    }

    public function setTdcComision(?float $tdcComision): self
    {
        $this->tdcComision = $tdcComision;

        return $this;
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


}
