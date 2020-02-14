<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCentroCostoPorcentaje
 *
 * @ORM\Table(name="gc_centro_costo_porcentaje", uniqueConstraints={@ORM\UniqueConstraint(name="indice_centrocostoporcentaje", columns={"em_id", "it_id", "cc_id"})})
 * @ORM\Entity
 */
class GcCentroCostoPorcentaje
{
    /**
     * @var int
     *
     * @ORM\Column(name="ccp_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ccpId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="it_id", type="bigint", nullable=false)
     */
    private $itId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cc_id", type="bigint", nullable=false)
     */
    private $ccId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cp_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $cpPorcentaje = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $cpEstado = '\'C\'';

    public function getCcpId(): ?string
    {
        return $this->ccpId;
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

    public function getItId(): ?string
    {
        return $this->itId;
    }

    public function setItId(string $itId): self
    {
        $this->itId = $itId;

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

    public function getCpPorcentaje(): ?float
    {
        return $this->cpPorcentaje;
    }

    public function setCpPorcentaje(float $cpPorcentaje): self
    {
        $this->cpPorcentaje = $cpPorcentaje;

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
