<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcNiifTerciario
 *
 * @ORM\Table(name="gc_niif_terciario")
 * @ORM\Entity
 */
class GcNiifTerciario
{
    /**
     * @var int
     *
     * @ORM\Column(name="nf_tr_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nfTrId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="nf_pr_id", type="bigint", nullable=false)
     */
    private $nfPrId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="nf_sc_id", type="bigint", nullable=false)
     */
    private $nfScId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nf_tr_nombre", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $nfTrNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="nf_tr_observacion", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $nfTrObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="nf_tr_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $nfTrEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="nf_tr_orden", type="integer", nullable=false)
     */
    private $nfTrOrden = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nf_tr_codigo", type="string", length=20, nullable=false, options={"default"="'0'"})
     */
    private $nfTrCodigo = '\'0\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getNfTrId(): ?string
    {
        return $this->nfTrId;
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

    public function getNfScId(): ?string
    {
        return $this->nfScId;
    }

    public function setNfScId(string $nfScId): self
    {
        $this->nfScId = $nfScId;

        return $this;
    }

    public function getNfTrNombre(): ?string
    {
        return $this->nfTrNombre;
    }

    public function setNfTrNombre(string $nfTrNombre): self
    {
        $this->nfTrNombre = $nfTrNombre;

        return $this;
    }

    public function getNfTrObservacion(): ?string
    {
        return $this->nfTrObservacion;
    }

    public function setNfTrObservacion(string $nfTrObservacion): self
    {
        $this->nfTrObservacion = $nfTrObservacion;

        return $this;
    }

    public function getNfTrEstado(): ?string
    {
        return $this->nfTrEstado;
    }

    public function setNfTrEstado(string $nfTrEstado): self
    {
        $this->nfTrEstado = $nfTrEstado;

        return $this;
    }

    public function getNfTrOrden(): ?int
    {
        return $this->nfTrOrden;
    }

    public function setNfTrOrden(int $nfTrOrden): self
    {
        $this->nfTrOrden = $nfTrOrden;

        return $this;
    }

    public function getNfTrCodigo(): ?string
    {
        return $this->nfTrCodigo;
    }

    public function setNfTrCodigo(string $nfTrCodigo): self
    {
        $this->nfTrCodigo = $nfTrCodigo;

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
