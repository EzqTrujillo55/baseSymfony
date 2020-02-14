<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcNiifPolitica
 *
 * @ORM\Table(name="gc_niif_politica")
 * @ORM\Entity
 */
class GcNiifPolitica
{
    /**
     * @var int
     *
     * @ORM\Column(name="nf_pl_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nfPlId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nf_pl_definicion", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $nfPlDefinicion = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nf_pl_procedimiento", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $nfPlProcedimiento = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="nf_pl_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $nfPlEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getNfPlId(): ?string
    {
        return $this->nfPlId;
    }

    public function getNfPlDefinicion(): ?string
    {
        return $this->nfPlDefinicion;
    }

    public function setNfPlDefinicion(?string $nfPlDefinicion): self
    {
        $this->nfPlDefinicion = $nfPlDefinicion;

        return $this;
    }

    public function getNfPlProcedimiento(): ?string
    {
        return $this->nfPlProcedimiento;
    }

    public function setNfPlProcedimiento(?string $nfPlProcedimiento): self
    {
        $this->nfPlProcedimiento = $nfPlProcedimiento;

        return $this;
    }

    public function getNfPlEstado(): ?string
    {
        return $this->nfPlEstado;
    }

    public function setNfPlEstado(string $nfPlEstado): self
    {
        $this->nfPlEstado = $nfPlEstado;

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
