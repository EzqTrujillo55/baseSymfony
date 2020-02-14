<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcSriImpuestoRetencionDetalle
 *
 * @ORM\Table(name="gc_sri_impuesto_retencion_detalle")
 * @ORM\Entity
 */
class GcSriImpuestoRetencionDetalle
{
    /**
     * @var int
     *
     * @ORM\Column(name="ir_de_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $irDeId;

    /**
     * @var int
     *
     * @ORM\Column(name="ir_id", type="bigint", nullable=false)
     */
    private $irId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ir_de_codigo", type="string", length=10, nullable=false, options={"default"="'0'"})
     */
    private $irDeCodigo = '\'0\'';

    /**
     * @var float
     *
     * @ORM\Column(name="ir_de_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $irDePorcentaje = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ir_de_descripcion", type="string", length=250, nullable=false, options={"default"="'0'"})
     */
    private $irDeDescripcion = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ir_de_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $irDeEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getIrDeId(): ?string
    {
        return $this->irDeId;
    }

    public function getIrId(): ?string
    {
        return $this->irId;
    }

    public function setIrId(string $irId): self
    {
        $this->irId = $irId;

        return $this;
    }

    public function getIrDeCodigo(): ?string
    {
        return $this->irDeCodigo;
    }

    public function setIrDeCodigo(string $irDeCodigo): self
    {
        $this->irDeCodigo = $irDeCodigo;

        return $this;
    }

    public function getIrDePorcentaje(): ?float
    {
        return $this->irDePorcentaje;
    }

    public function setIrDePorcentaje(float $irDePorcentaje): self
    {
        $this->irDePorcentaje = $irDePorcentaje;

        return $this;
    }

    public function getIrDeDescripcion(): ?string
    {
        return $this->irDeDescripcion;
    }

    public function setIrDeDescripcion(string $irDeDescripcion): self
    {
        $this->irDeDescripcion = $irDeDescripcion;

        return $this;
    }

    public function getIrDeEstado(): ?string
    {
        return $this->irDeEstado;
    }

    public function setIrDeEstado(string $irDeEstado): self
    {
        $this->irDeEstado = $irDeEstado;

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
