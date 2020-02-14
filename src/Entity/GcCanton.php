<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCanton
 *
 * @ORM\Table(name="gc_canton", uniqueConstraints={@ORM\UniqueConstraint(name="indice_canton", columns={"em_pa_id", "prv_codigo", "cnt_codigo"})})
 * @ORM\Entity(repositoryClass="App\Repository\GcCantonRepository")
 */
class GcCanton
{
    /**
     * @var int
     *
     * @ORM\Column(name="cnt_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cntId;

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
     * @ORM\Column(name="cnt_nombre", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $cntNombre = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cnt_estado", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $cntEstado = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getCntId(): ?string
    {
        return $this->cntId;
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

    public function getCntNombre(): ?string
    {
        return $this->cntNombre;
    }

    public function setCntNombre(string $cntNombre): self
    {
        $this->cntNombre = $cntNombre;

        return $this;
    }

    public function getCntEstado(): ?string
    {
        return $this->cntEstado;
    }

    public function setCntEstado(string $cntEstado): self
    {
        $this->cntEstado = $cntEstado;

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
