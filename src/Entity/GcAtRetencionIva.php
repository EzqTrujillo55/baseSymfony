<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcAtRetencionIva
 *
 * @ORM\Table(name="gc_at_retencion_iva")
 * @ORM\Entity
 */
class GcAtRetencionIva
{
    /**
     * @var string
     *
     * @ORM\Column(name="at_ri_tipo", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $atRiTipo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="at_ri_codigo", type="string", length=10, nullable=false, options={"default"="'0'"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $atRiCodigo = '\'0\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="at_ri_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $atRiValor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="at_ri_descripcion", type="string", length=100, nullable=false, options={"default"="'0'"})
     */
    private $atRiDescripcion = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="at_ri_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $atRiEstado = '\'C\'';

    public function getAtRiTipo(): ?string
    {
        return $this->atRiTipo;
    }

    public function getAtRiCodigo(): ?string
    {
        return $this->atRiCodigo;
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

    public function getAtRiValor(): ?float
    {
        return $this->atRiValor;
    }

    public function setAtRiValor(float $atRiValor): self
    {
        $this->atRiValor = $atRiValor;

        return $this;
    }

    public function getAtRiDescripcion(): ?string
    {
        return $this->atRiDescripcion;
    }

    public function setAtRiDescripcion(string $atRiDescripcion): self
    {
        $this->atRiDescripcion = $atRiDescripcion;

        return $this;
    }

    public function getAtRiEstado(): ?string
    {
        return $this->atRiEstado;
    }

    public function setAtRiEstado(string $atRiEstado): self
    {
        $this->atRiEstado = $atRiEstado;

        return $this;
    }


}
