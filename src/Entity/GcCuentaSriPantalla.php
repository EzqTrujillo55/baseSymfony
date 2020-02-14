<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCuentaSriPantalla
 *
 * @ORM\Table(name="gc_cuenta_sri_pantalla", uniqueConstraints={@ORM\UniqueConstraint(name="IndiceCuentaSRIPantalla", columns={"pm_id"})})
 * @ORM\Entity
 */
class GcCuentaSriPantalla
{
    /**
     * @var int
     *
     * @ORM\Column(name="cu_srip_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cuSripId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_sri_id", type="bigint", nullable=false)
     */
    private $cuSriId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_sri_periodo", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $cuSriPeriodo = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pm_id", type="bigint", nullable=false)
     */
    private $pmId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tc_id", type="bigint", nullable=false)
     */
    private $tcId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_srip_observacion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $cuSripObservacion = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getCuSripId(): ?string
    {
        return $this->cuSripId;
    }

    public function getCuSriId(): ?string
    {
        return $this->cuSriId;
    }

    public function setCuSriId(string $cuSriId): self
    {
        $this->cuSriId = $cuSriId;

        return $this;
    }

    public function getCuSriPeriodo(): ?string
    {
        return $this->cuSriPeriodo;
    }

    public function setCuSriPeriodo(string $cuSriPeriodo): self
    {
        $this->cuSriPeriodo = $cuSriPeriodo;

        return $this;
    }

    public function getPmId(): ?string
    {
        return $this->pmId;
    }

    public function setPmId(string $pmId): self
    {
        $this->pmId = $pmId;

        return $this;
    }

    public function getTcId(): ?string
    {
        return $this->tcId;
    }

    public function setTcId(string $tcId): self
    {
        $this->tcId = $tcId;

        return $this;
    }

    public function getCuSripObservacion(): ?string
    {
        return $this->cuSripObservacion;
    }

    public function setCuSripObservacion(string $cuSripObservacion): self
    {
        $this->cuSripObservacion = $cuSripObservacion;

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
