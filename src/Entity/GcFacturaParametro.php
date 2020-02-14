<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcFacturaParametro
 *
 * @ORM\Table(name="gc_factura_parametro")
 * @ORM\Entity
 */
class GcFacturaParametro
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
     * @ORM\Column(name="fp_imprime_factura", type="string", length=1, nullable=false, options={"default"="'S'","fixed"=true})
     */
    private $fpImprimeFactura = '\'S\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_imprime_despacho", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $fpImprimeDespacho = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_imprime_remision", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $fpImprimeRemision = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_modifica_cuotas", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $fpModificaCuotas = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_cancela_factura", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $fpCancelaFactura = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_regenera_factura", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $fpRegeneraFactura = '\'N\'';

    /**
     * @var int
     *
     * @ORM\Column(name="fp_factura_default_pe_id", type="bigint", nullable=false)
     */
    private $fpFacturaDefaultPeId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_path_reporte_factura", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $fpPathReporteFactura = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_path_reporte_factura_nota_venta", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $fpPathReporteFacturaNotaVenta = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_path_reporte_cotizacion", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $fpPathReporteCotizacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_path_reporte_remision", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $fpPathReporteRemision = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_factura_carga_items", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $fpFacturaCargaItems = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_path_reporte_nota_credito", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $fpPathReporteNotaCredito = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_solicitar_datos_adicionales", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $fpSolicitarDatosAdicionales = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_cupo_advertir_exceso", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $fpCupoAdvertirExceso = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_cupo_permirtir_exceso", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $fpCupoPermirtirExceso = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_solicitar_vehiculo_placa", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $fpSolicitarVehiculoPlaca = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_solicitar_vehiculo_marca", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $fpSolicitarVehiculoMarca = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_solicitar_cliente_contacto", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $fpSolicitarClienteContacto = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_solicitar_cliente_correo", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $fpSolicitarClienteCorreo = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_solicitar_cliente_razonsocial", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $fpSolicitarClienteRazonsocial = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_solicitar_cliente_sitioweb", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $fpSolicitarClienteSitioweb = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_at_tc_id_tipo_comprobante", type="string", length=10, nullable=false, options={"default"="'0'"})
     */
    private $fpAtTcIdTipoComprobante = '\'0\'';

    /**
     * @var int
     *
     * @ORM\Column(name="fp_cliente_default_pa_id", type="bigint", nullable=false)
     */
    private $fpClienteDefaultPaId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fp_cliente_default_ci_id", type="bigint", nullable=false)
     */
    private $fpClienteDefaultCiId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_cliente_default_provincia", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $fpClienteDefaultProvincia = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="fp_cliente_default_fp_id", type="bigint", nullable=false)
     */
    private $fpClienteDefaultFpId = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="fp_cliente_default_tipo_precio", type="boolean", nullable=false)
     */
    private $fpClienteDefaultTipoPrecio = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_cartera_advertir_vencido", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $fpCarteraAdvertirVencido = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_cartera_permitir_vencido", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $fpCarteraPermitirVencido = '\'N\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="fp_maneja_multiple_descuento_tipo", type="boolean", nullable=false)
     */
    private $fpManejaMultipleDescuentoTipo = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fp_numero_despacho", type="bigint", nullable=false)
     */
    private $fpNumeroDespacho = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_path_reporte_nota_despacho", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $fpPathReporteNotaDespacho = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_solicitar_cliente_direccion_adicional", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $fpSolicitarClienteDireccionAdicional = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_solicitar_cliente_direccion_referencia", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $fpSolicitarClienteDireccionReferencia = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_solicitar_cliente_alias", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $fpSolicitarClienteAlias = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_imprime_comprobante", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $fpImprimeComprobante = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_mostrar_datos_informativos_cliente", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $fpMostrarDatosInformativosCliente = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_mostrar_mensaje_items_bajo_minimo", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $fpMostrarMensajeItemsBajoMinimo = '\'N\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getFpImprimeFactura(): ?string
    {
        return $this->fpImprimeFactura;
    }

    public function setFpImprimeFactura(string $fpImprimeFactura): self
    {
        $this->fpImprimeFactura = $fpImprimeFactura;

        return $this;
    }

    public function getFpImprimeDespacho(): ?string
    {
        return $this->fpImprimeDespacho;
    }

    public function setFpImprimeDespacho(string $fpImprimeDespacho): self
    {
        $this->fpImprimeDespacho = $fpImprimeDespacho;

        return $this;
    }

    public function getFpImprimeRemision(): ?string
    {
        return $this->fpImprimeRemision;
    }

    public function setFpImprimeRemision(string $fpImprimeRemision): self
    {
        $this->fpImprimeRemision = $fpImprimeRemision;

        return $this;
    }

    public function getFpModificaCuotas(): ?string
    {
        return $this->fpModificaCuotas;
    }

    public function setFpModificaCuotas(string $fpModificaCuotas): self
    {
        $this->fpModificaCuotas = $fpModificaCuotas;

        return $this;
    }

    public function getFpCancelaFactura(): ?string
    {
        return $this->fpCancelaFactura;
    }

    public function setFpCancelaFactura(string $fpCancelaFactura): self
    {
        $this->fpCancelaFactura = $fpCancelaFactura;

        return $this;
    }

    public function getFpRegeneraFactura(): ?string
    {
        return $this->fpRegeneraFactura;
    }

    public function setFpRegeneraFactura(string $fpRegeneraFactura): self
    {
        $this->fpRegeneraFactura = $fpRegeneraFactura;

        return $this;
    }

    public function getFpFacturaDefaultPeId(): ?string
    {
        return $this->fpFacturaDefaultPeId;
    }

    public function setFpFacturaDefaultPeId(string $fpFacturaDefaultPeId): self
    {
        $this->fpFacturaDefaultPeId = $fpFacturaDefaultPeId;

        return $this;
    }

    public function getFpPathReporteFactura(): ?string
    {
        return $this->fpPathReporteFactura;
    }

    public function setFpPathReporteFactura(string $fpPathReporteFactura): self
    {
        $this->fpPathReporteFactura = $fpPathReporteFactura;

        return $this;
    }

    public function getFpPathReporteFacturaNotaVenta(): ?string
    {
        return $this->fpPathReporteFacturaNotaVenta;
    }

    public function setFpPathReporteFacturaNotaVenta(string $fpPathReporteFacturaNotaVenta): self
    {
        $this->fpPathReporteFacturaNotaVenta = $fpPathReporteFacturaNotaVenta;

        return $this;
    }

    public function getFpPathReporteCotizacion(): ?string
    {
        return $this->fpPathReporteCotizacion;
    }

    public function setFpPathReporteCotizacion(string $fpPathReporteCotizacion): self
    {
        $this->fpPathReporteCotizacion = $fpPathReporteCotizacion;

        return $this;
    }

    public function getFpPathReporteRemision(): ?string
    {
        return $this->fpPathReporteRemision;
    }

    public function setFpPathReporteRemision(string $fpPathReporteRemision): self
    {
        $this->fpPathReporteRemision = $fpPathReporteRemision;

        return $this;
    }

    public function getFpFacturaCargaItems(): ?string
    {
        return $this->fpFacturaCargaItems;
    }

    public function setFpFacturaCargaItems(string $fpFacturaCargaItems): self
    {
        $this->fpFacturaCargaItems = $fpFacturaCargaItems;

        return $this;
    }

    public function getFpPathReporteNotaCredito(): ?string
    {
        return $this->fpPathReporteNotaCredito;
    }

    public function setFpPathReporteNotaCredito(string $fpPathReporteNotaCredito): self
    {
        $this->fpPathReporteNotaCredito = $fpPathReporteNotaCredito;

        return $this;
    }

    public function getFpSolicitarDatosAdicionales(): ?string
    {
        return $this->fpSolicitarDatosAdicionales;
    }

    public function setFpSolicitarDatosAdicionales(string $fpSolicitarDatosAdicionales): self
    {
        $this->fpSolicitarDatosAdicionales = $fpSolicitarDatosAdicionales;

        return $this;
    }

    public function getFpCupoAdvertirExceso(): ?string
    {
        return $this->fpCupoAdvertirExceso;
    }

    public function setFpCupoAdvertirExceso(string $fpCupoAdvertirExceso): self
    {
        $this->fpCupoAdvertirExceso = $fpCupoAdvertirExceso;

        return $this;
    }

    public function getFpCupoPermirtirExceso(): ?string
    {
        return $this->fpCupoPermirtirExceso;
    }

    public function setFpCupoPermirtirExceso(string $fpCupoPermirtirExceso): self
    {
        $this->fpCupoPermirtirExceso = $fpCupoPermirtirExceso;

        return $this;
    }

    public function getFpSolicitarVehiculoPlaca(): ?string
    {
        return $this->fpSolicitarVehiculoPlaca;
    }

    public function setFpSolicitarVehiculoPlaca(string $fpSolicitarVehiculoPlaca): self
    {
        $this->fpSolicitarVehiculoPlaca = $fpSolicitarVehiculoPlaca;

        return $this;
    }

    public function getFpSolicitarVehiculoMarca(): ?string
    {
        return $this->fpSolicitarVehiculoMarca;
    }

    public function setFpSolicitarVehiculoMarca(string $fpSolicitarVehiculoMarca): self
    {
        $this->fpSolicitarVehiculoMarca = $fpSolicitarVehiculoMarca;

        return $this;
    }

    public function getFpSolicitarClienteContacto(): ?string
    {
        return $this->fpSolicitarClienteContacto;
    }

    public function setFpSolicitarClienteContacto(string $fpSolicitarClienteContacto): self
    {
        $this->fpSolicitarClienteContacto = $fpSolicitarClienteContacto;

        return $this;
    }

    public function getFpSolicitarClienteCorreo(): ?string
    {
        return $this->fpSolicitarClienteCorreo;
    }

    public function setFpSolicitarClienteCorreo(string $fpSolicitarClienteCorreo): self
    {
        $this->fpSolicitarClienteCorreo = $fpSolicitarClienteCorreo;

        return $this;
    }

    public function getFpSolicitarClienteRazonsocial(): ?string
    {
        return $this->fpSolicitarClienteRazonsocial;
    }

    public function setFpSolicitarClienteRazonsocial(string $fpSolicitarClienteRazonsocial): self
    {
        $this->fpSolicitarClienteRazonsocial = $fpSolicitarClienteRazonsocial;

        return $this;
    }

    public function getFpSolicitarClienteSitioweb(): ?string
    {
        return $this->fpSolicitarClienteSitioweb;
    }

    public function setFpSolicitarClienteSitioweb(string $fpSolicitarClienteSitioweb): self
    {
        $this->fpSolicitarClienteSitioweb = $fpSolicitarClienteSitioweb;

        return $this;
    }

    public function getFpAtTcIdTipoComprobante(): ?string
    {
        return $this->fpAtTcIdTipoComprobante;
    }

    public function setFpAtTcIdTipoComprobante(string $fpAtTcIdTipoComprobante): self
    {
        $this->fpAtTcIdTipoComprobante = $fpAtTcIdTipoComprobante;

        return $this;
    }

    public function getFpClienteDefaultPaId(): ?string
    {
        return $this->fpClienteDefaultPaId;
    }

    public function setFpClienteDefaultPaId(string $fpClienteDefaultPaId): self
    {
        $this->fpClienteDefaultPaId = $fpClienteDefaultPaId;

        return $this;
    }

    public function getFpClienteDefaultCiId(): ?string
    {
        return $this->fpClienteDefaultCiId;
    }

    public function setFpClienteDefaultCiId(string $fpClienteDefaultCiId): self
    {
        $this->fpClienteDefaultCiId = $fpClienteDefaultCiId;

        return $this;
    }

    public function getFpClienteDefaultProvincia(): ?string
    {
        return $this->fpClienteDefaultProvincia;
    }

    public function setFpClienteDefaultProvincia(string $fpClienteDefaultProvincia): self
    {
        $this->fpClienteDefaultProvincia = $fpClienteDefaultProvincia;

        return $this;
    }

    public function getFpClienteDefaultFpId(): ?string
    {
        return $this->fpClienteDefaultFpId;
    }

    public function setFpClienteDefaultFpId(string $fpClienteDefaultFpId): self
    {
        $this->fpClienteDefaultFpId = $fpClienteDefaultFpId;

        return $this;
    }

    public function getFpClienteDefaultTipoPrecio(): ?bool
    {
        return $this->fpClienteDefaultTipoPrecio;
    }

    public function setFpClienteDefaultTipoPrecio(bool $fpClienteDefaultTipoPrecio): self
    {
        $this->fpClienteDefaultTipoPrecio = $fpClienteDefaultTipoPrecio;

        return $this;
    }

    public function getFpCarteraAdvertirVencido(): ?string
    {
        return $this->fpCarteraAdvertirVencido;
    }

    public function setFpCarteraAdvertirVencido(string $fpCarteraAdvertirVencido): self
    {
        $this->fpCarteraAdvertirVencido = $fpCarteraAdvertirVencido;

        return $this;
    }

    public function getFpCarteraPermitirVencido(): ?string
    {
        return $this->fpCarteraPermitirVencido;
    }

    public function setFpCarteraPermitirVencido(string $fpCarteraPermitirVencido): self
    {
        $this->fpCarteraPermitirVencido = $fpCarteraPermitirVencido;

        return $this;
    }

    public function getFpManejaMultipleDescuentoTipo(): ?bool
    {
        return $this->fpManejaMultipleDescuentoTipo;
    }

    public function setFpManejaMultipleDescuentoTipo(bool $fpManejaMultipleDescuentoTipo): self
    {
        $this->fpManejaMultipleDescuentoTipo = $fpManejaMultipleDescuentoTipo;

        return $this;
    }

    public function getFpNumeroDespacho(): ?string
    {
        return $this->fpNumeroDespacho;
    }

    public function setFpNumeroDespacho(string $fpNumeroDespacho): self
    {
        $this->fpNumeroDespacho = $fpNumeroDespacho;

        return $this;
    }

    public function getFpPathReporteNotaDespacho(): ?string
    {
        return $this->fpPathReporteNotaDespacho;
    }

    public function setFpPathReporteNotaDespacho(string $fpPathReporteNotaDespacho): self
    {
        $this->fpPathReporteNotaDespacho = $fpPathReporteNotaDespacho;

        return $this;
    }

    public function getFpSolicitarClienteDireccionAdicional(): ?string
    {
        return $this->fpSolicitarClienteDireccionAdicional;
    }

    public function setFpSolicitarClienteDireccionAdicional(string $fpSolicitarClienteDireccionAdicional): self
    {
        $this->fpSolicitarClienteDireccionAdicional = $fpSolicitarClienteDireccionAdicional;

        return $this;
    }

    public function getFpSolicitarClienteDireccionReferencia(): ?string
    {
        return $this->fpSolicitarClienteDireccionReferencia;
    }

    public function setFpSolicitarClienteDireccionReferencia(string $fpSolicitarClienteDireccionReferencia): self
    {
        $this->fpSolicitarClienteDireccionReferencia = $fpSolicitarClienteDireccionReferencia;

        return $this;
    }

    public function getFpSolicitarClienteAlias(): ?string
    {
        return $this->fpSolicitarClienteAlias;
    }

    public function setFpSolicitarClienteAlias(string $fpSolicitarClienteAlias): self
    {
        $this->fpSolicitarClienteAlias = $fpSolicitarClienteAlias;

        return $this;
    }

    public function getFpImprimeComprobante(): ?string
    {
        return $this->fpImprimeComprobante;
    }

    public function setFpImprimeComprobante(string $fpImprimeComprobante): self
    {
        $this->fpImprimeComprobante = $fpImprimeComprobante;

        return $this;
    }

    public function getFpMostrarDatosInformativosCliente(): ?string
    {
        return $this->fpMostrarDatosInformativosCliente;
    }

    public function setFpMostrarDatosInformativosCliente(string $fpMostrarDatosInformativosCliente): self
    {
        $this->fpMostrarDatosInformativosCliente = $fpMostrarDatosInformativosCliente;

        return $this;
    }

    public function getFpMostrarMensajeItemsBajoMinimo(): ?string
    {
        return $this->fpMostrarMensajeItemsBajoMinimo;
    }

    public function setFpMostrarMensajeItemsBajoMinimo(string $fpMostrarMensajeItemsBajoMinimo): self
    {
        $this->fpMostrarMensajeItemsBajoMinimo = $fpMostrarMensajeItemsBajoMinimo;

        return $this;
    }


}
