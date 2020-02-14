<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcFacturaProcesoDetalle
 *
 * @ORM\Table(name="gc_factura_proceso_detalle", indexes={@ORM\Index(name="IndiceTipoFacturaProcesoDetalle", columns={"em_id", "fp_de_tipo", "fp_de_id_documento"})})
 * @ORM\Entity
 */
class GcFacturaProcesoDetalle
{
    /**
     * @var int
     *
     * @ORM\Column(name="fp_de_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fpDeId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fp_id", type="bigint", nullable=false)
     */
    private $fpId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_de_tipo", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $fpDeTipo = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="fp_de_id_documento", type="bigint", nullable=false)
     */
    private $fpDeIdDocumento = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fp_de_fecha", type="date", nullable=false, options={"default"="'1800-01-01'"})
     */
    private $fpDeFecha = '\'1800-01-01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_de_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $fpDeEstado = '\'C\'';

    /**
     * @var float
     *
     * @ORM\Column(name="fp_de_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $fpDeValor = '0';

    public function getFpDeId(): ?string
    {
        return $this->fpDeId;
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

    public function getFpId(): ?string
    {
        return $this->fpId;
    }

    public function setFpId(string $fpId): self
    {
        $this->fpId = $fpId;

        return $this;
    }

    public function getFpDeTipo(): ?string
    {
        return $this->fpDeTipo;
    }

    public function setFpDeTipo(string $fpDeTipo): self
    {
        $this->fpDeTipo = $fpDeTipo;

        return $this;
    }

    public function getFpDeIdDocumento(): ?string
    {
        return $this->fpDeIdDocumento;
    }

    public function setFpDeIdDocumento(string $fpDeIdDocumento): self
    {
        $this->fpDeIdDocumento = $fpDeIdDocumento;

        return $this;
    }

    public function getFpDeFecha(): ?\DateTimeInterface
    {
        return $this->fpDeFecha;
    }

    public function setFpDeFecha(\DateTimeInterface $fpDeFecha): self
    {
        $this->fpDeFecha = $fpDeFecha;

        return $this;
    }

    public function getFpDeEstado(): ?string
    {
        return $this->fpDeEstado;
    }

    public function setFpDeEstado(string $fpDeEstado): self
    {
        $this->fpDeEstado = $fpDeEstado;

        return $this;
    }

    public function getFpDeValor(): ?float
    {
        return $this->fpDeValor;
    }

    public function setFpDeValor(float $fpDeValor): self
    {
        $this->fpDeValor = $fpDeValor;

        return $this;
    }


}
