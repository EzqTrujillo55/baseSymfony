<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcTipoRetencion
 *
 * @ORM\Table(name="gc_tipo_retencion")
 * @ORM\Entity
 */
class GcTipoRetencion
{
    /**
     * @var int
     *
     * @ORM\Column(name="tr_id", type="bigint", nullable=false)
     * @ORM\Id

     */
    private $trId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tr_codigo", type="string", length=10, nullable=false, options={"default"="'0'"})
     */
    private $trCodigo = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="tr_descripcion", type="string", length=250, nullable=false, options={"default"="'0'"})
     */
    private $trDescripcion = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="tr_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $trEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="tr_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $trPorcentaje = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tr_fecha_inicio", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $trFechaInicio = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tr_fecha_fin", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $trFechaFin = '\'1800-01-01 00:00:01\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="tr_ingresa_porcentaje", type="boolean", nullable=false, options={"default"="2"})
     */
    private $trIngresaPorcentaje = '2';

    /**
     * @var int
     *
     * @ORM\Column(name="pa_id", type="bigint", nullable=false, options={"default"="1"})
     */
    private $paId = '1';

    public function getTrId(): ?string
    {
        return $this->trId;
    }

    public function getTrCodigo(): ?string
    {
        return $this->trCodigo;
    }

    public function setTrCodigo(string $trCodigo): self
    {
        $this->trCodigo = $trCodigo;

        return $this;
    }

    public function getTrDescripcion(): ?string
    {
        return $this->trDescripcion;
    }

    public function setTrDescripcion(string $trDescripcion): self
    {
        $this->trDescripcion = $trDescripcion;

        return $this;
    }

    public function getTrEstado(): ?string
    {
        return $this->trEstado;
    }

    public function setTrEstado(string $trEstado): self
    {
        $this->trEstado = $trEstado;

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

    public function getTrPorcentaje(): ?float
    {
        return $this->trPorcentaje;
    }

    public function setTrPorcentaje(float $trPorcentaje): self
    {
        $this->trPorcentaje = $trPorcentaje;

        return $this;
    }

    public function getTrFechaInicio(): ?\DateTimeInterface
    {
        return $this->trFechaInicio;
    }

    public function setTrFechaInicio(\DateTimeInterface $trFechaInicio): self
    {
        $this->trFechaInicio = $trFechaInicio;

        return $this;
    }

    public function getTrFechaFin(): ?\DateTimeInterface
    {
        return $this->trFechaFin;
    }

    public function setTrFechaFin(\DateTimeInterface $trFechaFin): self
    {
        $this->trFechaFin = $trFechaFin;

        return $this;
    }

    public function getTrIngresaPorcentaje(): ?bool
    {
        return $this->trIngresaPorcentaje;
    }

    public function setTrIngresaPorcentaje(bool $trIngresaPorcentaje): self
    {
        $this->trIngresaPorcentaje = $trIngresaPorcentaje;

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


}
