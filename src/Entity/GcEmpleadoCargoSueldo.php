<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpleadoCargoSueldo
 *
 * @ORM\Table(name="gc_empleado_cargo_sueldo", indexes={@ORM\Index(name="mpas_relacionpersona", columns={"em_id", "pe_id"})})
 * @ORM\Entity
 */
class GcEmpleadoCargoSueldo
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
     * @ORM\Column(name="mp_cs_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mpCsId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_id", type="bigint", nullable=false)
     */
    private $peId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ar_id", type="bigint", nullable=false)
     */
    private $arId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cr_id", type="bigint", nullable=false)
     */
    private $crId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mp_cs_fecha", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $mpCsFecha = '\'2000-01-01\'';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_cs_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpCsValor = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mp_cs_fecha_sistema", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $mpCsFechaSistema = '\'2000-01-01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_cs_observacion", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $mpCsObservacion = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="us_id", type="bigint", nullable=false)
     */
    private $usId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_cs_trabaja", type="string", length=1, nullable=false, options={"default"="'0'","fixed"=true})
     */
    private $mpCsTrabaja = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_cs_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $mpCsEstado = '\'C\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="mp_cs_calcula_decimo_tercero", type="boolean", nullable=false, options={"default"="1"})
     */
    private $mpCsCalculaDecimoTercero = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_cs_horascontrato", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpCsHorascontrato = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="mp_cs_calcula_decimo_cuarto", type="boolean", nullable=false, options={"default"="1"})
     */
    private $mpCsCalculaDecimoCuarto = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="mp_cs_calcula_fondo_reserva", type="boolean", nullable=false, options={"default"="1"})
     */
    private $mpCsCalculaFondoReserva = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="mp_cs_calcula_aporte_personal", type="boolean", nullable=false, options={"default"="1"})
     */
    private $mpCsCalculaAportePersonal = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="mp_cs_calcula_aporte_patronal", type="boolean", nullable=false, options={"default"="1"})
     */
    private $mpCsCalculaAportePatronal = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_cs_aporte_personal_especifico", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpCsAportePersonalEspecifico = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_cs_aporte_patronal_especifico", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpCsAportePatronalEspecifico = '0';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getMpCsId(): ?string
    {
        return $this->mpCsId;
    }

    public function getPeId(): ?string
    {
        return $this->peId;
    }

    public function setPeId(string $peId): self
    {
        $this->peId = $peId;

        return $this;
    }

    public function getArId(): ?string
    {
        return $this->arId;
    }

    public function setArId(string $arId): self
    {
        $this->arId = $arId;

        return $this;
    }

    public function getCrId(): ?string
    {
        return $this->crId;
    }

    public function setCrId(string $crId): self
    {
        $this->crId = $crId;

        return $this;
    }

    public function getMpCsFecha(): ?\DateTimeInterface
    {
        return $this->mpCsFecha;
    }

    public function setMpCsFecha(\DateTimeInterface $mpCsFecha): self
    {
        $this->mpCsFecha = $mpCsFecha;

        return $this;
    }

    public function getMpCsValor(): ?float
    {
        return $this->mpCsValor;
    }

    public function setMpCsValor(float $mpCsValor): self
    {
        $this->mpCsValor = $mpCsValor;

        return $this;
    }

    public function getMpCsFechaSistema(): ?\DateTimeInterface
    {
        return $this->mpCsFechaSistema;
    }

    public function setMpCsFechaSistema(\DateTimeInterface $mpCsFechaSistema): self
    {
        $this->mpCsFechaSistema = $mpCsFechaSistema;

        return $this;
    }

    public function getMpCsObservacion(): ?string
    {
        return $this->mpCsObservacion;
    }

    public function setMpCsObservacion(string $mpCsObservacion): self
    {
        $this->mpCsObservacion = $mpCsObservacion;

        return $this;
    }

    public function getUsId(): ?string
    {
        return $this->usId;
    }

    public function setUsId(string $usId): self
    {
        $this->usId = $usId;

        return $this;
    }

    public function getMpCsTrabaja(): ?string
    {
        return $this->mpCsTrabaja;
    }

    public function setMpCsTrabaja(string $mpCsTrabaja): self
    {
        $this->mpCsTrabaja = $mpCsTrabaja;

        return $this;
    }

    public function getMpCsEstado(): ?string
    {
        return $this->mpCsEstado;
    }

    public function setMpCsEstado(string $mpCsEstado): self
    {
        $this->mpCsEstado = $mpCsEstado;

        return $this;
    }

    public function getMpCsCalculaDecimoTercero(): ?bool
    {
        return $this->mpCsCalculaDecimoTercero;
    }

    public function setMpCsCalculaDecimoTercero(bool $mpCsCalculaDecimoTercero): self
    {
        $this->mpCsCalculaDecimoTercero = $mpCsCalculaDecimoTercero;

        return $this;
    }

    public function getMpCsHorascontrato(): ?float
    {
        return $this->mpCsHorascontrato;
    }

    public function setMpCsHorascontrato(float $mpCsHorascontrato): self
    {
        $this->mpCsHorascontrato = $mpCsHorascontrato;

        return $this;
    }

    public function getMpCsCalculaDecimoCuarto(): ?bool
    {
        return $this->mpCsCalculaDecimoCuarto;
    }

    public function setMpCsCalculaDecimoCuarto(bool $mpCsCalculaDecimoCuarto): self
    {
        $this->mpCsCalculaDecimoCuarto = $mpCsCalculaDecimoCuarto;

        return $this;
    }

    public function getMpCsCalculaFondoReserva(): ?bool
    {
        return $this->mpCsCalculaFondoReserva;
    }

    public function setMpCsCalculaFondoReserva(bool $mpCsCalculaFondoReserva): self
    {
        $this->mpCsCalculaFondoReserva = $mpCsCalculaFondoReserva;

        return $this;
    }

    public function getMpCsCalculaAportePersonal(): ?bool
    {
        return $this->mpCsCalculaAportePersonal;
    }

    public function setMpCsCalculaAportePersonal(bool $mpCsCalculaAportePersonal): self
    {
        $this->mpCsCalculaAportePersonal = $mpCsCalculaAportePersonal;

        return $this;
    }

    public function getMpCsCalculaAportePatronal(): ?bool
    {
        return $this->mpCsCalculaAportePatronal;
    }

    public function setMpCsCalculaAportePatronal(bool $mpCsCalculaAportePatronal): self
    {
        $this->mpCsCalculaAportePatronal = $mpCsCalculaAportePatronal;

        return $this;
    }

    public function getMpCsAportePersonalEspecifico(): ?float
    {
        return $this->mpCsAportePersonalEspecifico;
    }

    public function setMpCsAportePersonalEspecifico(float $mpCsAportePersonalEspecifico): self
    {
        $this->mpCsAportePersonalEspecifico = $mpCsAportePersonalEspecifico;

        return $this;
    }

    public function getMpCsAportePatronalEspecifico(): ?float
    {
        return $this->mpCsAportePatronalEspecifico;
    }

    public function setMpCsAportePatronalEspecifico(float $mpCsAportePatronalEspecifico): self
    {
        $this->mpCsAportePatronalEspecifico = $mpCsAportePatronalEspecifico;

        return $this;
    }


}
