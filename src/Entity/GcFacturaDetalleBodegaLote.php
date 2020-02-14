<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcFacturaDetalleBodegaLote
 *
 * @ORM\Table(name="gc_factura_detalle_bodega_lote", indexes={@ORM\Index(name="indiceFacturaDetalleLotexBodegaLote", columns={"bd_lt_id"}), @ORM\Index(name="indiceFacturaDetalleLotexFactura", columns={"fa_de_id"})})
 * @ORM\Entity
 */
class GcFacturaDetalleBodegaLote
{
    /**
     * @var int
     *
     * @ORM\Column(name="fa_de_bd_lt_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $faDeBdLtId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_de_id", type="bigint", nullable=false)
     */
    private $faDeId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bd_lt_id", type="bigint", nullable=false)
     */
    private $bdLtId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_bd_lt_cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeBdLtCantidad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_de_bd_lt_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $faDeBdLtEstado = '\'C\'';

    public function getFaDeBdLtId(): ?string
    {
        return $this->faDeBdLtId;
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

    public function getFaDeId(): ?string
    {
        return $this->faDeId;
    }

    public function setFaDeId(string $faDeId): self
    {
        $this->faDeId = $faDeId;

        return $this;
    }

    public function getBdLtId(): ?string
    {
        return $this->bdLtId;
    }

    public function setBdLtId(string $bdLtId): self
    {
        $this->bdLtId = $bdLtId;

        return $this;
    }

    public function getFaDeBdLtCantidad(): ?float
    {
        return $this->faDeBdLtCantidad;
    }

    public function setFaDeBdLtCantidad(float $faDeBdLtCantidad): self
    {
        $this->faDeBdLtCantidad = $faDeBdLtCantidad;

        return $this;
    }

    public function getFaDeBdLtEstado(): ?string
    {
        return $this->faDeBdLtEstado;
    }

    public function setFaDeBdLtEstado(string $faDeBdLtEstado): self
    {
        $this->faDeBdLtEstado = $faDeBdLtEstado;

        return $this;
    }


}
