<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComprobanteretencionDetalle
 *
 * @ORM\Table(name="_comprobanteretencion_detalle")
 * @ORM\Entity
 */
class ComprobanteretencionDetalle
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="em_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $emId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="impuestos_impuesto_baseImponible_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $impuestosImpuestoBaseimponible = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="impuestos_impuesto_codigo_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $impuestosImpuestoCodigo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="impuestos_impuesto_codigoRetencion_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $impuestosImpuestoCodigoretencion = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="impuestos_impuesto_fechaEmisionDocSustento_", type="date", nullable=true, options={"default"="NULL"})
     */
    private $impuestosImpuestoFechaemisiondocsustento = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="impuestos_impuesto_porcentajeRetener_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $impuestosImpuestoPorcentajeretener = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="impuestos_impuesto_valorRetenido_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $impuestosImpuestoValorretenido = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="idCr_detalle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcrDetalle;

    public function getEmId(): ?int
    {
        return $this->emId;
    }

    public function setEmId(?int $emId): self
    {
        $this->emId = $emId;

        return $this;
    }

    public function getImpuestosImpuestoBaseimponible(): ?string
    {
        return $this->impuestosImpuestoBaseimponible;
    }

    public function setImpuestosImpuestoBaseimponible(?string $impuestosImpuestoBaseimponible): self
    {
        $this->impuestosImpuestoBaseimponible = $impuestosImpuestoBaseimponible;

        return $this;
    }

    public function getImpuestosImpuestoCodigo(): ?string
    {
        return $this->impuestosImpuestoCodigo;
    }

    public function setImpuestosImpuestoCodigo(?string $impuestosImpuestoCodigo): self
    {
        $this->impuestosImpuestoCodigo = $impuestosImpuestoCodigo;

        return $this;
    }

    public function getImpuestosImpuestoCodigoretencion(): ?string
    {
        return $this->impuestosImpuestoCodigoretencion;
    }

    public function setImpuestosImpuestoCodigoretencion(?string $impuestosImpuestoCodigoretencion): self
    {
        $this->impuestosImpuestoCodigoretencion = $impuestosImpuestoCodigoretencion;

        return $this;
    }

    public function getImpuestosImpuestoFechaemisiondocsustento(): ?\DateTimeInterface
    {
        return $this->impuestosImpuestoFechaemisiondocsustento;
    }

    public function setImpuestosImpuestoFechaemisiondocsustento(?\DateTimeInterface $impuestosImpuestoFechaemisiondocsustento): self
    {
        $this->impuestosImpuestoFechaemisiondocsustento = $impuestosImpuestoFechaemisiondocsustento;

        return $this;
    }

    public function getImpuestosImpuestoPorcentajeretener(): ?string
    {
        return $this->impuestosImpuestoPorcentajeretener;
    }

    public function setImpuestosImpuestoPorcentajeretener(?string $impuestosImpuestoPorcentajeretener): self
    {
        $this->impuestosImpuestoPorcentajeretener = $impuestosImpuestoPorcentajeretener;

        return $this;
    }

    public function getImpuestosImpuestoValorretenido(): ?string
    {
        return $this->impuestosImpuestoValorretenido;
    }

    public function setImpuestosImpuestoValorretenido(?string $impuestosImpuestoValorretenido): self
    {
        $this->impuestosImpuestoValorretenido = $impuestosImpuestoValorretenido;

        return $this;
    }

    public function getIdcrDetalle(): ?int
    {
        return $this->idcrDetalle;
    }


}
