<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCentroCostoEsquemaDetalle
 *
 * @ORM\Table(name="gc_centro_costo_esquema_detalle", uniqueConstraints={@ORM\UniqueConstraint(name="indice_centrocostoesquemadetalle", columns={"em_id", "ce_id", "cc_id"})})
 * @ORM\Entity
 */
class GcCentroCostoEsquemaDetalle
{
    /**
     * @var int
     *
     * @ORM\Column(name="ce_de_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ceDeId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ce_id", type="bigint", nullable=false)
     */
    private $ceId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cc_id", type="bigint", nullable=false)
     */
    private $ccId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ce_de_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $ceDePorcentaje = '0';

    public function getCeDeId(): ?string
    {
        return $this->ceDeId;
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

    public function getCeId(): ?string
    {
        return $this->ceId;
    }

    public function setCeId(string $ceId): self
    {
        $this->ceId = $ceId;

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

    public function getCeDePorcentaje(): ?float
    {
        return $this->ceDePorcentaje;
    }

    public function setCeDePorcentaje(float $ceDePorcentaje): self
    {
        $this->ceDePorcentaje = $ceDePorcentaje;

        return $this;
    }


}
