<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcAnticipo
 *
 * @ORM\Table(name="gc_anticipo", indexes={@ORM\Index(name="indice_acticipo_devolucion", columns={"fa_id_devolucion"}), @ORM\Index(name="indice_anticipo", columns={"em_id", "an_id"})})
 * @ORM\Entity
 */
class GcAnticipo
{
    /**
     * @var int
     *
     * @ORM\Column(name="an_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $anId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tc_id", type="bigint", nullable=false)
     */
    private $tcId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="co_id", type="bigint", nullable=false)
     */
    private $coId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="an_numero", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $anNumero = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_tipo", type="string", length=3, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $anTipo = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="an_secuencial", type="bigint", nullable=false)
     */
    private $anSecuencial = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_id", type="bigint", nullable=false)
     */
    private $peId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_tipo", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $peTipo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_observacion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $anObservacion = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="an_total", type="float", precision=10, scale=0, nullable=false)
     */
    private $anTotal = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="an_utilizado", type="float", precision=10, scale=0, nullable=false)
     */
    private $anUtilizado = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="an_total_texto", type="string", length=150, nullable=false, options={"default"="'*'"})
     */
    private $anTotalTexto = '\'*\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="an_fecha", type="datetime", nullable=false, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $anFecha = '\'0000-00-00 00:00:00\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $anEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id", type="bigint", nullable=false)
     */
    private $cuId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="us_id", type="bigint", nullable=false)
     */
    private $usId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="an_fecha_vence", type="datetime", nullable=false, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $anFechaVence = '\'0000-00-00 00:00:00\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cn_id", type="bigint", nullable=false)
     */
    private $cnId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_id", type="bigint", nullable=false)
     */
    private $faId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_tipo", type="string", length=3, nullable=false, options={"default"="'**'","fixed"=true})
     */
    private $faTipo = '\'**\'';

    /**
     * @var float
     *
     * @ORM\Column(name="an_parcial", type="float", precision=10, scale=0, nullable=false)
     */
    private $anParcial = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="an_iva", type="float", precision=10, scale=0, nullable=false)
     */
    private $anIva = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="an_ice", type="float", precision=10, scale=0, nullable=false)
     */
    private $anIce = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_id_devolucion", type="bigint", nullable=false)
     */
    private $faIdDevolucion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="an_at_secuencial_transaccion", type="string", length=10, nullable=false, options={"default"="'0'"})
     */
    private $anAtSecuencialTransaccion = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_at_sustento_tributario", type="string", length=10, nullable=false, options={"default"="'0'"})
     */
    private $anAtSustentoTributario = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_at_tipo_comprobante", type="string", length=10, nullable=false, options={"default"="'0'"})
     */
    private $anAtTipoComprobante = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_at_fac_establecimiento", type="string", length=5, nullable=false, options={"default"="'001'"})
     */
    private $anAtFacEstablecimiento = '\'001\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_at_fac_puntoemision", type="string", length=5, nullable=false, options={"default"="'001'"})
     */
    private $anAtFacPuntoemision = '\'001\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_at_fac_autorizacion", type="string", length=50, nullable=false, options={"default"="'0'"})
     */
    private $anAtFacAutorizacion = '\'0\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="an_at_fac_caduca", type="date", nullable=false, options={"default"="'2006-01-01'"})
     */
    private $anAtFacCaduca = '\'2006-01-01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_at_convenio_doble_tributacion", type="string", length=2, nullable=false, options={"default"="'NA'"})
     */
    private $anAtConvenioDobleTributacion = '\'NA\'';

    /**
     * @var float
     *
     * @ORM\Column(name="an_iva_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $anIvaPorcentaje = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="an_ice_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $anIcePorcentaje = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_id_vendedor", type="bigint", nullable=false)
     */
    private $peIdVendedor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="an_at_pago_local_exterior", type="string", length=2, nullable=false, options={"default"="'01'"})
     */
    private $anAtPagoLocalExterior = '\'01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_at_pago_pais", type="string", length=5, nullable=false, options={"default"="'NA'"})
     */
    private $anAtPagoPais = '\'NA\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_at_pago_exterior_normalegal", type="string", length=2, nullable=false, options={"default"="'NA'"})
     */
    private $anAtPagoExteriorNormalegal = '\'NA\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_at_formapago", type="string", length=2, nullable=false, options={"default"="''"})
     */
    private $anAtFormapago = '\'\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="an_at_fecha_autorizacion", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $anAtFechaAutorizacion = '\'2000-01-01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_iva_codigo", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $anIvaCodigo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_at_regimen_fiscal", type="string", length=2, nullable=false, options={"default"="'NA'"})
     */
    private $anAtRegimenFiscal = '\'NA\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="an_fecha_registro", type="date", nullable=false, options={"default"="'2010-01-01'"})
     */
    private $anFechaRegistro = '\'2010-01-01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_at_importacion_tipo", type="string", length=5, nullable=false, options={"default"="'00'"})
     */
    private $anAtImportacionTipo = '\'00\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_at_importacion_transporte", type="string", length=25, nullable=false, options={"default"="''"})
     */
    private $anAtImportacionTransporte = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_at_importacion_distrito", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $anAtImportacionDistrito = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_at_importacion_anio", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $anAtImportacionAnio = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_at_importacion_regimen", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $anAtImportacionRegimen = '\'\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="an_at_importacion_fecha_liquida", type="date", nullable=false, options={"default"="'2016-01-01'"})
     */
    private $anAtImportacionFechaLiquida = '\'2016-01-01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_at_importacion_correlativo", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $anAtImportacionCorrelativo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_at_exportacion_tipo_ingreso", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $anAtExportacionTipoIngreso = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_at_exportacion_gravadoexterior", type="string", length=2, nullable=false, options={"default"="''"})
     */
    private $anAtExportacionGravadoexterior = '\'\'';

    /**
     * @var float
     *
     * @ORM\Column(name="an_at_exportacion_valorgravadoexterior", type="float", precision=10, scale=0, nullable=false)
     */
    private $anAtExportacionValorgravadoexterior = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="an_at_exportacion_denominacion_regimen", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $anAtExportacionDenominacionRegimen = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="an_genera_xml_detalles_en_base_factura_origen", type="boolean", nullable=false)
     */
    private $anGeneraXmlDetallesEnBaseFacturaOrigen = '0';

    public function getAnId(): ?string
    {
        return $this->anId;
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

    public function getTcId(): ?string
    {
        return $this->tcId;
    }

    public function setTcId(string $tcId): self
    {
        $this->tcId = $tcId;

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

    public function getAnNumero(): ?string
    {
        return $this->anNumero;
    }

    public function setAnNumero(string $anNumero): self
    {
        $this->anNumero = $anNumero;

        return $this;
    }

    public function getAnTipo(): ?string
    {
        return $this->anTipo;
    }

    public function setAnTipo(string $anTipo): self
    {
        $this->anTipo = $anTipo;

        return $this;
    }

    public function getAnSecuencial(): ?string
    {
        return $this->anSecuencial;
    }

    public function setAnSecuencial(string $anSecuencial): self
    {
        $this->anSecuencial = $anSecuencial;

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

    public function getPeTipo(): ?string
    {
        return $this->peTipo;
    }

    public function setPeTipo(string $peTipo): self
    {
        $this->peTipo = $peTipo;

        return $this;
    }

    public function getAnObservacion(): ?string
    {
        return $this->anObservacion;
    }

    public function setAnObservacion(string $anObservacion): self
    {
        $this->anObservacion = $anObservacion;

        return $this;
    }

    public function getAnTotal(): ?float
    {
        return $this->anTotal;
    }

    public function setAnTotal(float $anTotal): self
    {
        $this->anTotal = $anTotal;

        return $this;
    }

    public function getAnUtilizado(): ?float
    {
        return $this->anUtilizado;
    }

    public function setAnUtilizado(float $anUtilizado): self
    {
        $this->anUtilizado = $anUtilizado;

        return $this;
    }

    public function getAnTotalTexto(): ?string
    {
        return $this->anTotalTexto;
    }

    public function setAnTotalTexto(string $anTotalTexto): self
    {
        $this->anTotalTexto = $anTotalTexto;

        return $this;
    }

    public function getAnFecha(): ?\DateTimeInterface
    {
        return $this->anFecha;
    }

    public function setAnFecha(\DateTimeInterface $anFecha): self
    {
        $this->anFecha = $anFecha;

        return $this;
    }

    public function getAnEstado(): ?string
    {
        return $this->anEstado;
    }

    public function setAnEstado(string $anEstado): self
    {
        $this->anEstado = $anEstado;

        return $this;
    }

    public function getCuId(): ?string
    {
        return $this->cuId;
    }

    public function setCuId(string $cuId): self
    {
        $this->cuId = $cuId;

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

    public function getAnFechaVence(): ?\DateTimeInterface
    {
        return $this->anFechaVence;
    }

    public function setAnFechaVence(\DateTimeInterface $anFechaVence): self
    {
        $this->anFechaVence = $anFechaVence;

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

    public function getFaId(): ?string
    {
        return $this->faId;
    }

    public function setFaId(string $faId): self
    {
        $this->faId = $faId;

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

    public function getAnParcial(): ?float
    {
        return $this->anParcial;
    }

    public function setAnParcial(float $anParcial): self
    {
        $this->anParcial = $anParcial;

        return $this;
    }

    public function getAnIva(): ?float
    {
        return $this->anIva;
    }

    public function setAnIva(float $anIva): self
    {
        $this->anIva = $anIva;

        return $this;
    }

    public function getAnIce(): ?float
    {
        return $this->anIce;
    }

    public function setAnIce(float $anIce): self
    {
        $this->anIce = $anIce;

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

    public function getAnAtSecuencialTransaccion(): ?string
    {
        return $this->anAtSecuencialTransaccion;
    }

    public function setAnAtSecuencialTransaccion(string $anAtSecuencialTransaccion): self
    {
        $this->anAtSecuencialTransaccion = $anAtSecuencialTransaccion;

        return $this;
    }

    public function getAnAtSustentoTributario(): ?string
    {
        return $this->anAtSustentoTributario;
    }

    public function setAnAtSustentoTributario(string $anAtSustentoTributario): self
    {
        $this->anAtSustentoTributario = $anAtSustentoTributario;

        return $this;
    }

    public function getAnAtTipoComprobante(): ?string
    {
        return $this->anAtTipoComprobante;
    }

    public function setAnAtTipoComprobante(string $anAtTipoComprobante): self
    {
        $this->anAtTipoComprobante = $anAtTipoComprobante;

        return $this;
    }

    public function getAnAtFacEstablecimiento(): ?string
    {
        return $this->anAtFacEstablecimiento;
    }

    public function setAnAtFacEstablecimiento(string $anAtFacEstablecimiento): self
    {
        $this->anAtFacEstablecimiento = $anAtFacEstablecimiento;

        return $this;
    }

    public function getAnAtFacPuntoemision(): ?string
    {
        return $this->anAtFacPuntoemision;
    }

    public function setAnAtFacPuntoemision(string $anAtFacPuntoemision): self
    {
        $this->anAtFacPuntoemision = $anAtFacPuntoemision;

        return $this;
    }

    public function getAnAtFacAutorizacion(): ?string
    {
        return $this->anAtFacAutorizacion;
    }

    public function setAnAtFacAutorizacion(string $anAtFacAutorizacion): self
    {
        $this->anAtFacAutorizacion = $anAtFacAutorizacion;

        return $this;
    }

    public function getAnAtFacCaduca(): ?\DateTimeInterface
    {
        return $this->anAtFacCaduca;
    }

    public function setAnAtFacCaduca(\DateTimeInterface $anAtFacCaduca): self
    {
        $this->anAtFacCaduca = $anAtFacCaduca;

        return $this;
    }

    public function getAnAtConvenioDobleTributacion(): ?string
    {
        return $this->anAtConvenioDobleTributacion;
    }

    public function setAnAtConvenioDobleTributacion(string $anAtConvenioDobleTributacion): self
    {
        $this->anAtConvenioDobleTributacion = $anAtConvenioDobleTributacion;

        return $this;
    }

    public function getAnIvaPorcentaje(): ?float
    {
        return $this->anIvaPorcentaje;
    }

    public function setAnIvaPorcentaje(float $anIvaPorcentaje): self
    {
        $this->anIvaPorcentaje = $anIvaPorcentaje;

        return $this;
    }

    public function getAnIcePorcentaje(): ?float
    {
        return $this->anIcePorcentaje;
    }

    public function setAnIcePorcentaje(float $anIcePorcentaje): self
    {
        $this->anIcePorcentaje = $anIcePorcentaje;

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

    public function getAnAtPagoLocalExterior(): ?string
    {
        return $this->anAtPagoLocalExterior;
    }

    public function setAnAtPagoLocalExterior(string $anAtPagoLocalExterior): self
    {
        $this->anAtPagoLocalExterior = $anAtPagoLocalExterior;

        return $this;
    }

    public function getAnAtPagoPais(): ?string
    {
        return $this->anAtPagoPais;
    }

    public function setAnAtPagoPais(string $anAtPagoPais): self
    {
        $this->anAtPagoPais = $anAtPagoPais;

        return $this;
    }

    public function getAnAtPagoExteriorNormalegal(): ?string
    {
        return $this->anAtPagoExteriorNormalegal;
    }

    public function setAnAtPagoExteriorNormalegal(string $anAtPagoExteriorNormalegal): self
    {
        $this->anAtPagoExteriorNormalegal = $anAtPagoExteriorNormalegal;

        return $this;
    }

    public function getAnAtFormapago(): ?string
    {
        return $this->anAtFormapago;
    }

    public function setAnAtFormapago(string $anAtFormapago): self
    {
        $this->anAtFormapago = $anAtFormapago;

        return $this;
    }

    public function getAnAtFechaAutorizacion(): ?\DateTimeInterface
    {
        return $this->anAtFechaAutorizacion;
    }

    public function setAnAtFechaAutorizacion(\DateTimeInterface $anAtFechaAutorizacion): self
    {
        $this->anAtFechaAutorizacion = $anAtFechaAutorizacion;

        return $this;
    }

    public function getAnIvaCodigo(): ?string
    {
        return $this->anIvaCodigo;
    }

    public function setAnIvaCodigo(string $anIvaCodigo): self
    {
        $this->anIvaCodigo = $anIvaCodigo;

        return $this;
    }

    public function getAnAtRegimenFiscal(): ?string
    {
        return $this->anAtRegimenFiscal;
    }

    public function setAnAtRegimenFiscal(string $anAtRegimenFiscal): self
    {
        $this->anAtRegimenFiscal = $anAtRegimenFiscal;

        return $this;
    }

    public function getAnFechaRegistro(): ?\DateTimeInterface
    {
        return $this->anFechaRegistro;
    }

    public function setAnFechaRegistro(\DateTimeInterface $anFechaRegistro): self
    {
        $this->anFechaRegistro = $anFechaRegistro;

        return $this;
    }

    public function getAnAtImportacionTipo(): ?string
    {
        return $this->anAtImportacionTipo;
    }

    public function setAnAtImportacionTipo(string $anAtImportacionTipo): self
    {
        $this->anAtImportacionTipo = $anAtImportacionTipo;

        return $this;
    }

    public function getAnAtImportacionTransporte(): ?string
    {
        return $this->anAtImportacionTransporte;
    }

    public function setAnAtImportacionTransporte(string $anAtImportacionTransporte): self
    {
        $this->anAtImportacionTransporte = $anAtImportacionTransporte;

        return $this;
    }

    public function getAnAtImportacionDistrito(): ?string
    {
        return $this->anAtImportacionDistrito;
    }

    public function setAnAtImportacionDistrito(string $anAtImportacionDistrito): self
    {
        $this->anAtImportacionDistrito = $anAtImportacionDistrito;

        return $this;
    }

    public function getAnAtImportacionAnio(): ?string
    {
        return $this->anAtImportacionAnio;
    }

    public function setAnAtImportacionAnio(string $anAtImportacionAnio): self
    {
        $this->anAtImportacionAnio = $anAtImportacionAnio;

        return $this;
    }

    public function getAnAtImportacionRegimen(): ?string
    {
        return $this->anAtImportacionRegimen;
    }

    public function setAnAtImportacionRegimen(string $anAtImportacionRegimen): self
    {
        $this->anAtImportacionRegimen = $anAtImportacionRegimen;

        return $this;
    }

    public function getAnAtImportacionFechaLiquida(): ?\DateTimeInterface
    {
        return $this->anAtImportacionFechaLiquida;
    }

    public function setAnAtImportacionFechaLiquida(\DateTimeInterface $anAtImportacionFechaLiquida): self
    {
        $this->anAtImportacionFechaLiquida = $anAtImportacionFechaLiquida;

        return $this;
    }

    public function getAnAtImportacionCorrelativo(): ?string
    {
        return $this->anAtImportacionCorrelativo;
    }

    public function setAnAtImportacionCorrelativo(string $anAtImportacionCorrelativo): self
    {
        $this->anAtImportacionCorrelativo = $anAtImportacionCorrelativo;

        return $this;
    }

    public function getAnAtExportacionTipoIngreso(): ?string
    {
        return $this->anAtExportacionTipoIngreso;
    }

    public function setAnAtExportacionTipoIngreso(string $anAtExportacionTipoIngreso): self
    {
        $this->anAtExportacionTipoIngreso = $anAtExportacionTipoIngreso;

        return $this;
    }

    public function getAnAtExportacionGravadoexterior(): ?string
    {
        return $this->anAtExportacionGravadoexterior;
    }

    public function setAnAtExportacionGravadoexterior(string $anAtExportacionGravadoexterior): self
    {
        $this->anAtExportacionGravadoexterior = $anAtExportacionGravadoexterior;

        return $this;
    }

    public function getAnAtExportacionValorgravadoexterior(): ?float
    {
        return $this->anAtExportacionValorgravadoexterior;
    }

    public function setAnAtExportacionValorgravadoexterior(float $anAtExportacionValorgravadoexterior): self
    {
        $this->anAtExportacionValorgravadoexterior = $anAtExportacionValorgravadoexterior;

        return $this;
    }

    public function getAnAtExportacionDenominacionRegimen(): ?string
    {
        return $this->anAtExportacionDenominacionRegimen;
    }

    public function setAnAtExportacionDenominacionRegimen(string $anAtExportacionDenominacionRegimen): self
    {
        $this->anAtExportacionDenominacionRegimen = $anAtExportacionDenominacionRegimen;

        return $this;
    }

    public function getAnGeneraXmlDetallesEnBaseFacturaOrigen(): ?bool
    {
        return $this->anGeneraXmlDetallesEnBaseFacturaOrigen;
    }

    public function setAnGeneraXmlDetallesEnBaseFacturaOrigen(bool $anGeneraXmlDetallesEnBaseFacturaOrigen): self
    {
        $this->anGeneraXmlDetallesEnBaseFacturaOrigen = $anGeneraXmlDetallesEnBaseFacturaOrigen;

        return $this;
    }


}
