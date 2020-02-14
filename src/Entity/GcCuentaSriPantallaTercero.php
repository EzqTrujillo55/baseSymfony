<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCuentaSriPantallaTercero
 *
 * @ORM\Table(name="gc_cuenta_sri_pantalla_tercero", uniqueConstraints={@ORM\UniqueConstraint(name="IndiceCuentaSRIPantallaTipo", columns={"pm_id", "cu_sript_tipo_tercero", "cu_sri_codigo"})})
 * @ORM\Entity
 */
class GcCuentaSriPantallaTercero
{
    /**
     * @var int
     *
     * @ORM\Column(name="cu_sript_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cuSriptId;

    /**
     * @var string
     *
     * @ORM\Column(name="cu_sri_periodo", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $cuSriPeriodo = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pm_id", type="bigint", nullable=false)
     */
    private $pmId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_sript_tipo_tercero", type="string", length=25, nullable=false, options={"default"="''"})
     */
    private $cuSriptTipoTercero = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_sri_codigo", type="string", length=25, nullable=false, options={"default"="''"})
     */
    private $cuSriCodigo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_sript_observacion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $cuSriptObservacion = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getCuSriptId(): ?string
    {
        return $this->cuSriptId;
    }

    public function getCuSriPeriodo(): ?string
    {
        return $this->cuSriPeriodo;
    }

    public function setCuSriPeriodo(string $cuSriPeriodo): self
    {
        $this->cuSriPeriodo = $cuSriPeriodo;

        return $this;
    }

    public function getPmId(): ?string
    {
        return $this->pmId;
    }

    public function setPmId(string $pmId): self
    {
        $this->pmId = $pmId;

        return $this;
    }

    public function getCuSriptTipoTercero(): ?string
    {
        return $this->cuSriptTipoTercero;
    }

    public function setCuSriptTipoTercero(string $cuSriptTipoTercero): self
    {
        $this->cuSriptTipoTercero = $cuSriptTipoTercero;

        return $this;
    }

    public function getCuSriCodigo(): ?string
    {
        return $this->cuSriCodigo;
    }

    public function setCuSriCodigo(string $cuSriCodigo): self
    {
        $this->cuSriCodigo = $cuSriCodigo;

        return $this;
    }

    public function getCuSriptObservacion(): ?string
    {
        return $this->cuSriptObservacion;
    }

    public function setCuSriptObservacion(string $cuSriptObservacion): self
    {
        $this->cuSriptObservacion = $cuSriptObservacion;

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
