<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcNiifReportes
 *
 * @ORM\Table(name="gc_niif_reportes")
 * @ORM\Entity
 */
class GcNiifReportes
{
    /**
     * @var int
     *
     * @ORM\Column(name="nf_rp_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nfRpId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nf_rp_nombre", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $nfRpNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="nf_rp_observacion", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $nfRpObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="nf_rp_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $nfRpEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getNfRpId(): ?string
    {
        return $this->nfRpId;
    }

    public function getNfRpNombre(): ?string
    {
        return $this->nfRpNombre;
    }

    public function setNfRpNombre(string $nfRpNombre): self
    {
        $this->nfRpNombre = $nfRpNombre;

        return $this;
    }

    public function getNfRpObservacion(): ?string
    {
        return $this->nfRpObservacion;
    }

    public function setNfRpObservacion(string $nfRpObservacion): self
    {
        $this->nfRpObservacion = $nfRpObservacion;

        return $this;
    }

    public function getNfRpEstado(): ?string
    {
        return $this->nfRpEstado;
    }

    public function setNfRpEstado(string $nfRpEstado): self
    {
        $this->nfRpEstado = $nfRpEstado;

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
