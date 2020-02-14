<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcSriXmlEdoc
 *
 * @ORM\Table(name="gc_sri_xml_edoc", indexes={@ORM\Index(name="ind_xml_edoc", columns={"em_id", "xs_id_edoc", "xs_tipo_edoc"})})
 * @ORM\Entity
 */
class GcSriXmlEdoc
{
    /**
     * @var int
     *
     * @ORM\Column(name="xs_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $xsId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="xs_id_edoc", type="bigint", nullable=false)
     */
    private $xsIdEdoc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="xs_tipo_edoc", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $xsTipoEdoc = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="xs_numero_edoc", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $xsNumeroEdoc = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="xs_clave_acceso_edoc", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $xsClaveAccesoEdoc = '\'\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="xs_fecha", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $xsFecha = '\'1800-01-01 00:00:01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="xs_estado_edoc", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $xsEstadoEdoc = '\'C\'';

    /**
     * @var string
     *
     * @ORM\Column(name="xs_xml", type="blob", length=0, nullable=false)
     */
    private $xsXml;

    /**
     * @var string
     *
     * @ORM\Column(name="xs_xml_signed", type="string", length=1, nullable=false, options={"default"="''","fixed"=true})
     */
    private $xsXmlSigned = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="xs_observacion_sri", type="blob", length=65535, nullable=false)
     */
    private $xsObservacionSri;

    /**
     * @var string
     *
     * @ORM\Column(name="xs_autorizacion_sri", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $xsAutorizacionSri = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="xs_email", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $xsEmail = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="xs_estado_mail", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $xsEstadoMail = '\'C\'';

    /**
     * @var string
     *
     * @ORM\Column(name="xs_autorizacion_fecha_sri", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $xsAutorizacionFechaSri = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="xs_tipo_edoc_externo", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $xsTipoEdocExterno = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="xs_nombre_archivo", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $xsNombreArchivo = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="xs_notas", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $xsNotas = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="xs_nombre_persona", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $xsNombrePersona = '\'\'';

    public function getXsId(): ?string
    {
        return $this->xsId;
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

    public function getXsIdEdoc(): ?string
    {
        return $this->xsIdEdoc;
    }

    public function setXsIdEdoc(string $xsIdEdoc): self
    {
        $this->xsIdEdoc = $xsIdEdoc;

        return $this;
    }

    public function getXsTipoEdoc(): ?string
    {
        return $this->xsTipoEdoc;
    }

    public function setXsTipoEdoc(string $xsTipoEdoc): self
    {
        $this->xsTipoEdoc = $xsTipoEdoc;

        return $this;
    }

    public function getXsNumeroEdoc(): ?string
    {
        return $this->xsNumeroEdoc;
    }

    public function setXsNumeroEdoc(string $xsNumeroEdoc): self
    {
        $this->xsNumeroEdoc = $xsNumeroEdoc;

        return $this;
    }

    public function getXsClaveAccesoEdoc(): ?string
    {
        return $this->xsClaveAccesoEdoc;
    }

    public function setXsClaveAccesoEdoc(string $xsClaveAccesoEdoc): self
    {
        $this->xsClaveAccesoEdoc = $xsClaveAccesoEdoc;

        return $this;
    }

    public function getXsFecha(): ?\DateTimeInterface
    {
        return $this->xsFecha;
    }

    public function setXsFecha(\DateTimeInterface $xsFecha): self
    {
        $this->xsFecha = $xsFecha;

        return $this;
    }

    public function getXsEstadoEdoc(): ?string
    {
        return $this->xsEstadoEdoc;
    }

    public function setXsEstadoEdoc(string $xsEstadoEdoc): self
    {
        $this->xsEstadoEdoc = $xsEstadoEdoc;

        return $this;
    }

    public function getXsXml()
    {
        return $this->xsXml;
    }

    public function setXsXml($xsXml): self
    {
        $this->xsXml = $xsXml;

        return $this;
    }

    public function getXsXmlSigned(): ?string
    {
        return $this->xsXmlSigned;
    }

    public function setXsXmlSigned(string $xsXmlSigned): self
    {
        $this->xsXmlSigned = $xsXmlSigned;

        return $this;
    }

    public function getXsObservacionSri()
    {
        return $this->xsObservacionSri;
    }

    public function setXsObservacionSri($xsObservacionSri): self
    {
        $this->xsObservacionSri = $xsObservacionSri;

        return $this;
    }

    public function getXsAutorizacionSri(): ?string
    {
        return $this->xsAutorizacionSri;
    }

    public function setXsAutorizacionSri(string $xsAutorizacionSri): self
    {
        $this->xsAutorizacionSri = $xsAutorizacionSri;

        return $this;
    }

    public function getXsEmail(): ?string
    {
        return $this->xsEmail;
    }

    public function setXsEmail(string $xsEmail): self
    {
        $this->xsEmail = $xsEmail;

        return $this;
    }

    public function getXsEstadoMail(): ?string
    {
        return $this->xsEstadoMail;
    }

    public function setXsEstadoMail(string $xsEstadoMail): self
    {
        $this->xsEstadoMail = $xsEstadoMail;

        return $this;
    }

    public function getXsAutorizacionFechaSri(): ?string
    {
        return $this->xsAutorizacionFechaSri;
    }

    public function setXsAutorizacionFechaSri(string $xsAutorizacionFechaSri): self
    {
        $this->xsAutorizacionFechaSri = $xsAutorizacionFechaSri;

        return $this;
    }

    public function getXsTipoEdocExterno(): ?string
    {
        return $this->xsTipoEdocExterno;
    }

    public function setXsTipoEdocExterno(string $xsTipoEdocExterno): self
    {
        $this->xsTipoEdocExterno = $xsTipoEdocExterno;

        return $this;
    }

    public function getXsNombreArchivo(): ?string
    {
        return $this->xsNombreArchivo;
    }

    public function setXsNombreArchivo(string $xsNombreArchivo): self
    {
        $this->xsNombreArchivo = $xsNombreArchivo;

        return $this;
    }

    public function getXsNotas(): ?string
    {
        return $this->xsNotas;
    }

    public function setXsNotas(?string $xsNotas): self
    {
        $this->xsNotas = $xsNotas;

        return $this;
    }

    public function getXsNombrePersona(): ?string
    {
        return $this->xsNombrePersona;
    }

    public function setXsNombrePersona(string $xsNombrePersona): self
    {
        $this->xsNombrePersona = $xsNombrePersona;

        return $this;
    }


}
