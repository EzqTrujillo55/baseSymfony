<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotacreditoDetalle
 *
 * @ORM\Table(name="_notacredito_detalle")
 * @ORM\Entity
 */
class NotacreditoDetalle
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_notacredito_detalle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNotacreditoDetalle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="em_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $emId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="detalles_detalle_cantidad_", type="decimal", precision=18, scale=6, nullable=true, options={"default"="NULL"})
     */
    private $detallesDetalleCantidad = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="detalles_detalle_codigoInterno_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $detallesDetalleCodigointerno = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="detalles_detalle_descripcion_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $detallesDetalleDescripcion = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="detalles_detalle_descuento_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $detallesDetalleDescuento = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="detalles_detalle_impuestos_impuesto_codigo_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $detallesDetalleImpuestosImpuestoCodigo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="detalles_detalle_impuestos_impuesto_codigoPorcentaje_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $detallesDetalleImpuestosImpuestoCodigoporcentaje = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="detalles_detalle_impuestos_impuesto_valor_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $detallesDetalleImpuestosImpuestoValor = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="detalles_detalle_precioTotalSinImpuesto_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $detallesDetallePreciototalsinimpuesto = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="detalles_detalle_precioUnitario_", type="decimal", precision=18, scale=6, nullable=true, options={"default"="NULL"})
     */
    private $detallesDetallePreciounitario = 'NULL';

    public function getIdNotacreditoDetalle(): ?int
    {
        return $this->idNotacreditoDetalle;
    }

    public function getEmId(): ?int
    {
        return $this->emId;
    }

    public function setEmId(?int $emId): self
    {
        $this->emId = $emId;

        return $this;
    }

    public function getDetallesDetalleCantidad(): ?string
    {
        return $this->detallesDetalleCantidad;
    }

    public function setDetallesDetalleCantidad(?string $detallesDetalleCantidad): self
    {
        $this->detallesDetalleCantidad = $detallesDetalleCantidad;

        return $this;
    }

    public function getDetallesDetalleCodigointerno(): ?string
    {
        return $this->detallesDetalleCodigointerno;
    }

    public function setDetallesDetalleCodigointerno(?string $detallesDetalleCodigointerno): self
    {
        $this->detallesDetalleCodigointerno = $detallesDetalleCodigointerno;

        return $this;
    }

    public function getDetallesDetalleDescripcion(): ?string
    {
        return $this->detallesDetalleDescripcion;
    }

    public function setDetallesDetalleDescripcion(?string $detallesDetalleDescripcion): self
    {
        $this->detallesDetalleDescripcion = $detallesDetalleDescripcion;

        return $this;
    }

    public function getDetallesDetalleDescuento(): ?string
    {
        return $this->detallesDetalleDescuento;
    }

    public function setDetallesDetalleDescuento(?string $detallesDetalleDescuento): self
    {
        $this->detallesDetalleDescuento = $detallesDetalleDescuento;

        return $this;
    }

    public function getDetallesDetalleImpuestosImpuestoCodigo(): ?string
    {
        return $this->detallesDetalleImpuestosImpuestoCodigo;
    }

    public function setDetallesDetalleImpuestosImpuestoCodigo(?string $detallesDetalleImpuestosImpuestoCodigo): self
    {
        $this->detallesDetalleImpuestosImpuestoCodigo = $detallesDetalleImpuestosImpuestoCodigo;

        return $this;
    }

    public function getDetallesDetalleImpuestosImpuestoCodigoporcentaje(): ?string
    {
        return $this->detallesDetalleImpuestosImpuestoCodigoporcentaje;
    }

    public function setDetallesDetalleImpuestosImpuestoCodigoporcentaje(?string $detallesDetalleImpuestosImpuestoCodigoporcentaje): self
    {
        $this->detallesDetalleImpuestosImpuestoCodigoporcentaje = $detallesDetalleImpuestosImpuestoCodigoporcentaje;

        return $this;
    }

    public function getDetallesDetalleImpuestosImpuestoValor(): ?string
    {
        return $this->detallesDetalleImpuestosImpuestoValor;
    }

    public function setDetallesDetalleImpuestosImpuestoValor(?string $detallesDetalleImpuestosImpuestoValor): self
    {
        $this->detallesDetalleImpuestosImpuestoValor = $detallesDetalleImpuestosImpuestoValor;

        return $this;
    }

    public function getDetallesDetallePreciototalsinimpuesto(): ?string
    {
        return $this->detallesDetallePreciototalsinimpuesto;
    }

    public function setDetallesDetallePreciototalsinimpuesto(?string $detallesDetallePreciototalsinimpuesto): self
    {
        $this->detallesDetallePreciototalsinimpuesto = $detallesDetallePreciototalsinimpuesto;

        return $this;
    }

    public function getDetallesDetallePreciounitario(): ?string
    {
        return $this->detallesDetallePreciounitario;
    }

    public function setDetallesDetallePreciounitario(?string $detallesDetallePreciounitario): self
    {
        $this->detallesDetallePreciounitario = $detallesDetallePreciounitario;

        return $this;
    }


}
