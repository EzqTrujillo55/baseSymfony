<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcPersonaDireccionTipo
 *
 * @ORM\Table(name="gc_persona_direccion_tipo")
 * @ORM\Entity
 */
class GcPersonaDireccionTipo
{
    /**
     * @var int
     *
     * @ORM\Column(name="pe_dr_tp_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $peDrTpId;

    /**
     * @var string
     *
     * @ORM\Column(name="pe_dr_tp_nombre", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $peDrTpNombre = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_dr_tp_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $peDrTpEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getPeDrTpId(): ?string
    {
        return $this->peDrTpId;
    }

    public function getPeDrTpNombre(): ?string
    {
        return $this->peDrTpNombre;
    }

    public function setPeDrTpNombre(string $peDrTpNombre): self
    {
        $this->peDrTpNombre = $peDrTpNombre;

        return $this;
    }

    public function getPeDrTpEstado(): ?string
    {
        return $this->peDrTpEstado;
    }

    public function setPeDrTpEstado(string $peDrTpEstado): self
    {
        $this->peDrTpEstado = $peDrTpEstado;

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
