<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpresaSucursalPtoventa
 *
 * @ORM\Table(name="gc_empresa_sucursal_ptoventa")
 * @ORM\Entity
 */
class GcEmpresaSucursalPtoventa
{
    /**
     * @var int
     *
     * @ORM\Column(name="pv_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pvId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sc_id", type="bigint", nullable=false)
     */
    private $scId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pv_codigo", type="string", length=5, nullable=false, options={"default"="'001'"})
     */
    private $pvCodigo = '\'001\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pv_descripcion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $pvDescripcion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pv_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $pvEstado = '\'C\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pv_doc_ret_autorizacion", type="string", length=50, nullable=false, options={"default"="'0'"})
     */
    private $pvDocRetAutorizacion = '\'0\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pv_doc_ret_caduca", type="date", nullable=false, options={"default"="'2008-01-01'"})
     */
    private $pvDocRetCaduca = '\'2008-01-01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_ret_secuencial", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $pvDocRetSecuencial = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pv_doc_fac_autorizacion", type="string", length=50, nullable=false, options={"default"="'0'"})
     */
    private $pvDocFacAutorizacion = '\'0\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pv_doc_fac_caduca", type="date", nullable=false, options={"default"="'2008-01-01'"})
     */
    private $pvDocFacCaduca = '\'2008-01-01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_fac_secuencial", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $pvDocFacSecuencial = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pv_doc_nc_autorizacion", type="string", length=50, nullable=false, options={"default"="'0'"})
     */
    private $pvDocNcAutorizacion = '\'0\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pv_doc_nc_caduca", type="date", nullable=false, options={"default"="'2008-01-01'"})
     */
    private $pvDocNcCaduca = '\'2008-01-01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_nc_secuencial", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $pvDocNcSecuencial = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pv_doc_cliq_autorizacion", type="string", length=50, nullable=false, options={"default"="'0'"})
     */
    private $pvDocCliqAutorizacion = '\'0\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pv_doc_cliq_caduca", type="date", nullable=false, options={"default"="'2008-01-01'"})
     */
    private $pvDocCliqCaduca = '\'2008-01-01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_cliq_secuencial", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $pvDocCliqSecuencial = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pv_doc_nd_autorizacion", type="string", length=50, nullable=false, options={"default"="'0'"})
     */
    private $pvDocNdAutorizacion = '\'0\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pv_doc_nd_caduca", type="date", nullable=false, options={"default"="'2008-01-01'"})
     */
    private $pvDocNdCaduca = '\'2008-01-01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_nd_secuencial", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $pvDocNdSecuencial = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pv_doc_nv_autorizacion", type="string", length=50, nullable=false, options={"default"="'0'"})
     */
    private $pvDocNvAutorizacion = '\'0\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pv_doc_nv_caduca", type="date", nullable=false, options={"default"="'2008-01-01'"})
     */
    private $pvDocNvCaduca = '\'2008-01-01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_nv_secuencial", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $pvDocNvSecuencial = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_faccotiza_secuencial", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $pvDocFaccotizaSecuencial = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_ret_secuencia_inicial", type="bigint", nullable=false)
     */
    private $pvDocRetSecuenciaInicial = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_ret_secuencia_final", type="bigint", nullable=false)
     */
    private $pvDocRetSecuenciaFinal = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_ret_control_numero", type="bigint", nullable=false)
     */
    private $pvDocRetControlNumero = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_fac_secuencia_inicial", type="bigint", nullable=false)
     */
    private $pvDocFacSecuenciaInicial = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_fac_secuencia_final", type="bigint", nullable=false)
     */
    private $pvDocFacSecuenciaFinal = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_fac_control_numero", type="bigint", nullable=false)
     */
    private $pvDocFacControlNumero = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_nc_secuencia_inicial", type="bigint", nullable=false)
     */
    private $pvDocNcSecuenciaInicial = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_nc_secuencia_final", type="bigint", nullable=false)
     */
    private $pvDocNcSecuenciaFinal = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_nc_control_numero", type="bigint", nullable=false)
     */
    private $pvDocNcControlNumero = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_cliq_secuencia_inicial", type="bigint", nullable=false)
     */
    private $pvDocCliqSecuenciaInicial = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_cliq_secuencia_final", type="bigint", nullable=false)
     */
    private $pvDocCliqSecuenciaFinal = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_cliq_control_numero", type="bigint", nullable=false)
     */
    private $pvDocCliqControlNumero = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_nd_secuencia_inicial", type="bigint", nullable=false)
     */
    private $pvDocNdSecuenciaInicial = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_nd_secuencia_final", type="bigint", nullable=false)
     */
    private $pvDocNdSecuenciaFinal = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_nd_control_numero", type="bigint", nullable=false)
     */
    private $pvDocNdControlNumero = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_nv_secuencia_inicial", type="bigint", nullable=false)
     */
    private $pvDocNvSecuenciaInicial = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_nv_secuencia_final", type="bigint", nullable=false)
     */
    private $pvDocNvSecuenciaFinal = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_nv_control_numero", type="bigint", nullable=false)
     */
    private $pvDocNvControlNumero = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_control_dias", type="bigint", nullable=false)
     */
    private $pvDocControlDias = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pv_doc_ret_path_archivo", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $pvDocRetPathArchivo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pv_doc_fac_path_archivo", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $pvDocFacPathArchivo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pv_doc_nc_path_archivo", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $pvDocNcPathArchivo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pv_doc_cliq_path_archivo", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $pvDocCliqPathArchivo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pv_doc_nd_path_archivo", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $pvDocNdPathArchivo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pv_doc_faccotiza_path_archivo", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $pvDocFaccotizaPathArchivo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pv_doc_nv_path_archivo", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $pvDocNvPathArchivo = '\'*\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pv_doc_ret_fecha_autorizacion", type="date", nullable=false, options={"default"="'2014-01-01'"})
     */
    private $pvDocRetFechaAutorizacion = '\'2014-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pv_doc_fac_fecha_autorizacion", type="date", nullable=false, options={"default"="'2014-01-01'"})
     */
    private $pvDocFacFechaAutorizacion = '\'2014-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pv_doc_nc_fecha_autorizacion", type="date", nullable=false, options={"default"="'2014-01-01'"})
     */
    private $pvDocNcFechaAutorizacion = '\'2014-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pv_doc_cliq_fecha_autorizacion", type="date", nullable=false, options={"default"="'2014-01-01'"})
     */
    private $pvDocCliqFechaAutorizacion = '\'2014-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pv_doc_nd_fecha_autorizacion", type="date", nullable=false, options={"default"="'2014-01-01'"})
     */
    private $pvDocNdFechaAutorizacion = '\'2014-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pv_doc_nv_fecha_autorizacion", type="date", nullable=false, options={"default"="'2014-01-01'"})
     */
    private $pvDocNvFechaAutorizacion = '\'2014-01-01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_doc_rem_secuencial", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $pvDocRemSecuencial = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="pv_doc_ret_documentos_electronicos", type="boolean", nullable=false)
     */
    private $pvDocRetDocumentosElectronicos = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="pv_doc_fac_documentos_electronicos", type="boolean", nullable=false)
     */
    private $pvDocFacDocumentosElectronicos = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="pv_doc_nc_documentos_electronicos", type="boolean", nullable=false)
     */
    private $pvDocNcDocumentosElectronicos = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="pv_doc_nd_documentos_electronicos", type="boolean", nullable=false)
     */
    private $pvDocNdDocumentosElectronicos = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="pv_doc_rem_documentos_electronicos", type="boolean", nullable=false)
     */
    private $pvDocRemDocumentosElectronicos = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="pv_doc_cliq_documentos_electronicos", type="boolean", nullable=false)
     */
    private $pvDocCliqDocumentosElectronicos = '0';

    public function getPvId(): ?string
    {
        return $this->pvId;
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

    public function getScId(): ?string
    {
        return $this->scId;
    }

    public function setScId(string $scId): self
    {
        $this->scId = $scId;

        return $this;
    }

    public function getPvCodigo(): ?string
    {
        return $this->pvCodigo;
    }

    public function setPvCodigo(string $pvCodigo): self
    {
        $this->pvCodigo = $pvCodigo;

        return $this;
    }

    public function getPvDescripcion(): ?string
    {
        return $this->pvDescripcion;
    }

    public function setPvDescripcion(string $pvDescripcion): self
    {
        $this->pvDescripcion = $pvDescripcion;

        return $this;
    }

    public function getPvEstado(): ?string
    {
        return $this->pvEstado;
    }

    public function setPvEstado(string $pvEstado): self
    {
        $this->pvEstado = $pvEstado;

        return $this;
    }

    public function getPvDocRetAutorizacion(): ?string
    {
        return $this->pvDocRetAutorizacion;
    }

    public function setPvDocRetAutorizacion(string $pvDocRetAutorizacion): self
    {
        $this->pvDocRetAutorizacion = $pvDocRetAutorizacion;

        return $this;
    }

    public function getPvDocRetCaduca(): ?\DateTimeInterface
    {
        return $this->pvDocRetCaduca;
    }

    public function setPvDocRetCaduca(\DateTimeInterface $pvDocRetCaduca): self
    {
        $this->pvDocRetCaduca = $pvDocRetCaduca;

        return $this;
    }

    public function getPvDocRetSecuencial(): ?string
    {
        return $this->pvDocRetSecuencial;
    }

    public function setPvDocRetSecuencial(string $pvDocRetSecuencial): self
    {
        $this->pvDocRetSecuencial = $pvDocRetSecuencial;

        return $this;
    }

    public function getPvDocFacAutorizacion(): ?string
    {
        return $this->pvDocFacAutorizacion;
    }

    public function setPvDocFacAutorizacion(string $pvDocFacAutorizacion): self
    {
        $this->pvDocFacAutorizacion = $pvDocFacAutorizacion;

        return $this;
    }

    public function getPvDocFacCaduca(): ?\DateTimeInterface
    {
        return $this->pvDocFacCaduca;
    }

    public function setPvDocFacCaduca(\DateTimeInterface $pvDocFacCaduca): self
    {
        $this->pvDocFacCaduca = $pvDocFacCaduca;

        return $this;
    }

    public function getPvDocFacSecuencial(): ?string
    {
        return $this->pvDocFacSecuencial;
    }

    public function setPvDocFacSecuencial(string $pvDocFacSecuencial): self
    {
        $this->pvDocFacSecuencial = $pvDocFacSecuencial;

        return $this;
    }

    public function getPvDocNcAutorizacion(): ?string
    {
        return $this->pvDocNcAutorizacion;
    }

    public function setPvDocNcAutorizacion(string $pvDocNcAutorizacion): self
    {
        $this->pvDocNcAutorizacion = $pvDocNcAutorizacion;

        return $this;
    }

    public function getPvDocNcCaduca(): ?\DateTimeInterface
    {
        return $this->pvDocNcCaduca;
    }

    public function setPvDocNcCaduca(\DateTimeInterface $pvDocNcCaduca): self
    {
        $this->pvDocNcCaduca = $pvDocNcCaduca;

        return $this;
    }

    public function getPvDocNcSecuencial(): ?string
    {
        return $this->pvDocNcSecuencial;
    }

    public function setPvDocNcSecuencial(string $pvDocNcSecuencial): self
    {
        $this->pvDocNcSecuencial = $pvDocNcSecuencial;

        return $this;
    }

    public function getPvDocCliqAutorizacion(): ?string
    {
        return $this->pvDocCliqAutorizacion;
    }

    public function setPvDocCliqAutorizacion(string $pvDocCliqAutorizacion): self
    {
        $this->pvDocCliqAutorizacion = $pvDocCliqAutorizacion;

        return $this;
    }

    public function getPvDocCliqCaduca(): ?\DateTimeInterface
    {
        return $this->pvDocCliqCaduca;
    }

    public function setPvDocCliqCaduca(\DateTimeInterface $pvDocCliqCaduca): self
    {
        $this->pvDocCliqCaduca = $pvDocCliqCaduca;

        return $this;
    }

    public function getPvDocCliqSecuencial(): ?string
    {
        return $this->pvDocCliqSecuencial;
    }

    public function setPvDocCliqSecuencial(string $pvDocCliqSecuencial): self
    {
        $this->pvDocCliqSecuencial = $pvDocCliqSecuencial;

        return $this;
    }

    public function getPvDocNdAutorizacion(): ?string
    {
        return $this->pvDocNdAutorizacion;
    }

    public function setPvDocNdAutorizacion(string $pvDocNdAutorizacion): self
    {
        $this->pvDocNdAutorizacion = $pvDocNdAutorizacion;

        return $this;
    }

    public function getPvDocNdCaduca(): ?\DateTimeInterface
    {
        return $this->pvDocNdCaduca;
    }

    public function setPvDocNdCaduca(\DateTimeInterface $pvDocNdCaduca): self
    {
        $this->pvDocNdCaduca = $pvDocNdCaduca;

        return $this;
    }

    public function getPvDocNdSecuencial(): ?string
    {
        return $this->pvDocNdSecuencial;
    }

    public function setPvDocNdSecuencial(string $pvDocNdSecuencial): self
    {
        $this->pvDocNdSecuencial = $pvDocNdSecuencial;

        return $this;
    }

    public function getPvDocNvAutorizacion(): ?string
    {
        return $this->pvDocNvAutorizacion;
    }

    public function setPvDocNvAutorizacion(string $pvDocNvAutorizacion): self
    {
        $this->pvDocNvAutorizacion = $pvDocNvAutorizacion;

        return $this;
    }

    public function getPvDocNvCaduca(): ?\DateTimeInterface
    {
        return $this->pvDocNvCaduca;
    }

    public function setPvDocNvCaduca(\DateTimeInterface $pvDocNvCaduca): self
    {
        $this->pvDocNvCaduca = $pvDocNvCaduca;

        return $this;
    }

    public function getPvDocNvSecuencial(): ?string
    {
        return $this->pvDocNvSecuencial;
    }

    public function setPvDocNvSecuencial(string $pvDocNvSecuencial): self
    {
        $this->pvDocNvSecuencial = $pvDocNvSecuencial;

        return $this;
    }

    public function getPvDocFaccotizaSecuencial(): ?string
    {
        return $this->pvDocFaccotizaSecuencial;
    }

    public function setPvDocFaccotizaSecuencial(string $pvDocFaccotizaSecuencial): self
    {
        $this->pvDocFaccotizaSecuencial = $pvDocFaccotizaSecuencial;

        return $this;
    }

    public function getPvDocRetSecuenciaInicial(): ?string
    {
        return $this->pvDocRetSecuenciaInicial;
    }

    public function setPvDocRetSecuenciaInicial(string $pvDocRetSecuenciaInicial): self
    {
        $this->pvDocRetSecuenciaInicial = $pvDocRetSecuenciaInicial;

        return $this;
    }

    public function getPvDocRetSecuenciaFinal(): ?string
    {
        return $this->pvDocRetSecuenciaFinal;
    }

    public function setPvDocRetSecuenciaFinal(string $pvDocRetSecuenciaFinal): self
    {
        $this->pvDocRetSecuenciaFinal = $pvDocRetSecuenciaFinal;

        return $this;
    }

    public function getPvDocRetControlNumero(): ?string
    {
        return $this->pvDocRetControlNumero;
    }

    public function setPvDocRetControlNumero(string $pvDocRetControlNumero): self
    {
        $this->pvDocRetControlNumero = $pvDocRetControlNumero;

        return $this;
    }

    public function getPvDocFacSecuenciaInicial(): ?string
    {
        return $this->pvDocFacSecuenciaInicial;
    }

    public function setPvDocFacSecuenciaInicial(string $pvDocFacSecuenciaInicial): self
    {
        $this->pvDocFacSecuenciaInicial = $pvDocFacSecuenciaInicial;

        return $this;
    }

    public function getPvDocFacSecuenciaFinal(): ?string
    {
        return $this->pvDocFacSecuenciaFinal;
    }

    public function setPvDocFacSecuenciaFinal(string $pvDocFacSecuenciaFinal): self
    {
        $this->pvDocFacSecuenciaFinal = $pvDocFacSecuenciaFinal;

        return $this;
    }

    public function getPvDocFacControlNumero(): ?string
    {
        return $this->pvDocFacControlNumero;
    }

    public function setPvDocFacControlNumero(string $pvDocFacControlNumero): self
    {
        $this->pvDocFacControlNumero = $pvDocFacControlNumero;

        return $this;
    }

    public function getPvDocNcSecuenciaInicial(): ?string
    {
        return $this->pvDocNcSecuenciaInicial;
    }

    public function setPvDocNcSecuenciaInicial(string $pvDocNcSecuenciaInicial): self
    {
        $this->pvDocNcSecuenciaInicial = $pvDocNcSecuenciaInicial;

        return $this;
    }

    public function getPvDocNcSecuenciaFinal(): ?string
    {
        return $this->pvDocNcSecuenciaFinal;
    }

    public function setPvDocNcSecuenciaFinal(string $pvDocNcSecuenciaFinal): self
    {
        $this->pvDocNcSecuenciaFinal = $pvDocNcSecuenciaFinal;

        return $this;
    }

    public function getPvDocNcControlNumero(): ?string
    {
        return $this->pvDocNcControlNumero;
    }

    public function setPvDocNcControlNumero(string $pvDocNcControlNumero): self
    {
        $this->pvDocNcControlNumero = $pvDocNcControlNumero;

        return $this;
    }

    public function getPvDocCliqSecuenciaInicial(): ?string
    {
        return $this->pvDocCliqSecuenciaInicial;
    }

    public function setPvDocCliqSecuenciaInicial(string $pvDocCliqSecuenciaInicial): self
    {
        $this->pvDocCliqSecuenciaInicial = $pvDocCliqSecuenciaInicial;

        return $this;
    }

    public function getPvDocCliqSecuenciaFinal(): ?string
    {
        return $this->pvDocCliqSecuenciaFinal;
    }

    public function setPvDocCliqSecuenciaFinal(string $pvDocCliqSecuenciaFinal): self
    {
        $this->pvDocCliqSecuenciaFinal = $pvDocCliqSecuenciaFinal;

        return $this;
    }

    public function getPvDocCliqControlNumero(): ?string
    {
        return $this->pvDocCliqControlNumero;
    }

    public function setPvDocCliqControlNumero(string $pvDocCliqControlNumero): self
    {
        $this->pvDocCliqControlNumero = $pvDocCliqControlNumero;

        return $this;
    }

    public function getPvDocNdSecuenciaInicial(): ?string
    {
        return $this->pvDocNdSecuenciaInicial;
    }

    public function setPvDocNdSecuenciaInicial(string $pvDocNdSecuenciaInicial): self
    {
        $this->pvDocNdSecuenciaInicial = $pvDocNdSecuenciaInicial;

        return $this;
    }

    public function getPvDocNdSecuenciaFinal(): ?string
    {
        return $this->pvDocNdSecuenciaFinal;
    }

    public function setPvDocNdSecuenciaFinal(string $pvDocNdSecuenciaFinal): self
    {
        $this->pvDocNdSecuenciaFinal = $pvDocNdSecuenciaFinal;

        return $this;
    }

    public function getPvDocNdControlNumero(): ?string
    {
        return $this->pvDocNdControlNumero;
    }

    public function setPvDocNdControlNumero(string $pvDocNdControlNumero): self
    {
        $this->pvDocNdControlNumero = $pvDocNdControlNumero;

        return $this;
    }

    public function getPvDocNvSecuenciaInicial(): ?string
    {
        return $this->pvDocNvSecuenciaInicial;
    }

    public function setPvDocNvSecuenciaInicial(string $pvDocNvSecuenciaInicial): self
    {
        $this->pvDocNvSecuenciaInicial = $pvDocNvSecuenciaInicial;

        return $this;
    }

    public function getPvDocNvSecuenciaFinal(): ?string
    {
        return $this->pvDocNvSecuenciaFinal;
    }

    public function setPvDocNvSecuenciaFinal(string $pvDocNvSecuenciaFinal): self
    {
        $this->pvDocNvSecuenciaFinal = $pvDocNvSecuenciaFinal;

        return $this;
    }

    public function getPvDocNvControlNumero(): ?string
    {
        return $this->pvDocNvControlNumero;
    }

    public function setPvDocNvControlNumero(string $pvDocNvControlNumero): self
    {
        $this->pvDocNvControlNumero = $pvDocNvControlNumero;

        return $this;
    }

    public function getPvDocControlDias(): ?string
    {
        return $this->pvDocControlDias;
    }

    public function setPvDocControlDias(string $pvDocControlDias): self
    {
        $this->pvDocControlDias = $pvDocControlDias;

        return $this;
    }

    public function getPvDocRetPathArchivo(): ?string
    {
        return $this->pvDocRetPathArchivo;
    }

    public function setPvDocRetPathArchivo(string $pvDocRetPathArchivo): self
    {
        $this->pvDocRetPathArchivo = $pvDocRetPathArchivo;

        return $this;
    }

    public function getPvDocFacPathArchivo(): ?string
    {
        return $this->pvDocFacPathArchivo;
    }

    public function setPvDocFacPathArchivo(string $pvDocFacPathArchivo): self
    {
        $this->pvDocFacPathArchivo = $pvDocFacPathArchivo;

        return $this;
    }

    public function getPvDocNcPathArchivo(): ?string
    {
        return $this->pvDocNcPathArchivo;
    }

    public function setPvDocNcPathArchivo(string $pvDocNcPathArchivo): self
    {
        $this->pvDocNcPathArchivo = $pvDocNcPathArchivo;

        return $this;
    }

    public function getPvDocCliqPathArchivo(): ?string
    {
        return $this->pvDocCliqPathArchivo;
    }

    public function setPvDocCliqPathArchivo(string $pvDocCliqPathArchivo): self
    {
        $this->pvDocCliqPathArchivo = $pvDocCliqPathArchivo;

        return $this;
    }

    public function getPvDocNdPathArchivo(): ?string
    {
        return $this->pvDocNdPathArchivo;
    }

    public function setPvDocNdPathArchivo(string $pvDocNdPathArchivo): self
    {
        $this->pvDocNdPathArchivo = $pvDocNdPathArchivo;

        return $this;
    }

    public function getPvDocFaccotizaPathArchivo(): ?string
    {
        return $this->pvDocFaccotizaPathArchivo;
    }

    public function setPvDocFaccotizaPathArchivo(string $pvDocFaccotizaPathArchivo): self
    {
        $this->pvDocFaccotizaPathArchivo = $pvDocFaccotizaPathArchivo;

        return $this;
    }

    public function getPvDocNvPathArchivo(): ?string
    {
        return $this->pvDocNvPathArchivo;
    }

    public function setPvDocNvPathArchivo(string $pvDocNvPathArchivo): self
    {
        $this->pvDocNvPathArchivo = $pvDocNvPathArchivo;

        return $this;
    }

    public function getPvDocRetFechaAutorizacion(): ?\DateTimeInterface
    {
        return $this->pvDocRetFechaAutorizacion;
    }

    public function setPvDocRetFechaAutorizacion(\DateTimeInterface $pvDocRetFechaAutorizacion): self
    {
        $this->pvDocRetFechaAutorizacion = $pvDocRetFechaAutorizacion;

        return $this;
    }

    public function getPvDocFacFechaAutorizacion(): ?\DateTimeInterface
    {
        return $this->pvDocFacFechaAutorizacion;
    }

    public function setPvDocFacFechaAutorizacion(\DateTimeInterface $pvDocFacFechaAutorizacion): self
    {
        $this->pvDocFacFechaAutorizacion = $pvDocFacFechaAutorizacion;

        return $this;
    }

    public function getPvDocNcFechaAutorizacion(): ?\DateTimeInterface
    {
        return $this->pvDocNcFechaAutorizacion;
    }

    public function setPvDocNcFechaAutorizacion(\DateTimeInterface $pvDocNcFechaAutorizacion): self
    {
        $this->pvDocNcFechaAutorizacion = $pvDocNcFechaAutorizacion;

        return $this;
    }

    public function getPvDocCliqFechaAutorizacion(): ?\DateTimeInterface
    {
        return $this->pvDocCliqFechaAutorizacion;
    }

    public function setPvDocCliqFechaAutorizacion(\DateTimeInterface $pvDocCliqFechaAutorizacion): self
    {
        $this->pvDocCliqFechaAutorizacion = $pvDocCliqFechaAutorizacion;

        return $this;
    }

    public function getPvDocNdFechaAutorizacion(): ?\DateTimeInterface
    {
        return $this->pvDocNdFechaAutorizacion;
    }

    public function setPvDocNdFechaAutorizacion(\DateTimeInterface $pvDocNdFechaAutorizacion): self
    {
        $this->pvDocNdFechaAutorizacion = $pvDocNdFechaAutorizacion;

        return $this;
    }

    public function getPvDocNvFechaAutorizacion(): ?\DateTimeInterface
    {
        return $this->pvDocNvFechaAutorizacion;
    }

    public function setPvDocNvFechaAutorizacion(\DateTimeInterface $pvDocNvFechaAutorizacion): self
    {
        $this->pvDocNvFechaAutorizacion = $pvDocNvFechaAutorizacion;

        return $this;
    }

    public function getPvDocRemSecuencial(): ?string
    {
        return $this->pvDocRemSecuencial;
    }

    public function setPvDocRemSecuencial(string $pvDocRemSecuencial): self
    {
        $this->pvDocRemSecuencial = $pvDocRemSecuencial;

        return $this;
    }

    public function getPvDocRetDocumentosElectronicos(): ?bool
    {
        return $this->pvDocRetDocumentosElectronicos;
    }

    public function setPvDocRetDocumentosElectronicos(bool $pvDocRetDocumentosElectronicos): self
    {
        $this->pvDocRetDocumentosElectronicos = $pvDocRetDocumentosElectronicos;

        return $this;
    }

    public function getPvDocFacDocumentosElectronicos(): ?bool
    {
        return $this->pvDocFacDocumentosElectronicos;
    }

    public function setPvDocFacDocumentosElectronicos(bool $pvDocFacDocumentosElectronicos): self
    {
        $this->pvDocFacDocumentosElectronicos = $pvDocFacDocumentosElectronicos;

        return $this;
    }

    public function getPvDocNcDocumentosElectronicos(): ?bool
    {
        return $this->pvDocNcDocumentosElectronicos;
    }

    public function setPvDocNcDocumentosElectronicos(bool $pvDocNcDocumentosElectronicos): self
    {
        $this->pvDocNcDocumentosElectronicos = $pvDocNcDocumentosElectronicos;

        return $this;
    }

    public function getPvDocNdDocumentosElectronicos(): ?bool
    {
        return $this->pvDocNdDocumentosElectronicos;
    }

    public function setPvDocNdDocumentosElectronicos(bool $pvDocNdDocumentosElectronicos): self
    {
        $this->pvDocNdDocumentosElectronicos = $pvDocNdDocumentosElectronicos;

        return $this;
    }

    public function getPvDocRemDocumentosElectronicos(): ?bool
    {
        return $this->pvDocRemDocumentosElectronicos;
    }

    public function setPvDocRemDocumentosElectronicos(bool $pvDocRemDocumentosElectronicos): self
    {
        $this->pvDocRemDocumentosElectronicos = $pvDocRemDocumentosElectronicos;

        return $this;
    }

    public function getPvDocCliqDocumentosElectronicos(): ?bool
    {
        return $this->pvDocCliqDocumentosElectronicos;
    }

    public function setPvDocCliqDocumentosElectronicos(bool $pvDocCliqDocumentosElectronicos): self
    {
        $this->pvDocCliqDocumentosElectronicos = $pvDocCliqDocumentosElectronicos;

        return $this;
    }


}
