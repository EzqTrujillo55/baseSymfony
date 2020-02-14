<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcPersonaSexo
 *
 * @ORM\Table(name="gc_persona_sexo")
 * @ORM\Entity
 */
class GcPersonaSexo
{
    /**
     * @var bool
     *
     * @ORM\Column(name="sx_id", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sxId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sx_codigo", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $sxCodigo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sx_nombre", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $sxNombre = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sx_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $sxEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getSxId(): ?bool
    {
        return $this->sxId;
    }

    public function getSxCodigo(): ?string
    {
        return $this->sxCodigo;
    }

    public function setSxCodigo(string $sxCodigo): self
    {
        $this->sxCodigo = $sxCodigo;

        return $this;
    }

    public function getSxNombre(): ?string
    {
        return $this->sxNombre;
    }

    public function setSxNombre(string $sxNombre): self
    {
        $this->sxNombre = $sxNombre;

        return $this;
    }

    public function getSxEstado(): ?string
    {
        return $this->sxEstado;
    }

    public function setSxEstado(string $sxEstado): self
    {
        $this->sxEstado = $sxEstado;

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
