<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcNiifSecundarioEmpresa
 *
 * @ORM\Table(name="gc_niif_secundario_empresa")
 * @ORM\Entity
 */
class GcNiifSecundarioEmpresa
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
     * @ORM\Column(name="nf_sc_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nfScId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="nf_sc_em_orden", type="integer", nullable=false)
     */
    private $nfScEmOrden = '0';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getNfScId(): ?string
    {
        return $this->nfScId;
    }

    public function getNfScEmOrden(): ?int
    {
        return $this->nfScEmOrden;
    }

    public function setNfScEmOrden(int $nfScEmOrden): self
    {
        $this->nfScEmOrden = $nfScEmOrden;

        return $this;
    }


}
