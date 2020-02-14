<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcFacturaTipo
 *
 * @ORM\Table(name="gc_factura_tipo")
 * @ORM\Entity
 */
class GcFacturaTipo
{
    /**
     * @var int
     *
     * @ORM\Column(name="fa_tp_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $faTpId;

    /**
     * @var string
     *
     * @ORM\Column(name="fa_tp_tipo", type="string", length=20, nullable=false, options={"default"="''"})
     */
    private $faTpTipo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_tp_nombre", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $faTpNombre = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_tp_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $faTpEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getFaTpId(): ?string
    {
        return $this->faTpId;
    }

    public function getFaTpTipo(): ?string
    {
        return $this->faTpTipo;
    }

    public function setFaTpTipo(string $faTpTipo): self
    {
        $this->faTpTipo = $faTpTipo;

        return $this;
    }

    public function getFaTpNombre(): ?string
    {
        return $this->faTpNombre;
    }

    public function setFaTpNombre(string $faTpNombre): self
    {
        $this->faTpNombre = $faTpNombre;

        return $this;
    }

    public function getFaTpEstado(): ?string
    {
        return $this->faTpEstado;
    }

    public function setFaTpEstado(string $faTpEstado): self
    {
        $this->faTpEstado = $faTpEstado;

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
