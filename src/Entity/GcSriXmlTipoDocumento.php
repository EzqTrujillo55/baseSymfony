<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcSriXmlTipoDocumento
 *
 * @ORM\Table(name="gc_sri_xml_tipo_documento", uniqueConstraints={@ORM\UniqueConstraint(name="tipo_documento_sri_index", columns={"sr_xm_tp_codigo_sri"})})
 * @ORM\Entity
 */
class GcSriXmlTipoDocumento
{
    /**
     * @var int
     *
     * @ORM\Column(name="sr_xm_tp_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $srXmTpId;

    /**
     * @var string
     *
     * @ORM\Column(name="sr_xm_tp_codigo_sri", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $srXmTpCodigoSri = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sr_xm_tp_codigo_interno", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $srXmTpCodigoInterno = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sr_xm_tp_nombre", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $srXmTpNombre = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getSrXmTpId(): ?string
    {
        return $this->srXmTpId;
    }

    public function getSrXmTpCodigoSri(): ?string
    {
        return $this->srXmTpCodigoSri;
    }

    public function setSrXmTpCodigoSri(string $srXmTpCodigoSri): self
    {
        $this->srXmTpCodigoSri = $srXmTpCodigoSri;

        return $this;
    }

    public function getSrXmTpCodigoInterno(): ?string
    {
        return $this->srXmTpCodigoInterno;
    }

    public function setSrXmTpCodigoInterno(string $srXmTpCodigoInterno): self
    {
        $this->srXmTpCodigoInterno = $srXmTpCodigoInterno;

        return $this;
    }

    public function getSrXmTpNombre(): ?string
    {
        return $this->srXmTpNombre;
    }

    public function setSrXmTpNombre(string $srXmTpNombre): self
    {
        $this->srXmTpNombre = $srXmTpNombre;

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
