<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcPersonaEstadoCivil
 *
 * @ORM\Table(name="gc_persona_estado_civil")
 * @ORM\Entity
 */
class GcPersonaEstadoCivil
{
    /**
     * @var bool
     *
     * @ORM\Column(name="ec_id", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ecId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ec_codigo", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $ecCodigo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ec_nombre", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $ecNombre = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ec_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $ecEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getEcId(): ?bool
    {
        return $this->ecId;
    }

    public function getEcCodigo(): ?string
    {
        return $this->ecCodigo;
    }

    public function setEcCodigo(string $ecCodigo): self
    {
        $this->ecCodigo = $ecCodigo;

        return $this;
    }

    public function getEcNombre(): ?string
    {
        return $this->ecNombre;
    }

    public function setEcNombre(string $ecNombre): self
    {
        $this->ecNombre = $ecNombre;

        return $this;
    }

    public function getEcEstado(): ?string
    {
        return $this->ecEstado;
    }

    public function setEcEstado(string $ecEstado): self
    {
        $this->ecEstado = $ecEstado;

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
