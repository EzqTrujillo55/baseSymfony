<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCentroCostoTransaccion
 *
 * @ORM\Table(name="gc_centro_costo_transaccion", uniqueConstraints={@ORM\UniqueConstraint(name="indice_centrocostotransaccion", columns={"em_id", "fa_id", "fa_de_id", "it_id", "cc_id"})})
 * @ORM\Entity
 */
class GcCentroCostoTransaccion
{
    /**
     * @var int
     *
     * @ORM\Column(name="cct_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cctId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_id", type="bigint", nullable=false)
     */
    private $faId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_de_id", type="bigint", nullable=false)
     */
    private $faDeId = '0';

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
     * @ORM\Column(name="ct_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $ctPorcentaje = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ct_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $ctValor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ct_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $ctEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="ce_id", type="bigint", nullable=false)
     */
    private $ceId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ct_esquema_usado", type="string", length=1, nullable=true, options={"default"="''","fixed"=true})
     */
    private $ctEsquemaUsado = '\'\'';

    public function getCctId(): ?string
    {
        return $this->cctId;
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

    public function getFaId(): ?string
    {
        return $this->faId;
    }

    public function setFaId(string $faId): self
    {
        $this->faId = $faId;

        return $this;
    }

    public function getFaDeId(): ?string
    {
        return $this->faDeId;
    }

    public function setFaDeId(string $faDeId): self
    {
        $this->faDeId = $faDeId;

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

    public function getCtPorcentaje(): ?float
    {
        return $this->ctPorcentaje;
    }

    public function setCtPorcentaje(float $ctPorcentaje): self
    {
        $this->ctPorcentaje = $ctPorcentaje;

        return $this;
    }

    public function getCtValor(): ?float
    {
        return $this->ctValor;
    }

    public function setCtValor(float $ctValor): self
    {
        $this->ctValor = $ctValor;

        return $this;
    }

    public function getCtEstado(): ?string
    {
        return $this->ctEstado;
    }

    public function setCtEstado(string $ctEstado): self
    {
        $this->ctEstado = $ctEstado;

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

    public function getCtEsquemaUsado(): ?string
    {
        return $this->ctEsquemaUsado;
    }

    public function setCtEsquemaUsado(?string $ctEsquemaUsado): self
    {
        $this->ctEsquemaUsado = $ctEsquemaUsado;

        return $this;
    }


}
