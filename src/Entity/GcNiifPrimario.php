<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcNiifPrimario
 *
 * @ORM\Table(name="gc_niif_primario")
 * @ORM\Entity
 */
class GcNiifPrimario
{
    /**
     * @var int
     *
     * @ORM\Column(name="nf_pr_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nfPrId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nf_pr_nombre", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $nfPrNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="nf_pr_observacion", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $nfPrObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="nf_pr_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $nfPrEstado = '\'C\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="nf_pr_reglaoro", type="boolean", nullable=false)
     */
    private $nfPrReglaoro = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getNfPrId(): ?string
    {
        return $this->nfPrId;
    }

    public function getNfPrNombre(): ?string
    {
        return $this->nfPrNombre;
    }

    public function setNfPrNombre(string $nfPrNombre): self
    {
        $this->nfPrNombre = $nfPrNombre;

        return $this;
    }

    public function getNfPrObservacion(): ?string
    {
        return $this->nfPrObservacion;
    }

    public function setNfPrObservacion(string $nfPrObservacion): self
    {
        $this->nfPrObservacion = $nfPrObservacion;

        return $this;
    }

    public function getNfPrEstado(): ?string
    {
        return $this->nfPrEstado;
    }

    public function setNfPrEstado(string $nfPrEstado): self
    {
        $this->nfPrEstado = $nfPrEstado;

        return $this;
    }

    public function getNfPrReglaoro(): ?bool
    {
        return $this->nfPrReglaoro;
    }

    public function setNfPrReglaoro(bool $nfPrReglaoro): self
    {
        $this->nfPrReglaoro = $nfPrReglaoro;

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
