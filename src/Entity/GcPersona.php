<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcPersona
 *
 * @ORM\Table(name="gc_persona", uniqueConstraints={@ORM\UniqueConstraint(name="IndicePersona", columns={"em_id", "pe_codigo", "pe_tipo"})}, indexes={@ORM\Index(name="IndiceUnico", columns={"em_id", "pe_id"}), @ORM\Index(name="IndicePersonaRUC", columns={"em_id", "pe_ruc"}), @ORM\Index(name="IndicePersonaEstado", columns={"em_id", "pe_id", "pe_estado"}), @ORM\Index(name="IndicePersonaAlias", columns={"em_id", "pe_alias"})})
 * @ORM\Entity
 */
class GcPersona
{
    /**
     * @var int
     *
     * @ORM\Column(name="pe_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $peId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_tipo", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $peTipo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_codigo", type="string", length=15, nullable=false, options={"default"="'*'"})
     */
    private $peCodigo = '\'*\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="pe_contribuyente_especial", type="boolean", nullable=false, options={"default"="1"})
     */
    private $peContribuyenteEspecial = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="fp_id", type="bigint", nullable=false)
     */
    private $fpId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pa_id", type="bigint", nullable=false)
     */
    private $paId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ci_id", type="bigint", nullable=false)
     */
    private $ciId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sc_id", type="bigint", nullable=false)
     */
    private $scId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id", type="bigint", nullable=false)
     */
    private $cuId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_nombre", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $peNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_contacto", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $peContacto = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_direccion", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $peDireccion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_telefono", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $peTelefono = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_fax", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $peFax = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_email", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $peEmail = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_ruc", type="string", length=20, nullable=false, options={"default"="'*'"})
     */
    private $peRuc = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_titulo", type="string", length=64, nullable=false, options={"default"="'*'"})
     */
    private $peTitulo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_razon_social", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $peRazonSocial = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_educacion", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $peEducacion = '\'*\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pe_fecha_ingreso", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $peFechaIngreso = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pe_fecha_nacimiento", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $peFechaNacimiento = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pe_fecha_salida", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $peFechaSalida = '\'1800-01-01 00:00:01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_observacion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $peObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_estado", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $peEstado = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_secuencial", type="bigint", nullable=false)
     */
    private $peSecuencial = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_retencion_fuente", type="bigint", nullable=false)
     */
    private $cuIdRetencionFuente = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_retencion_iva", type="bigint", nullable=false)
     */
    private $cuIdRetencionIva = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_retencion_fuente_servicio", type="bigint", nullable=false)
     */
    private $cuIdRetencionFuenteServicio = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_retencion_iva_servicio", type="bigint", nullable=false)
     */
    private $cuIdRetencionIvaServicio = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="td_id", type="boolean", nullable=false)
     */
    private $tdId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ar_id", type="bigint", nullable=false)
     */
    private $arId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_apellido", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $peApellido = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_cargo", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $peCargo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_provincia", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $peProvincia = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_canton_nacimiento", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $peCantonNacimiento = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_parroquia", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $peParroquia = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="pe_sexo", type="boolean", nullable=false, options={"default"="-1"})
     */
    private $peSexo = '-1';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_afiliacion", type="string", length=20, nullable=false, options={"default"="'*'"})
     */
    private $peAfiliacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_lic_militar", type="string", length=20, nullable=false, options={"default"="'*'"})
     */
    private $peLicMilitar = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_tipo_sangre", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $peTipoSangre = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_id_superior", type="bigint", nullable=false)
     */
    private $peIdSuperior = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="pe_estado_civil", type="boolean", nullable=false, options={"default"="-1"})
     */
    private $peEstadoCivil = '-1';

    /**
     * @var int
     *
     * @ORM\Column(name="pa_id_nacimiento", type="bigint", nullable=false)
     */
    private $paIdNacimiento = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ci_id_nacimiento", type="bigint", nullable=false)
     */
    private $ciIdNacimiento = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_parroquia_nacimiento", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $peParroquiaNacimiento = '\'\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pe_fecha_desde", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $peFechaDesde = '\'1800-01-01 00:00:01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_sitio_web", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $peSitioWeb = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_red_social_facebook", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $peRedSocialFacebook = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_red_social_instagram", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $peRedSocialInstagram = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="pe_tipo_precio", type="boolean", nullable=false)
     */
    private $peTipoPrecio = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_direccion_numero", type="string", length=50, nullable=false, options={"default"="'0'"})
     */
    private $peDireccionNumero = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_provincia_nacimiento", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $peProvinciaNacimiento = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_alterno", type="bigint", nullable=false)
     */
    private $cuIdAlterno = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pe_cupo", type="float", precision=10, scale=0, nullable=false)
     */
    private $peCupo = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="pe_tipo_sri", type="boolean", nullable=false)
     */
    private $peTipoSri = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_doc_fac_establecimiento", type="string", length=5, nullable=false, options={"default"="'001'"})
     */
    private $peDocFacEstablecimiento = '\'001\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_doc_fac_puntoemision", type="string", length=5, nullable=false, options={"default"="'001'"})
     */
    private $peDocFacPuntoemision = '\'001\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_doc_fac_autorizacion", type="string", length=50, nullable=false, options={"default"="'0'"})
     */
    private $peDocFacAutorizacion = '\'0\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pe_doc_fac_caduca", type="date", nullable=false, options={"default"="'2006-01-01'"})
     */
    private $peDocFacCaduca = '\'2006-01-01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_doc_nc_establecimiento", type="string", length=5, nullable=false, options={"default"="'001'"})
     */
    private $peDocNcEstablecimiento = '\'001\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_doc_nc_puntoemision", type="string", length=5, nullable=false, options={"default"="'001'"})
     */
    private $peDocNcPuntoemision = '\'001\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_doc_nc_autorizacion", type="string", length=50, nullable=false, options={"default"="'0'"})
     */
    private $peDocNcAutorizacion = '\'0\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pe_doc_nc_caduca", type="date", nullable=false, options={"default"="'2006-01-01'"})
     */
    private $peDocNcCaduca = '\'2006-01-01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_doc_nd_establecimiento", type="string", length=5, nullable=false, options={"default"="'001'"})
     */
    private $peDocNdEstablecimiento = '\'001\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_doc_nd_puntoemision", type="string", length=5, nullable=false, options={"default"="'001'"})
     */
    private $peDocNdPuntoemision = '\'001\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_doc_nd_autorizacion", type="string", length=50, nullable=false, options={"default"="'0'"})
     */
    private $peDocNdAutorizacion = '\'0\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pe_doc_nd_caduca", type="date", nullable=false, options={"default"="'2006-01-01'"})
     */
    private $peDocNdCaduca = '\'2006-01-01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_doc_nv_establecimiento", type="string", length=5, nullable=false, options={"default"="'001'"})
     */
    private $peDocNvEstablecimiento = '\'001\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_doc_nv_puntoemision", type="string", length=5, nullable=false, options={"default"="'001'"})
     */
    private $peDocNvPuntoemision = '\'001\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_doc_nv_autorizacion", type="string", length=50, nullable=false, options={"default"="'0'"})
     */
    private $peDocNvAutorizacion = '\'0\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pe_doc_nv_caduca", type="date", nullable=false, options={"default"="'2006-01-01'"})
     */
    private $peDocNvCaduca = '\'2006-01-01\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="pe_tipo_persona_juridica", type="boolean", nullable=false)
     */
    private $peTipoPersonaJuridica = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cc_id", type="bigint", nullable=false)
     */
    private $ccId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pe_descuento1", type="float", precision=10, scale=0, nullable=false)
     */
    private $peDescuento1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pe_descuento2", type="float", precision=10, scale=0, nullable=false)
     */
    private $peDescuento2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pe_descuento3", type="float", precision=10, scale=0, nullable=false)
     */
    private $peDescuento3 = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="pe_pago_fondoreserva", type="boolean", nullable=false)
     */
    private $pePagoFondoreserva = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="pe_pago_juicioalimentos", type="boolean", nullable=false)
     */
    private $pePagoJuicioalimentos = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_beneficiario_juicioalimentos", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $peBeneficiarioJuicioalimentos = '\'*\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="pe_seccion", type="boolean", nullable=false)
     */
    private $peSeccion = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="ba_id", type="bigint", nullable=true)
     */
    private $baId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pe_cuenta_banco_tipo", type="string", length=5, nullable=true, options={"default"="'0'"})
     */
    private $peCuentaBancoTipo = '\'0\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pe_cuenta_banco_numero", type="string", length=25, nullable=true, options={"default"="'0'"})
     */
    private $peCuentaBancoNumero = '\'0\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="pe_seguimiento_realizar", type="boolean", nullable=false)
     */
    private $peSeguimientoRealizar = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_seguimiento_dias", type="smallint", nullable=false)
     */
    private $peSeguimientoDias = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_seguimiento_textofechaotros", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $peSeguimientoTextofechaotros = '\'\'';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="pe_pendiente_liquidacion", type="boolean", nullable=true)
     */
    private $pePendienteLiquidacion = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="pe_sexo_estado", type="boolean", nullable=false)
     */
    private $peSexoEstado = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ce_id", type="bigint", nullable=false)
     */
    private $ceId = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="pe_vendedor", type="boolean", nullable=false)
     */
    private $peVendedor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_direccion_adicional", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $peDireccionAdicional = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_direccion_referencia", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $peDireccionReferencia = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="pe_persona_relacionada", type="boolean", nullable=false, options={"default"="1"})
     */
    private $pePersonaRelacionada = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_alias", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $peAlias = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="pe_rise", type="boolean", nullable=false)
     */
    private $peRise = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_email_adicional", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $peEmailAdicional = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pt_id", type="bigint", nullable=false)
     */
    private $ptId = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="pe_pago_decimo_tercero", type="boolean", nullable=false)
     */
    private $pePagoDecimoTercero = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_nombre_adicional", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $peNombreAdicional = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_documento_adicional", type="string", length=25, nullable=false, options={"default"="''"})
     */
    private $peDocumentoAdicional = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="pe_persona_impuesto_estado", type="boolean", nullable=false)
     */
    private $pePersonaImpuestoEstado = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_canton", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $peCanton = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="pe_origen_ingresos", type="boolean", nullable=false, options={"default"="-1"})
     */
    private $peOrigenIngresos = '-1';

    /**
     * @var bool
     *
     * @ORM\Column(name="pe_pago_decimo_cuarto", type="boolean", nullable=false)
     */
    private $pePagoDecimoCuarto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_placa", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $pePlaca = '\'\'';

    public function getPeId(): ?string
    {
        return $this->peId;
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

    public function getPeTipo(): ?string
    {
        return $this->peTipo;
    }

    public function setPeTipo(string $peTipo): self
    {
        $this->peTipo = $peTipo;

        return $this;
    }

    public function getPeCodigo(): ?string
    {
        return $this->peCodigo;
    }

    public function setPeCodigo(string $peCodigo): self
    {
        $this->peCodigo = $peCodigo;

        return $this;
    }

    public function getPeContribuyenteEspecial(): ?bool
    {
        return $this->peContribuyenteEspecial;
    }

    public function setPeContribuyenteEspecial(bool $peContribuyenteEspecial): self
    {
        $this->peContribuyenteEspecial = $peContribuyenteEspecial;

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

    public function getPaId(): ?string
    {
        return $this->paId;
    }

    public function setPaId(string $paId): self
    {
        $this->paId = $paId;

        return $this;
    }

    public function getCiId(): ?string
    {
        return $this->ciId;
    }

    public function setCiId(string $ciId): self
    {
        $this->ciId = $ciId;

        return $this;
    }

    public function getScId(): ?string
    {
        return $this->scId;
    }

    public function setScId(string $scId): self
    {
        $this->scId = $scId;

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

    public function getPeNombre(): ?string
    {
        return $this->peNombre;
    }

    public function setPeNombre(string $peNombre): self
    {
        $this->peNombre = $peNombre;

        return $this;
    }

    public function getPeContacto(): ?string
    {
        return $this->peContacto;
    }

    public function setPeContacto(string $peContacto): self
    {
        $this->peContacto = $peContacto;

        return $this;
    }

    public function getPeDireccion(): ?string
    {
        return $this->peDireccion;
    }

    public function setPeDireccion(string $peDireccion): self
    {
        $this->peDireccion = $peDireccion;

        return $this;
    }

    public function getPeTelefono(): ?string
    {
        return $this->peTelefono;
    }

    public function setPeTelefono(string $peTelefono): self
    {
        $this->peTelefono = $peTelefono;

        return $this;
    }

    public function getPeFax(): ?string
    {
        return $this->peFax;
    }

    public function setPeFax(string $peFax): self
    {
        $this->peFax = $peFax;

        return $this;
    }

    public function getPeEmail(): ?string
    {
        return $this->peEmail;
    }

    public function setPeEmail(string $peEmail): self
    {
        $this->peEmail = $peEmail;

        return $this;
    }

    public function getPeRuc(): ?string
    {
        return $this->peRuc;
    }

    public function setPeRuc(string $peRuc): self
    {
        $this->peRuc = $peRuc;

        return $this;
    }

    public function getPeTitulo(): ?string
    {
        return $this->peTitulo;
    }

    public function setPeTitulo(string $peTitulo): self
    {
        $this->peTitulo = $peTitulo;

        return $this;
    }

    public function getPeRazonSocial(): ?string
    {
        return $this->peRazonSocial;
    }

    public function setPeRazonSocial(string $peRazonSocial): self
    {
        $this->peRazonSocial = $peRazonSocial;

        return $this;
    }

    public function getPeEducacion(): ?string
    {
        return $this->peEducacion;
    }

    public function setPeEducacion(string $peEducacion): self
    {
        $this->peEducacion = $peEducacion;

        return $this;
    }

    public function getPeFechaIngreso(): ?\DateTimeInterface
    {
        return $this->peFechaIngreso;
    }

    public function setPeFechaIngreso(\DateTimeInterface $peFechaIngreso): self
    {
        $this->peFechaIngreso = $peFechaIngreso;

        return $this;
    }

    public function getPeFechaNacimiento(): ?\DateTimeInterface
    {
        return $this->peFechaNacimiento;
    }

    public function setPeFechaNacimiento(\DateTimeInterface $peFechaNacimiento): self
    {
        $this->peFechaNacimiento = $peFechaNacimiento;

        return $this;
    }

    public function getPeFechaSalida(): ?\DateTimeInterface
    {
        return $this->peFechaSalida;
    }

    public function setPeFechaSalida(\DateTimeInterface $peFechaSalida): self
    {
        $this->peFechaSalida = $peFechaSalida;

        return $this;
    }

    public function getPeObservacion(): ?string
    {
        return $this->peObservacion;
    }

    public function setPeObservacion(string $peObservacion): self
    {
        $this->peObservacion = $peObservacion;

        return $this;
    }

    public function getPeEstado(): ?string
    {
        return $this->peEstado;
    }

    public function setPeEstado(string $peEstado): self
    {
        $this->peEstado = $peEstado;

        return $this;
    }

    public function getPeSecuencial(): ?string
    {
        return $this->peSecuencial;
    }

    public function setPeSecuencial(string $peSecuencial): self
    {
        $this->peSecuencial = $peSecuencial;

        return $this;
    }

    public function getCuIdRetencionFuente(): ?string
    {
        return $this->cuIdRetencionFuente;
    }

    public function setCuIdRetencionFuente(string $cuIdRetencionFuente): self
    {
        $this->cuIdRetencionFuente = $cuIdRetencionFuente;

        return $this;
    }

    public function getCuIdRetencionIva(): ?string
    {
        return $this->cuIdRetencionIva;
    }

    public function setCuIdRetencionIva(string $cuIdRetencionIva): self
    {
        $this->cuIdRetencionIva = $cuIdRetencionIva;

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

    public function getCuIdRetencionIvaServicio(): ?string
    {
        return $this->cuIdRetencionIvaServicio;
    }

    public function setCuIdRetencionIvaServicio(string $cuIdRetencionIvaServicio): self
    {
        $this->cuIdRetencionIvaServicio = $cuIdRetencionIvaServicio;

        return $this;
    }

    public function getTdId(): ?bool
    {
        return $this->tdId;
    }

    public function setTdId(bool $tdId): self
    {
        $this->tdId = $tdId;

        return $this;
    }

    public function getArId(): ?string
    {
        return $this->arId;
    }

    public function setArId(string $arId): self
    {
        $this->arId = $arId;

        return $this;
    }

    public function getPeApellido(): ?string
    {
        return $this->peApellido;
    }

    public function setPeApellido(string $peApellido): self
    {
        $this->peApellido = $peApellido;

        return $this;
    }

    public function getPeCargo(): ?string
    {
        return $this->peCargo;
    }

    public function setPeCargo(string $peCargo): self
    {
        $this->peCargo = $peCargo;

        return $this;
    }

    public function getPeProvincia(): ?string
    {
        return $this->peProvincia;
    }

    public function setPeProvincia(string $peProvincia): self
    {
        $this->peProvincia = $peProvincia;

        return $this;
    }

    public function getPeCantonNacimiento(): ?string
    {
        return $this->peCantonNacimiento;
    }

    public function setPeCantonNacimiento(string $peCantonNacimiento): self
    {
        $this->peCantonNacimiento = $peCantonNacimiento;

        return $this;
    }

    public function getPeParroquia(): ?string
    {
        return $this->peParroquia;
    }

    public function setPeParroquia(string $peParroquia): self
    {
        $this->peParroquia = $peParroquia;

        return $this;
    }

    public function getPeSexo(): ?bool
    {
        return $this->peSexo;
    }

    public function setPeSexo(bool $peSexo): self
    {
        $this->peSexo = $peSexo;

        return $this;
    }

    public function getPeAfiliacion(): ?string
    {
        return $this->peAfiliacion;
    }

    public function setPeAfiliacion(string $peAfiliacion): self
    {
        $this->peAfiliacion = $peAfiliacion;

        return $this;
    }

    public function getPeLicMilitar(): ?string
    {
        return $this->peLicMilitar;
    }

    public function setPeLicMilitar(string $peLicMilitar): self
    {
        $this->peLicMilitar = $peLicMilitar;

        return $this;
    }

    public function getPeTipoSangre(): ?string
    {
        return $this->peTipoSangre;
    }

    public function setPeTipoSangre(string $peTipoSangre): self
    {
        $this->peTipoSangre = $peTipoSangre;

        return $this;
    }

    public function getPeIdSuperior(): ?string
    {
        return $this->peIdSuperior;
    }

    public function setPeIdSuperior(string $peIdSuperior): self
    {
        $this->peIdSuperior = $peIdSuperior;

        return $this;
    }

    public function getPeEstadoCivil(): ?bool
    {
        return $this->peEstadoCivil;
    }

    public function setPeEstadoCivil(bool $peEstadoCivil): self
    {
        $this->peEstadoCivil = $peEstadoCivil;

        return $this;
    }

    public function getPaIdNacimiento(): ?string
    {
        return $this->paIdNacimiento;
    }

    public function setPaIdNacimiento(string $paIdNacimiento): self
    {
        $this->paIdNacimiento = $paIdNacimiento;

        return $this;
    }

    public function getCiIdNacimiento(): ?string
    {
        return $this->ciIdNacimiento;
    }

    public function setCiIdNacimiento(string $ciIdNacimiento): self
    {
        $this->ciIdNacimiento = $ciIdNacimiento;

        return $this;
    }

    public function getPeParroquiaNacimiento(): ?string
    {
        return $this->peParroquiaNacimiento;
    }

    public function setPeParroquiaNacimiento(string $peParroquiaNacimiento): self
    {
        $this->peParroquiaNacimiento = $peParroquiaNacimiento;

        return $this;
    }

    public function getPeFechaDesde(): ?\DateTimeInterface
    {
        return $this->peFechaDesde;
    }

    public function setPeFechaDesde(\DateTimeInterface $peFechaDesde): self
    {
        $this->peFechaDesde = $peFechaDesde;

        return $this;
    }

    public function getPeSitioWeb(): ?string
    {
        return $this->peSitioWeb;
    }

    public function setPeSitioWeb(string $peSitioWeb): self
    {
        $this->peSitioWeb = $peSitioWeb;

        return $this;
    }

    public function getPeRedSocialFacebook(): ?string
    {
        return $this->peRedSocialFacebook;
    }

    public function setPeRedSocialFacebook(string $peRedSocialFacebook): self
    {
        $this->peRedSocialFacebook = $peRedSocialFacebook;

        return $this;
    }

    public function getPeRedSocialInstagram(): ?string
    {
        return $this->peRedSocialInstagram;
    }

    public function setPeRedSocialInstagram(string $peRedSocialInstagram): self
    {
        $this->peRedSocialInstagram = $peRedSocialInstagram;

        return $this;
    }

    public function getPeTipoPrecio(): ?bool
    {
        return $this->peTipoPrecio;
    }

    public function setPeTipoPrecio(bool $peTipoPrecio): self
    {
        $this->peTipoPrecio = $peTipoPrecio;

        return $this;
    }

    public function getPeDireccionNumero(): ?string
    {
        return $this->peDireccionNumero;
    }

    public function setPeDireccionNumero(string $peDireccionNumero): self
    {
        $this->peDireccionNumero = $peDireccionNumero;

        return $this;
    }

    public function getPeProvinciaNacimiento(): ?string
    {
        return $this->peProvinciaNacimiento;
    }

    public function setPeProvinciaNacimiento(string $peProvinciaNacimiento): self
    {
        $this->peProvinciaNacimiento = $peProvinciaNacimiento;

        return $this;
    }

    public function getCuIdAlterno(): ?string
    {
        return $this->cuIdAlterno;
    }

    public function setCuIdAlterno(string $cuIdAlterno): self
    {
        $this->cuIdAlterno = $cuIdAlterno;

        return $this;
    }

    public function getPeCupo(): ?float
    {
        return $this->peCupo;
    }

    public function setPeCupo(float $peCupo): self
    {
        $this->peCupo = $peCupo;

        return $this;
    }

    public function getPeTipoSri(): ?bool
    {
        return $this->peTipoSri;
    }

    public function setPeTipoSri(bool $peTipoSri): self
    {
        $this->peTipoSri = $peTipoSri;

        return $this;
    }

    public function getPeDocFacEstablecimiento(): ?string
    {
        return $this->peDocFacEstablecimiento;
    }

    public function setPeDocFacEstablecimiento(string $peDocFacEstablecimiento): self
    {
        $this->peDocFacEstablecimiento = $peDocFacEstablecimiento;

        return $this;
    }

    public function getPeDocFacPuntoemision(): ?string
    {
        return $this->peDocFacPuntoemision;
    }

    public function setPeDocFacPuntoemision(string $peDocFacPuntoemision): self
    {
        $this->peDocFacPuntoemision = $peDocFacPuntoemision;

        return $this;
    }

    public function getPeDocFacAutorizacion(): ?string
    {
        return $this->peDocFacAutorizacion;
    }

    public function setPeDocFacAutorizacion(string $peDocFacAutorizacion): self
    {
        $this->peDocFacAutorizacion = $peDocFacAutorizacion;

        return $this;
    }

    public function getPeDocFacCaduca(): ?\DateTimeInterface
    {
        return $this->peDocFacCaduca;
    }

    public function setPeDocFacCaduca(\DateTimeInterface $peDocFacCaduca): self
    {
        $this->peDocFacCaduca = $peDocFacCaduca;

        return $this;
    }

    public function getPeDocNcEstablecimiento(): ?string
    {
        return $this->peDocNcEstablecimiento;
    }

    public function setPeDocNcEstablecimiento(string $peDocNcEstablecimiento): self
    {
        $this->peDocNcEstablecimiento = $peDocNcEstablecimiento;

        return $this;
    }

    public function getPeDocNcPuntoemision(): ?string
    {
        return $this->peDocNcPuntoemision;
    }

    public function setPeDocNcPuntoemision(string $peDocNcPuntoemision): self
    {
        $this->peDocNcPuntoemision = $peDocNcPuntoemision;

        return $this;
    }

    public function getPeDocNcAutorizacion(): ?string
    {
        return $this->peDocNcAutorizacion;
    }

    public function setPeDocNcAutorizacion(string $peDocNcAutorizacion): self
    {
        $this->peDocNcAutorizacion = $peDocNcAutorizacion;

        return $this;
    }

    public function getPeDocNcCaduca(): ?\DateTimeInterface
    {
        return $this->peDocNcCaduca;
    }

    public function setPeDocNcCaduca(\DateTimeInterface $peDocNcCaduca): self
    {
        $this->peDocNcCaduca = $peDocNcCaduca;

        return $this;
    }

    public function getPeDocNdEstablecimiento(): ?string
    {
        return $this->peDocNdEstablecimiento;
    }

    public function setPeDocNdEstablecimiento(string $peDocNdEstablecimiento): self
    {
        $this->peDocNdEstablecimiento = $peDocNdEstablecimiento;

        return $this;
    }

    public function getPeDocNdPuntoemision(): ?string
    {
        return $this->peDocNdPuntoemision;
    }

    public function setPeDocNdPuntoemision(string $peDocNdPuntoemision): self
    {
        $this->peDocNdPuntoemision = $peDocNdPuntoemision;

        return $this;
    }

    public function getPeDocNdAutorizacion(): ?string
    {
        return $this->peDocNdAutorizacion;
    }

    public function setPeDocNdAutorizacion(string $peDocNdAutorizacion): self
    {
        $this->peDocNdAutorizacion = $peDocNdAutorizacion;

        return $this;
    }

    public function getPeDocNdCaduca(): ?\DateTimeInterface
    {
        return $this->peDocNdCaduca;
    }

    public function setPeDocNdCaduca(\DateTimeInterface $peDocNdCaduca): self
    {
        $this->peDocNdCaduca = $peDocNdCaduca;

        return $this;
    }

    public function getPeDocNvEstablecimiento(): ?string
    {
        return $this->peDocNvEstablecimiento;
    }

    public function setPeDocNvEstablecimiento(string $peDocNvEstablecimiento): self
    {
        $this->peDocNvEstablecimiento = $peDocNvEstablecimiento;

        return $this;
    }

    public function getPeDocNvPuntoemision(): ?string
    {
        return $this->peDocNvPuntoemision;
    }

    public function setPeDocNvPuntoemision(string $peDocNvPuntoemision): self
    {
        $this->peDocNvPuntoemision = $peDocNvPuntoemision;

        return $this;
    }

    public function getPeDocNvAutorizacion(): ?string
    {
        return $this->peDocNvAutorizacion;
    }

    public function setPeDocNvAutorizacion(string $peDocNvAutorizacion): self
    {
        $this->peDocNvAutorizacion = $peDocNvAutorizacion;

        return $this;
    }

    public function getPeDocNvCaduca(): ?\DateTimeInterface
    {
        return $this->peDocNvCaduca;
    }

    public function setPeDocNvCaduca(\DateTimeInterface $peDocNvCaduca): self
    {
        $this->peDocNvCaduca = $peDocNvCaduca;

        return $this;
    }

    public function getPeTipoPersonaJuridica(): ?bool
    {
        return $this->peTipoPersonaJuridica;
    }

    public function setPeTipoPersonaJuridica(bool $peTipoPersonaJuridica): self
    {
        $this->peTipoPersonaJuridica = $peTipoPersonaJuridica;

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

    public function getPeDescuento1(): ?float
    {
        return $this->peDescuento1;
    }

    public function setPeDescuento1(float $peDescuento1): self
    {
        $this->peDescuento1 = $peDescuento1;

        return $this;
    }

    public function getPeDescuento2(): ?float
    {
        return $this->peDescuento2;
    }

    public function setPeDescuento2(float $peDescuento2): self
    {
        $this->peDescuento2 = $peDescuento2;

        return $this;
    }

    public function getPeDescuento3(): ?float
    {
        return $this->peDescuento3;
    }

    public function setPeDescuento3(float $peDescuento3): self
    {
        $this->peDescuento3 = $peDescuento3;

        return $this;
    }

    public function getPePagoFondoreserva(): ?bool
    {
        return $this->pePagoFondoreserva;
    }

    public function setPePagoFondoreserva(bool $pePagoFondoreserva): self
    {
        $this->pePagoFondoreserva = $pePagoFondoreserva;

        return $this;
    }

    public function getPePagoJuicioalimentos(): ?bool
    {
        return $this->pePagoJuicioalimentos;
    }

    public function setPePagoJuicioalimentos(bool $pePagoJuicioalimentos): self
    {
        $this->pePagoJuicioalimentos = $pePagoJuicioalimentos;

        return $this;
    }

    public function getPeBeneficiarioJuicioalimentos(): ?string
    {
        return $this->peBeneficiarioJuicioalimentos;
    }

    public function setPeBeneficiarioJuicioalimentos(string $peBeneficiarioJuicioalimentos): self
    {
        $this->peBeneficiarioJuicioalimentos = $peBeneficiarioJuicioalimentos;

        return $this;
    }

    public function getPeSeccion(): ?bool
    {
        return $this->peSeccion;
    }

    public function setPeSeccion(bool $peSeccion): self
    {
        $this->peSeccion = $peSeccion;

        return $this;
    }

    public function getBaId(): ?string
    {
        return $this->baId;
    }

    public function setBaId(?string $baId): self
    {
        $this->baId = $baId;

        return $this;
    }

    public function getPeCuentaBancoTipo(): ?string
    {
        return $this->peCuentaBancoTipo;
    }

    public function setPeCuentaBancoTipo(?string $peCuentaBancoTipo): self
    {
        $this->peCuentaBancoTipo = $peCuentaBancoTipo;

        return $this;
    }

    public function getPeCuentaBancoNumero(): ?string
    {
        return $this->peCuentaBancoNumero;
    }

    public function setPeCuentaBancoNumero(?string $peCuentaBancoNumero): self
    {
        $this->peCuentaBancoNumero = $peCuentaBancoNumero;

        return $this;
    }

    public function getPeSeguimientoRealizar(): ?bool
    {
        return $this->peSeguimientoRealizar;
    }

    public function setPeSeguimientoRealizar(bool $peSeguimientoRealizar): self
    {
        $this->peSeguimientoRealizar = $peSeguimientoRealizar;

        return $this;
    }

    public function getPeSeguimientoDias(): ?int
    {
        return $this->peSeguimientoDias;
    }

    public function setPeSeguimientoDias(int $peSeguimientoDias): self
    {
        $this->peSeguimientoDias = $peSeguimientoDias;

        return $this;
    }

    public function getPeSeguimientoTextofechaotros(): ?string
    {
        return $this->peSeguimientoTextofechaotros;
    }

    public function setPeSeguimientoTextofechaotros(string $peSeguimientoTextofechaotros): self
    {
        $this->peSeguimientoTextofechaotros = $peSeguimientoTextofechaotros;

        return $this;
    }

    public function getPePendienteLiquidacion(): ?bool
    {
        return $this->pePendienteLiquidacion;
    }

    public function setPePendienteLiquidacion(?bool $pePendienteLiquidacion): self
    {
        $this->pePendienteLiquidacion = $pePendienteLiquidacion;

        return $this;
    }

    public function getPeSexoEstado(): ?bool
    {
        return $this->peSexoEstado;
    }

    public function setPeSexoEstado(bool $peSexoEstado): self
    {
        $this->peSexoEstado = $peSexoEstado;

        return $this;
    }

    public function getCeId(): ?string
    {
        return $this->ceId;
    }

    public function setCeId(string $ceId): self
    {
        $this->ceId = $ceId;

        return $this;
    }

    public function getPeVendedor(): ?bool
    {
        return $this->peVendedor;
    }

    public function setPeVendedor(bool $peVendedor): self
    {
        $this->peVendedor = $peVendedor;

        return $this;
    }

    public function getPeDireccionAdicional(): ?string
    {
        return $this->peDireccionAdicional;
    }

    public function setPeDireccionAdicional(string $peDireccionAdicional): self
    {
        $this->peDireccionAdicional = $peDireccionAdicional;

        return $this;
    }

    public function getPeDireccionReferencia(): ?string
    {
        return $this->peDireccionReferencia;
    }

    public function setPeDireccionReferencia(string $peDireccionReferencia): self
    {
        $this->peDireccionReferencia = $peDireccionReferencia;

        return $this;
    }

    public function getPePersonaRelacionada(): ?bool
    {
        return $this->pePersonaRelacionada;
    }

    public function setPePersonaRelacionada(bool $pePersonaRelacionada): self
    {
        $this->pePersonaRelacionada = $pePersonaRelacionada;

        return $this;
    }

    public function getPeAlias(): ?string
    {
        return $this->peAlias;
    }

    public function setPeAlias(string $peAlias): self
    {
        $this->peAlias = $peAlias;

        return $this;
    }

    public function getPeRise(): ?bool
    {
        return $this->peRise;
    }

    public function setPeRise(bool $peRise): self
    {
        $this->peRise = $peRise;

        return $this;
    }

    public function getPeEmailAdicional(): ?string
    {
        return $this->peEmailAdicional;
    }

    public function setPeEmailAdicional(string $peEmailAdicional): self
    {
        $this->peEmailAdicional = $peEmailAdicional;

        return $this;
    }

    public function getPtId(): ?string
    {
        return $this->ptId;
    }

    public function setPtId(string $ptId): self
    {
        $this->ptId = $ptId;

        return $this;
    }

    public function getPePagoDecimoTercero(): ?bool
    {
        return $this->pePagoDecimoTercero;
    }

    public function setPePagoDecimoTercero(bool $pePagoDecimoTercero): self
    {
        $this->pePagoDecimoTercero = $pePagoDecimoTercero;

        return $this;
    }

    public function getPeNombreAdicional(): ?string
    {
        return $this->peNombreAdicional;
    }

    public function setPeNombreAdicional(string $peNombreAdicional): self
    {
        $this->peNombreAdicional = $peNombreAdicional;

        return $this;
    }

    public function getPeDocumentoAdicional(): ?string
    {
        return $this->peDocumentoAdicional;
    }

    public function setPeDocumentoAdicional(string $peDocumentoAdicional): self
    {
        $this->peDocumentoAdicional = $peDocumentoAdicional;

        return $this;
    }

    public function getPePersonaImpuestoEstado(): ?bool
    {
        return $this->pePersonaImpuestoEstado;
    }

    public function setPePersonaImpuestoEstado(bool $pePersonaImpuestoEstado): self
    {
        $this->pePersonaImpuestoEstado = $pePersonaImpuestoEstado;

        return $this;
    }

    public function getPeCanton(): ?string
    {
        return $this->peCanton;
    }

    public function setPeCanton(string $peCanton): self
    {
        $this->peCanton = $peCanton;

        return $this;
    }

    public function getPeOrigenIngresos(): ?bool
    {
        return $this->peOrigenIngresos;
    }

    public function setPeOrigenIngresos(bool $peOrigenIngresos): self
    {
        $this->peOrigenIngresos = $peOrigenIngresos;

        return $this;
    }

    public function getPePagoDecimoCuarto(): ?bool
    {
        return $this->pePagoDecimoCuarto;
    }

    public function setPePagoDecimoCuarto(bool $pePagoDecimoCuarto): self
    {
        $this->pePagoDecimoCuarto = $pePagoDecimoCuarto;

        return $this;
    }

    public function getPePlaca(): ?string
    {
        return $this->pePlaca;
    }

    public function setPePlaca(string $pePlaca): self
    {
        $this->pePlaca = $pePlaca;

        return $this;
    }


}
