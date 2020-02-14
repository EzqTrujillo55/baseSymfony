<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcPersonaOrigenIngreso
 *
 * @ORM\Table(name="gc_persona_origen_ingreso")
 * @ORM\Entity
 */
class GcPersonaOrigenIngreso
{
    /**
     * @var string
     *
     * @ORM\Column(name="oi_codigo", type="string", length=5, nullable=false, options={"default"="''"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $oiCodigo = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="oi_id", type="boolean", nullable=false)
     */
    private $oiId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="oi_nombre", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $oiNombre = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="oi_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $oiEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getOiCodigo(): ?string
    {
        return $this->oiCodigo;
    }

    public function getOiId(): ?bool
    {
        return $this->oiId;
    }

    public function setOiId(bool $oiId): self
    {
        $this->oiId = $oiId;

        return $this;
    }

    public function getOiNombre(): ?string
    {
        return $this->oiNombre;
    }

    public function setOiNombre(string $oiNombre): self
    {
        $this->oiNombre = $oiNombre;

        return $this;
    }

    public function getOiEstado(): ?string
    {
        return $this->oiEstado;
    }

    public function setOiEstado(string $oiEstado): self
    {
        $this->oiEstado = $oiEstado;

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
