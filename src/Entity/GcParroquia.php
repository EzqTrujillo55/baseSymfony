<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcParroquia
 *
 * @ORM\Table(name="gc_parroquia", uniqueConstraints={@ORM\UniqueConstraint(name="indice_parroquia", columns={"em_pa_id", "prv_codigo", "cnt_codigo", "prq_codigo"})})
 * @ORM\Entity
 */
class GcParroquia
{
    /**
     * @var int
     *
     * @ORM\Column(name="prq_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prqId;

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
     * @ORM\Column(name="cnt_codigo", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $cntCodigo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="prq_codigo", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $prqCodigo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="prq_nombre", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $prqNombre = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="prq_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $prqEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getPrqId(): ?string
    {
        return $this->prqId;
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

    public function getCntCodigo(): ?string
    {
        return $this->cntCodigo;
    }

    public function setCntCodigo(string $cntCodigo): self
    {
        $this->cntCodigo = $cntCodigo;

        return $this;
    }

    public function getPrqCodigo(): ?string
    {
        return $this->prqCodigo;
    }

    public function setPrqCodigo(string $prqCodigo): self
    {
        $this->prqCodigo = $prqCodigo;

        return $this;
    }

    public function getPrqNombre(): ?string
    {
        return $this->prqNombre;
    }

    public function setPrqNombre(string $prqNombre): self
    {
        $this->prqNombre = $prqNombre;

        return $this;
    }

    public function getPrqEstado(): ?string
    {
        return $this->prqEstado;
    }

    public function setPrqEstado(string $prqEstado): self
    {
        $this->prqEstado = $prqEstado;

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
