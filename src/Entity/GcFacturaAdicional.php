<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcFacturaAdicional
 *
 * @ORM\Table(name="gc_factura_adicional", indexes={@ORM\Index(name="indice_factura_original", columns={"em_id", "fa_id"})})
 * @ORM\Entity
 */
class GcFacturaAdicional
{
    /**
     * @var int
     *
     * @ORM\Column(name="fa_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $faId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_id", type="bigint", nullable=false)
     */
    private $peId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_id_agente_afianzado", type="bigint", nullable=false)
     */
    private $peIdAgenteAfianzado = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_ad_agente_afianzado_observacion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $faAdAgenteAfianzadoObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_numero", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $faNumero = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_tipo", type="string", length=3, nullable=false, options={"default"="'**'"})
     */
    private $faTipo = '\'**\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fa_ad_fecha", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $faAdFecha = '\'1800-01-01 00:00:01\'';

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
     * @var string
     *
     * @ORM\Column(name="fa_ad_estado_transaccion", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $faAdEstadoTransaccion = '\'C\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_ad_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $faAdEstado = '\'C\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_ad_observacion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $faAdObservacion = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_total", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdTotal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_ad_total_texto", type="string", length=150, nullable=false, options={"default"="'*'"})
     */
    private $faAdTotalTexto = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_factor_otra_moneda", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdFactorOtraMoneda = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_total_otra_moneda", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdTotalOtraMoneda = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_ad_numero_orden", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $faAdNumeroOrden = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_ad_numero_dui", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $faAdNumeroDui = '\'*\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fa_ad_fecha_embarque", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $faAdFechaEmbarque = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fa_ad_fecha_arribo", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $faAdFechaArribo = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fa_ad_fecha_efectiva", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $faAdFechaEfectiva = '\'1800-01-01 00:00:01\'';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_impuesto_isd", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdImpuestoIsd = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_fob", type="bigint", nullable=false)
     */
    private $cuIdValorFob = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_valor_flete_origen", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdValorFleteOrigen = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_flete_origen", type="bigint", nullable=false)
     */
    private $cuIdValorFleteOrigen = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_valor_flete_internacional", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdValorFleteInternacional = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_flete_internacional", type="bigint", nullable=false)
     */
    private $cuIdValorFleteInternacional = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_valor_flete_destino", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdValorFleteDestino = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_flete_destino", type="bigint", nullable=false)
     */
    private $cuIdValorFleteDestino = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_valor_agente_afianzado", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdValorAgenteAfianzado = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_agente_afianzado", type="bigint", nullable=false)
     */
    private $cuIdValorAgenteAfianzado = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_valor_seguro_temporal", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdValorSeguroTemporal = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_seguro_temporal", type="bigint", nullable=false)
     */
    private $cuIdValorSeguroTemporal = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_valor_seguro_definitivo", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdValorSeguroDefinitivo = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_seguro_definitivo", type="bigint", nullable=false)
     */
    private $cuIdValorSeguroDefinitivo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_valor_derecho", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdValorDerecho = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_derecho", type="bigint", nullable=false)
     */
    private $cuIdValorDerecho = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_valor_multa", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdValorMulta = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_multa", type="bigint", nullable=false)
     */
    private $cuIdValorMulta = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_valor_inspeccion", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdValorInspeccion = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_inspeccion", type="bigint", nullable=false)
     */
    private $cuIdValorInspeccion = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_valor_bodega", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdValorBodega = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_bodega", type="bigint", nullable=false)
     */
    private $cuIdValorBodega = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_valor_elaboracion_guia", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdValorElaboracionGuia = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_elaboracion_guia", type="bigint", nullable=false)
     */
    private $cuIdValorElaboracionGuia = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_valor_permiso_importacion", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdValorPermisoImportacion = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_permiso_importacion", type="bigint", nullable=false)
     */
    private $cuIdValorPermisoImportacion = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_valor_verificadora", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdValorVerificadora = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_verificadora", type="bigint", nullable=false)
     */
    private $cuIdValorVerificadora = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_valor_impuesto_inen", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdValorImpuestoInen = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_impuesto_inen", type="bigint", nullable=false)
     */
    private $cuIdValorImpuestoInen = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_valor_impuesto_fodinfa", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdValorImpuestoFodinfa = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_impuesto_fodinfa", type="bigint", nullable=false)
     */
    private $cuIdValorImpuestoFodinfa = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_valor_impuesto_corpei", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdValorImpuestoCorpei = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_impuesto_corpei", type="bigint", nullable=false)
     */
    private $cuIdValorImpuestoCorpei = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_valor_impuesto_tasa_modernizacion", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdValorImpuestoTasaModernizacion = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_impuesto_tasa_modernizacion", type="bigint", nullable=false)
     */
    private $cuIdValorImpuestoTasaModernizacion = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_valor_gastos_bancarios", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdValorGastosBancarios = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_gastos_bancarios", type="bigint", nullable=false)
     */
    private $cuIdValorGastosBancarios = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_valor_otros", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdValorOtros = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_otros", type="bigint", nullable=false)
     */
    private $cuIdValorOtros = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_valor_sustento", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdValorSustento = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_sustento", type="bigint", nullable=false)
     */
    private $cuIdValorSustento = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_impuesto_iva", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdImpuestoIva = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_impuesto_ice", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdImpuestoIce = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_ad_porcentaje_costos_adicionales", type="float", precision=10, scale=0, nullable=false)
     */
    private $faAdPorcentajeCostosAdicionales = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_ad_exp_lugar_incoterm", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $faAdExpLugarIncoterm = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_ad_exp_puerto_destino", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $faAdExpPuertoDestino = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_ad_exp_pais_destino", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $faAdExpPaisDestino = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_ad_exp_pais_adquisicion", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $faAdExpPaisAdquisicion = '\'\'';

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

    public function getPeId(): ?string
    {
        return $this->peId;
    }

    public function setPeId(string $peId): self
    {
        $this->peId = $peId;

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

    public function getFaAdAgenteAfianzadoObservacion(): ?string
    {
        return $this->faAdAgenteAfianzadoObservacion;
    }

    public function setFaAdAgenteAfianzadoObservacion(string $faAdAgenteAfianzadoObservacion): self
    {
        $this->faAdAgenteAfianzadoObservacion = $faAdAgenteAfianzadoObservacion;

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

    public function getFaAdFecha(): ?\DateTimeInterface
    {
        return $this->faAdFecha;
    }

    public function setFaAdFecha(\DateTimeInterface $faAdFecha): self
    {
        $this->faAdFecha = $faAdFecha;

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

    public function getFaAdEstadoTransaccion(): ?string
    {
        return $this->faAdEstadoTransaccion;
    }

    public function setFaAdEstadoTransaccion(string $faAdEstadoTransaccion): self
    {
        $this->faAdEstadoTransaccion = $faAdEstadoTransaccion;

        return $this;
    }

    public function getFaAdEstado(): ?string
    {
        return $this->faAdEstado;
    }

    public function setFaAdEstado(string $faAdEstado): self
    {
        $this->faAdEstado = $faAdEstado;

        return $this;
    }

    public function getFaAdObservacion(): ?string
    {
        return $this->faAdObservacion;
    }

    public function setFaAdObservacion(string $faAdObservacion): self
    {
        $this->faAdObservacion = $faAdObservacion;

        return $this;
    }

    public function getFaAdTotal(): ?float
    {
        return $this->faAdTotal;
    }

    public function setFaAdTotal(float $faAdTotal): self
    {
        $this->faAdTotal = $faAdTotal;

        return $this;
    }

    public function getFaAdTotalTexto(): ?string
    {
        return $this->faAdTotalTexto;
    }

    public function setFaAdTotalTexto(string $faAdTotalTexto): self
    {
        $this->faAdTotalTexto = $faAdTotalTexto;

        return $this;
    }

    public function getFaAdFactorOtraMoneda(): ?float
    {
        return $this->faAdFactorOtraMoneda;
    }

    public function setFaAdFactorOtraMoneda(float $faAdFactorOtraMoneda): self
    {
        $this->faAdFactorOtraMoneda = $faAdFactorOtraMoneda;

        return $this;
    }

    public function getFaAdTotalOtraMoneda(): ?float
    {
        return $this->faAdTotalOtraMoneda;
    }

    public function setFaAdTotalOtraMoneda(float $faAdTotalOtraMoneda): self
    {
        $this->faAdTotalOtraMoneda = $faAdTotalOtraMoneda;

        return $this;
    }

    public function getFaAdNumeroOrden(): ?string
    {
        return $this->faAdNumeroOrden;
    }

    public function setFaAdNumeroOrden(string $faAdNumeroOrden): self
    {
        $this->faAdNumeroOrden = $faAdNumeroOrden;

        return $this;
    }

    public function getFaAdNumeroDui(): ?string
    {
        return $this->faAdNumeroDui;
    }

    public function setFaAdNumeroDui(string $faAdNumeroDui): self
    {
        $this->faAdNumeroDui = $faAdNumeroDui;

        return $this;
    }

    public function getFaAdFechaEmbarque(): ?\DateTimeInterface
    {
        return $this->faAdFechaEmbarque;
    }

    public function setFaAdFechaEmbarque(\DateTimeInterface $faAdFechaEmbarque): self
    {
        $this->faAdFechaEmbarque = $faAdFechaEmbarque;

        return $this;
    }

    public function getFaAdFechaArribo(): ?\DateTimeInterface
    {
        return $this->faAdFechaArribo;
    }

    public function setFaAdFechaArribo(\DateTimeInterface $faAdFechaArribo): self
    {
        $this->faAdFechaArribo = $faAdFechaArribo;

        return $this;
    }

    public function getFaAdFechaEfectiva(): ?\DateTimeInterface
    {
        return $this->faAdFechaEfectiva;
    }

    public function setFaAdFechaEfectiva(\DateTimeInterface $faAdFechaEfectiva): self
    {
        $this->faAdFechaEfectiva = $faAdFechaEfectiva;

        return $this;
    }

    public function getFaAdImpuestoIsd(): ?float
    {
        return $this->faAdImpuestoIsd;
    }

    public function setFaAdImpuestoIsd(float $faAdImpuestoIsd): self
    {
        $this->faAdImpuestoIsd = $faAdImpuestoIsd;

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

    public function getFaAdValorFleteOrigen(): ?float
    {
        return $this->faAdValorFleteOrigen;
    }

    public function setFaAdValorFleteOrigen(float $faAdValorFleteOrigen): self
    {
        $this->faAdValorFleteOrigen = $faAdValorFleteOrigen;

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

    public function getFaAdValorFleteInternacional(): ?float
    {
        return $this->faAdValorFleteInternacional;
    }

    public function setFaAdValorFleteInternacional(float $faAdValorFleteInternacional): self
    {
        $this->faAdValorFleteInternacional = $faAdValorFleteInternacional;

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

    public function getFaAdValorFleteDestino(): ?float
    {
        return $this->faAdValorFleteDestino;
    }

    public function setFaAdValorFleteDestino(float $faAdValorFleteDestino): self
    {
        $this->faAdValorFleteDestino = $faAdValorFleteDestino;

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

    public function getFaAdValorAgenteAfianzado(): ?float
    {
        return $this->faAdValorAgenteAfianzado;
    }

    public function setFaAdValorAgenteAfianzado(float $faAdValorAgenteAfianzado): self
    {
        $this->faAdValorAgenteAfianzado = $faAdValorAgenteAfianzado;

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

    public function getFaAdValorSeguroTemporal(): ?float
    {
        return $this->faAdValorSeguroTemporal;
    }

    public function setFaAdValorSeguroTemporal(float $faAdValorSeguroTemporal): self
    {
        $this->faAdValorSeguroTemporal = $faAdValorSeguroTemporal;

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

    public function getFaAdValorSeguroDefinitivo(): ?float
    {
        return $this->faAdValorSeguroDefinitivo;
    }

    public function setFaAdValorSeguroDefinitivo(float $faAdValorSeguroDefinitivo): self
    {
        $this->faAdValorSeguroDefinitivo = $faAdValorSeguroDefinitivo;

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

    public function getFaAdValorDerecho(): ?float
    {
        return $this->faAdValorDerecho;
    }

    public function setFaAdValorDerecho(float $faAdValorDerecho): self
    {
        $this->faAdValorDerecho = $faAdValorDerecho;

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

    public function getFaAdValorMulta(): ?float
    {
        return $this->faAdValorMulta;
    }

    public function setFaAdValorMulta(float $faAdValorMulta): self
    {
        $this->faAdValorMulta = $faAdValorMulta;

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

    public function getFaAdValorInspeccion(): ?float
    {
        return $this->faAdValorInspeccion;
    }

    public function setFaAdValorInspeccion(float $faAdValorInspeccion): self
    {
        $this->faAdValorInspeccion = $faAdValorInspeccion;

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

    public function getFaAdValorBodega(): ?float
    {
        return $this->faAdValorBodega;
    }

    public function setFaAdValorBodega(float $faAdValorBodega): self
    {
        $this->faAdValorBodega = $faAdValorBodega;

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

    public function getFaAdValorElaboracionGuia(): ?float
    {
        return $this->faAdValorElaboracionGuia;
    }

    public function setFaAdValorElaboracionGuia(float $faAdValorElaboracionGuia): self
    {
        $this->faAdValorElaboracionGuia = $faAdValorElaboracionGuia;

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

    public function getFaAdValorPermisoImportacion(): ?float
    {
        return $this->faAdValorPermisoImportacion;
    }

    public function setFaAdValorPermisoImportacion(float $faAdValorPermisoImportacion): self
    {
        $this->faAdValorPermisoImportacion = $faAdValorPermisoImportacion;

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

    public function getFaAdValorVerificadora(): ?float
    {
        return $this->faAdValorVerificadora;
    }

    public function setFaAdValorVerificadora(float $faAdValorVerificadora): self
    {
        $this->faAdValorVerificadora = $faAdValorVerificadora;

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

    public function getFaAdValorImpuestoInen(): ?float
    {
        return $this->faAdValorImpuestoInen;
    }

    public function setFaAdValorImpuestoInen(float $faAdValorImpuestoInen): self
    {
        $this->faAdValorImpuestoInen = $faAdValorImpuestoInen;

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

    public function getFaAdValorImpuestoFodinfa(): ?float
    {
        return $this->faAdValorImpuestoFodinfa;
    }

    public function setFaAdValorImpuestoFodinfa(float $faAdValorImpuestoFodinfa): self
    {
        $this->faAdValorImpuestoFodinfa = $faAdValorImpuestoFodinfa;

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

    public function getFaAdValorImpuestoCorpei(): ?float
    {
        return $this->faAdValorImpuestoCorpei;
    }

    public function setFaAdValorImpuestoCorpei(float $faAdValorImpuestoCorpei): self
    {
        $this->faAdValorImpuestoCorpei = $faAdValorImpuestoCorpei;

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

    public function getFaAdValorImpuestoTasaModernizacion(): ?float
    {
        return $this->faAdValorImpuestoTasaModernizacion;
    }

    public function setFaAdValorImpuestoTasaModernizacion(float $faAdValorImpuestoTasaModernizacion): self
    {
        $this->faAdValorImpuestoTasaModernizacion = $faAdValorImpuestoTasaModernizacion;

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

    public function getFaAdValorGastosBancarios(): ?float
    {
        return $this->faAdValorGastosBancarios;
    }

    public function setFaAdValorGastosBancarios(float $faAdValorGastosBancarios): self
    {
        $this->faAdValorGastosBancarios = $faAdValorGastosBancarios;

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

    public function getFaAdValorOtros(): ?float
    {
        return $this->faAdValorOtros;
    }

    public function setFaAdValorOtros(float $faAdValorOtros): self
    {
        $this->faAdValorOtros = $faAdValorOtros;

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

    public function getFaAdValorSustento(): ?float
    {
        return $this->faAdValorSustento;
    }

    public function setFaAdValorSustento(float $faAdValorSustento): self
    {
        $this->faAdValorSustento = $faAdValorSustento;

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

    public function getFaAdImpuestoIva(): ?float
    {
        return $this->faAdImpuestoIva;
    }

    public function setFaAdImpuestoIva(float $faAdImpuestoIva): self
    {
        $this->faAdImpuestoIva = $faAdImpuestoIva;

        return $this;
    }

    public function getFaAdImpuestoIce(): ?float
    {
        return $this->faAdImpuestoIce;
    }

    public function setFaAdImpuestoIce(float $faAdImpuestoIce): self
    {
        $this->faAdImpuestoIce = $faAdImpuestoIce;

        return $this;
    }

    public function getFaAdPorcentajeCostosAdicionales(): ?float
    {
        return $this->faAdPorcentajeCostosAdicionales;
    }

    public function setFaAdPorcentajeCostosAdicionales(float $faAdPorcentajeCostosAdicionales): self
    {
        $this->faAdPorcentajeCostosAdicionales = $faAdPorcentajeCostosAdicionales;

        return $this;
    }

    public function getFaAdExpLugarIncoterm(): ?string
    {
        return $this->faAdExpLugarIncoterm;
    }

    public function setFaAdExpLugarIncoterm(string $faAdExpLugarIncoterm): self
    {
        $this->faAdExpLugarIncoterm = $faAdExpLugarIncoterm;

        return $this;
    }

    public function getFaAdExpPuertoDestino(): ?string
    {
        return $this->faAdExpPuertoDestino;
    }

    public function setFaAdExpPuertoDestino(string $faAdExpPuertoDestino): self
    {
        $this->faAdExpPuertoDestino = $faAdExpPuertoDestino;

        return $this;
    }

    public function getFaAdExpPaisDestino(): ?string
    {
        return $this->faAdExpPaisDestino;
    }

    public function setFaAdExpPaisDestino(string $faAdExpPaisDestino): self
    {
        $this->faAdExpPaisDestino = $faAdExpPaisDestino;

        return $this;
    }

    public function getFaAdExpPaisAdquisicion(): ?string
    {
        return $this->faAdExpPaisAdquisicion;
    }

    public function setFaAdExpPaisAdquisicion(string $faAdExpPaisAdquisicion): self
    {
        $this->faAdExpPaisAdquisicion = $faAdExpPaisAdquisicion;

        return $this;
    }


}
