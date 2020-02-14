<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcItemDetalle
 *
 * @ORM\Table(name="gc_item_detalle", uniqueConstraints={@ORM\UniqueConstraint(name="indiceitemdetalle", columns={"em_id", "it_id", "it_id_detalle"})})
 * @ORM\Entity
 */
class GcItemDetalle
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idId;

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
     * @ORM\Column(name="it_id_detalle", type="bigint", nullable=false)
     */
    private $itIdDetalle = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_cantidad", type="bigint", nullable=false)
     */
    private $idCantidad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="id_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $idEstado = '\'C\'';

    public function getIdId(): ?string
    {
        return $this->idId;
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

    public function getItIdDetalle(): ?string
    {
        return $this->itIdDetalle;
    }

    public function setItIdDetalle(string $itIdDetalle): self
    {
        $this->itIdDetalle = $itIdDetalle;

        return $this;
    }

    public function getIdCantidad(): ?string
    {
        return $this->idCantidad;
    }

    public function setIdCantidad(string $idCantidad): self
    {
        $this->idCantidad = $idCantidad;

        return $this;
    }

    public function getIdEstado(): ?string
    {
        return $this->idEstado;
    }

    public function setIdEstado(string $idEstado): self
    {
        $this->idEstado = $idEstado;

        return $this;
    }


}
