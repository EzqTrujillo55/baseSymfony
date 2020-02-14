<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpleadoParametroFormula
 *
 * @ORM\Table(name="gc_empleado_parametro_formula", indexes={@ORM\Index(name="indice_parametrorolformula", columns={"em_id", "mp_pf_id"}), @ORM\Index(name="mpprpov_relacionrol", columns={"em_id", "mp_pr_id_base"})})
 * @ORM\Entity
 */
class GcEmpleadoParametroFormula
{
    /**
     * @var int
     *
     * @ORM\Column(name="mp_pf_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mpPfId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_pr_id_base", type="bigint", nullable=false)
     */
    private $mpPrIdBase = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_pr_id_relacionado", type="bigint", nullable=false)
     */
    private $mpPrIdRelacionado = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_pf_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $mpPfEstado = '\'C\'';

    public function getMpPfId(): ?string
    {
        return $this->mpPfId;
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

    public function getMpPrIdBase(): ?string
    {
        return $this->mpPrIdBase;
    }

    public function setMpPrIdBase(string $mpPrIdBase): self
    {
        $this->mpPrIdBase = $mpPrIdBase;

        return $this;
    }

    public function getMpPrIdRelacionado(): ?string
    {
        return $this->mpPrIdRelacionado;
    }

    public function setMpPrIdRelacionado(string $mpPrIdRelacionado): self
    {
        $this->mpPrIdRelacionado = $mpPrIdRelacionado;

        return $this;
    }

    public function getMpPfEstado(): ?string
    {
        return $this->mpPfEstado;
    }

    public function setMpPfEstado(string $mpPfEstado): self
    {
        $this->mpPfEstado = $mpPfEstado;

        return $this;
    }


}
