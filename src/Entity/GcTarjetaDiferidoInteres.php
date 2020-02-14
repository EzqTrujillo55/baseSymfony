<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcTarjetaDiferidoInteres
 *
 * @ORM\Table(name="gc_tarjeta_diferido_interes")
 * @ORM\Entity
 */
class GcTarjetaDiferidoInteres
{
    /**
     * @var int
     *
     * @ORM\Column(name="tdi_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tdiId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tdi_tt_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tdiTtId = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="tdi_plazo", type="float", precision=10, scale=0, nullable=true)
     */
    private $tdiPlazo = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="tdi_comision", type="float", precision=10, scale=0, nullable=true)
     */
    private $tdiComision = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="tdi_interes", type="float", precision=10, scale=0, nullable=true)
     */
    private $tdiInteres = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getTdiId(): ?string
    {
        return $this->tdiId;
    }

    public function getTdiTtId(): ?string
    {
        return $this->tdiTtId;
    }

    public function getTdiPlazo(): ?float
    {
        return $this->tdiPlazo;
    }

    public function setTdiPlazo(?float $tdiPlazo): self
    {
        $this->tdiPlazo = $tdiPlazo;

        return $this;
    }

    public function getTdiComision(): ?float
    {
        return $this->tdiComision;
    }

    public function setTdiComision(?float $tdiComision): self
    {
        $this->tdiComision = $tdiComision;

        return $this;
    }

    public function getTdiInteres(): ?float
    {
        return $this->tdiInteres;
    }

    public function setTdiInteres(?float $tdiInteres): self
    {
        $this->tdiInteres = $tdiInteres;

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
