<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
/**
 * GcEmpresa
 * @ORM\Table(name="gc_empresa")
 * @ORM\Entity(repositoryClass="App\Repository\GcEmpresaRepository")
 * @ApiResource()
 */



class GcEmpresa
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
     * @ORM\Column(name="em_codigo", type="string", length=20, nullable=false, options={"default"="''"})
     */
    private $emCodigo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_nombre", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $emNombre = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_direccion", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $emDireccion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_telefono", type="string", length=50, nullable=false, options={"default"="'0'"})
     */
    private $emTelefono = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_fax", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $emFax = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_email", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $emEmail = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_ciudad", type="string", length=25, nullable=false, options={"default"="''"})
     */
    private $emCiudad = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_ruc", type="string", length=20, nullable=false, options={"default"="'0'"})
     */
    private $emRuc = '\'0\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_periodo", type="bigint", nullable=false)
     */
    private $emPeriodo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="em_observacion", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $emObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_sitio_web", type="string", length=250, nullable=false, options={"default"="''"})
     */
    private $emSitioWeb = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_imagen", type="string", length=250, nullable=false, options={"default"="''"})
     */
    private $emImagen = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_patronal", type="string", length=30, nullable=false, options={"default"="''"})
     */
    private $emPatronal = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $emEstado = 'C';

    /**
     * @var int
     *
     * @ORM\Column(name="em_tipo", type="smallint", nullable=false)
     */
    private $emTipo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="em_iva", type="float", precision=10, scale=0, nullable=false)
     */
    private $emIva = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_inventario", type="smallint", nullable=false)
     */
    private $emInventario = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_sistema_inventario", type="smallint", nullable=false)
     */
    private $emSistemaInventario = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_contribuyente_especial", type="smallint", nullable=false)
     */
    private $emContribuyenteEspecial = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_comprobante_automatico", type="smallint", nullable=false)
     */
    private $emComprobanteAutomatico = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="em_telefono_responsable", type="string", length=50, nullable=false, options={"default"="'0'"})
     */
    private $emTelefonoResponsable = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_fax_responsable", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $emFaxResponsable = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_email_responsable", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $emEmailResponsable = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_auditar_mensaje", type="smallint", nullable=false)
     */
    private $emAuditarMensaje = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="em_numero_decimales", type="boolean", nullable=false, options={"default"="2"})
     */
    private $emNumeroDecimales = '2';

    /**
     * @var string
     *
     * @ORM\Column(name="em_ice", type="string", length=25, nullable=false, options={"default"="'0'"})
     */
    private $emIce = '\'0\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="em_verifica_continuidad", type="boolean", nullable=false, options={"default"="1"})
     */
    private $emVerificaContinuidad = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="em_razon_social", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $emRazonSocial = '\'*\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="em_responsable_td_id", type="boolean", nullable=false)
     */
    private $emResponsableTdId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="em_responsable_documento", type="string", length=20, nullable=false, options={"default"="'0'"})
     */
    private $emResponsableDocumento = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_contador_ruc", type="string", length=20, nullable=false, options={"default"="'0'"})
     */
    private $emContadorRuc = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_moneda", type="string", length=50, nullable=false, options={"default"="'DOLAR'"})
     */
    private $emMoneda = '\'DOLAR\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_responsable_nombre", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $emResponsableNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_contador_nombre", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $emContadorNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_contador_cpa", type="string", length=13, nullable=false, options={"default"="'0'"})
     */
    private $emContadorCpa = '\'0\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_comprobante_agrupado", type="smallint", nullable=false)
     */
    private $emComprobanteAgrupado = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="em_responsable_titulo", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $emResponsableTitulo = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_lleva_contabilidad", type="smallint", nullable=false)
     */
    private $emLlevaContabilidad = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_maneja_centro_costo", type="smallint", nullable=false, options={"default"="1"})
     */
    private $emManejaCentroCosto = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="em_barras_manejo", type="smallint", nullable=false, options={"default"="1"})
     */
    private $emBarrasManejo = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="pa_id", type="bigint", nullable=false)
     */
    private $paId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_aplica_niif", type="smallint", nullable=false, options={"default"="1"})
     */
    private $emAplicaNiif = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="em_fecha_contrato", type="date", nullable=true)
     */
    private $emFechaContrato = null;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="em_fecha_ultimo_pago", type="date", nullable=true)
     */
    private $emFechaUltimoPago = null;

    /**
     * @var int
     *
     * @ORM\Column(name="em_registros_contratados", type="integer", nullable=false, options={"default"="1"})
     */
    private $emRegistrosContratados = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="em_contacto_nombre", type="string", length=150, nullable=false, options={"default"="''"})
     */
    private $emContactoNombre = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_contacto_telefono", type="string", length=150, nullable=false, options={"default"="''"})
     */
    private $emContactoTelefono = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_departamentos_manejo", type="smallint", nullable=false, options={"default"="1"})
     */
    private $emDepartamentosManejo = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="em_multiples_descuentos", type="smallint", nullable=false, options={"default"="1"})
     */
    private $emMultiplesDescuentos = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="em_aplica_niif_metodo_directo", type="boolean", nullable=false)
     */
    private $emAplicaNiifMetodoDirecto = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="em_aplica_contrato_pago", type="boolean", nullable=false)
     */
    private $emAplicaContratoPago = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="em_resolucion_contribuyente_especial", type="string", length=15, nullable=false, options={"default"="''"})
     */
    private $emResolucionContribuyenteEspecial = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="em_documentos_electronicos", type="boolean", nullable=false)
     */
    private $emDocumentosElectronicos = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="em_docs_elec_ambiente", type="boolean", nullable=false, options={"default"="1"})
     */
    private $emDocsElecAmbiente = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="em_docs_elec_tipo_emision", type="boolean", nullable=false, options={"default"="1"})
     */
    private $emDocsElecTipoEmision = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="em_servicio_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $emServicioPorcentaje = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="em_docs_elec_funcionamiento", type="boolean", nullable=false)
     */
    private $emDocsElecFuncionamiento = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="em_docs_elec_dato_adicional_codigo", type="string", length=20, nullable=false, options={"default"="''"})
     */
    private $emDocsElecDatoAdicionalCodigo = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_limite_consultas", type="integer", nullable=false, options={"default"="1000"})
     */
    private $emLimiteConsultas = '1000';

    /**
     * @var float
     *
     * @ORM\Column(name="em_parametro_limite_venta_consumidor_final", type="float", precision=10, scale=0, nullable=false, options={"default"="200"})
     */
    private $emParametroLimiteVentaConsumidorFinal = '200';

    /**
     * @var bool
     *
     * @ORM\Column(name="em_servicio_renta_activo", type="boolean", nullable=false, options={"default"="1"})
     */
    private $emServicioRentaActivo = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="em_docs_elec_fecha_caduca", type="date", nullable=true)
     */
    private $emDocsElecFechaCaduca = null;

    /**
     * @var string
     *
     * @ORM\Column(name="em_docs_email_copia", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $emDocsEmailCopia = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_codigo_entidad_control1", type="string", length=25, nullable=false, options={"default"="''"})
     */
    private $emCodigoEntidadControl1 = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="em_inventario_lotes", type="boolean", nullable=false)
     */
    private $emInventarioLotes = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="em_docs_elec_lectura_masiva", type="boolean", nullable=false)
     */
    private $emDocsElecLecturaMasiva = '0';




    public function __construct()
    {

    }




    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getEmCodigo(): ?string
    {
        return $this->emCodigo;
    }

    public function setEmCodigo(string $emCodigo): self
    {
        $this->emCodigo = $emCodigo;

        return $this;
    }

    public function getEmNombre(): ?string
    {
        return $this->emNombre;
    }

    public function setEmNombre(string $emNombre): self
    {
        $this->emNombre = $emNombre;

        return $this;
    }

    public function getEmDireccion(): ?string
    {
        return $this->emDireccion;
    }

    public function setEmDireccion(string $emDireccion): self
    {
        $this->emDireccion = $emDireccion;

        return $this;
    }

    public function getEmTelefono(): ?string
    {
        return $this->emTelefono;
    }

    public function setEmTelefono(string $emTelefono): self
    {
        $this->emTelefono = $emTelefono;

        return $this;
    }

    public function getEmFax(): ?string
    {
        return $this->emFax;
    }

    public function setEmFax(string $emFax): self
    {
        $this->emFax = $emFax;

        return $this;
    }

    public function getEmEmail(): ?string
    {
        return $this->emEmail;
    }

    public function setEmEmail(string $emEmail): self
    {
        $this->emEmail = $emEmail;

        return $this;
    }

    public function getEmCiudad(): ?string
    {
        return $this->emCiudad;
    }

    public function setEmCiudad(string $emCiudad): self
    {
        $this->emCiudad = $emCiudad;

        return $this;
    }

    public function getEmRuc(): ?string
    {
        return $this->emRuc;
    }

    public function setEmRuc(string $emRuc): self
    {
        $this->emRuc = $emRuc;

        return $this;
    }

    public function getEmPeriodo(): ?string
    {
        return $this->emPeriodo;
    }

    public function setEmPeriodo(string $emPeriodo): self
    {
        $this->emPeriodo = $emPeriodo;

        return $this;
    }

    public function getEmObservacion(): ?string
    {
        return $this->emObservacion;
    }

    public function setEmObservacion(string $emObservacion): self
    {
        $this->emObservacion = $emObservacion;

        return $this;
    }

    public function getEmSitioWeb(): ?string
    {
        return $this->emSitioWeb;
    }

    public function setEmSitioWeb(string $emSitioWeb): self
    {
        $this->emSitioWeb = $emSitioWeb;

        return $this;
    }

    public function getEmImagen(): ?string
    {
        return $this->emImagen;
    }

    public function setEmImagen(string $emImagen): self
    {
        $this->emImagen = $emImagen;

        return $this;
    }

    public function getEmPatronal(): ?string
    {
        return $this->emPatronal;
    }

    public function setEmPatronal(string $emPatronal): self
    {
        $this->emPatronal = $emPatronal;

        return $this;
    }

    public function getEmEstado(): ?string
    {
        return $this->emEstado;
    }

    public function setEmEstado(string $emEstado): self
    {
        $this->emEstado = $emEstado;

        return $this;
    }

    public function getEmTipo(): ?int
    {
        return $this->emTipo;
    }

    public function setEmTipo(int $emTipo): self
    {
        $this->emTipo = $emTipo;

        return $this;
    }

    public function getEmIva(): ?float
    {
        return $this->emIva;
    }

    public function setEmIva(float $emIva): self
    {
        $this->emIva = $emIva;

        return $this;
    }

    public function getEmInventario(): ?int
    {
        return $this->emInventario;
    }

    public function setEmInventario(int $emInventario): self
    {
        $this->emInventario = $emInventario;

        return $this;
    }

    public function getEmSistemaInventario(): ?int
    {
        return $this->emSistemaInventario;
    }

    public function setEmSistemaInventario(int $emSistemaInventario): self
    {
        $this->emSistemaInventario = $emSistemaInventario;

        return $this;
    }

    public function getEmContribuyenteEspecial(): ?int
    {
        return $this->emContribuyenteEspecial;
    }

    public function setEmContribuyenteEspecial(int $emContribuyenteEspecial): self
    {
        $this->emContribuyenteEspecial = $emContribuyenteEspecial;

        return $this;
    }

    public function getEmComprobanteAutomatico(): ?int
    {
        return $this->emComprobanteAutomatico;
    }

    public function setEmComprobanteAutomatico(int $emComprobanteAutomatico): self
    {
        $this->emComprobanteAutomatico = $emComprobanteAutomatico;

        return $this;
    }

    public function getEmTelefonoResponsable(): ?string
    {
        return $this->emTelefonoResponsable;
    }

    public function setEmTelefonoResponsable(string $emTelefonoResponsable): self
    {
        $this->emTelefonoResponsable = $emTelefonoResponsable;

        return $this;
    }

    public function getEmFaxResponsable(): ?string
    {
        return $this->emFaxResponsable;
    }

    public function setEmFaxResponsable(string $emFaxResponsable): self
    {
        $this->emFaxResponsable = $emFaxResponsable;

        return $this;
    }

    public function getEmEmailResponsable(): ?string
    {
        return $this->emEmailResponsable;
    }

    public function setEmEmailResponsable(string $emEmailResponsable): self
    {
        $this->emEmailResponsable = $emEmailResponsable;

        return $this;
    }

    public function getEmAuditarMensaje(): ?int
    {
        return $this->emAuditarMensaje;
    }

    public function setEmAuditarMensaje(int $emAuditarMensaje): self
    {
        $this->emAuditarMensaje = $emAuditarMensaje;

        return $this;
    }

    public function getEmNumeroDecimales(): ?bool
    {
        return $this->emNumeroDecimales;
    }

    public function setEmNumeroDecimales(bool $emNumeroDecimales): self
    {
        $this->emNumeroDecimales = $emNumeroDecimales;

        return $this;
    }

    public function getEmIce(): ?string
    {
        return $this->emIce;
    }

    public function setEmIce(string $emIce): self
    {
        $this->emIce = $emIce;

        return $this;
    }

    public function getEmVerificaContinuidad(): ?bool
    {
        return $this->emVerificaContinuidad;
    }

    public function setEmVerificaContinuidad(bool $emVerificaContinuidad): self
    {
        $this->emVerificaContinuidad = $emVerificaContinuidad;

        return $this;
    }

    public function getEmRazonSocial(): ?string
    {
        return $this->emRazonSocial;
    }

    public function setEmRazonSocial(string $emRazonSocial): self
    {
        $this->emRazonSocial = $emRazonSocial;

        return $this;
    }

    public function getEmResponsableTdId(): ?bool
    {
        return $this->emResponsableTdId;
    }

    public function setEmResponsableTdId(bool $emResponsableTdId): self
    {
        $this->emResponsableTdId = $emResponsableTdId;

        return $this;
    }

    public function getEmResponsableDocumento(): ?string
    {
        return $this->emResponsableDocumento;
    }

    public function setEmResponsableDocumento(string $emResponsableDocumento): self
    {
        $this->emResponsableDocumento = $emResponsableDocumento;

        return $this;
    }

    public function getEmContadorRuc(): ?string
    {
        return $this->emContadorRuc;
    }

    public function setEmContadorRuc(string $emContadorRuc): self
    {
        $this->emContadorRuc = $emContadorRuc;

        return $this;
    }

    public function getEmMoneda(): ?string
    {
        return $this->emMoneda;
    }

    public function setEmMoneda(string $emMoneda): self
    {
        $this->emMoneda = $emMoneda;

        return $this;
    }

    public function getEmResponsableNombre(): ?string
    {
        return $this->emResponsableNombre;
    }

    public function setEmResponsableNombre(string $emResponsableNombre): self
    {
        $this->emResponsableNombre = $emResponsableNombre;

        return $this;
    }

    public function getEmContadorNombre(): ?string
    {
        return $this->emContadorNombre;
    }

    public function setEmContadorNombre(string $emContadorNombre): self
    {
        $this->emContadorNombre = $emContadorNombre;

        return $this;
    }

    public function getEmContadorCpa(): ?string
    {
        return $this->emContadorCpa;
    }

    public function setEmContadorCpa(string $emContadorCpa): self
    {
        $this->emContadorCpa = $emContadorCpa;

        return $this;
    }

    public function getEmComprobanteAgrupado(): ?int
    {
        return $this->emComprobanteAgrupado;
    }

    public function setEmComprobanteAgrupado(int $emComprobanteAgrupado): self
    {
        $this->emComprobanteAgrupado = $emComprobanteAgrupado;

        return $this;
    }

    public function getEmResponsableTitulo(): ?string
    {
        return $this->emResponsableTitulo;
    }

    public function setEmResponsableTitulo(string $emResponsableTitulo): self
    {
        $this->emResponsableTitulo = $emResponsableTitulo;

        return $this;
    }

    public function getEmLlevaContabilidad(): ?int
    {
        return $this->emLlevaContabilidad;
    }

    public function setEmLlevaContabilidad(int $emLlevaContabilidad): self
    {
        $this->emLlevaContabilidad = $emLlevaContabilidad;

        return $this;
    }

    public function getEmManejaCentroCosto(): ?int
    {
        return $this->emManejaCentroCosto;
    }

    public function setEmManejaCentroCosto(int $emManejaCentroCosto): self
    {
        $this->emManejaCentroCosto = $emManejaCentroCosto;

        return $this;
    }

    public function getEmBarrasManejo(): ?int
    {
        return $this->emBarrasManejo;
    }

    public function setEmBarrasManejo(int $emBarrasManejo): self
    {
        $this->emBarrasManejo = $emBarrasManejo;

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

    public function getEmAplicaNiif(): ?int
    {
        return $this->emAplicaNiif;
    }

    public function setEmAplicaNiif(int $emAplicaNiif): self
    {
        $this->emAplicaNiif = $emAplicaNiif;

        return $this;
    }

    public function getEmFechaContrato(): ?\DateTimeInterface
    {
        return $this->emFechaContrato;
    }

    public function setEmFechaContrato(\DateTimeInterface $emFechaContrato): self
    {
        $this->emFechaContrato = $emFechaContrato;
        return $this;
    }

    public function getEmFechaUltimoPago(): ?\DateTimeInterface
    {
        return $this->emFechaUltimoPago;
    }

    public function setEmFechaUltimoPago(\DateTimeInterface $emFechaUltimoPago): self
    {
        $this->emFechaUltimoPago = $emFechaUltimoPago;

        return $this;
    }

    public function getEmRegistrosContratados(): ?int
    {
        return $this->emRegistrosContratados;
    }

    public function setEmRegistrosContratados(int $emRegistrosContratados): self
    {
        $this->emRegistrosContratados = $emRegistrosContratados;

        return $this;
    }

    public function getEmContactoNombre(): ?string
    {
        return $this->emContactoNombre;
    }

    public function setEmContactoNombre(string $emContactoNombre): self
    {
        $this->emContactoNombre = $emContactoNombre;

        return $this;
    }

    public function getEmContactoTelefono(): ?string
    {
        return $this->emContactoTelefono;
    }

    public function setEmContactoTelefono(string $emContactoTelefono): self
    {
        $this->emContactoTelefono = $emContactoTelefono;

        return $this;
    }

    public function getEmDepartamentosManejo(): ?int
    {
        return $this->emDepartamentosManejo;
    }

    public function setEmDepartamentosManejo(int $emDepartamentosManejo): self
    {
        $this->emDepartamentosManejo = $emDepartamentosManejo;

        return $this;
    }

    public function getEmMultiplesDescuentos(): ?int
    {
        return $this->emMultiplesDescuentos;
    }

    public function setEmMultiplesDescuentos(int $emMultiplesDescuentos): self
    {
        $this->emMultiplesDescuentos = $emMultiplesDescuentos;

        return $this;
    }

    public function getEmAplicaNiifMetodoDirecto(): ?bool
    {
        return $this->emAplicaNiifMetodoDirecto;
    }

    public function setEmAplicaNiifMetodoDirecto(bool $emAplicaNiifMetodoDirecto): self
    {
        $this->emAplicaNiifMetodoDirecto = $emAplicaNiifMetodoDirecto;

        return $this;
    }

    public function getEmAplicaContratoPago(): ?bool
    {
        return $this->emAplicaContratoPago;
    }

    public function setEmAplicaContratoPago(bool $emAplicaContratoPago): self
    {
        $this->emAplicaContratoPago = $emAplicaContratoPago;

        return $this;
    }

    public function getEmResolucionContribuyenteEspecial(): ?string
    {
        return $this->emResolucionContribuyenteEspecial;
    }

    public function setEmResolucionContribuyenteEspecial(string $emResolucionContribuyenteEspecial): self
    {
        $this->emResolucionContribuyenteEspecial = $emResolucionContribuyenteEspecial;

        return $this;
    }

    public function getEmDocumentosElectronicos(): ?bool
    {
        return $this->emDocumentosElectronicos;
    }

    public function setEmDocumentosElectronicos(bool $emDocumentosElectronicos): self
    {
        $this->emDocumentosElectronicos = $emDocumentosElectronicos;

        return $this;
    }

    public function getEmDocsElecAmbiente(): ?bool
    {
        return $this->emDocsElecAmbiente;
    }

    public function setEmDocsElecAmbiente(bool $emDocsElecAmbiente): self
    {
        $this->emDocsElecAmbiente = $emDocsElecAmbiente;

        return $this;
    }

    public function getEmDocsElecTipoEmision(): ?bool
    {
        return $this->emDocsElecTipoEmision;
    }

    public function setEmDocsElecTipoEmision(bool $emDocsElecTipoEmision): self
    {
        $this->emDocsElecTipoEmision = $emDocsElecTipoEmision;

        return $this;
    }

    public function getEmServicioPorcentaje(): ?float
    {
        return $this->emServicioPorcentaje;
    }

    public function setEmServicioPorcentaje(float $emServicioPorcentaje): self
    {
        $this->emServicioPorcentaje = $emServicioPorcentaje;

        return $this;
    }

    public function getEmDocsElecFuncionamiento(): ?bool
    {
        return $this->emDocsElecFuncionamiento;
    }

    public function setEmDocsElecFuncionamiento(bool $emDocsElecFuncionamiento): self
    {
        $this->emDocsElecFuncionamiento = $emDocsElecFuncionamiento;

        return $this;
    }

    public function getEmDocsElecDatoAdicionalCodigo(): ?string
    {
        return $this->emDocsElecDatoAdicionalCodigo;
    }

    public function setEmDocsElecDatoAdicionalCodigo(string $emDocsElecDatoAdicionalCodigo): self
    {
        $this->emDocsElecDatoAdicionalCodigo = $emDocsElecDatoAdicionalCodigo;

        return $this;
    }

    public function getEmLimiteConsultas(): ?int
    {
        return $this->emLimiteConsultas;
    }

    public function setEmLimiteConsultas(int $emLimiteConsultas): self
    {
        $this->emLimiteConsultas = $emLimiteConsultas;

        return $this;
    }

    public function getEmParametroLimiteVentaConsumidorFinal(): ?float
    {
        return $this->emParametroLimiteVentaConsumidorFinal;
    }

    public function setEmParametroLimiteVentaConsumidorFinal(float $emParametroLimiteVentaConsumidorFinal): self
    {
        $this->emParametroLimiteVentaConsumidorFinal = $emParametroLimiteVentaConsumidorFinal;

        return $this;
    }

    public function getEmServicioRentaActivo(): ?bool
    {
        return $this->emServicioRentaActivo;
    }

    public function setEmServicioRentaActivo(bool $emServicioRentaActivo): self
    {
        $this->emServicioRentaActivo = $emServicioRentaActivo;

        return $this;
    }

    public function getEmDocsElecFechaCaduca(): ?\DateTimeInterface
    {
        return $this->emDocsElecFechaCaduca;
    }

    public function setEmDocsElecFechaCaduca(\DateTimeInterface $emDocsElecFechaCaduca): self
    {
        $this->emDocsElecFechaCaduca = $emDocsElecFechaCaduca;

        return $this;
    }

    public function getEmDocsEmailCopia(): ?string
    {
        return $this->emDocsEmailCopia;
    }

    public function setEmDocsEmailCopia(string $emDocsEmailCopia): self
    {
        $this->emDocsEmailCopia = $emDocsEmailCopia;

        return $this;
    }

    public function getEmCodigoEntidadControl1(): ?string
    {
        return $this->emCodigoEntidadControl1;
    }

    public function setEmCodigoEntidadControl1(string $emCodigoEntidadControl1): self
    {
        $this->emCodigoEntidadControl1 = $emCodigoEntidadControl1;

        return $this;
    }

    public function getEmInventarioLotes(): ?bool
    {
        return $this->emInventarioLotes;
    }

    public function setEmInventarioLotes(bool $emInventarioLotes): self
    {
        $this->emInventarioLotes = $emInventarioLotes;

        return $this;
    }

    public function getEmDocsElecLecturaMasiva(): ?bool
    {
        return $this->emDocsElecLecturaMasiva;
    }

    public function setEmDocsElecLecturaMasiva(bool $emDocsElecLecturaMasiva): self
    {
        $this->emDocsElecLecturaMasiva = $emDocsElecLecturaMasiva;

        return $this;
    }





    public function __toString()
    {
        return $this->emNombre;
    }




}
