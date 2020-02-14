<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcDepreciacion
 *
 * @ORM\Table(name="gc_depreciacion")
 * @ORM\Entity
 */
class GcDepreciacion
{
    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="de_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $deId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id", type="bigint", nullable=false)
     */
    private $cuId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ga_id", type="bigint", nullable=false)
     */
    private $gaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="de_nombre", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $deNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="de_serie", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $deSerie = '\'*\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="de_fecha_compra", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $deFechaCompra = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="de_fecha_depreciacion", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $deFechaDepreciacion = '\'1800-01-01 00:00:01\'';

    /**
     * @var float
     *
     * @ORM\Column(name="de_costo", type="float", precision=10, scale=0, nullable=false)
     */
    private $deCosto = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="de_valor_residual", type="float", precision=10, scale=0, nullable=false)
     */
    private $deValorResidual = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="de_valor_depreciado", type="float", precision=10, scale=0, nullable=false)
     */
    private $deValorDepreciado = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="de_tiempo_depreciacion_normal", type="float", precision=10, scale=0, nullable=false)
     */
    private $deTiempoDepreciacionNormal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="de_observacion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $deObservacion = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="de_secuencial", type="bigint", nullable=false)
     */
    private $deSecuencial = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="de_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $deEstado = '\'C\'';

    /**
     * @var int|null
     *
     * @ORM\Column(name="ta_id", type="bigint", nullable=true, options={"default"="NULL"})
     */
    private $taId = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_gasto", type="bigint", nullable=false)
     */
    private $cuIdGasto = '0';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getDeId(): ?string
    {
        return $this->deId;
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

    public function getGaId(): ?string
    {
        return $this->gaId;
    }

    public function setGaId(string $gaId): self
    {
        $this->gaId = $gaId;

        return $this;
    }

    public function getDeNombre(): ?string
    {
        return $this->deNombre;
    }

    public function setDeNombre(string $deNombre): self
    {
        $this->deNombre = $deNombre;

        return $this;
    }

    public function getDeSerie(): ?string
    {
        return $this->deSerie;
    }

    public function setDeSerie(string $deSerie): self
    {
        $this->deSerie = $deSerie;

        return $this;
    }

    public function getDeFechaCompra(): ?\DateTimeInterface
    {
        return $this->deFechaCompra;
    }

    public function setDeFechaCompra(\DateTimeInterface $deFechaCompra): self
    {
        $this->deFechaCompra = $deFechaCompra;

        return $this;
    }

    public function getDeFechaDepreciacion(): ?\DateTimeInterface
    {
        return $this->deFechaDepreciacion;
    }

    public function setDeFechaDepreciacion(\DateTimeInterface $deFechaDepreciacion): self
    {
        $this->deFechaDepreciacion = $deFechaDepreciacion;

        return $this;
    }

    public function getDeCosto(): ?float
    {
        return $this->deCosto;
    }

    public function setDeCosto(float $deCosto): self
    {
        $this->deCosto = $deCosto;

        return $this;
    }

    public function getDeValorResidual(): ?float
    {
        return $this->deValorResidual;
    }

    public function setDeValorResidual(float $deValorResidual): self
    {
        $this->deValorResidual = $deValorResidual;

        return $this;
    }

    public function getDeValorDepreciado(): ?float
    {
        return $this->deValorDepreciado;
    }

    public function setDeValorDepreciado(float $deValorDepreciado): self
    {
        $this->deValorDepreciado = $deValorDepreciado;

        return $this;
    }

    public function getDeTiempoDepreciacionNormal(): ?float
    {
        return $this->deTiempoDepreciacionNormal;
    }

    public function setDeTiempoDepreciacionNormal(float $deTiempoDepreciacionNormal): self
    {
        $this->deTiempoDepreciacionNormal = $deTiempoDepreciacionNormal;

        return $this;
    }

    public function getDeObservacion(): ?string
    {
        return $this->deObservacion;
    }

    public function setDeObservacion(string $deObservacion): self
    {
        $this->deObservacion = $deObservacion;

        return $this;
    }

    public function getDeSecuencial(): ?string
    {
        return $this->deSecuencial;
    }

    public function setDeSecuencial(string $deSecuencial): self
    {
        $this->deSecuencial = $deSecuencial;

        return $this;
    }

    public function getDeEstado(): ?string
    {
        return $this->deEstado;
    }

    public function setDeEstado(string $deEstado): self
    {
        $this->deEstado = $deEstado;

        return $this;
    }

    public function getTaId(): ?string
    {
        return $this->taId;
    }

    public function setTaId(?string $taId): self
    {
        $this->taId = $taId;

        return $this;
    }

    public function getCuIdGasto(): ?string
    {
        return $this->cuIdGasto;
    }

    public function setCuIdGasto(string $cuIdGasto): self
    {
        $this->cuIdGasto = $cuIdGasto;

        return $this;
    }


}
