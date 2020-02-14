<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcDepreciacionRevalorizacion
 *
 * @ORM\Table(name="gc_depreciacion_revalorizacion")
 * @ORM\Entity
 */
class GcDepreciacionRevalorizacion
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
     * @ORM\Column(name="de_rv_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $deRvId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="de_id", type="bigint", nullable=false)
     */
    private $deId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="de_rv_fecha", type="date", nullable=false, options={"default"="'2011-01-01'"})
     */
    private $deRvFecha = '\'2011-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="de_rv_fecha_primeracuota", type="date", nullable=false, options={"default"="'2011-01-01'"})
     */
    private $deRvFechaPrimeracuota = '\'2011-01-01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="de_rv_tiempo", type="integer", nullable=false)
     */
    private $deRvTiempo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="de_rv_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $deRvValor = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="co_id", type="bigint", nullable=false)
     */
    private $coId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_debe", type="bigint", nullable=false)
     */
    private $cuIdDebe = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_haber", type="bigint", nullable=false)
     */
    private $cuIdHaber = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="de_rv_valor_ajustado", type="float", precision=10, scale=0, nullable=false)
     */
    private $deRvValorAjustado = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="de_rv_observacion", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $deRvObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="de_rv_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $deRvEstado = '\'C\'';

    /**
     * @var float
     *
     * @ORM\Column(name="rv_de_valor_cambio", type="float", precision=10, scale=0, nullable=false)
     */
    private $rvDeValorCambio = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_debe_cambio", type="bigint", nullable=false)
     */
    private $cuIdDebeCambio = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_haber_cambio", type="bigint", nullable=false)
     */
    private $cuIdHaberCambio = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="de_rv_residual", type="float", precision=10, scale=0, nullable=false)
     */
    private $deRvResidual = '0';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getDeRvId(): ?string
    {
        return $this->deRvId;
    }

    public function getDeId(): ?string
    {
        return $this->deId;
    }

    public function setDeId(string $deId): self
    {
        $this->deId = $deId;

        return $this;
    }

    public function getDeRvFecha(): ?\DateTimeInterface
    {
        return $this->deRvFecha;
    }

    public function setDeRvFecha(\DateTimeInterface $deRvFecha): self
    {
        $this->deRvFecha = $deRvFecha;

        return $this;
    }

    public function getDeRvFechaPrimeracuota(): ?\DateTimeInterface
    {
        return $this->deRvFechaPrimeracuota;
    }

    public function setDeRvFechaPrimeracuota(\DateTimeInterface $deRvFechaPrimeracuota): self
    {
        $this->deRvFechaPrimeracuota = $deRvFechaPrimeracuota;

        return $this;
    }

    public function getDeRvTiempo(): ?int
    {
        return $this->deRvTiempo;
    }

    public function setDeRvTiempo(int $deRvTiempo): self
    {
        $this->deRvTiempo = $deRvTiempo;

        return $this;
    }

    public function getDeRvValor(): ?float
    {
        return $this->deRvValor;
    }

    public function setDeRvValor(float $deRvValor): self
    {
        $this->deRvValor = $deRvValor;

        return $this;
    }

    public function getCoId(): ?string
    {
        return $this->coId;
    }

    public function setCoId(string $coId): self
    {
        $this->coId = $coId;

        return $this;
    }

    public function getCuIdDebe(): ?string
    {
        return $this->cuIdDebe;
    }

    public function setCuIdDebe(string $cuIdDebe): self
    {
        $this->cuIdDebe = $cuIdDebe;

        return $this;
    }

    public function getCuIdHaber(): ?string
    {
        return $this->cuIdHaber;
    }

    public function setCuIdHaber(string $cuIdHaber): self
    {
        $this->cuIdHaber = $cuIdHaber;

        return $this;
    }

    public function getDeRvValorAjustado(): ?float
    {
        return $this->deRvValorAjustado;
    }

    public function setDeRvValorAjustado(float $deRvValorAjustado): self
    {
        $this->deRvValorAjustado = $deRvValorAjustado;

        return $this;
    }

    public function getDeRvObservacion(): ?string
    {
        return $this->deRvObservacion;
    }

    public function setDeRvObservacion(string $deRvObservacion): self
    {
        $this->deRvObservacion = $deRvObservacion;

        return $this;
    }

    public function getDeRvEstado(): ?string
    {
        return $this->deRvEstado;
    }

    public function setDeRvEstado(string $deRvEstado): self
    {
        $this->deRvEstado = $deRvEstado;

        return $this;
    }

    public function getRvDeValorCambio(): ?float
    {
        return $this->rvDeValorCambio;
    }

    public function setRvDeValorCambio(float $rvDeValorCambio): self
    {
        $this->rvDeValorCambio = $rvDeValorCambio;

        return $this;
    }

    public function getCuIdDebeCambio(): ?string
    {
        return $this->cuIdDebeCambio;
    }

    public function setCuIdDebeCambio(string $cuIdDebeCambio): self
    {
        $this->cuIdDebeCambio = $cuIdDebeCambio;

        return $this;
    }

    public function getCuIdHaberCambio(): ?string
    {
        return $this->cuIdHaberCambio;
    }

    public function setCuIdHaberCambio(string $cuIdHaberCambio): self
    {
        $this->cuIdHaberCambio = $cuIdHaberCambio;

        return $this;
    }

    public function getDeRvResidual(): ?float
    {
        return $this->deRvResidual;
    }

    public function setDeRvResidual(float $deRvResidual): self
    {
        $this->deRvResidual = $deRvResidual;

        return $this;
    }


}
