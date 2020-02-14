<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcNiifSecundario
 *
 * @ORM\Table(name="gc_niif_secundario")
 * @ORM\Entity
 */
class GcNiifSecundario
{
    /**
     * @var int
     *
     * @ORM\Column(name="nf_sc_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nfScId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="nf_pr_id", type="bigint", nullable=false)
     */
    private $nfPrId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="nf_rp_id", type="bigint", nullable=false)
     */
    private $nfRpId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nf_sc_nombre", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $nfScNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="nf_sc_observacion", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $nfScObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="nf_sc_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $nfScEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="nf_sc_orden", type="integer", nullable=false)
     */
    private $nfScOrden = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nf_sc_codigo", type="string", length=20, nullable=false, options={"default"="'0'"})
     */
    private $nfScCodigo = '\'0\'';

    /**
     * @var int
     *
     * @ORM\Column(name="nf_sc_tipo", type="integer", nullable=false)
     */
    private $nfScTipo = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nf_sc_nota", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $nfScNota = '\'\'';

    public function getNfScId(): ?string
    {
        return $this->nfScId;
    }

    public function getNfPrId(): ?string
    {
        return $this->nfPrId;
    }

    public function setNfPrId(string $nfPrId): self
    {
        $this->nfPrId = $nfPrId;

        return $this;
    }

    public function getNfRpId(): ?string
    {
        return $this->nfRpId;
    }

    public function setNfRpId(string $nfRpId): self
    {
        $this->nfRpId = $nfRpId;

        return $this;
    }

    public function getNfScNombre(): ?string
    {
        return $this->nfScNombre;
    }

    public function setNfScNombre(string $nfScNombre): self
    {
        $this->nfScNombre = $nfScNombre;

        return $this;
    }

    public function getNfScObservacion(): ?string
    {
        return $this->nfScObservacion;
    }

    public function setNfScObservacion(string $nfScObservacion): self
    {
        $this->nfScObservacion = $nfScObservacion;

        return $this;
    }

    public function getNfScEstado(): ?string
    {
        return $this->nfScEstado;
    }

    public function setNfScEstado(string $nfScEstado): self
    {
        $this->nfScEstado = $nfScEstado;

        return $this;
    }

    public function getNfScOrden(): ?int
    {
        return $this->nfScOrden;
    }

    public function setNfScOrden(int $nfScOrden): self
    {
        $this->nfScOrden = $nfScOrden;

        return $this;
    }

    public function getNfScCodigo(): ?string
    {
        return $this->nfScCodigo;
    }

    public function setNfScCodigo(string $nfScCodigo): self
    {
        $this->nfScCodigo = $nfScCodigo;

        return $this;
    }

    public function getNfScTipo(): ?int
    {
        return $this->nfScTipo;
    }

    public function setNfScTipo(int $nfScTipo): self
    {
        $this->nfScTipo = $nfScTipo;

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

    public function getNfScNota(): ?string
    {
        return $this->nfScNota;
    }

    public function setNfScNota(string $nfScNota): self
    {
        $this->nfScNota = $nfScNota;

        return $this;
    }


}
