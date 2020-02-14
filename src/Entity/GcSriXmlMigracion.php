<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcSriXmlMigracion
 *
 * @ORM\Table(name="gc_sri_xml_migracion", uniqueConstraints={@ORM\UniqueConstraint(name="indiceSRIXmlClaveAcceso", columns={"em_id", "sr_xm_clave_acceso"})})
 * @ORM\Entity
 */
class GcSriXmlMigracion
{
    /**
     * @var int
     *
     * @ORM\Column(name="sr_xm_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $srXmId;

    /**
     * @var string
     *
     * @ORM\Column(name="sr_xm_tipo_comprobante", type="string", length=80, nullable=false, options={"default"="''"})
     */
    private $srXmTipoComprobante = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sr_xm_numero_documento", type="string", length=25, nullable=false, options={"default"="''"})
     */
    private $srXmNumeroDocumento = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sr_xm_ruc_emisor", type="string", length=20, nullable=false, options={"default"="''"})
     */
    private $srXmRucEmisor = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sr_xm_razon_social", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $srXmRazonSocial = '\'\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sr_xm_fecha_emision", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $srXmFechaEmision = '\'2000-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sr_xm_fecha_autorizacion", type="datetime", nullable=false, options={"default"="'2000-01-01 00:00:00'"})
     */
    private $srXmFechaAutorizacion = '\'2000-01-01 00:00:00\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sr_xm_tipo_emision", type="string", length=20, nullable=false, options={"default"="'NORMAL'"})
     */
    private $srXmTipoEmision = '\'NORMAL\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sr_xm_ruc_receptor", type="string", length=20, nullable=false, options={"default"="''"})
     */
    private $srXmRucReceptor = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sr_xm_clave_acceso", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $srXmClaveAcceso = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sr_xm_numero_autorizacion", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $srXmNumeroAutorizacion = '\'\'';

    /**
     * @var float
     *
     * @ORM\Column(name="sr_xm_importe_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $srXmImporteValor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sr_xm_xml", type="blob", length=65535, nullable=false)
     */
    private $srXmXml;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sr_xm_fecha_usuario", type="datetime", nullable=false, options={"default"="current_timestamp()"})
     */
    private $srXmFechaUsuario = 'current_timestamp()';

    /**
     * @var string
     *
     * @ORM\Column(name="sr_xm_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $srXmEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getSrXmId(): ?string
    {
        return $this->srXmId;
    }

    public function getSrXmTipoComprobante(): ?string
    {
        return $this->srXmTipoComprobante;
    }

    public function setSrXmTipoComprobante(string $srXmTipoComprobante): self
    {
        $this->srXmTipoComprobante = $srXmTipoComprobante;

        return $this;
    }

    public function getSrXmNumeroDocumento(): ?string
    {
        return $this->srXmNumeroDocumento;
    }

    public function setSrXmNumeroDocumento(string $srXmNumeroDocumento): self
    {
        $this->srXmNumeroDocumento = $srXmNumeroDocumento;

        return $this;
    }

    public function getSrXmRucEmisor(): ?string
    {
        return $this->srXmRucEmisor;
    }

    public function setSrXmRucEmisor(string $srXmRucEmisor): self
    {
        $this->srXmRucEmisor = $srXmRucEmisor;

        return $this;
    }

    public function getSrXmRazonSocial(): ?string
    {
        return $this->srXmRazonSocial;
    }

    public function setSrXmRazonSocial(string $srXmRazonSocial): self
    {
        $this->srXmRazonSocial = $srXmRazonSocial;

        return $this;
    }

    public function getSrXmFechaEmision(): ?\DateTimeInterface
    {
        return $this->srXmFechaEmision;
    }

    public function setSrXmFechaEmision(\DateTimeInterface $srXmFechaEmision): self
    {
        $this->srXmFechaEmision = $srXmFechaEmision;

        return $this;
    }

    public function getSrXmFechaAutorizacion(): ?\DateTimeInterface
    {
        return $this->srXmFechaAutorizacion;
    }

    public function setSrXmFechaAutorizacion(\DateTimeInterface $srXmFechaAutorizacion): self
    {
        $this->srXmFechaAutorizacion = $srXmFechaAutorizacion;

        return $this;
    }

    public function getSrXmTipoEmision(): ?string
    {
        return $this->srXmTipoEmision;
    }

    public function setSrXmTipoEmision(string $srXmTipoEmision): self
    {
        $this->srXmTipoEmision = $srXmTipoEmision;

        return $this;
    }

    public function getSrXmRucReceptor(): ?string
    {
        return $this->srXmRucReceptor;
    }

    public function setSrXmRucReceptor(string $srXmRucReceptor): self
    {
        $this->srXmRucReceptor = $srXmRucReceptor;

        return $this;
    }

    public function getSrXmClaveAcceso(): ?string
    {
        return $this->srXmClaveAcceso;
    }

    public function setSrXmClaveAcceso(string $srXmClaveAcceso): self
    {
        $this->srXmClaveAcceso = $srXmClaveAcceso;

        return $this;
    }

    public function getSrXmNumeroAutorizacion(): ?string
    {
        return $this->srXmNumeroAutorizacion;
    }

    public function setSrXmNumeroAutorizacion(string $srXmNumeroAutorizacion): self
    {
        $this->srXmNumeroAutorizacion = $srXmNumeroAutorizacion;

        return $this;
    }

    public function getSrXmImporteValor(): ?float
    {
        return $this->srXmImporteValor;
    }

    public function setSrXmImporteValor(float $srXmImporteValor): self
    {
        $this->srXmImporteValor = $srXmImporteValor;

        return $this;
    }

    public function getSrXmXml()
    {
        return $this->srXmXml;
    }

    public function setSrXmXml($srXmXml): self
    {
        $this->srXmXml = $srXmXml;

        return $this;
    }

    public function getSrXmFechaUsuario(): ?\DateTimeInterface
    {
        return $this->srXmFechaUsuario;
    }

    public function setSrXmFechaUsuario(\DateTimeInterface $srXmFechaUsuario): self
    {
        $this->srXmFechaUsuario = $srXmFechaUsuario;

        return $this;
    }

    public function getSrXmEstado(): ?string
    {
        return $this->srXmEstado;
    }

    public function setSrXmEstado(string $srXmEstado): self
    {
        $this->srXmEstado = $srXmEstado;

        return $this;
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


}
