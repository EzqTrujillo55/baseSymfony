<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcProvincia
 *
 * @ORM\Table(name="gc_provincia", uniqueConstraints={@ORM\UniqueConstraint(name="indice_provincia", columns={"em_pa_id", "prv_codigo"})})
 * @ORM\Entity
 */
class GcProvincia
{
    /**
     * @var int
     *
     * @ORM\Column(name="prv_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prvId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_pa_id", type="bigint", nullable=false)
     */
    private $emPaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="prv_codigo", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $prvCodigo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="prv_nombre", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $prvNombre = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="prv_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $prvEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getPrvId(): ?string
    {
        return $this->prvId;
    }

    public function getEmPaId(): ?string
    {
        return $this->emPaId;
    }

    public function setEmPaId(string $emPaId): self
    {
        $this->emPaId = $emPaId;

        return $this;
    }

    public function getPrvCodigo(): ?string
    {
        return $this->prvCodigo;
    }

    public function setPrvCodigo(string $prvCodigo): self
    {
        $this->prvCodigo = $prvCodigo;

        return $this;
    }

    public function getPrvNombre(): ?string
    {
        return $this->prvNombre;
    }

    public function setPrvNombre(string $prvNombre): self
    {
        $this->prvNombre = $prvNombre;

        return $this;
    }

    public function getPrvEstado(): ?string
    {
        return $this->prvEstado;
    }

    public function setPrvEstado(string $prvEstado): self
    {
        $this->prvEstado = $prvEstado;

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
