<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcSriImpuestoRetencion
 *
 * @ORM\Table(name="gc_sri_impuesto_retencion", uniqueConstraints={@ORM\UniqueConstraint(name="indice_impuesto_retencion_detalle", columns={"ir_id", "ir_codigo"}), @ORM\UniqueConstraint(name="indice_impuesto_retencion", columns={"em_id", "ir_codigo"})})
 * @ORM\Entity
 */
class GcSriImpuestoRetencion
{
    /**
     * @var int
     *
     * @ORM\Column(name="ir_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $irId;

    /**
     * @var string
     *
     * @ORM\Column(name="ir_codigo", type="string", length=10, nullable=false, options={"default"="'0'"})
     */
    private $irCodigo = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ir_descripcion", type="string", length=250, nullable=false, options={"default"="'0'"})
     */
    private $irDescripcion = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ir_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $irEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pa_id", type="bigint", nullable=false, options={"default"="1"})
     */
    private $paId = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getIrId(): ?string
    {
        return $this->irId;
    }

    public function getIrCodigo(): ?string
    {
        return $this->irCodigo;
    }

    public function setIrCodigo(string $irCodigo): self
    {
        $this->irCodigo = $irCodigo;

        return $this;
    }

    public function getIrDescripcion(): ?string
    {
        return $this->irDescripcion;
    }

    public function setIrDescripcion(string $irDescripcion): self
    {
        $this->irDescripcion = $irDescripcion;

        return $this;
    }

    public function getIrEstado(): ?string
    {
        return $this->irEstado;
    }

    public function setIrEstado(string $irEstado): self
    {
        $this->irEstado = $irEstado;

        return $this;
    }

    public function getPaId(): ?string
    {
        return $this->paId;
    }

    public function setPaId(string $paId): self
    {
        $this->paId = $paId;

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
