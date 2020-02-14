<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcFactura
 *
 * @ORM\Table(name="gc_factura", indexes={@ORM\Index(name="FacturaFechaTipo", columns={"em_id", "fa_fecha", "fa_tipo", "fa_at_tipo_comprobante"}), @ORM\Index(name="indice_factura", columns={"em_id", "fa_id"}), @ORM\Index(name="IndiceNumeroFactura", columns={"em_id", "fa_tipo", "fa_at_fac_establecimiento", "fa_at_fac_puntoemision", "fa_numero"}), @ORM\Index(name="IndiceDevolucion", columns={"em_id", "fa_id_devolucion"}), @ORM\Index(name="Indice_Tipo", columns={"em_id", "fa_tipo", "fa_secuencial"}), @ORM\Index(name="IndiceFecha", columns={"em_id", "fa_tipo", "fa_fecha"}), @ORM\Index(name="facturaorigen", columns={"em_id", "pe_id_cliente_cancela"})})
 * @ORM\Entity
 */
class GcFactura
{
    /**
     * @var int
     *
     * @ORM\Column(name="fa_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $faId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_id_devolucion", type="bigint", nullable=false)
     */
    private $faIdDevolucion = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fp_id", type="bigint", nullable=false)
     */
    private $fpId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cn_id", type="bigint", nullable=false)
     */
    private $cnId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="co_id", type="bigint", nullable=false)
     */
    private $coId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bo_id_ingreso", type="bigint", nullable=false)
     */
    private $boIdIngreso = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bo_id_egreso", type="bigint", nullable=false)
     */
    private $boIdEgreso = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_id_vendedor", type="bigint", nullable=false)
     */
    private $peIdVendedor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_tipo_vendedor", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $peTipoVendedor = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_id_cliente", type="bigint", nullable=false)
     */
    private $peIdCliente = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_tipo_cliente", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $peTipoCliente = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_numero", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $faNumero = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_tipo", type="string", length=5, nullable=false, options={"default"="'**'","fixed"=true})
     */
    private $faTipo = '\'**\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_secuencial", type="decimal", precision=20, scale=0, nullable=false)
     */
    private $faSecuencial = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fa_fecha", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $faFecha = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fa_fecha_vence", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $faFechaVence = '\'1800-01-01 00:00:01\'';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_plazo", type="float", precision=10, scale=0, nullable=false)
     */
    private $faPlazo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_pago", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $faPago = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_utilidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $faUtilidad = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_parcial_item", type="float", precision=10, scale=0, nullable=false)
     */
    private $faParcialItem = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_parcial_servicio", type="float", precision=10, scale=0, nullable=false)
     */
    private $faParcialServicio = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_iva_item", type="float", precision=10, scale=0, nullable=false)
     */
    private $faIvaItem = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_iva_servicio", type="float", precision=10, scale=0, nullable=false)
     */
    private $faIvaServicio = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_descuento_item", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDescuentoItem = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_descuento_servicio", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDescuentoServicio = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_comision", type="float", precision=10, scale=0, nullable=false)
     */
    private $faComision = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_flete", type="float", precision=10, scale=0, nullable=false)
     */
    private $faFlete = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_otros", type="float", precision=10, scale=0, nullable=false)
     */
    private $faOtros = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_total", type="float", precision=10, scale=0, nullable=false)
     */
    private $faTotal = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_saldo", type="float", precision=10, scale=0, nullable=false)
     */
    private $faSaldo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_total_texto", type="string", length=150, nullable=false, options={"default"="'*'"})
     */
    private $faTotalTexto = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $faEstado = '\'C\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_observacion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $faObservacion = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="us_id", type="bigint", nullable=false)
     */
    private $usId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="us_fecha", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $usFecha = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fa_fecha_inicio", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $faFechaInicio = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fa_fecha_final", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $faFechaFinal = '\'1800-01-01 00:00:01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_retencion_fuente_item", type="bigint", nullable=false)
     */
    private $cuIdRetencionFuenteItem = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_retencion_fuente_item_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $faRetencionFuenteItemPorcentaje = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_retencion_fuente_item_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $faRetencionFuenteItemValor = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_retencion_iva_item", type="bigint", nullable=false)
     */
    private $cuIdRetencionIvaItem = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_retencion_iva_item_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $faRetencionIvaItemPorcentaje = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_retencion_iva_item_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $faRetencionIvaItemValor = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_retencion_fuente_servicio", type="bigint", nullable=false)
     */
    private $cuIdRetencionFuenteServicio = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_retencion_fuente_servicio_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $faRetencionFuenteServicioPorcentaje = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_retencion_fuente_servicio_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $faRetencionFuenteServicioValor = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_retencion_iva_servicio", type="bigint", nullable=false)
     */
    private $cuIdRetencionIvaServicio = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_retencion_iva_servicio_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $faRetencionIvaServicioPorcentaje = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_retencion_iva_servicio_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $faRetencionIvaServicioValor = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tr_id", type="bigint", nullable=false)
     */
    private $trId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_guia", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $faGuia = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_hace_retencion", type="string", length=1, nullable=false, options={"default"="'0'","fixed"=true})
     */
    private $faHaceRetencion = '\'0\'';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_retencion_numero", type="bigint", nullable=false)
     */
    private $faRetencionNumero = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_proveedor", type="bigint", nullable=false)
     */
    private $cuIdProveedor = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_iva", type="bigint", nullable=false)
     */
    private $cuIdIva = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_descuento", type="bigint", nullable=false)
     */
    private $cuIdDescuento = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_flete", type="bigint", nullable=false)
     */
    private $cuIdFlete = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_id_cliente_cancela", type="bigint", nullable=false)
     */
    private $peIdClienteCancela = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_tipo_cliente_cancela", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $peTipoClienteCancela = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="it_id", type="bigint", nullable=false)
     */
    private $itId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_descuento_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDescuentoPorcentaje = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_numero_secundario", type="string", length=25, nullable=false, options={"default"="'0'"})
     */
    private $faNumeroSecundario = '\'0\'';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ice", type="float", precision=10, scale=0, nullable=false)
     */
    private $faIce = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_at_secuencial_transaccion", type="string", length=10, nullable=false, options={"default"="'0'"})
     */
    private $faAtSecuencialTransaccion = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_at_sustento_tributario", type="string", length=10, nullable=false, options={"default"="'0'"})
     */
    private $faAtSustentoTributario = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_at_tipo_comprobante", type="string", length=10, nullable=false, options={"default"="'0'"})
     */
    private $faAtTipoComprobante = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_at_fac_establecimiento", type="string", length=5, nullable=false, options={"default"="'001'"})
     */
    private $faAtFacEstablecimiento = '\'001\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_at_fac_puntoemision", type="string", length=5, nullable=false, options={"default"="'001'"})
     */
    private $faAtFacPuntoemision = '\'001\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_at_fac_autorizacion", type="string", length=50, nullable=false, options={"default"="'0'"})
     */
    private $faAtFacAutorizacion = '\'0\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fa_at_fac_caduca", type="date", nullable=false, options={"default"="'2006-01-01'"})
     */
    private $faAtFacCaduca = '\'2006-01-01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_at_convenio_doble_tributacion", type="string", length=2, nullable=false, options={"default"="'NA'"})
     */
    private $faAtConvenioDobleTributacion = '\'NA\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_at_iva_presuntivo", type="string", length=1, nullable=false, options={"default"="'1'","fixed"=true})
     */
    private $faAtIvaPresuntivo = '\'1\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_at_retencion_presuntivo", type="string", length=1, nullable=false, options={"default"="'1'","fixed"=true})
     */
    private $faAtRetencionPresuntivo = '\'1\'';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_abono_custodia", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAbonoCustodia = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ma_id", type="bigint", nullable=false)
     */
    private $maId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tr_id_retencion_fuente_item", type="bigint", nullable=false)
     */
    private $trIdRetencionFuenteItem = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_tipo_gasto_importacion", type="bigint", nullable=false)
     */
    private $faTipoGastoImportacion = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_importacion", type="bigint", nullable=false)
     */
    private $cuIdImportacion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_at_importacion_distrito", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $faAtImportacionDistrito = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_at_importacion_anio", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $faAtImportacionAnio = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_at_importacion_regimen", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $faAtImportacionRegimen = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_at_importacion_correlativo", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $faAtImportacionCorrelativo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_at_importacion_verificador", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $faAtImportacionVerificador = '\'*\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fa_at_importacion_fecha_liquida", type="datetime", nullable=false, options={"default"="'2007-08-24 00:00:00'"})
     */
    private $faAtImportacionFechaLiquida = '\'2007-08-24 00:00:00\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_importacion_tipo", type="string", length=2, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $faImportacionTipo = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_importacion_valor_cif", type="float", precision=10, scale=0, nullable=false)
     */
    private $faImportacionValorCif = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="fa_documento_procesado", type="boolean", nullable=false)
     */
    private $faDocumentoProcesado = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_base_ret_item", type="float", precision=10, scale=0, nullable=false)
     */
    private $faBaseRetItem = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_base_ret_servicio", type="float", precision=10, scale=0, nullable=false)
     */
    private $faBaseRetServicio = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_contacto", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $faContacto = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_maneja_credito_tributario", type="smallint", nullable=false)
     */
    private $faManejaCreditoTributario = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_descuento_porcentaje1", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDescuentoPorcentaje1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_descuento_valor1", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDescuentoValor1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_descuento_porcentaje2", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDescuentoPorcentaje2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_descuento_valor2", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDescuentoValor2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_descuento_porcentaje3", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDescuentoPorcentaje3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_descuento_valor3", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDescuentoValor3 = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="fa_origen_modulo", type="boolean", nullable=false)
     */
    private $faOrigenModulo = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_pr_id", type="bigint", nullable=false)
     */
    private $mpPrId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_numero_ordencompra", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $faNumeroOrdencompra = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_id_2", type="bigint", nullable=false)
     */
    private $faId2 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_numero_despacho", type="bigint", nullable=false)
     */
    private $faNumeroDespacho = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_dato_tarjetas_recap", type="string", length=25, nullable=false, options={"default"="''"})
     */
    private $faDatoTarjetasRecap = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_at_pago_local_exterior", type="string", length=2, nullable=false, options={"default"="'01'"})
     */
    private $faAtPagoLocalExterior = '\'01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_at_pago_pais", type="string", length=5, nullable=false, options={"default"="'NA'"})
     */
    private $faAtPagoPais = '\'NA\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_at_pago_exterior_normalegal", type="string", length=2, nullable=false, options={"default"="'NA'"})
     */
    private $faAtPagoExteriorNormalegal = '\'NA\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_at_formapago", type="string", length=2, nullable=false, options={"default"="''"})
     */
    private $faAtFormapago = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_at_importacion_tipo", type="string", length=5, nullable=false, options={"default"="'00'"})
     */
    private $faAtImportacionTipo = '\'00\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_at_importacion_transporte", type="string", length=25, nullable=false, options={"default"="''"})
     */
    private $faAtImportacionTransporte = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cc_id", type="bigint", nullable=false, options={"default"="-1"})
     */
    private $ccId = '-1';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_importacion_modo_transporte", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $faImportacionModoTransporte = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_importacion_puerto_carga", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $faImportacionPuertoCarga = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_importacion_puerto_destino", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $faImportacionPuertoDestino = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_importacion_icoterm", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $faImportacionIcoterm = '\'\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fa_importacion_fechaentrega", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $faImportacionFechaentrega = '\'2000-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fa_at_fecha_autorizacion", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $faAtFechaAutorizacion = '\'2000-01-01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_guiaremision_establecimiento_destino", type="string", length=3, nullable=false, options={"default"="''"})
     */
    private $faGuiaremisionEstablecimientoDestino = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_guiaremision_ruta", type="string", length=250, nullable=false, options={"default"="''"})
     */
    private $faGuiaremisionRuta = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_guiaremision_direccion_partida", type="string", length=250, nullable=false, options={"default"="''"})
     */
    private $faGuiaremisionDireccionPartida = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_guiaremision_direccion_destino", type="string", length=250, nullable=false, options={"default"="''"})
     */
    private $faGuiaremisionDireccionDestino = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_iva_codigo", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $faIvaCodigo = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_id_adicional", type="bigint", nullable=false)
     */
    private $peIdAdicional = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_at_regimen_fiscal", type="string", length=2, nullable=false, options={"default"="'NA'"})
     */
    private $faAtRegimenFiscal = '\'NA\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fa_fecha_registro", type="date", nullable=false, options={"default"="'2010-01-01'"})
     */
    private $faFechaRegistro = '\'2010-01-01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="fg_id", type="bigint", nullable=false)
     */
    private $fgId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="fa_notas", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $faNotas = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_at_exportacion_tipo_ingreso", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $faAtExportacionTipoIngreso = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_at_exportacion_gravadoexterior", type="string", length=2, nullable=false, options={"default"="''"})
     */
    private $faAtExportacionGravadoexterior = '\'\'';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_at_exportacion_valorgravadoexterior", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAtExportacionValorgravadoexterior = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_at_exportacion_denominacion_regimen", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $faAtExportacionDenominacionRegimen = '\'\'';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_importacion_valor_fob", type="float", precision=10, scale=0, nullable=false)
     */
    private $faImportacionValorFob = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_moneda_tipo", type="bigint", nullable=false)
     */
    private $faMonedaTipo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_moneda_valor_cambio", type="float", precision=10, scale=0, nullable=false)
     */
    private $faMonedaValorCambio = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="fa_tipo_documento_emision", type="boolean", nullable=false)
     */
    private $faTipoDocumentoEmision = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_numero_ordenfactura", type="string", length=25, nullable=false, options={"default"="''"})
     */
    private $faNumeroOrdenfactura = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_placa", type="string", length=20, nullable=false, options={"default"="''"})
     */
    private $faPlaca = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="fa_maneja_lote", type="boolean", nullable=false)
     */
    private $faManejaLote = '0';

    public function getFaId(): ?string
    {
        return $this->faId;
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

    public function getFaIdDevolucion(): ?string
    {
        return $this->faIdDevolucion;
    }

    public function setFaIdDevolucion(string $faIdDevolucion): self
    {
        $this->faIdDevolucion = $faIdDevolucion;

        return $this;
    }

    public function getFpId(): ?string
    {
        return $this->fpId;
    }

    public function setFpId(string $fpId): self
    {
        $this->fpId = $fpId;

        return $this;
    }

    public function getCnId(): ?string
    {
        return $this->cnId;
    }

    public function setCnId(string $cnId): self
    {
        $this->cnId = $cnId;

        return $this;
    }

    public function getCoId(): ?string
    {
        return $this->coId;
    }

    public function setCoId(string $coId): self
    {
        $this->coId = $coId;

        return $this;
    }

    public function getBoIdIngreso(): ?string
    {
        return $this->boIdIngreso;
    }

    public function setBoIdIngreso(string $boIdIngreso): self
    {
        $this->boIdIngreso = $boIdIngreso;

        return $this;
    }

    public function getBoIdEgreso(): ?string
    {
        return $this->boIdEgreso;
    }

    public function setBoIdEgreso(string $boIdEgreso): self
    {
        $this->boIdEgreso = $boIdEgreso;

        return $this;
    }

    public function getPeIdVendedor(): ?string
    {
        return $this->peIdVendedor;
    }

    public function setPeIdVendedor(string $peIdVendedor): self
    {
        $this->peIdVendedor = $peIdVendedor;

        return $this;
    }

    public function getPeTipoVendedor(): ?string
    {
        return $this->peTipoVendedor;
    }

    public function setPeTipoVendedor(string $peTipoVendedor): self
    {
        $this->peTipoVendedor = $peTipoVendedor;

        return $this;
    }

    public function getPeIdCliente(): ?string
    {
        return $this->peIdCliente;
    }

    public function setPeIdCliente(string $peIdCliente): self
    {
        $this->peIdCliente = $peIdCliente;

        return $this;
    }

    public function getPeTipoCliente(): ?string
    {
        return $this->peTipoCliente;
    }

    public function setPeTipoCliente(string $peTipoCliente): self
    {
        $this->peTipoCliente = $peTipoCliente;

        return $this;
    }

    public function getFaNumero(): ?string
    {
        return $this->faNumero;
    }

    public function setFaNumero(string $faNumero): self
    {
        $this->faNumero = $faNumero;

        return $this;
    }

    public function getFaTipo(): ?string
    {
        return $this->faTipo;
    }

    public function setFaTipo(string $faTipo): self
    {
        $this->faTipo = $faTipo;

        return $this;
    }

    public function getFaSecuencial(): ?string
    {
        return $this->faSecuencial;
    }

    public function setFaSecuencial(string $faSecuencial): self
    {
        $this->faSecuencial = $faSecuencial;

        return $this;
    }

    public function getFaFecha(): ?\DateTimeInterface
    {
        return $this->faFecha;
    }

    public function setFaFecha(\DateTimeInterface $faFecha): self
    {
        $this->faFecha = $faFecha;

        return $this;
    }

    public function getFaFechaVence(): ?\DateTimeInterface
    {
        return $this->faFechaVence;
    }

    public function setFaFechaVence(\DateTimeInterface $faFechaVence): self
    {
        $this->faFechaVence = $faFechaVence;

        return $this;
    }

    public function getFaPlazo(): ?float
    {
        return $this->faPlazo;
    }

    public function setFaPlazo(float $faPlazo): self
    {
        $this->faPlazo = $faPlazo;

        return $this;
    }

    public function getFaPago(): ?string
    {
        return $this->faPago;
    }

    public function setFaPago(string $faPago): self
    {
        $this->faPago = $faPago;

        return $this;
    }

    public function getFaUtilidad(): ?float
    {
        return $this->faUtilidad;
    }

    public function setFaUtilidad(float $faUtilidad): self
    {
        $this->faUtilidad = $faUtilidad;

        return $this;
    }

    public function getFaParcialItem(): ?float
    {
        return $this->faParcialItem;
    }

    public function setFaParcialItem(float $faParcialItem): self
    {
        $this->faParcialItem = $faParcialItem;

        return $this;
    }

    public function getFaParcialServicio(): ?float
    {
        return $this->faParcialServicio;
    }

    public function setFaParcialServicio(float $faParcialServicio): self
    {
        $this->faParcialServicio = $faParcialServicio;

        return $this;
    }

    public function getFaIvaItem(): ?float
    {
        return $this->faIvaItem;
    }

    public function setFaIvaItem(float $faIvaItem): self
    {
        $this->faIvaItem = $faIvaItem;

        return $this;
    }

    public function getFaIvaServicio(): ?float
    {
        return $this->faIvaServicio;
    }

    public function setFaIvaServicio(float $faIvaServicio): self
    {
        $this->faIvaServicio = $faIvaServicio;

        return $this;
    }

    public function getFaDescuentoItem(): ?float
    {
        return $this->faDescuentoItem;
    }

    public function setFaDescuentoItem(float $faDescuentoItem): self
    {
        $this->faDescuentoItem = $faDescuentoItem;

        return $this;
    }

    public function getFaDescuentoServicio(): ?float
    {
        return $this->faDescuentoServicio;
    }

    public function setFaDescuentoServicio(float $faDescuentoServicio): self
    {
        $this->faDescuentoServicio = $faDescuentoServicio;

        return $this;
    }

    public function getFaComision(): ?float
    {
        return $this->faComision;
    }

    public function setFaComision(float $faComision): self
    {
        $this->faComision = $faComision;

        return $this;
    }

    public function getFaFlete(): ?float
    {
        return $this->faFlete;
    }

    public function setFaFlete(float $faFlete): self
    {
        $this->faFlete = $faFlete;

        return $this;
    }

    public function getFaOtros(): ?float
    {
        return $this->faOtros;
    }

    public function setFaOtros(float $faOtros): self
    {
        $this->faOtros = $faOtros;

        return $this;
    }

    public function getFaTotal(): ?float
    {
        return $this->faTotal;
    }

    public function setFaTotal(float $faTotal): self
    {
        $this->faTotal = $faTotal;

        return $this;
    }

    public function getFaSaldo(): ?float
    {
        return $this->faSaldo;
    }

    public function setFaSaldo(float $faSaldo): self
    {
        $this->faSaldo = $faSaldo;

        return $this;
    }

    public function getFaTotalTexto(): ?string
    {
        return $this->faTotalTexto;
    }

    public function setFaTotalTexto(string $faTotalTexto): self
    {
        $this->faTotalTexto = $faTotalTexto;

        return $this;
    }

    public function getFaEstado(): ?string
    {
        return $this->faEstado;
    }

    public function setFaEstado(string $faEstado): self
    {
        $this->faEstado = $faEstado;

        return $this;
    }

    public function getFaObservacion(): ?string
    {
        return $this->faObservacion;
    }

    public function setFaObservacion(string $faObservacion): self
    {
        $this->faObservacion = $faObservacion;

        return $this;
    }

    public function getUsId(): ?string
    {
        return $this->usId;
    }

    public function setUsId(string $usId): self
    {
        $this->usId = $usId;

        return $this;
    }

    public function getUsFecha(): ?\DateTimeInterface
    {
        return $this->usFecha;
    }

    public function setUsFecha(\DateTimeInterface $usFecha): self
    {
        $this->usFecha = $usFecha;

        return $this;
    }

    public function getFaFechaInicio(): ?\DateTimeInterface
    {
        return $this->faFechaInicio;
    }

    public function setFaFechaInicio(\DateTimeInterface $faFechaInicio): self
    {
        $this->faFechaInicio = $faFechaInicio;

        return $this;
    }

    public function getFaFechaFinal(): ?\DateTimeInterface
    {
        return $this->faFechaFinal;
    }

    public function setFaFechaFinal(\DateTimeInterface $faFechaFinal): self
    {
        $this->faFechaFinal = $faFechaFinal;

        return $this;
    }

    public function getCuIdRetencionFuenteItem(): ?string
    {
        return $this->cuIdRetencionFuenteItem;
    }

    public function setCuIdRetencionFuenteItem(string $cuIdRetencionFuenteItem): self
    {
        $this->cuIdRetencionFuenteItem = $cuIdRetencionFuenteItem;

        return $this;
    }

    public function getFaRetencionFuenteItemPorcentaje(): ?float
    {
        return $this->faRetencionFuenteItemPorcentaje;
    }

    public function setFaRetencionFuenteItemPorcentaje(float $faRetencionFuenteItemPorcentaje): self
    {
        $this->faRetencionFuenteItemPorcentaje = $faRetencionFuenteItemPorcentaje;

        return $this;
    }

    public function getFaRetencionFuenteItemValor(): ?float
    {
        return $this->faRetencionFuenteItemValor;
    }

    public function setFaRetencionFuenteItemValor(float $faRetencionFuenteItemValor): self
    {
        $this->faRetencionFuenteItemValor = $faRetencionFuenteItemValor;

        return $this;
    }

    public function getCuIdRetencionIvaItem(): ?string
    {
        return $this->cuIdRetencionIvaItem;
    }

    public function setCuIdRetencionIvaItem(string $cuIdRetencionIvaItem): self
    {
        $this->cuIdRetencionIvaItem = $cuIdRetencionIvaItem;

        return $this;
    }

    public function getFaRetencionIvaItemPorcentaje(): ?float
    {
        return $this->faRetencionIvaItemPorcentaje;
    }

    public function setFaRetencionIvaItemPorcentaje(float $faRetencionIvaItemPorcentaje): self
    {
        $this->faRetencionIvaItemPorcentaje = $faRetencionIvaItemPorcentaje;

        return $this;
    }

    public function getFaRetencionIvaItemValor(): ?float
    {
        return $this->faRetencionIvaItemValor;
    }

    public function setFaRetencionIvaItemValor(float $faRetencionIvaItemValor): self
    {
        $this->faRetencionIvaItemValor = $faRetencionIvaItemValor;

        return $this;
    }

    public function getCuIdRetencionFuenteServicio(): ?string
    {
        return $this->cuIdRetencionFuenteServicio;
    }

    public function setCuIdRetencionFuenteServicio(string $cuIdRetencionFuenteServicio): self
    {
        $this->cuIdRetencionFuenteServicio = $cuIdRetencionFuenteServicio;

        return $this;
    }

    public function getFaRetencionFuenteServicioPorcentaje(): ?float
    {
        return $this->faRetencionFuenteServicioPorcentaje;
    }

    public function setFaRetencionFuenteServicioPorcentaje(float $faRetencionFuenteServicioPorcentaje): self
    {
        $this->faRetencionFuenteServicioPorcentaje = $faRetencionFuenteServicioPorcentaje;

        return $this;
    }

    public function getFaRetencionFuenteServicioValor(): ?float
    {
        return $this->faRetencionFuenteServicioValor;
    }

    public function setFaRetencionFuenteServicioValor(float $faRetencionFuenteServicioValor): self
    {
        $this->faRetencionFuenteServicioValor = $faRetencionFuenteServicioValor;

        return $this;
    }

    public function getCuIdRetencionIvaServicio(): ?string
    {
        return $this->cuIdRetencionIvaServicio;
    }

    public function setCuIdRetencionIvaServicio(string $cuIdRetencionIvaServicio): self
    {
        $this->cuIdRetencionIvaServicio = $cuIdRetencionIvaServicio;

        return $this;
    }

    public function getFaRetencionIvaServicioPorcentaje(): ?float
    {
        return $this->faRetencionIvaServicioPorcentaje;
    }

    public function setFaRetencionIvaServicioPorcentaje(float $faRetencionIvaServicioPorcentaje): self
    {
        $this->faRetencionIvaServicioPorcentaje = $faRetencionIvaServicioPorcentaje;

        return $this;
    }

    public function getFaRetencionIvaServicioValor(): ?float
    {
        return $this->faRetencionIvaServicioValor;
    }

    public function setFaRetencionIvaServicioValor(float $faRetencionIvaServicioValor): self
    {
        $this->faRetencionIvaServicioValor = $faRetencionIvaServicioValor;

        return $this;
    }

    public function getTrId(): ?string
    {
        return $this->trId;
    }

    public function setTrId(string $trId): self
    {
        $this->trId = $trId;

        return $this;
    }

    public function getFaGuia(): ?string
    {
        return $this->faGuia;
    }

    public function setFaGuia(string $faGuia): self
    {
        $this->faGuia = $faGuia;

        return $this;
    }

    public function getFaHaceRetencion(): ?string
    {
        return $this->faHaceRetencion;
    }

    public function setFaHaceRetencion(string $faHaceRetencion): self
    {
        $this->faHaceRetencion = $faHaceRetencion;

        return $this;
    }

    public function getFaRetencionNumero(): ?string
    {
        return $this->faRetencionNumero;
    }

    public function setFaRetencionNumero(string $faRetencionNumero): self
    {
        $this->faRetencionNumero = $faRetencionNumero;

        return $this;
    }

    public function getCuIdProveedor(): ?string
    {
        return $this->cuIdProveedor;
    }

    public function setCuIdProveedor(string $cuIdProveedor): self
    {
        $this->cuIdProveedor = $cuIdProveedor;

        return $this;
    }

    public function getCuIdIva(): ?string
    {
        return $this->cuIdIva;
    }

    public function setCuIdIva(string $cuIdIva): self
    {
        $this->cuIdIva = $cuIdIva;

        return $this;
    }

    public function getCuIdDescuento(): ?string
    {
        return $this->cuIdDescuento;
    }

    public function setCuIdDescuento(string $cuIdDescuento): self
    {
        $this->cuIdDescuento = $cuIdDescuento;

        return $this;
    }

    public function getCuIdFlete(): ?string
    {
        return $this->cuIdFlete;
    }

    public function setCuIdFlete(string $cuIdFlete): self
    {
        $this->cuIdFlete = $cuIdFlete;

        return $this;
    }

    public function getPeIdClienteCancela(): ?string
    {
        return $this->peIdClienteCancela;
    }

    public function setPeIdClienteCancela(string $peIdClienteCancela): self
    {
        $this->peIdClienteCancela = $peIdClienteCancela;

        return $this;
    }

    public function getPeTipoClienteCancela(): ?string
    {
        return $this->peTipoClienteCancela;
    }

    public function setPeTipoClienteCancela(string $peTipoClienteCancela): self
    {
        $this->peTipoClienteCancela = $peTipoClienteCancela;

        return $this;
    }

    public function getItId(): ?string
    {
        return $this->itId;
    }

    public function setItId(string $itId): self
    {
        $this->itId = $itId;

        return $this;
    }

    public function getFaDescuentoPorcentaje(): ?float
    {
        return $this->faDescuentoPorcentaje;
    }

    public function setFaDescuentoPorcentaje(float $faDescuentoPorcentaje): self
    {
        $this->faDescuentoPorcentaje = $faDescuentoPorcentaje;

        return $this;
    }

    public function getFaNumeroSecundario(): ?string
    {
        return $this->faNumeroSecundario;
    }

    public function setFaNumeroSecundario(string $faNumeroSecundario): self
    {
        $this->faNumeroSecundario = $faNumeroSecundario;

        return $this;
    }

    public function getFaIce(): ?float
    {
        return $this->faIce;
    }

    public function setFaIce(float $faIce): self
    {
        $this->faIce = $faIce;

        return $this;
    }

    public function getFaAtSecuencialTransaccion(): ?string
    {
        return $this->faAtSecuencialTransaccion;
    }

    public function setFaAtSecuencialTransaccion(string $faAtSecuencialTransaccion): self
    {
        $this->faAtSecuencialTransaccion = $faAtSecuencialTransaccion;

        return $this;
    }

    public function getFaAtSustentoTributario(): ?string
    {
        return $this->faAtSustentoTributario;
    }

    public function setFaAtSustentoTributario(string $faAtSustentoTributario): self
    {
        $this->faAtSustentoTributario = $faAtSustentoTributario;

        return $this;
    }

    public function getFaAtTipoComprobante(): ?string
    {
        return $this->faAtTipoComprobante;
    }

    public function setFaAtTipoComprobante(string $faAtTipoComprobante): self
    {
        $this->faAtTipoComprobante = $faAtTipoComprobante;

        return $this;
    }

    public function getFaAtFacEstablecimiento(): ?string
    {
        return $this->faAtFacEstablecimiento;
    }

    public function setFaAtFacEstablecimiento(string $faAtFacEstablecimiento): self
    {
        $this->faAtFacEstablecimiento = $faAtFacEstablecimiento;

        return $this;
    }

    public function getFaAtFacPuntoemision(): ?string
    {
        return $this->faAtFacPuntoemision;
    }

    public function setFaAtFacPuntoemision(string $faAtFacPuntoemision): self
    {
        $this->faAtFacPuntoemision = $faAtFacPuntoemision;

        return $this;
    }

    public function getFaAtFacAutorizacion(): ?string
    {
        return $this->faAtFacAutorizacion;
    }

    public function setFaAtFacAutorizacion(string $faAtFacAutorizacion): self
    {
        $this->faAtFacAutorizacion = $faAtFacAutorizacion;

        return $this;
    }

    public function getFaAtFacCaduca(): ?\DateTimeInterface
    {
        return $this->faAtFacCaduca;
    }

    public function setFaAtFacCaduca(\DateTimeInterface $faAtFacCaduca): self
    {
        $this->faAtFacCaduca = $faAtFacCaduca;

        return $this;
    }

    public function getFaAtConvenioDobleTributacion(): ?string
    {
        return $this->faAtConvenioDobleTributacion;
    }

    public function setFaAtConvenioDobleTributacion(string $faAtConvenioDobleTributacion): self
    {
        $this->faAtConvenioDobleTributacion = $faAtConvenioDobleTributacion;

        return $this;
    }

    public function getFaAtIvaPresuntivo(): ?string
    {
        return $this->faAtIvaPresuntivo;
    }

    public function setFaAtIvaPresuntivo(string $faAtIvaPresuntivo): self
    {
        $this->faAtIvaPresuntivo = $faAtIvaPresuntivo;

        return $this;
    }

    public function getFaAtRetencionPresuntivo(): ?string
    {
        return $this->faAtRetencionPresuntivo;
    }

    public function setFaAtRetencionPresuntivo(string $faAtRetencionPresuntivo): self
    {
        $this->faAtRetencionPresuntivo = $faAtRetencionPresuntivo;

        return $this;
    }

    public function getFaAbonoCustodia(): ?float
    {
        return $this->faAbonoCustodia;
    }

    public function setFaAbonoCustodia(float $faAbonoCustodia): self
    {
        $this->faAbonoCustodia = $faAbonoCustodia;

        return $this;
    }

    public function getMaId(): ?string
    {
        return $this->maId;
    }

    public function setMaId(string $maId): self
    {
        $this->maId = $maId;

        return $this;
    }

    public function getTrIdRetencionFuenteItem(): ?string
    {
        return $this->trIdRetencionFuenteItem;
    }

    public function setTrIdRetencionFuenteItem(string $trIdRetencionFuenteItem): self
    {
        $this->trIdRetencionFuenteItem = $trIdRetencionFuenteItem;

        return $this;
    }

    public function getFaTipoGastoImportacion(): ?string
    {
        return $this->faTipoGastoImportacion;
    }

    public function setFaTipoGastoImportacion(string $faTipoGastoImportacion): self
    {
        $this->faTipoGastoImportacion = $faTipoGastoImportacion;

        return $this;
    }

    public function getCuIdImportacion(): ?string
    {
        return $this->cuIdImportacion;
    }

    public function setCuIdImportacion(string $cuIdImportacion): self
    {
        $this->cuIdImportacion = $cuIdImportacion;

        return $this;
    }

    public function getFaAtImportacionDistrito(): ?string
    {
        return $this->faAtImportacionDistrito;
    }

    public function setFaAtImportacionDistrito(string $faAtImportacionDistrito): self
    {
        $this->faAtImportacionDistrito = $faAtImportacionDistrito;

        return $this;
    }

    public function getFaAtImportacionAnio(): ?string
    {
        return $this->faAtImportacionAnio;
    }

    public function setFaAtImportacionAnio(string $faAtImportacionAnio): self
    {
        $this->faAtImportacionAnio = $faAtImportacionAnio;

        return $this;
    }

    public function getFaAtImportacionRegimen(): ?string
    {
        return $this->faAtImportacionRegimen;
    }

    public function setFaAtImportacionRegimen(string $faAtImportacionRegimen): self
    {
        $this->faAtImportacionRegimen = $faAtImportacionRegimen;

        return $this;
    }

    public function getFaAtImportacionCorrelativo(): ?string
    {
        return $this->faAtImportacionCorrelativo;
    }

    public function setFaAtImportacionCorrelativo(string $faAtImportacionCorrelativo): self
    {
        $this->faAtImportacionCorrelativo = $faAtImportacionCorrelativo;

        return $this;
    }

    public function getFaAtImportacionVerificador(): ?string
    {
        return $this->faAtImportacionVerificador;
    }

    public function setFaAtImportacionVerificador(string $faAtImportacionVerificador): self
    {
        $this->faAtImportacionVerificador = $faAtImportacionVerificador;

        return $this;
    }

    public function getFaAtImportacionFechaLiquida(): ?\DateTimeInterface
    {
        return $this->faAtImportacionFechaLiquida;
    }

    public function setFaAtImportacionFechaLiquida(\DateTimeInterface $faAtImportacionFechaLiquida): self
    {
        $this->faAtImportacionFechaLiquida = $faAtImportacionFechaLiquida;

        return $this;
    }

    public function getFaImportacionTipo(): ?string
    {
        return $this->faImportacionTipo;
    }

    public function setFaImportacionTipo(string $faImportacionTipo): self
    {
        $this->faImportacionTipo = $faImportacionTipo;

        return $this;
    }

    public function getFaImportacionValorCif(): ?float
    {
        return $this->faImportacionValorCif;
    }

    public function setFaImportacionValorCif(float $faImportacionValorCif): self
    {
        $this->faImportacionValorCif = $faImportacionValorCif;

        return $this;
    }

    public function getFaDocumentoProcesado(): ?bool
    {
        return $this->faDocumentoProcesado;
    }

    public function setFaDocumentoProcesado(bool $faDocumentoProcesado): self
    {
        $this->faDocumentoProcesado = $faDocumentoProcesado;

        return $this;
    }

    public function getFaBaseRetItem(): ?float
    {
        return $this->faBaseRetItem;
    }

    public function setFaBaseRetItem(float $faBaseRetItem): self
    {
        $this->faBaseRetItem = $faBaseRetItem;

        return $this;
    }

    public function getFaBaseRetServicio(): ?float
    {
        return $this->faBaseRetServicio;
    }

    public function setFaBaseRetServicio(float $faBaseRetServicio): self
    {
        $this->faBaseRetServicio = $faBaseRetServicio;

        return $this;
    }

    public function getFaContacto(): ?string
    {
        return $this->faContacto;
    }

    public function setFaContacto(string $faContacto): self
    {
        $this->faContacto = $faContacto;

        return $this;
    }

    public function getFaManejaCreditoTributario(): ?int
    {
        return $this->faManejaCreditoTributario;
    }

    public function setFaManejaCreditoTributario(int $faManejaCreditoTributario): self
    {
        $this->faManejaCreditoTributario = $faManejaCreditoTributario;

        return $this;
    }

    public function getFaDescuentoPorcentaje1(): ?float
    {
        return $this->faDescuentoPorcentaje1;
    }

    public function setFaDescuentoPorcentaje1(float $faDescuentoPorcentaje1): self
    {
        $this->faDescuentoPorcentaje1 = $faDescuentoPorcentaje1;

        return $this;
    }

    public function getFaDescuentoValor1(): ?float
    {
        return $this->faDescuentoValor1;
    }

    public function setFaDescuentoValor1(float $faDescuentoValor1): self
    {
        $this->faDescuentoValor1 = $faDescuentoValor1;

        return $this;
    }

    public function getFaDescuentoPorcentaje2(): ?float
    {
        return $this->faDescuentoPorcentaje2;
    }

    public function setFaDescuentoPorcentaje2(float $faDescuentoPorcentaje2): self
    {
        $this->faDescuentoPorcentaje2 = $faDescuentoPorcentaje2;

        return $this;
    }

    public function getFaDescuentoValor2(): ?float
    {
        return $this->faDescuentoValor2;
    }

    public function setFaDescuentoValor2(float $faDescuentoValor2): self
    {
        $this->faDescuentoValor2 = $faDescuentoValor2;

        return $this;
    }

    public function getFaDescuentoPorcentaje3(): ?float
    {
        return $this->faDescuentoPorcentaje3;
    }

    public function setFaDescuentoPorcentaje3(float $faDescuentoPorcentaje3): self
    {
        $this->faDescuentoPorcentaje3 = $faDescuentoPorcentaje3;

        return $this;
    }

    public function getFaDescuentoValor3(): ?float
    {
        return $this->faDescuentoValor3;
    }

    public function setFaDescuentoValor3(float $faDescuentoValor3): self
    {
        $this->faDescuentoValor3 = $faDescuentoValor3;

        return $this;
    }

    public function getFaOrigenModulo(): ?bool
    {
        return $this->faOrigenModulo;
    }

    public function setFaOrigenModulo(bool $faOrigenModulo): self
    {
        $this->faOrigenModulo = $faOrigenModulo;

        return $this;
    }

    public function getMpPrId(): ?string
    {
        return $this->mpPrId;
    }

    public function setMpPrId(string $mpPrId): self
    {
        $this->mpPrId = $mpPrId;

        return $this;
    }

    public function getFaNumeroOrdencompra(): ?string
    {
        return $this->faNumeroOrdencompra;
    }

    public function setFaNumeroOrdencompra(string $faNumeroOrdencompra): self
    {
        $this->faNumeroOrdencompra = $faNumeroOrdencompra;

        return $this;
    }

    public function getFaId2(): ?string
    {
        return $this->faId2;
    }

    public function setFaId2(string $faId2): self
    {
        $this->faId2 = $faId2;

        return $this;
    }

    public function getFaNumeroDespacho(): ?string
    {
        return $this->faNumeroDespacho;
    }

    public function setFaNumeroDespacho(string $faNumeroDespacho): self
    {
        $this->faNumeroDespacho = $faNumeroDespacho;

        return $this;
    }

    public function getFaDatoTarjetasRecap(): ?string
    {
        return $this->faDatoTarjetasRecap;
    }

    public function setFaDatoTarjetasRecap(string $faDatoTarjetasRecap): self
    {
        $this->faDatoTarjetasRecap = $faDatoTarjetasRecap;

        return $this;
    }

    public function getFaAtPagoLocalExterior(): ?string
    {
        return $this->faAtPagoLocalExterior;
    }

    public function setFaAtPagoLocalExterior(string $faAtPagoLocalExterior): self
    {
        $this->faAtPagoLocalExterior = $faAtPagoLocalExterior;

        return $this;
    }

    public function getFaAtPagoPais(): ?string
    {
        return $this->faAtPagoPais;
    }

    public function setFaAtPagoPais(string $faAtPagoPais): self
    {
        $this->faAtPagoPais = $faAtPagoPais;

        return $this;
    }

    public function getFaAtPagoExteriorNormalegal(): ?string
    {
        return $this->faAtPagoExteriorNormalegal;
    }

    public function setFaAtPagoExteriorNormalegal(string $faAtPagoExteriorNormalegal): self
    {
        $this->faAtPagoExteriorNormalegal = $faAtPagoExteriorNormalegal;

        return $this;
    }

    public function getFaAtFormapago(): ?string
    {
        return $this->faAtFormapago;
    }

    public function setFaAtFormapago(string $faAtFormapago): self
    {
        $this->faAtFormapago = $faAtFormapago;

        return $this;
    }

    public function getFaAtImportacionTipo(): ?string
    {
        return $this->faAtImportacionTipo;
    }

    public function setFaAtImportacionTipo(string $faAtImportacionTipo): self
    {
        $this->faAtImportacionTipo = $faAtImportacionTipo;

        return $this;
    }

    public function getFaAtImportacionTransporte(): ?string
    {
        return $this->faAtImportacionTransporte;
    }

    public function setFaAtImportacionTransporte(string $faAtImportacionTransporte): self
    {
        $this->faAtImportacionTransporte = $faAtImportacionTransporte;

        return $this;
    }

    public function getCcId(): ?string
    {
        return $this->ccId;
    }

    public function setCcId(string $ccId): self
    {
        $this->ccId = $ccId;

        return $this;
    }

    public function getFaImportacionModoTransporte(): ?string
    {
        return $this->faImportacionModoTransporte;
    }

    public function setFaImportacionModoTransporte(string $faImportacionModoTransporte): self
    {
        $this->faImportacionModoTransporte = $faImportacionModoTransporte;

        return $this;
    }

    public function getFaImportacionPuertoCarga(): ?string
    {
        return $this->faImportacionPuertoCarga;
    }

    public function setFaImportacionPuertoCarga(string $faImportacionPuertoCarga): self
    {
        $this->faImportacionPuertoCarga = $faImportacionPuertoCarga;

        return $this;
    }

    public function getFaImportacionPuertoDestino(): ?string
    {
        return $this->faImportacionPuertoDestino;
    }

    public function setFaImportacionPuertoDestino(string $faImportacionPuertoDestino): self
    {
        $this->faImportacionPuertoDestino = $faImportacionPuertoDestino;

        return $this;
    }

    public function getFaImportacionIcoterm(): ?string
    {
        return $this->faImportacionIcoterm;
    }

    public function setFaImportacionIcoterm(string $faImportacionIcoterm): self
    {
        $this->faImportacionIcoterm = $faImportacionIcoterm;

        return $this;
    }

    public function getFaImportacionFechaentrega(): ?\DateTimeInterface
    {
        return $this->faImportacionFechaentrega;
    }

    public function setFaImportacionFechaentrega(\DateTimeInterface $faImportacionFechaentrega): self
    {
        $this->faImportacionFechaentrega = $faImportacionFechaentrega;

        return $this;
    }

    public function getFaAtFechaAutorizacion(): ?\DateTimeInterface
    {
        return $this->faAtFechaAutorizacion;
    }

    public function setFaAtFechaAutorizacion(\DateTimeInterface $faAtFechaAutorizacion): self
    {
        $this->faAtFechaAutorizacion = $faAtFechaAutorizacion;

        return $this;
    }

    public function getFaGuiaremisionEstablecimientoDestino(): ?string
    {
        return $this->faGuiaremisionEstablecimientoDestino;
    }

    public function setFaGuiaremisionEstablecimientoDestino(string $faGuiaremisionEstablecimientoDestino): self
    {
        $this->faGuiaremisionEstablecimientoDestino = $faGuiaremisionEstablecimientoDestino;

        return $this;
    }

    public function getFaGuiaremisionRuta(): ?string
    {
        return $this->faGuiaremisionRuta;
    }

    public function setFaGuiaremisionRuta(string $faGuiaremisionRuta): self
    {
        $this->faGuiaremisionRuta = $faGuiaremisionRuta;

        return $this;
    }

    public function getFaGuiaremisionDireccionPartida(): ?string
    {
        return $this->faGuiaremisionDireccionPartida;
    }

    public function setFaGuiaremisionDireccionPartida(string $faGuiaremisionDireccionPartida): self
    {
        $this->faGuiaremisionDireccionPartida = $faGuiaremisionDireccionPartida;

        return $this;
    }

    public function getFaGuiaremisionDireccionDestino(): ?string
    {
        return $this->faGuiaremisionDireccionDestino;
    }

    public function setFaGuiaremisionDireccionDestino(string $faGuiaremisionDireccionDestino): self
    {
        $this->faGuiaremisionDireccionDestino = $faGuiaremisionDireccionDestino;

        return $this;
    }

    public function getFaIvaCodigo(): ?string
    {
        return $this->faIvaCodigo;
    }

    public function setFaIvaCodigo(string $faIvaCodigo): self
    {
        $this->faIvaCodigo = $faIvaCodigo;

        return $this;
    }

    public function getPeIdAdicional(): ?string
    {
        return $this->peIdAdicional;
    }

    public function setPeIdAdicional(string $peIdAdicional): self
    {
        $this->peIdAdicional = $peIdAdicional;

        return $this;
    }

    public function getFaAtRegimenFiscal(): ?string
    {
        return $this->faAtRegimenFiscal;
    }

    public function setFaAtRegimenFiscal(string $faAtRegimenFiscal): self
    {
        $this->faAtRegimenFiscal = $faAtRegimenFiscal;

        return $this;
    }

    public function getFaFechaRegistro(): ?\DateTimeInterface
    {
        return $this->faFechaRegistro;
    }

    public function setFaFechaRegistro(\DateTimeInterface $faFechaRegistro): self
    {
        $this->faFechaRegistro = $faFechaRegistro;

        return $this;
    }

    public function getFgId(): ?string
    {
        return $this->fgId;
    }

    public function setFgId(string $fgId): self
    {
        $this->fgId = $fgId;

        return $this;
    }

    public function getFaNotas(): ?string
    {
        return $this->faNotas;
    }

    public function setFaNotas(?string $faNotas): self
    {
        $this->faNotas = $faNotas;

        return $this;
    }

    public function getFaAtExportacionTipoIngreso(): ?string
    {
        return $this->faAtExportacionTipoIngreso;
    }

    public function setFaAtExportacionTipoIngreso(string $faAtExportacionTipoIngreso): self
    {
        $this->faAtExportacionTipoIngreso = $faAtExportacionTipoIngreso;

        return $this;
    }

    public function getFaAtExportacionGravadoexterior(): ?string
    {
        return $this->faAtExportacionGravadoexterior;
    }

    public function setFaAtExportacionGravadoexterior(string $faAtExportacionGravadoexterior): self
    {
        $this->faAtExportacionGravadoexterior = $faAtExportacionGravadoexterior;

        return $this;
    }

    public function getFaAtExportacionValorgravadoexterior(): ?float
    {
        return $this->faAtExportacionValorgravadoexterior;
    }

    public function setFaAtExportacionValorgravadoexterior(float $faAtExportacionValorgravadoexterior): self
    {
        $this->faAtExportacionValorgravadoexterior = $faAtExportacionValorgravadoexterior;

        return $this;
    }

    public function getFaAtExportacionDenominacionRegimen(): ?string
    {
        return $this->faAtExportacionDenominacionRegimen;
    }

    public function setFaAtExportacionDenominacionRegimen(string $faAtExportacionDenominacionRegimen): self
    {
        $this->faAtExportacionDenominacionRegimen = $faAtExportacionDenominacionRegimen;

        return $this;
    }

    public function getFaImportacionValorFob(): ?float
    {
        return $this->faImportacionValorFob;
    }

    public function setFaImportacionValorFob(float $faImportacionValorFob): self
    {
        $this->faImportacionValorFob = $faImportacionValorFob;

        return $this;
    }

    public function getFaMonedaTipo(): ?string
    {
        return $this->faMonedaTipo;
    }

    public function setFaMonedaTipo(string $faMonedaTipo): self
    {
        $this->faMonedaTipo = $faMonedaTipo;

        return $this;
    }

    public function getFaMonedaValorCambio(): ?float
    {
        return $this->faMonedaValorCambio;
    }

    public function setFaMonedaValorCambio(float $faMonedaValorCambio): self
    {
        $this->faMonedaValorCambio = $faMonedaValorCambio;

        return $this;
    }

    public function getFaTipoDocumentoEmision(): ?bool
    {
        return $this->faTipoDocumentoEmision;
    }

    public function setFaTipoDocumentoEmision(bool $faTipoDocumentoEmision): self
    {
        $this->faTipoDocumentoEmision = $faTipoDocumentoEmision;

        return $this;
    }

    public function getFaNumeroOrdenfactura(): ?string
    {
        return $this->faNumeroOrdenfactura;
    }

    public function setFaNumeroOrdenfactura(string $faNumeroOrdenfactura): self
    {
        $this->faNumeroOrdenfactura = $faNumeroOrdenfactura;

        return $this;
    }

    public function getFaPlaca(): ?string
    {
        return $this->faPlaca;
    }

    public function setFaPlaca(string $faPlaca): self
    {
        $this->faPlaca = $faPlaca;

        return $this;
    }

    public function getFaManejaLote(): ?bool
    {
        return $this->faManejaLote;
    }

    public function setFaManejaLote(bool $faManejaLote): self
    {
        $this->faManejaLote = $faManejaLote;

        return $this;
    }


}
