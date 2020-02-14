<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcParametroImportacion
 *
 * @ORM\Table(name="gc_parametro_importacion")
 * @ORM\Entity
 */
class GcParametroImportacion
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
     * @ORM\Column(name="pi_imprime_importacion", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $piImprimeImportacion = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_impuesto_iva", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $piImpuestoIva = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_imprime_importacion_comprobante", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $piImprimeImportacionComprobante = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_impuesto_isd", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $piImpuestoIsd = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_imprime_importacion_archivo", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $piImprimeImportacionArchivo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_imprime_liquidacion_archivo", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $piImprimeLiquidacionArchivo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_fecha_embarque", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $piFechaEmbarque = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_fecha_embarque_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $piFechaEmbarqueLabel = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_fecha_arribo", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $piFechaArribo = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_fecha_arribo_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $piFechaArriboLabel = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_flete_origen", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $piValorFleteOrigen = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_flete_origen_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $piValorFleteOrigenLabel = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_flete_origen", type="bigint", nullable=false)
     */
    private $cuIdValorFleteOrigen = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_flete_internacional", type="bigint", nullable=false)
     */
    private $cuIdValorFleteInternacional = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_flete_destino", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $piValorFleteDestino = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_flete_destino_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $piValorFleteDestinoLabel = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_flete_destino", type="bigint", nullable=false)
     */
    private $cuIdValorFleteDestino = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_seguro_temporal", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $piValorSeguroTemporal = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_seguro_temporal_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $piValorSeguroTemporalLabel = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_seguro_temporal", type="bigint", nullable=false)
     */
    private $cuIdValorSeguroTemporal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_sustento", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $piValorSustento = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_sustento_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $piValorSustentoLabel = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_sustento", type="bigint", nullable=false)
     */
    private $cuIdValorSustento = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_derecho", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $piValorDerecho = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_derecho_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $piValorDerechoLabel = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_derecho", type="bigint", nullable=false)
     */
    private $cuIdValorDerecho = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_multa", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $piValorMulta = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_multa_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $piValorMultaLabel = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_multa", type="bigint", nullable=false)
     */
    private $cuIdValorMulta = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_bodega", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $piValorBodega = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_bodega_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $piValorBodegaLabel = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_bodega", type="bigint", nullable=false)
     */
    private $cuIdValorBodega = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_elaboracion_guia", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $piValorElaboracionGuia = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_elaboracion_guia_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $piValorElaboracionGuiaLabel = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_elaboracion_guia", type="bigint", nullable=false)
     */
    private $cuIdValorElaboracionGuia = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_permiso_importacion", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $piValorPermisoImportacion = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_permiso_importacion_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $piValorPermisoImportacionLabel = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_permiso_importacion", type="bigint", nullable=false)
     */
    private $cuIdValorPermisoImportacion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_verificadora", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $piValorVerificadora = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_verificadora_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $piValorVerificadoraLabel = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_verificadora", type="bigint", nullable=false)
     */
    private $cuIdValorVerificadora = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_impuesto_inen", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $piValorImpuestoInen = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_impuesto_inen_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $piValorImpuestoInenLabel = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_impuesto_inen", type="bigint", nullable=false)
     */
    private $cuIdValorImpuestoInen = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_impuesto_fodinfa", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $piValorImpuestoFodinfa = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_impuesto_fodinfa_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $piValorImpuestoFodinfaLabel = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_impuesto_fodinfa", type="bigint", nullable=false)
     */
    private $cuIdValorImpuestoFodinfa = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_impuesto_corpei", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $piValorImpuestoCorpei = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_impuesto_corpei_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $piValorImpuestoCorpeiLabel = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_impuesto_corpei", type="bigint", nullable=false)
     */
    private $cuIdValorImpuestoCorpei = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_impuesto_tasa_modernizacion", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $piValorImpuestoTasaModernizacion = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_impuesto_tasa_modernizacion_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $piValorImpuestoTasaModernizacionLabel = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_impuesto_tasa_modernizacion", type="bigint", nullable=false)
     */
    private $cuIdValorImpuestoTasaModernizacion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_gastos_bancarios", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $piValorGastosBancarios = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_gastos_bancarios_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $piValorGastosBancariosLabel = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_gastos_bancarios", type="bigint", nullable=false)
     */
    private $cuIdValorGastosBancarios = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_otros", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $piValorOtros = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_valor_otros_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $piValorOtrosLabel = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_otros", type="bigint", nullable=false)
     */
    private $cuIdValorOtros = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_fob", type="bigint", nullable=false)
     */
    private $cuIdValorFob = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_agente_afianzado", type="bigint", nullable=false)
     */
    private $cuIdValorAgenteAfianzado = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_seguro_definitivo", type="bigint", nullable=false)
     */
    private $cuIdValorSeguroDefinitivo = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_inspeccion", type="bigint", nullable=false)
     */
    private $cuIdValorInspeccion = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_id_agente_afianzado", type="bigint", nullable=false)
     */
    private $peIdAgenteAfianzado = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pi_factor_conversion_otra_moneda", type="float", precision=10, scale=0, nullable=false)
     */
    private $piFactorConversionOtraMoneda = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_moneda_conversion", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $piMonedaConversion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_impuesto_ice", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $piImpuestoIce = '\'N\'';

    /**
     * @var int
     *
     * @ORM\Column(name="tc_id_importacion", type="bigint", nullable=false)
     */
    private $tcIdImportacion = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_importacion_iva_item", type="bigint", nullable=false)
     */
    private $cuIdImportacionIvaItem = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_importacion_iva_servicio", type="bigint", nullable=false)
     */
    private $cuIdImportacionIvaServicio = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_importacion_ice", type="bigint", nullable=false)
     */
    private $cuIdImportacionIce = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_libre_uso", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $piLibreUso = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_at_sustento_tributario", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $piAtSustentoTributario = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_at_tipo_comprobante", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $piAtTipoComprobante = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pi_it_id_gastos_importacion", type="bigint", nullable=false)
     */
    private $piItIdGastosImportacion = '0';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getPiImprimeImportacion(): ?string
    {
        return $this->piImprimeImportacion;
    }

    public function setPiImprimeImportacion(string $piImprimeImportacion): self
    {
        $this->piImprimeImportacion = $piImprimeImportacion;

        return $this;
    }

    public function getPiImpuestoIva(): ?string
    {
        return $this->piImpuestoIva;
    }

    public function setPiImpuestoIva(string $piImpuestoIva): self
    {
        $this->piImpuestoIva = $piImpuestoIva;

        return $this;
    }

    public function getPiImprimeImportacionComprobante(): ?string
    {
        return $this->piImprimeImportacionComprobante;
    }

    public function setPiImprimeImportacionComprobante(string $piImprimeImportacionComprobante): self
    {
        $this->piImprimeImportacionComprobante = $piImprimeImportacionComprobante;

        return $this;
    }

    public function getPiImpuestoIsd(): ?string
    {
        return $this->piImpuestoIsd;
    }

    public function setPiImpuestoIsd(string $piImpuestoIsd): self
    {
        $this->piImpuestoIsd = $piImpuestoIsd;

        return $this;
    }

    public function getPiImprimeImportacionArchivo(): ?string
    {
        return $this->piImprimeImportacionArchivo;
    }

    public function setPiImprimeImportacionArchivo(string $piImprimeImportacionArchivo): self
    {
        $this->piImprimeImportacionArchivo = $piImprimeImportacionArchivo;

        return $this;
    }

    public function getPiImprimeLiquidacionArchivo(): ?string
    {
        return $this->piImprimeLiquidacionArchivo;
    }

    public function setPiImprimeLiquidacionArchivo(string $piImprimeLiquidacionArchivo): self
    {
        $this->piImprimeLiquidacionArchivo = $piImprimeLiquidacionArchivo;

        return $this;
    }

    public function getPiFechaEmbarque(): ?string
    {
        return $this->piFechaEmbarque;
    }

    public function setPiFechaEmbarque(string $piFechaEmbarque): self
    {
        $this->piFechaEmbarque = $piFechaEmbarque;

        return $this;
    }

    public function getPiFechaEmbarqueLabel(): ?string
    {
        return $this->piFechaEmbarqueLabel;
    }

    public function setPiFechaEmbarqueLabel(string $piFechaEmbarqueLabel): self
    {
        $this->piFechaEmbarqueLabel = $piFechaEmbarqueLabel;

        return $this;
    }

    public function getPiFechaArribo(): ?string
    {
        return $this->piFechaArribo;
    }

    public function setPiFechaArribo(string $piFechaArribo): self
    {
        $this->piFechaArribo = $piFechaArribo;

        return $this;
    }

    public function getPiFechaArriboLabel(): ?string
    {
        return $this->piFechaArriboLabel;
    }

    public function setPiFechaArriboLabel(string $piFechaArriboLabel): self
    {
        $this->piFechaArriboLabel = $piFechaArriboLabel;

        return $this;
    }

    public function getPiValorFleteOrigen(): ?string
    {
        return $this->piValorFleteOrigen;
    }

    public function setPiValorFleteOrigen(string $piValorFleteOrigen): self
    {
        $this->piValorFleteOrigen = $piValorFleteOrigen;

        return $this;
    }

    public function getPiValorFleteOrigenLabel(): ?string
    {
        return $this->piValorFleteOrigenLabel;
    }

    public function setPiValorFleteOrigenLabel(string $piValorFleteOrigenLabel): self
    {
        $this->piValorFleteOrigenLabel = $piValorFleteOrigenLabel;

        return $this;
    }

    public function getCuIdValorFleteOrigen(): ?string
    {
        return $this->cuIdValorFleteOrigen;
    }

    public function setCuIdValorFleteOrigen(string $cuIdValorFleteOrigen): self
    {
        $this->cuIdValorFleteOrigen = $cuIdValorFleteOrigen;

        return $this;
    }

    public function getCuIdValorFleteInternacional(): ?string
    {
        return $this->cuIdValorFleteInternacional;
    }

    public function setCuIdValorFleteInternacional(string $cuIdValorFleteInternacional): self
    {
        $this->cuIdValorFleteInternacional = $cuIdValorFleteInternacional;

        return $this;
    }

    public function getPiValorFleteDestino(): ?string
    {
        return $this->piValorFleteDestino;
    }

    public function setPiValorFleteDestino(string $piValorFleteDestino): self
    {
        $this->piValorFleteDestino = $piValorFleteDestino;

        return $this;
    }

    public function getPiValorFleteDestinoLabel(): ?string
    {
        return $this->piValorFleteDestinoLabel;
    }

    public function setPiValorFleteDestinoLabel(string $piValorFleteDestinoLabel): self
    {
        $this->piValorFleteDestinoLabel = $piValorFleteDestinoLabel;

        return $this;
    }

    public function getCuIdValorFleteDestino(): ?string
    {
        return $this->cuIdValorFleteDestino;
    }

    public function setCuIdValorFleteDestino(string $cuIdValorFleteDestino): self
    {
        $this->cuIdValorFleteDestino = $cuIdValorFleteDestino;

        return $this;
    }

    public function getPiValorSeguroTemporal(): ?string
    {
        return $this->piValorSeguroTemporal;
    }

    public function setPiValorSeguroTemporal(string $piValorSeguroTemporal): self
    {
        $this->piValorSeguroTemporal = $piValorSeguroTemporal;

        return $this;
    }

    public function getPiValorSeguroTemporalLabel(): ?string
    {
        return $this->piValorSeguroTemporalLabel;
    }

    public function setPiValorSeguroTemporalLabel(string $piValorSeguroTemporalLabel): self
    {
        $this->piValorSeguroTemporalLabel = $piValorSeguroTemporalLabel;

        return $this;
    }

    public function getCuIdValorSeguroTemporal(): ?string
    {
        return $this->cuIdValorSeguroTemporal;
    }

    public function setCuIdValorSeguroTemporal(string $cuIdValorSeguroTemporal): self
    {
        $this->cuIdValorSeguroTemporal = $cuIdValorSeguroTemporal;

        return $this;
    }

    public function getPiValorSustento(): ?string
    {
        return $this->piValorSustento;
    }

    public function setPiValorSustento(string $piValorSustento): self
    {
        $this->piValorSustento = $piValorSustento;

        return $this;
    }

    public function getPiValorSustentoLabel(): ?string
    {
        return $this->piValorSustentoLabel;
    }

    public function setPiValorSustentoLabel(string $piValorSustentoLabel): self
    {
        $this->piValorSustentoLabel = $piValorSustentoLabel;

        return $this;
    }

    public function getCuIdValorSustento(): ?string
    {
        return $this->cuIdValorSustento;
    }

    public function setCuIdValorSustento(string $cuIdValorSustento): self
    {
        $this->cuIdValorSustento = $cuIdValorSustento;

        return $this;
    }

    public function getPiValorDerecho(): ?string
    {
        return $this->piValorDerecho;
    }

    public function setPiValorDerecho(string $piValorDerecho): self
    {
        $this->piValorDerecho = $piValorDerecho;

        return $this;
    }

    public function getPiValorDerechoLabel(): ?string
    {
        return $this->piValorDerechoLabel;
    }

    public function setPiValorDerechoLabel(string $piValorDerechoLabel): self
    {
        $this->piValorDerechoLabel = $piValorDerechoLabel;

        return $this;
    }

    public function getCuIdValorDerecho(): ?string
    {
        return $this->cuIdValorDerecho;
    }

    public function setCuIdValorDerecho(string $cuIdValorDerecho): self
    {
        $this->cuIdValorDerecho = $cuIdValorDerecho;

        return $this;
    }

    public function getPiValorMulta(): ?string
    {
        return $this->piValorMulta;
    }

    public function setPiValorMulta(string $piValorMulta): self
    {
        $this->piValorMulta = $piValorMulta;

        return $this;
    }

    public function getPiValorMultaLabel(): ?string
    {
        return $this->piValorMultaLabel;
    }

    public function setPiValorMultaLabel(string $piValorMultaLabel): self
    {
        $this->piValorMultaLabel = $piValorMultaLabel;

        return $this;
    }

    public function getCuIdValorMulta(): ?string
    {
        return $this->cuIdValorMulta;
    }

    public function setCuIdValorMulta(string $cuIdValorMulta): self
    {
        $this->cuIdValorMulta = $cuIdValorMulta;

        return $this;
    }

    public function getPiValorBodega(): ?string
    {
        return $this->piValorBodega;
    }

    public function setPiValorBodega(string $piValorBodega): self
    {
        $this->piValorBodega = $piValorBodega;

        return $this;
    }

    public function getPiValorBodegaLabel(): ?string
    {
        return $this->piValorBodegaLabel;
    }

    public function setPiValorBodegaLabel(string $piValorBodegaLabel): self
    {
        $this->piValorBodegaLabel = $piValorBodegaLabel;

        return $this;
    }

    public function getCuIdValorBodega(): ?string
    {
        return $this->cuIdValorBodega;
    }

    public function setCuIdValorBodega(string $cuIdValorBodega): self
    {
        $this->cuIdValorBodega = $cuIdValorBodega;

        return $this;
    }

    public function getPiValorElaboracionGuia(): ?string
    {
        return $this->piValorElaboracionGuia;
    }

    public function setPiValorElaboracionGuia(string $piValorElaboracionGuia): self
    {
        $this->piValorElaboracionGuia = $piValorElaboracionGuia;

        return $this;
    }

    public function getPiValorElaboracionGuiaLabel(): ?string
    {
        return $this->piValorElaboracionGuiaLabel;
    }

    public function setPiValorElaboracionGuiaLabel(string $piValorElaboracionGuiaLabel): self
    {
        $this->piValorElaboracionGuiaLabel = $piValorElaboracionGuiaLabel;

        return $this;
    }

    public function getCuIdValorElaboracionGuia(): ?string
    {
        return $this->cuIdValorElaboracionGuia;
    }

    public function setCuIdValorElaboracionGuia(string $cuIdValorElaboracionGuia): self
    {
        $this->cuIdValorElaboracionGuia = $cuIdValorElaboracionGuia;

        return $this;
    }

    public function getPiValorPermisoImportacion(): ?string
    {
        return $this->piValorPermisoImportacion;
    }

    public function setPiValorPermisoImportacion(string $piValorPermisoImportacion): self
    {
        $this->piValorPermisoImportacion = $piValorPermisoImportacion;

        return $this;
    }

    public function getPiValorPermisoImportacionLabel(): ?string
    {
        return $this->piValorPermisoImportacionLabel;
    }

    public function setPiValorPermisoImportacionLabel(string $piValorPermisoImportacionLabel): self
    {
        $this->piValorPermisoImportacionLabel = $piValorPermisoImportacionLabel;

        return $this;
    }

    public function getCuIdValorPermisoImportacion(): ?string
    {
        return $this->cuIdValorPermisoImportacion;
    }

    public function setCuIdValorPermisoImportacion(string $cuIdValorPermisoImportacion): self
    {
        $this->cuIdValorPermisoImportacion = $cuIdValorPermisoImportacion;

        return $this;
    }

    public function getPiValorVerificadora(): ?string
    {
        return $this->piValorVerificadora;
    }

    public function setPiValorVerificadora(string $piValorVerificadora): self
    {
        $this->piValorVerificadora = $piValorVerificadora;

        return $this;
    }

    public function getPiValorVerificadoraLabel(): ?string
    {
        return $this->piValorVerificadoraLabel;
    }

    public function setPiValorVerificadoraLabel(string $piValorVerificadoraLabel): self
    {
        $this->piValorVerificadoraLabel = $piValorVerificadoraLabel;

        return $this;
    }

    public function getCuIdValorVerificadora(): ?string
    {
        return $this->cuIdValorVerificadora;
    }

    public function setCuIdValorVerificadora(string $cuIdValorVerificadora): self
    {
        $this->cuIdValorVerificadora = $cuIdValorVerificadora;

        return $this;
    }

    public function getPiValorImpuestoInen(): ?string
    {
        return $this->piValorImpuestoInen;
    }

    public function setPiValorImpuestoInen(string $piValorImpuestoInen): self
    {
        $this->piValorImpuestoInen = $piValorImpuestoInen;

        return $this;
    }

    public function getPiValorImpuestoInenLabel(): ?string
    {
        return $this->piValorImpuestoInenLabel;
    }

    public function setPiValorImpuestoInenLabel(string $piValorImpuestoInenLabel): self
    {
        $this->piValorImpuestoInenLabel = $piValorImpuestoInenLabel;

        return $this;
    }

    public function getCuIdValorImpuestoInen(): ?string
    {
        return $this->cuIdValorImpuestoInen;
    }

    public function setCuIdValorImpuestoInen(string $cuIdValorImpuestoInen): self
    {
        $this->cuIdValorImpuestoInen = $cuIdValorImpuestoInen;

        return $this;
    }

    public function getPiValorImpuestoFodinfa(): ?string
    {
        return $this->piValorImpuestoFodinfa;
    }

    public function setPiValorImpuestoFodinfa(string $piValorImpuestoFodinfa): self
    {
        $this->piValorImpuestoFodinfa = $piValorImpuestoFodinfa;

        return $this;
    }

    public function getPiValorImpuestoFodinfaLabel(): ?string
    {
        return $this->piValorImpuestoFodinfaLabel;
    }

    public function setPiValorImpuestoFodinfaLabel(string $piValorImpuestoFodinfaLabel): self
    {
        $this->piValorImpuestoFodinfaLabel = $piValorImpuestoFodinfaLabel;

        return $this;
    }

    public function getCuIdValorImpuestoFodinfa(): ?string
    {
        return $this->cuIdValorImpuestoFodinfa;
    }

    public function setCuIdValorImpuestoFodinfa(string $cuIdValorImpuestoFodinfa): self
    {
        $this->cuIdValorImpuestoFodinfa = $cuIdValorImpuestoFodinfa;

        return $this;
    }

    public function getPiValorImpuestoCorpei(): ?string
    {
        return $this->piValorImpuestoCorpei;
    }

    public function setPiValorImpuestoCorpei(string $piValorImpuestoCorpei): self
    {
        $this->piValorImpuestoCorpei = $piValorImpuestoCorpei;

        return $this;
    }

    public function getPiValorImpuestoCorpeiLabel(): ?string
    {
        return $this->piValorImpuestoCorpeiLabel;
    }

    public function setPiValorImpuestoCorpeiLabel(string $piValorImpuestoCorpeiLabel): self
    {
        $this->piValorImpuestoCorpeiLabel = $piValorImpuestoCorpeiLabel;

        return $this;
    }

    public function getCuIdValorImpuestoCorpei(): ?string
    {
        return $this->cuIdValorImpuestoCorpei;
    }

    public function setCuIdValorImpuestoCorpei(string $cuIdValorImpuestoCorpei): self
    {
        $this->cuIdValorImpuestoCorpei = $cuIdValorImpuestoCorpei;

        return $this;
    }

    public function getPiValorImpuestoTasaModernizacion(): ?string
    {
        return $this->piValorImpuestoTasaModernizacion;
    }

    public function setPiValorImpuestoTasaModernizacion(string $piValorImpuestoTasaModernizacion): self
    {
        $this->piValorImpuestoTasaModernizacion = $piValorImpuestoTasaModernizacion;

        return $this;
    }

    public function getPiValorImpuestoTasaModernizacionLabel(): ?string
    {
        return $this->piValorImpuestoTasaModernizacionLabel;
    }

    public function setPiValorImpuestoTasaModernizacionLabel(string $piValorImpuestoTasaModernizacionLabel): self
    {
        $this->piValorImpuestoTasaModernizacionLabel = $piValorImpuestoTasaModernizacionLabel;

        return $this;
    }

    public function getCuIdValorImpuestoTasaModernizacion(): ?string
    {
        return $this->cuIdValorImpuestoTasaModernizacion;
    }

    public function setCuIdValorImpuestoTasaModernizacion(string $cuIdValorImpuestoTasaModernizacion): self
    {
        $this->cuIdValorImpuestoTasaModernizacion = $cuIdValorImpuestoTasaModernizacion;

        return $this;
    }

    public function getPiValorGastosBancarios(): ?string
    {
        return $this->piValorGastosBancarios;
    }

    public function setPiValorGastosBancarios(string $piValorGastosBancarios): self
    {
        $this->piValorGastosBancarios = $piValorGastosBancarios;

        return $this;
    }

    public function getPiValorGastosBancariosLabel(): ?string
    {
        return $this->piValorGastosBancariosLabel;
    }

    public function setPiValorGastosBancariosLabel(string $piValorGastosBancariosLabel): self
    {
        $this->piValorGastosBancariosLabel = $piValorGastosBancariosLabel;

        return $this;
    }

    public function getCuIdValorGastosBancarios(): ?string
    {
        return $this->cuIdValorGastosBancarios;
    }

    public function setCuIdValorGastosBancarios(string $cuIdValorGastosBancarios): self
    {
        $this->cuIdValorGastosBancarios = $cuIdValorGastosBancarios;

        return $this;
    }

    public function getPiValorOtros(): ?string
    {
        return $this->piValorOtros;
    }

    public function setPiValorOtros(string $piValorOtros): self
    {
        $this->piValorOtros = $piValorOtros;

        return $this;
    }

    public function getPiValorOtrosLabel(): ?string
    {
        return $this->piValorOtrosLabel;
    }

    public function setPiValorOtrosLabel(string $piValorOtrosLabel): self
    {
        $this->piValorOtrosLabel = $piValorOtrosLabel;

        return $this;
    }

    public function getCuIdValorOtros(): ?string
    {
        return $this->cuIdValorOtros;
    }

    public function setCuIdValorOtros(string $cuIdValorOtros): self
    {
        $this->cuIdValorOtros = $cuIdValorOtros;

        return $this;
    }

    public function getCuIdValorFob(): ?string
    {
        return $this->cuIdValorFob;
    }

    public function setCuIdValorFob(string $cuIdValorFob): self
    {
        $this->cuIdValorFob = $cuIdValorFob;

        return $this;
    }

    public function getCuIdValorAgenteAfianzado(): ?string
    {
        return $this->cuIdValorAgenteAfianzado;
    }

    public function setCuIdValorAgenteAfianzado(string $cuIdValorAgenteAfianzado): self
    {
        $this->cuIdValorAgenteAfianzado = $cuIdValorAgenteAfianzado;

        return $this;
    }

    public function getCuIdValorSeguroDefinitivo(): ?string
    {
        return $this->cuIdValorSeguroDefinitivo;
    }

    public function setCuIdValorSeguroDefinitivo(string $cuIdValorSeguroDefinitivo): self
    {
        $this->cuIdValorSeguroDefinitivo = $cuIdValorSeguroDefinitivo;

        return $this;
    }

    public function getCuIdValorInspeccion(): ?string
    {
        return $this->cuIdValorInspeccion;
    }

    public function setCuIdValorInspeccion(string $cuIdValorInspeccion): self
    {
        $this->cuIdValorInspeccion = $cuIdValorInspeccion;

        return $this;
    }

    public function getPeIdAgenteAfianzado(): ?string
    {
        return $this->peIdAgenteAfianzado;
    }

    public function setPeIdAgenteAfianzado(string $peIdAgenteAfianzado): self
    {
        $this->peIdAgenteAfianzado = $peIdAgenteAfianzado;

        return $this;
    }

    public function getPiFactorConversionOtraMoneda(): ?float
    {
        return $this->piFactorConversionOtraMoneda;
    }

    public function setPiFactorConversionOtraMoneda(float $piFactorConversionOtraMoneda): self
    {
        $this->piFactorConversionOtraMoneda = $piFactorConversionOtraMoneda;

        return $this;
    }

    public function getPiMonedaConversion(): ?string
    {
        return $this->piMonedaConversion;
    }

    public function setPiMonedaConversion(string $piMonedaConversion): self
    {
        $this->piMonedaConversion = $piMonedaConversion;

        return $this;
    }

    public function getPiImpuestoIce(): ?string
    {
        return $this->piImpuestoIce;
    }

    public function setPiImpuestoIce(string $piImpuestoIce): self
    {
        $this->piImpuestoIce = $piImpuestoIce;

        return $this;
    }

    public function getTcIdImportacion(): ?string
    {
        return $this->tcIdImportacion;
    }

    public function setTcIdImportacion(string $tcIdImportacion): self
    {
        $this->tcIdImportacion = $tcIdImportacion;

        return $this;
    }

    public function getCuIdImportacionIvaItem(): ?string
    {
        return $this->cuIdImportacionIvaItem;
    }

    public function setCuIdImportacionIvaItem(string $cuIdImportacionIvaItem): self
    {
        $this->cuIdImportacionIvaItem = $cuIdImportacionIvaItem;

        return $this;
    }

    public function getCuIdImportacionIvaServicio(): ?string
    {
        return $this->cuIdImportacionIvaServicio;
    }

    public function setCuIdImportacionIvaServicio(string $cuIdImportacionIvaServicio): self
    {
        $this->cuIdImportacionIvaServicio = $cuIdImportacionIvaServicio;

        return $this;
    }

    public function getCuIdImportacionIce(): ?string
    {
        return $this->cuIdImportacionIce;
    }

    public function setCuIdImportacionIce(string $cuIdImportacionIce): self
    {
        $this->cuIdImportacionIce = $cuIdImportacionIce;

        return $this;
    }

    public function getPiLibreUso(): ?string
    {
        return $this->piLibreUso;
    }

    public function setPiLibreUso(string $piLibreUso): self
    {
        $this->piLibreUso = $piLibreUso;

        return $this;
    }

    public function getPiAtSustentoTributario(): ?string
    {
        return $this->piAtSustentoTributario;
    }

    public function setPiAtSustentoTributario(string $piAtSustentoTributario): self
    {
        $this->piAtSustentoTributario = $piAtSustentoTributario;

        return $this;
    }

    public function getPiAtTipoComprobante(): ?string
    {
        return $this->piAtTipoComprobante;
    }

    public function setPiAtTipoComprobante(string $piAtTipoComprobante): self
    {
        $this->piAtTipoComprobante = $piAtTipoComprobante;

        return $this;
    }

    public function getPiItIdGastosImportacion(): ?string
    {
        return $this->piItIdGastosImportacion;
    }

    public function setPiItIdGastosImportacion(string $piItIdGastosImportacion): self
    {
        $this->piItIdGastosImportacion = $piItIdGastosImportacion;

        return $this;
    }


}
