<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCuentaNivel
 *
 * @ORM\Table(name="gc_cuenta_nivel")
 * @ORM\Entity
 */
class GcCuentaNivel
{
    /**
     * @var int
     *
     * @ORM\Column(name="cu_nv_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cuNvId;

    /**
     * @var bool
     *
     * @ORM\Column(name="cu_nv_nivel", type="boolean", nullable=false)
     */
    private $cuNvNivel = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="cu_nv_longitud_individual", type="boolean", nullable=false)
     */
    private $cuNvLongitudIndividual = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="cu_nv_longitud_total", type="boolean", nullable=false)
     */
    private $cuNvLongitudTotal = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getCuNvId(): ?string
    {
        return $this->cuNvId;
    }

    public function getCuNvNivel(): ?bool
    {
        return $this->cuNvNivel;
    }

    public function setCuNvNivel(bool $cuNvNivel): self
    {
        $this->cuNvNivel = $cuNvNivel;

        return $this;
    }

    public function getCuNvLongitudIndividual(): ?bool
    {
        return $this->cuNvLongitudIndividual;
    }

    public function setCuNvLongitudIndividual(bool $cuNvLongitudIndividual): self
    {
        $this->cuNvLongitudIndividual = $cuNvLongitudIndividual;

        return $this;
    }

    public function getCuNvLongitudTotal(): ?bool
    {
        return $this->cuNvLongitudTotal;
    }

    public function setCuNvLongitudTotal(bool $cuNvLongitudTotal): self
    {
        $this->cuNvLongitudTotal = $cuNvLongitudTotal;

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
