<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcBodegaLote
 *
 * @ORM\Table(name="gc_bodega_lote", uniqueConstraints={@ORM\UniqueConstraint(name="indiceBodegaLote", columns={"bo_id", "lt_id"})})
 * @ORM\Entity
 */
class GcBodegaLote
{
    /**
     * @var int
     *
     * @ORM\Column(name="bd_lt_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bdLtId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bo_id", type="bigint", nullable=false)
     */
    private $boId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="lt_id", type="bigint", nullable=false)
     */
    private $ltId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="bd_lt_cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $bdLtCantidad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="bd_lt_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $bdLtEstado = '\'C\'';

    public function getBdLtId(): ?string
    {
        return $this->bdLtId;
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

    public function getBoId(): ?string
    {
        return $this->boId;
    }

    public function setBoId(string $boId): self
    {
        $this->boId = $boId;

        return $this;
    }

    public function getLtId(): ?string
    {
        return $this->ltId;
    }

    public function setLtId(string $ltId): self
    {
        $this->ltId = $ltId;

        return $this;
    }

    public function getBdLtCantidad(): ?float
    {
        return $this->bdLtCantidad;
    }

    public function setBdLtCantidad(float $bdLtCantidad): self
    {
        $this->bdLtCantidad = $bdLtCantidad;

        return $this;
    }

    public function getBdLtEstado(): ?string
    {
        return $this->bdLtEstado;
    }

    public function setBdLtEstado(string $bdLtEstado): self
    {
        $this->bdLtEstado = $bdLtEstado;

        return $this;
    }


}
