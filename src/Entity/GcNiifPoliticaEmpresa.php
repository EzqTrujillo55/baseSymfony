<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcNiifPoliticaEmpresa
 *
 * @ORM\Table(name="gc_niif_politica_empresa")
 * @ORM\Entity
 */
class GcNiifPoliticaEmpresa
{
    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="nf_pl_em_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nfPlEmId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="nf_pl_id", type="bigint", nullable=false)
     */
    private $nfPlId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nf_pl_em_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $nfPlEmEstado = '\'C\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getNfPlEmId(): ?string
    {
        return $this->nfPlEmId;
    }

    public function getNfPlId(): ?string
    {
        return $this->nfPlId;
    }

    public function setNfPlId(string $nfPlId): self
    {
        $this->nfPlId = $nfPlId;

        return $this;
    }

    public function getNfPlEmEstado(): ?string
    {
        return $this->nfPlEmEstado;
    }

    public function setNfPlEmEstado(string $nfPlEmEstado): self
    {
        $this->nfPlEmEstado = $nfPlEmEstado;

        return $this;
    }


}
