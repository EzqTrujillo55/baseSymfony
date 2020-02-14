<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcFacturaProceso
 *
 * @ORM\Table(name="gc_factura_proceso", indexes={@ORM\Index(name="IndiceTipoFacturaProceso", columns={"em_id", "fp_tipo", "fp_id_documento"})})
 * @ORM\Entity
 */
class GcFacturaProceso
{
    /**
     * @var int
     *
     * @ORM\Column(name="fp_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fpId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_tipo", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $fpTipo = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="fp_id_documento", type="bigint", nullable=false)
     */
    private $fpIdDocumento = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fp_fecha", type="date", nullable=false, options={"default"="'1800-01-01'"})
     */
    private $fpFecha = '\'1800-01-01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_descripcion", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $fpDescripcion = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $fpEstado = '\'C\'';

    /**
     * @var float
     *
     * @ORM\Column(name="fp_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $fpValor = '0';

    public function getFpId(): ?string
    {
        return $this->fpId;
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

    public function getFpTipo(): ?string
    {
        return $this->fpTipo;
    }

    public function setFpTipo(string $fpTipo): self
    {
        $this->fpTipo = $fpTipo;

        return $this;
    }

    public function getFpIdDocumento(): ?string
    {
        return $this->fpIdDocumento;
    }

    public function setFpIdDocumento(string $fpIdDocumento): self
    {
        $this->fpIdDocumento = $fpIdDocumento;

        return $this;
    }

    public function getFpFecha(): ?\DateTimeInterface
    {
        return $this->fpFecha;
    }

    public function setFpFecha(\DateTimeInterface $fpFecha): self
    {
        $this->fpFecha = $fpFecha;

        return $this;
    }

    public function getFpDescripcion(): ?string
    {
        return $this->fpDescripcion;
    }

    public function setFpDescripcion(string $fpDescripcion): self
    {
        $this->fpDescripcion = $fpDescripcion;

        return $this;
    }

    public function getFpEstado(): ?string
    {
        return $this->fpEstado;
    }

    public function setFpEstado(string $fpEstado): self
    {
        $this->fpEstado = $fpEstado;

        return $this;
    }

    public function getFpValor(): ?float
    {
        return $this->fpValor;
    }

    public function setFpValor(float $fpValor): self
    {
        $this->fpValor = $fpValor;

        return $this;
    }


}
