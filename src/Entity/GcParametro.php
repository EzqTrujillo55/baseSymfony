<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcParametro
 *
 * @ORM\Table(name="gc_parametro")
 * @ORM\Entity
 */
class GcParametro
{
    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_periodo", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $cuPeriodo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pa_periodo", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $paPeriodo = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="tc_id_compra", type="bigint", nullable=false)
     */
    private $tcIdCompra = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_iva_compra", type="bigint", nullable=false)
     */
    private $cuIdIvaCompra = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_descuento_compra", type="bigint", nullable=false)
     */
    private $cuIdDescuentoCompra = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_flete_compra", type="bigint", nullable=false)
     */
    private $cuIdFleteCompra = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tc_id_factura", type="bigint", nullable=false)
     */
    private $tcIdFactura = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_iva_factura", type="bigint", nullable=false)
     */
    private $cuIdIvaFactura = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_descuento_factura", type="bigint", nullable=false)
     */
    private $cuIdDescuentoFactura = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_venta_factura", type="bigint", nullable=false)
     */
    private $cuIdVentaFactura = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_flete_factura", type="bigint", nullable=false)
     */
    private $cuIdFleteFactura = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_servicio_otros", type="bigint", nullable=false)
     */
    private $cuIdServicioOtros = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cn_id_pago_cliente", type="bigint", nullable=false)
     */
    private $cnIdPagoCliente = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_NIIF_CxC_INTERES_DEBE_PC", type="bigint", nullable=false)
     */
    private $cuIdNiifCxcInteresDebePc = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_NIIF_CxE_INTERES_DEBE_PC", type="bigint", nullable=false)
     */
    private $cuIdNiifCxeInteresDebePc = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_NIIF_CxC_INTERES_HABER", type="bigint", nullable=false)
     */
    private $cuIdNiifCxcInteresHaber = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cn_id_pago_proveedor", type="bigint", nullable=false)
     */
    private $cnIdPagoProveedor = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_ingreso_otros", type="bigint", nullable=false)
     */
    private $cuIdIngresoOtros = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_egreso_otros", type="bigint", nullable=false)
     */
    private $cuIdEgresoOtros = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_NIIF_CxP_INTERES_DEBE", type="bigint", nullable=false)
     */
    private $cuIdNiifCxpInteresDebe = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_activo", type="bigint", nullable=false)
     */
    private $cuIdActivo = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_pasivo", type="bigint", nullable=false)
     */
    private $cuIdPasivo = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_patrimonio", type="bigint", nullable=false)
     */
    private $cuIdPatrimonio = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_ingreso", type="bigint", nullable=false)
     */
    private $cuIdIngreso = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_gasto", type="bigint", nullable=false)
     */
    private $cuIdGasto = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_costo", type="bigint", nullable=false)
     */
    private $cuIdCosto = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_utilidad", type="bigint", nullable=false)
     */
    private $cuIdUtilidad = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_utilidad_anterior", type="bigint", nullable=false)
     */
    private $cuIdUtilidadAnterior = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_madre_cliente", type="bigint", nullable=false)
     */
    private $cuIdMadreCliente = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_madre_proveedor", type="bigint", nullable=false)
     */
    private $cuIdMadreProveedor = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_madre_empleado", type="bigint", nullable=false)
     */
    private $cuIdMadreEmpleado = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pa_comision", type="float", precision=10, scale=0, nullable=false)
     */
    private $paComision = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pa_utilidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $paUtilidad = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pa_mes", type="float", precision=10, scale=0, nullable=false)
     */
    private $paMes = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tc_id_nota_debito", type="bigint", nullable=false)
     */
    private $tcIdNotaDebito = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tc_id_nota_credito", type="bigint", nullable=false)
     */
    private $tcIdNotaCredito = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_seguro_compra", type="bigint", nullable=false)
     */
    private $cuIdSeguroCompra = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_devolucion_factura", type="bigint", nullable=false)
     */
    private $cuIdDevolucionFactura = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_devolucion_compra", type="bigint", nullable=false)
     */
    private $cuIdDevolucionCompra = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_madre_proveedor_documentos", type="bigint", nullable=false)
     */
    private $cuIdMadreProveedorDocumentos = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_madre_cliente_documentos", type="bigint", nullable=false)
     */
    private $cuIdMadreClienteDocumentos = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tc_id_depreciacion", type="bigint", nullable=false)
     */
    private $tcIdDepreciacion = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_depreciacion", type="bigint", nullable=false)
     */
    private $cuIdDepreciacion = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tc_id_cxc_niifs", type="bigint", nullable=false)
     */
    private $tcIdCxcNiifs = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_NIIF_CxP_INTERES_HABER_PC", type="bigint", nullable=false)
     */
    private $cuIdNiifCxpInteresHaberPc = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tc_id_cxp_niifs", type="bigint", nullable=false)
     */
    private $tcIdCxpNiifs = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_iva_compra_servicio", type="bigint", nullable=false)
     */
    private $cuIdIvaCompraServicio = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_ice_compra", type="bigint", nullable=false)
     */
    private $cuIdIceCompra = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_activo_orden", type="bigint", nullable=false)
     */
    private $cuIdActivoOrden = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_pasivo_orden", type="bigint", nullable=false)
     */
    private $cuIdPasivoOrden = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_ice_factura", type="bigint", nullable=false)
     */
    private $cuIdIceFactura = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_iva_gasto", type="bigint", nullable=false)
     */
    private $cuIdIvaGasto = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_iva_costo", type="bigint", nullable=false)
     */
    private $cuIdIvaCosto = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_NIIF_CxC_CASTIGO_DEBE_PC", type="bigint", nullable=false)
     */
    private $cuIdNiifCxcCastigoDebePc = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_NIIF_CxC_CASTIGO_HABER", type="bigint", nullable=false)
     */
    private $cuIdNiifCxcCastigoHaber = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_NIIF_CxC_INTERES_DEBE_PV", type="bigint", nullable=false)
     */
    private $cuIdNiifCxcInteresDebePv = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_NIIF_CxC_CASTIGO_DEBE_PV", type="bigint", nullable=false)
     */
    private $cuIdNiifCxcCastigoDebePv = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_NIIF_CxE_INTERES_DEBE_PV", type="bigint", nullable=false)
     */
    private $cuIdNiifCxeInteresDebePv = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_NIIF_CxE_CASTIGO_DEBE_PV", type="bigint", nullable=false)
     */
    private $cuIdNiifCxeCastigoDebePv = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_NIIF_CxE_INTERES_HABER", type="bigint", nullable=false)
     */
    private $cuIdNiifCxeInteresHaber = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_NIIF_CxE_CASTIGO_DEBE_PC", type="bigint", nullable=false)
     */
    private $cuIdNiifCxeCastigoDebePc = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_NIIF_CxE_CASTIGO_HABER", type="bigint", nullable=false)
     */
    private $cuIdNiifCxeCastigoHaber = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_NIIF_CxP_INTERES_HABER_PV", type="bigint", nullable=false)
     */
    private $cuIdNiifCxpInteresHaberPv = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_NIIF_CxP_CASTIGO_HABER_PV", type="bigint", nullable=false)
     */
    private $cuIdNiifCxpCastigoHaberPv = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_NIIF_CxP_CASTIGO_DEBE", type="bigint", nullable=false)
     */
    private $cuIdNiifCxpCastigoDebe = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_NIIF_CxP_CASTIGO_HABER_PC", type="bigint", nullable=false)
     */
    private $cuIdNiifCxpCastigoHaberPc = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="pr_niif_cxc_mostrar_mensajes", type="boolean", nullable=false)
     */
    private $prNiifCxcMostrarMensajes = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="pr_niif_cxp_mostrar_mensajes", type="boolean", nullable=false)
     */
    private $prNiifCxpMostrarMensajes = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_perdida", type="bigint", nullable=false)
     */
    private $cuIdPerdida = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_perdida_anterior", type="bigint", nullable=false)
     */
    private $cuIdPerdidaAnterior = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tc_id_asiento_apertura", type="bigint", nullable=false)
     */
    private $tcIdAsientoApertura = '0';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getCuPeriodo(): ?string
    {
        return $this->cuPeriodo;
    }

    public function setCuPeriodo(string $cuPeriodo): self
    {
        $this->cuPeriodo = $cuPeriodo;

        return $this;
    }

    public function getPaPeriodo(): ?string
    {
        return $this->paPeriodo;
    }

    public function setPaPeriodo(string $paPeriodo): self
    {
        $this->paPeriodo = $paPeriodo;

        return $this;
    }

    public function getTcIdCompra(): ?string
    {
        return $this->tcIdCompra;
    }

    public function setTcIdCompra(string $tcIdCompra): self
    {
        $this->tcIdCompra = $tcIdCompra;

        return $this;
    }

    public function getCuIdIvaCompra(): ?string
    {
        return $this->cuIdIvaCompra;
    }

    public function setCuIdIvaCompra(string $cuIdIvaCompra): self
    {
        $this->cuIdIvaCompra = $cuIdIvaCompra;

        return $this;
    }

    public function getCuIdDescuentoCompra(): ?string
    {
        return $this->cuIdDescuentoCompra;
    }

    public function setCuIdDescuentoCompra(string $cuIdDescuentoCompra): self
    {
        $this->cuIdDescuentoCompra = $cuIdDescuentoCompra;

        return $this;
    }

    public function getCuIdFleteCompra(): ?string
    {
        return $this->cuIdFleteCompra;
    }

    public function setCuIdFleteCompra(string $cuIdFleteCompra): self
    {
        $this->cuIdFleteCompra = $cuIdFleteCompra;

        return $this;
    }

    public function getTcIdFactura(): ?string
    {
        return $this->tcIdFactura;
    }

    public function setTcIdFactura(string $tcIdFactura): self
    {
        $this->tcIdFactura = $tcIdFactura;

        return $this;
    }

    public function getCuIdIvaFactura(): ?string
    {
        return $this->cuIdIvaFactura;
    }

    public function setCuIdIvaFactura(string $cuIdIvaFactura): self
    {
        $this->cuIdIvaFactura = $cuIdIvaFactura;

        return $this;
    }

    public function getCuIdDescuentoFactura(): ?string
    {
        return $this->cuIdDescuentoFactura;
    }

    public function setCuIdDescuentoFactura(string $cuIdDescuentoFactura): self
    {
        $this->cuIdDescuentoFactura = $cuIdDescuentoFactura;

        return $this;
    }

    public function getCuIdVentaFactura(): ?string
    {
        return $this->cuIdVentaFactura;
    }

    public function setCuIdVentaFactura(string $cuIdVentaFactura): self
    {
        $this->cuIdVentaFactura = $cuIdVentaFactura;

        return $this;
    }

    public function getCuIdFleteFactura(): ?string
    {
        return $this->cuIdFleteFactura;
    }

    public function setCuIdFleteFactura(string $cuIdFleteFactura): self
    {
        $this->cuIdFleteFactura = $cuIdFleteFactura;

        return $this;
    }

    public function getCuIdServicioOtros(): ?string
    {
        return $this->cuIdServicioOtros;
    }

    public function setCuIdServicioOtros(string $cuIdServicioOtros): self
    {
        $this->cuIdServicioOtros = $cuIdServicioOtros;

        return $this;
    }

    public function getCnIdPagoCliente(): ?string
    {
        return $this->cnIdPagoCliente;
    }

    public function setCnIdPagoCliente(string $cnIdPagoCliente): self
    {
        $this->cnIdPagoCliente = $cnIdPagoCliente;

        return $this;
    }

    public function getCuIdNiifCxcInteresDebePc(): ?string
    {
        return $this->cuIdNiifCxcInteresDebePc;
    }

    public function setCuIdNiifCxcInteresDebePc(string $cuIdNiifCxcInteresDebePc): self
    {
        $this->cuIdNiifCxcInteresDebePc = $cuIdNiifCxcInteresDebePc;

        return $this;
    }

    public function getCuIdNiifCxeInteresDebePc(): ?string
    {
        return $this->cuIdNiifCxeInteresDebePc;
    }

    public function setCuIdNiifCxeInteresDebePc(string $cuIdNiifCxeInteresDebePc): self
    {
        $this->cuIdNiifCxeInteresDebePc = $cuIdNiifCxeInteresDebePc;

        return $this;
    }

    public function getCuIdNiifCxcInteresHaber(): ?string
    {
        return $this->cuIdNiifCxcInteresHaber;
    }

    public function setCuIdNiifCxcInteresHaber(string $cuIdNiifCxcInteresHaber): self
    {
        $this->cuIdNiifCxcInteresHaber = $cuIdNiifCxcInteresHaber;

        return $this;
    }

    public function getCnIdPagoProveedor(): ?string
    {
        return $this->cnIdPagoProveedor;
    }

    public function setCnIdPagoProveedor(string $cnIdPagoProveedor): self
    {
        $this->cnIdPagoProveedor = $cnIdPagoProveedor;

        return $this;
    }

    public function getCuIdIngresoOtros(): ?string
    {
        return $this->cuIdIngresoOtros;
    }

    public function setCuIdIngresoOtros(string $cuIdIngresoOtros): self
    {
        $this->cuIdIngresoOtros = $cuIdIngresoOtros;

        return $this;
    }

    public function getCuIdEgresoOtros(): ?string
    {
        return $this->cuIdEgresoOtros;
    }

    public function setCuIdEgresoOtros(string $cuIdEgresoOtros): self
    {
        $this->cuIdEgresoOtros = $cuIdEgresoOtros;

        return $this;
    }

    public function getCuIdNiifCxpInteresDebe(): ?string
    {
        return $this->cuIdNiifCxpInteresDebe;
    }

    public function setCuIdNiifCxpInteresDebe(string $cuIdNiifCxpInteresDebe): self
    {
        $this->cuIdNiifCxpInteresDebe = $cuIdNiifCxpInteresDebe;

        return $this;
    }

    public function getCuIdActivo(): ?string
    {
        return $this->cuIdActivo;
    }

    public function setCuIdActivo(string $cuIdActivo): self
    {
        $this->cuIdActivo = $cuIdActivo;

        return $this;
    }

    public function getCuIdPasivo(): ?string
    {
        return $this->cuIdPasivo;
    }

    public function setCuIdPasivo(string $cuIdPasivo): self
    {
        $this->cuIdPasivo = $cuIdPasivo;

        return $this;
    }

    public function getCuIdPatrimonio(): ?string
    {
        return $this->cuIdPatrimonio;
    }

    public function setCuIdPatrimonio(string $cuIdPatrimonio): self
    {
        $this->cuIdPatrimonio = $cuIdPatrimonio;

        return $this;
    }

    public function getCuIdIngreso(): ?string
    {
        return $this->cuIdIngreso;
    }

    public function setCuIdIngreso(string $cuIdIngreso): self
    {
        $this->cuIdIngreso = $cuIdIngreso;

        return $this;
    }

    public function getCuIdGasto(): ?string
    {
        return $this->cuIdGasto;
    }

    public function setCuIdGasto(string $cuIdGasto): self
    {
        $this->cuIdGasto = $cuIdGasto;

        return $this;
    }

    public function getCuIdCosto(): ?string
    {
        return $this->cuIdCosto;
    }

    public function setCuIdCosto(string $cuIdCosto): self
    {
        $this->cuIdCosto = $cuIdCosto;

        return $this;
    }

    public function getCuIdUtilidad(): ?string
    {
        return $this->cuIdUtilidad;
    }

    public function setCuIdUtilidad(string $cuIdUtilidad): self
    {
        $this->cuIdUtilidad = $cuIdUtilidad;

        return $this;
    }

    public function getCuIdUtilidadAnterior(): ?string
    {
        return $this->cuIdUtilidadAnterior;
    }

    public function setCuIdUtilidadAnterior(string $cuIdUtilidadAnterior): self
    {
        $this->cuIdUtilidadAnterior = $cuIdUtilidadAnterior;

        return $this;
    }

    public function getCuIdMadreCliente(): ?string
    {
        return $this->cuIdMadreCliente;
    }

    public function setCuIdMadreCliente(string $cuIdMadreCliente): self
    {
        $this->cuIdMadreCliente = $cuIdMadreCliente;

        return $this;
    }

    public function getCuIdMadreProveedor(): ?string
    {
        return $this->cuIdMadreProveedor;
    }

    public function setCuIdMadreProveedor(string $cuIdMadreProveedor): self
    {
        $this->cuIdMadreProveedor = $cuIdMadreProveedor;

        return $this;
    }

    public function getCuIdMadreEmpleado(): ?string
    {
        return $this->cuIdMadreEmpleado;
    }

    public function setCuIdMadreEmpleado(string $cuIdMadreEmpleado): self
    {
        $this->cuIdMadreEmpleado = $cuIdMadreEmpleado;

        return $this;
    }

    public function getPaComision(): ?float
    {
        return $this->paComision;
    }

    public function setPaComision(float $paComision): self
    {
        $this->paComision = $paComision;

        return $this;
    }

    public function getPaUtilidad(): ?float
    {
        return $this->paUtilidad;
    }

    public function setPaUtilidad(float $paUtilidad): self
    {
        $this->paUtilidad = $paUtilidad;

        return $this;
    }

    public function getPaMes(): ?float
    {
        return $this->paMes;
    }

    public function setPaMes(float $paMes): self
    {
        $this->paMes = $paMes;

        return $this;
    }

    public function getTcIdNotaDebito(): ?string
    {
        return $this->tcIdNotaDebito;
    }

    public function setTcIdNotaDebito(string $tcIdNotaDebito): self
    {
        $this->tcIdNotaDebito = $tcIdNotaDebito;

        return $this;
    }

    public function getTcIdNotaCredito(): ?string
    {
        return $this->tcIdNotaCredito;
    }

    public function setTcIdNotaCredito(string $tcIdNotaCredito): self
    {
        $this->tcIdNotaCredito = $tcIdNotaCredito;

        return $this;
    }

    public function getCuIdSeguroCompra(): ?string
    {
        return $this->cuIdSeguroCompra;
    }

    public function setCuIdSeguroCompra(string $cuIdSeguroCompra): self
    {
        $this->cuIdSeguroCompra = $cuIdSeguroCompra;

        return $this;
    }

    public function getCuIdDevolucionFactura(): ?string
    {
        return $this->cuIdDevolucionFactura;
    }

    public function setCuIdDevolucionFactura(string $cuIdDevolucionFactura): self
    {
        $this->cuIdDevolucionFactura = $cuIdDevolucionFactura;

        return $this;
    }

    public function getCuIdDevolucionCompra(): ?string
    {
        return $this->cuIdDevolucionCompra;
    }

    public function setCuIdDevolucionCompra(string $cuIdDevolucionCompra): self
    {
        $this->cuIdDevolucionCompra = $cuIdDevolucionCompra;

        return $this;
    }

    public function getCuIdMadreProveedorDocumentos(): ?string
    {
        return $this->cuIdMadreProveedorDocumentos;
    }

    public function setCuIdMadreProveedorDocumentos(string $cuIdMadreProveedorDocumentos): self
    {
        $this->cuIdMadreProveedorDocumentos = $cuIdMadreProveedorDocumentos;

        return $this;
    }

    public function getCuIdMadreClienteDocumentos(): ?string
    {
        return $this->cuIdMadreClienteDocumentos;
    }

    public function setCuIdMadreClienteDocumentos(string $cuIdMadreClienteDocumentos): self
    {
        $this->cuIdMadreClienteDocumentos = $cuIdMadreClienteDocumentos;

        return $this;
    }

    public function getTcIdDepreciacion(): ?string
    {
        return $this->tcIdDepreciacion;
    }

    public function setTcIdDepreciacion(string $tcIdDepreciacion): self
    {
        $this->tcIdDepreciacion = $tcIdDepreciacion;

        return $this;
    }

    public function getCuIdDepreciacion(): ?string
    {
        return $this->cuIdDepreciacion;
    }

    public function setCuIdDepreciacion(string $cuIdDepreciacion): self
    {
        $this->cuIdDepreciacion = $cuIdDepreciacion;

        return $this;
    }

    public function getTcIdCxcNiifs(): ?string
    {
        return $this->tcIdCxcNiifs;
    }

    public function setTcIdCxcNiifs(string $tcIdCxcNiifs): self
    {
        $this->tcIdCxcNiifs = $tcIdCxcNiifs;

        return $this;
    }

    public function getCuIdNiifCxpInteresHaberPc(): ?string
    {
        return $this->cuIdNiifCxpInteresHaberPc;
    }

    public function setCuIdNiifCxpInteresHaberPc(string $cuIdNiifCxpInteresHaberPc): self
    {
        $this->cuIdNiifCxpInteresHaberPc = $cuIdNiifCxpInteresHaberPc;

        return $this;
    }

    public function getTcIdCxpNiifs(): ?string
    {
        return $this->tcIdCxpNiifs;
    }

    public function setTcIdCxpNiifs(string $tcIdCxpNiifs): self
    {
        $this->tcIdCxpNiifs = $tcIdCxpNiifs;

        return $this;
    }

    public function getCuIdIvaCompraServicio(): ?string
    {
        return $this->cuIdIvaCompraServicio;
    }

    public function setCuIdIvaCompraServicio(string $cuIdIvaCompraServicio): self
    {
        $this->cuIdIvaCompraServicio = $cuIdIvaCompraServicio;

        return $this;
    }

    public function getCuIdIceCompra(): ?string
    {
        return $this->cuIdIceCompra;
    }

    public function setCuIdIceCompra(string $cuIdIceCompra): self
    {
        $this->cuIdIceCompra = $cuIdIceCompra;

        return $this;
    }

    public function getCuIdActivoOrden(): ?string
    {
        return $this->cuIdActivoOrden;
    }

    public function setCuIdActivoOrden(string $cuIdActivoOrden): self
    {
        $this->cuIdActivoOrden = $cuIdActivoOrden;

        return $this;
    }

    public function getCuIdPasivoOrden(): ?string
    {
        return $this->cuIdPasivoOrden;
    }

    public function setCuIdPasivoOrden(string $cuIdPasivoOrden): self
    {
        $this->cuIdPasivoOrden = $cuIdPasivoOrden;

        return $this;
    }

    public function getCuIdIceFactura(): ?string
    {
        return $this->cuIdIceFactura;
    }

    public function setCuIdIceFactura(string $cuIdIceFactura): self
    {
        $this->cuIdIceFactura = $cuIdIceFactura;

        return $this;
    }

    public function getCuIdIvaGasto(): ?string
    {
        return $this->cuIdIvaGasto;
    }

    public function setCuIdIvaGasto(string $cuIdIvaGasto): self
    {
        $this->cuIdIvaGasto = $cuIdIvaGasto;

        return $this;
    }

    public function getCuIdIvaCosto(): ?string
    {
        return $this->cuIdIvaCosto;
    }

    public function setCuIdIvaCosto(string $cuIdIvaCosto): self
    {
        $this->cuIdIvaCosto = $cuIdIvaCosto;

        return $this;
    }

    public function getCuIdNiifCxcCastigoDebePc(): ?string
    {
        return $this->cuIdNiifCxcCastigoDebePc;
    }

    public function setCuIdNiifCxcCastigoDebePc(string $cuIdNiifCxcCastigoDebePc): self
    {
        $this->cuIdNiifCxcCastigoDebePc = $cuIdNiifCxcCastigoDebePc;

        return $this;
    }

    public function getCuIdNiifCxcCastigoHaber(): ?string
    {
        return $this->cuIdNiifCxcCastigoHaber;
    }

    public function setCuIdNiifCxcCastigoHaber(string $cuIdNiifCxcCastigoHaber): self
    {
        $this->cuIdNiifCxcCastigoHaber = $cuIdNiifCxcCastigoHaber;

        return $this;
    }

    public function getCuIdNiifCxcInteresDebePv(): ?string
    {
        return $this->cuIdNiifCxcInteresDebePv;
    }

    public function setCuIdNiifCxcInteresDebePv(string $cuIdNiifCxcInteresDebePv): self
    {
        $this->cuIdNiifCxcInteresDebePv = $cuIdNiifCxcInteresDebePv;

        return $this;
    }

    public function getCuIdNiifCxcCastigoDebePv(): ?string
    {
        return $this->cuIdNiifCxcCastigoDebePv;
    }

    public function setCuIdNiifCxcCastigoDebePv(string $cuIdNiifCxcCastigoDebePv): self
    {
        $this->cuIdNiifCxcCastigoDebePv = $cuIdNiifCxcCastigoDebePv;

        return $this;
    }

    public function getCuIdNiifCxeInteresDebePv(): ?string
    {
        return $this->cuIdNiifCxeInteresDebePv;
    }

    public function setCuIdNiifCxeInteresDebePv(string $cuIdNiifCxeInteresDebePv): self
    {
        $this->cuIdNiifCxeInteresDebePv = $cuIdNiifCxeInteresDebePv;

        return $this;
    }

    public function getCuIdNiifCxeCastigoDebePv(): ?string
    {
        return $this->cuIdNiifCxeCastigoDebePv;
    }

    public function setCuIdNiifCxeCastigoDebePv(string $cuIdNiifCxeCastigoDebePv): self
    {
        $this->cuIdNiifCxeCastigoDebePv = $cuIdNiifCxeCastigoDebePv;

        return $this;
    }

    public function getCuIdNiifCxeInteresHaber(): ?string
    {
        return $this->cuIdNiifCxeInteresHaber;
    }

    public function setCuIdNiifCxeInteresHaber(string $cuIdNiifCxeInteresHaber): self
    {
        $this->cuIdNiifCxeInteresHaber = $cuIdNiifCxeInteresHaber;

        return $this;
    }

    public function getCuIdNiifCxeCastigoDebePc(): ?string
    {
        return $this->cuIdNiifCxeCastigoDebePc;
    }

    public function setCuIdNiifCxeCastigoDebePc(string $cuIdNiifCxeCastigoDebePc): self
    {
        $this->cuIdNiifCxeCastigoDebePc = $cuIdNiifCxeCastigoDebePc;

        return $this;
    }

    public function getCuIdNiifCxeCastigoHaber(): ?string
    {
        return $this->cuIdNiifCxeCastigoHaber;
    }

    public function setCuIdNiifCxeCastigoHaber(string $cuIdNiifCxeCastigoHaber): self
    {
        $this->cuIdNiifCxeCastigoHaber = $cuIdNiifCxeCastigoHaber;

        return $this;
    }

    public function getCuIdNiifCxpInteresHaberPv(): ?string
    {
        return $this->cuIdNiifCxpInteresHaberPv;
    }

    public function setCuIdNiifCxpInteresHaberPv(string $cuIdNiifCxpInteresHaberPv): self
    {
        $this->cuIdNiifCxpInteresHaberPv = $cuIdNiifCxpInteresHaberPv;

        return $this;
    }

    public function getCuIdNiifCxpCastigoHaberPv(): ?string
    {
        return $this->cuIdNiifCxpCastigoHaberPv;
    }

    public function setCuIdNiifCxpCastigoHaberPv(string $cuIdNiifCxpCastigoHaberPv): self
    {
        $this->cuIdNiifCxpCastigoHaberPv = $cuIdNiifCxpCastigoHaberPv;

        return $this;
    }

    public function getCuIdNiifCxpCastigoDebe(): ?string
    {
        return $this->cuIdNiifCxpCastigoDebe;
    }

    public function setCuIdNiifCxpCastigoDebe(string $cuIdNiifCxpCastigoDebe): self
    {
        $this->cuIdNiifCxpCastigoDebe = $cuIdNiifCxpCastigoDebe;

        return $this;
    }

    public function getCuIdNiifCxpCastigoHaberPc(): ?string
    {
        return $this->cuIdNiifCxpCastigoHaberPc;
    }

    public function setCuIdNiifCxpCastigoHaberPc(string $cuIdNiifCxpCastigoHaberPc): self
    {
        $this->cuIdNiifCxpCastigoHaberPc = $cuIdNiifCxpCastigoHaberPc;

        return $this;
    }

    public function getPrNiifCxcMostrarMensajes(): ?bool
    {
        return $this->prNiifCxcMostrarMensajes;
    }

    public function setPrNiifCxcMostrarMensajes(bool $prNiifCxcMostrarMensajes): self
    {
        $this->prNiifCxcMostrarMensajes = $prNiifCxcMostrarMensajes;

        return $this;
    }

    public function getPrNiifCxpMostrarMensajes(): ?bool
    {
        return $this->prNiifCxpMostrarMensajes;
    }

    public function setPrNiifCxpMostrarMensajes(bool $prNiifCxpMostrarMensajes): self
    {
        $this->prNiifCxpMostrarMensajes = $prNiifCxpMostrarMensajes;

        return $this;
    }

    public function getCuIdPerdida(): ?string
    {
        return $this->cuIdPerdida;
    }

    public function setCuIdPerdida(string $cuIdPerdida): self
    {
        $this->cuIdPerdida = $cuIdPerdida;

        return $this;
    }

    public function getCuIdPerdidaAnterior(): ?string
    {
        return $this->cuIdPerdidaAnterior;
    }

    public function setCuIdPerdidaAnterior(string $cuIdPerdidaAnterior): self
    {
        $this->cuIdPerdidaAnterior = $cuIdPerdidaAnterior;

        return $this;
    }

    public function getTcIdAsientoApertura(): ?string
    {
        return $this->tcIdAsientoApertura;
    }

    public function setTcIdAsientoApertura(string $tcIdAsientoApertura): self
    {
        $this->tcIdAsientoApertura = $tcIdAsientoApertura;

        return $this;
    }


}
