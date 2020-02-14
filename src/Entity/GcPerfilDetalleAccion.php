<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcPerfilDetalleAccion
 *
 * @ORM\Table(name="gc_perfil_detalle_accion", uniqueConstraints={@ORM\UniqueConstraint(name="indice_perfildetalleaccion", columns={"pda_em_id", "pda_pd_id", "pda_ac_id"})})
 * @ORM\Entity
 */
class GcPerfilDetalleAccion
{
    /**
     * @var int
     *
     * @ORM\Column(name="pda_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pdaId;

    /**
     * @var int
     *
     * @ORM\Column(name="pda_em_id", type="bigint", nullable=false)
     */
    private $pdaEmId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pda_pd_id", type="bigint", nullable=false)
     */
    private $pdaPdId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pda_ac_id", type="bigint", nullable=false)
     */
    private $pdaAcId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getPdaId(): ?string
    {
        return $this->pdaId;
    }

    public function getPdaEmId(): ?string
    {
        return $this->pdaEmId;
    }

    public function setPdaEmId(string $pdaEmId): self
    {
        $this->pdaEmId = $pdaEmId;

        return $this;
    }

    public function getPdaPdId(): ?string
    {
        return $this->pdaPdId;
    }

    public function setPdaPdId(string $pdaPdId): self
    {
        $this->pdaPdId = $pdaPdId;

        return $this;
    }

    public function getPdaAcId(): ?string
    {
        return $this->pdaAcId;
    }

    public function setPdaAcId(string $pdaAcId): self
    {
        $this->pdaAcId = $pdaAcId;

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
