<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacturaDetalle
 *
 * @ORM\Table(name="_factura_detalle")
 * @ORM\Entity
 */
class FacturaDetalle
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
     * @ORM\Column(name="detalles_detalle_cantidad_", type="decimal", precision=18, scale=6, nullable=true, options={"default"="NULL"})
     */
    private $detallesDetalleCantidad = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="detalles_detalle_codigoPrincipal_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $detallesDetalleCodigoprincipal = 'NULL';

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
     * @ORM\Column(name="detalles_detalle_detallesAdicionales_detAdicional_datodetalle1_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $detallesDetalleDetallesadicionalesDetadicionalDatodetalle1 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="detalles_detalle_detallesAdicionales_detAdicional_datodetalle2_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $detallesDetalleDetallesadicionalesDetadicionalDatodetalle2 = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="detalles_detalle_detallesAdicionales_detAdicional_datodetalle3_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $detallesDetalleDetallesadicionalesDetadicionalDatodetalle3 = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="detalles_detalle_detallesAdicionales_detAdicional_lotecad_", type="date", nullable=true, options={"default"="NULL"})
     */
    private $detallesDetalleDetallesadicionalesDetadicionalLotecad = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="detalles_detalle_detallesAdicionales_detAdicional_lotenum_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $detallesDetalleDetallesadicionalesDetadicionalLotenum = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="detalles_detalle_detallesAdicionales_detAdicional_loterev_", type="date", nullable=true, options={"default"="NULL"})
     */
    private $detallesDetalleDetallesadicionalesDetadicionalLoterev = 'NULL';

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
     * @ORM\Column(name="detalles_detalle_precioSinSubsidio_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $detallesDetallePreciosinsubsidio = 'NULL';

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

    /**
     * @var int
     *
     * @ORM\Column(name="id_Factura_detalle_Auto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFacturaDetalleAuto;

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

    public function getDetallesDetalleCodigoprincipal(): ?string
    {
        return $this->detallesDetalleCodigoprincipal;
    }

    public function setDetallesDetalleCodigoprincipal(?string $detallesDetalleCodigoprincipal): self
    {
        $this->detallesDetalleCodigoprincipal = $detallesDetalleCodigoprincipal;

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

    public function getDetallesDetalleDetallesadicionalesDetadicionalDatodetalle1(): ?string
    {
        return $this->detallesDetalleDetallesadicionalesDetadicionalDatodetalle1;
    }

    public function setDetallesDetalleDetallesadicionalesDetadicionalDatodetalle1(?string $detallesDetalleDetallesadicionalesDetadicionalDatodetalle1): self
    {
        $this->detallesDetalleDetallesadicionalesDetadicionalDatodetalle1 = $detallesDetalleDetallesadicionalesDetadicionalDatodetalle1;

        return $this;
    }

    public function getDetallesDetalleDetallesadicionalesDetadicionalDatodetalle2(): ?string
    {
        return $this->detallesDetalleDetallesadicionalesDetadicionalDatodetalle2;
    }

    public function setDetallesDetalleDetallesadicionalesDetadicionalDatodetalle2(?string $detallesDetalleDetallesadicionalesDetadicionalDatodetalle2): self
    {
        $this->detallesDetalleDetallesadicionalesDetadicionalDatodetalle2 = $detallesDetalleDetallesadicionalesDetadicionalDatodetalle2;

        return $this;
    }

    public function getDetallesDetalleDetallesadicionalesDetadicionalDatodetalle3(): ?string
    {
        return $this->detallesDetalleDetallesadicionalesDetadicionalDatodetalle3;
    }

    public function setDetallesDetalleDetallesadicionalesDetadicionalDatodetalle3(?string $detallesDetalleDetallesadicionalesDetadicionalDatodetalle3): self
    {
        $this->detallesDetalleDetallesadicionalesDetadicionalDatodetalle3 = $detallesDetalleDetallesadicionalesDetadicionalDatodetalle3;

        return $this;
    }

    public function getDetallesDetalleDetallesadicionalesDetadicionalLotecad(): ?\DateTimeInterface
    {
        return $this->detallesDetalleDetallesadicionalesDetadicionalLotecad;
    }

    public function setDetallesDetalleDetallesadicionalesDetadicionalLotecad(?\DateTimeInterface $detallesDetalleDetallesadicionalesDetadicionalLotecad): self
    {
        $this->detallesDetalleDetallesadicionalesDetadicionalLotecad = $detallesDetalleDetallesadicionalesDetadicionalLotecad;

        return $this;
    }

    public function getDetallesDetalleDetallesadicionalesDetadicionalLotenum(): ?string
    {
        return $this->detallesDetalleDetallesadicionalesDetadicionalLotenum;
    }

    public function setDetallesDetalleDetallesadicionalesDetadicionalLotenum(?string $detallesDetalleDetallesadicionalesDetadicionalLotenum): self
    {
        $this->detallesDetalleDetallesadicionalesDetadicionalLotenum = $detallesDetalleDetallesadicionalesDetadicionalLotenum;

        return $this;
    }

    public function getDetallesDetalleDetallesadicionalesDetadicionalLoterev(): ?\DateTimeInterface
    {
        return $this->detallesDetalleDetallesadicionalesDetadicionalLoterev;
    }

    public function setDetallesDetalleDetallesadicionalesDetadicionalLoterev(?\DateTimeInterface $detallesDetalleDetallesadicionalesDetadicionalLoterev): self
    {
        $this->detallesDetalleDetallesadicionalesDetadicionalLoterev = $detallesDetalleDetallesadicionalesDetadicionalLoterev;

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

    public function getDetallesDetallePreciosinsubsidio(): ?string
    {
        return $this->detallesDetallePreciosinsubsidio;
    }

    public function setDetallesDetallePreciosinsubsidio(?string $detallesDetallePreciosinsubsidio): self
    {
        $this->detallesDetallePreciosinsubsidio = $detallesDetallePreciosinsubsidio;

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

    public function getIdFacturaDetalleAuto(): ?int
    {
        return $this->idFacturaDetalleAuto;
    }


}
