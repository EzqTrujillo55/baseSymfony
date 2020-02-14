<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpleadoParametroNormal
 *
 * @ORM\Table(name="gc_empleado_parametro_normal")
 * @ORM\Entity
 */
class GcEmpleadoParametroNormal
{
    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $emId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_pn_numero_dias_vacacion_anual", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpPnNumeroDiasVacacionAnual = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_pn_porcentaje_aporte_personal", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpPnPorcentajeAportePersonal = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_pn_porcentaje_aporte_patronal", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpPnPorcentajeAportePatronal = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_pn_numero_horas_laborables_mes", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpPnNumeroHorasLaborablesMes = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_pn_numero_dias_laborables_mes", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpPnNumeroDiasLaborablesMes = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mp_pn_fecha_ini_13", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $mpPnFechaIni13 = '\'2000-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mp_pn_fecha_fin_13", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $mpPnFechaFin13 = '\'2000-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mp_pn_fecha_pago_13", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $mpPnFechaPago13 = '\'2000-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mp_pn_fecha_ini_14", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $mpPnFechaIni14 = '\'2000-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mp_pn_fecha_fin_14", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $mpPnFechaFin14 = '\'2000-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mp_pn_fecha_pago_14", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $mpPnFechaPago14 = '\'2000-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mp_pn_fecha_ini_fondo_reserva", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $mpPnFechaIniFondoReserva = '\'2000-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mp_pn_fecha_fin_fondo_reserva", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $mpPnFechaFinFondoReserva = '\'2000-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mp_pn_fecha_pago_fondo_reserva", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $mpPnFechaPagoFondoReserva = '\'2000-01-01\'';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_pn_porcentaje_horaextra_nocturna", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpPnPorcentajeHoraextraNocturna = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_pn_porcentaje_horaextra_suplementaria", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpPnPorcentajeHoraextraSuplementaria = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_pn_porcentaje_horaextra_suplementarianocturna", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpPnPorcentajeHoraextraSuplementarianocturna = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_pn_porcentaje_horaextra_extraordinaria", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpPnPorcentajeHoraextraExtraordinaria = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mp_pn_ubicacion_transferencia", type="string", length=255, nullable=true, options={"default"="'*'"})
     */
    private $mpPnUbicacionTransferencia = '\'*\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mp_pn_archivo_datos", type="string", length=255, nullable=true, options={"default"="'*'"})
     */
    private $mpPnArchivoDatos = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_pn_banco_transferencia", type="integer", nullable=false, options={"default"="-1"})
     */
    private $mpPnBancoTransferencia = '-1';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getMpPnNumeroDiasVacacionAnual(): ?float
    {
        return $this->mpPnNumeroDiasVacacionAnual;
    }

    public function setMpPnNumeroDiasVacacionAnual(float $mpPnNumeroDiasVacacionAnual): self
    {
        $this->mpPnNumeroDiasVacacionAnual = $mpPnNumeroDiasVacacionAnual;

        return $this;
    }

    public function getMpPnPorcentajeAportePersonal(): ?float
    {
        return $this->mpPnPorcentajeAportePersonal;
    }

    public function setMpPnPorcentajeAportePersonal(float $mpPnPorcentajeAportePersonal): self
    {
        $this->mpPnPorcentajeAportePersonal = $mpPnPorcentajeAportePersonal;

        return $this;
    }

    public function getMpPnPorcentajeAportePatronal(): ?float
    {
        return $this->mpPnPorcentajeAportePatronal;
    }

    public function setMpPnPorcentajeAportePatronal(float $mpPnPorcentajeAportePatronal): self
    {
        $this->mpPnPorcentajeAportePatronal = $mpPnPorcentajeAportePatronal;

        return $this;
    }

    public function getMpPnNumeroHorasLaborablesMes(): ?float
    {
        return $this->mpPnNumeroHorasLaborablesMes;
    }

    public function setMpPnNumeroHorasLaborablesMes(float $mpPnNumeroHorasLaborablesMes): self
    {
        $this->mpPnNumeroHorasLaborablesMes = $mpPnNumeroHorasLaborablesMes;

        return $this;
    }

    public function getMpPnNumeroDiasLaborablesMes(): ?float
    {
        return $this->mpPnNumeroDiasLaborablesMes;
    }

    public function setMpPnNumeroDiasLaborablesMes(float $mpPnNumeroDiasLaborablesMes): self
    {
        $this->mpPnNumeroDiasLaborablesMes = $mpPnNumeroDiasLaborablesMes;

        return $this;
    }

    public function getMpPnFechaIni13(): ?\DateTimeInterface
    {
        return $this->mpPnFechaIni13;
    }

    public function setMpPnFechaIni13(\DateTimeInterface $mpPnFechaIni13): self
    {
        $this->mpPnFechaIni13 = $mpPnFechaIni13;

        return $this;
    }

    public function getMpPnFechaFin13(): ?\DateTimeInterface
    {
        return $this->mpPnFechaFin13;
    }

    public function setMpPnFechaFin13(\DateTimeInterface $mpPnFechaFin13): self
    {
        $this->mpPnFechaFin13 = $mpPnFechaFin13;

        return $this;
    }

    public function getMpPnFechaPago13(): ?\DateTimeInterface
    {
        return $this->mpPnFechaPago13;
    }

    public function setMpPnFechaPago13(\DateTimeInterface $mpPnFechaPago13): self
    {
        $this->mpPnFechaPago13 = $mpPnFechaPago13;

        return $this;
    }

    public function getMpPnFechaIni14(): ?\DateTimeInterface
    {
        return $this->mpPnFechaIni14;
    }

    public function setMpPnFechaIni14(\DateTimeInterface $mpPnFechaIni14): self
    {
        $this->mpPnFechaIni14 = $mpPnFechaIni14;

        return $this;
    }

    public function getMpPnFechaFin14(): ?\DateTimeInterface
    {
        return $this->mpPnFechaFin14;
    }

    public function setMpPnFechaFin14(\DateTimeInterface $mpPnFechaFin14): self
    {
        $this->mpPnFechaFin14 = $mpPnFechaFin14;

        return $this;
    }

    public function getMpPnFechaPago14(): ?\DateTimeInterface
    {
        return $this->mpPnFechaPago14;
    }

    public function setMpPnFechaPago14(\DateTimeInterface $mpPnFechaPago14): self
    {
        $this->mpPnFechaPago14 = $mpPnFechaPago14;

        return $this;
    }

    public function getMpPnFechaIniFondoReserva(): ?\DateTimeInterface
    {
        return $this->mpPnFechaIniFondoReserva;
    }

    public function setMpPnFechaIniFondoReserva(\DateTimeInterface $mpPnFechaIniFondoReserva): self
    {
        $this->mpPnFechaIniFondoReserva = $mpPnFechaIniFondoReserva;

        return $this;
    }

    public function getMpPnFechaFinFondoReserva(): ?\DateTimeInterface
    {
        return $this->mpPnFechaFinFondoReserva;
    }

    public function setMpPnFechaFinFondoReserva(\DateTimeInterface $mpPnFechaFinFondoReserva): self
    {
        $this->mpPnFechaFinFondoReserva = $mpPnFechaFinFondoReserva;

        return $this;
    }

    public function getMpPnFechaPagoFondoReserva(): ?\DateTimeInterface
    {
        return $this->mpPnFechaPagoFondoReserva;
    }

    public function setMpPnFechaPagoFondoReserva(\DateTimeInterface $mpPnFechaPagoFondoReserva): self
    {
        $this->mpPnFechaPagoFondoReserva = $mpPnFechaPagoFondoReserva;

        return $this;
    }

    public function getMpPnPorcentajeHoraextraNocturna(): ?float
    {
        return $this->mpPnPorcentajeHoraextraNocturna;
    }

    public function setMpPnPorcentajeHoraextraNocturna(float $mpPnPorcentajeHoraextraNocturna): self
    {
        $this->mpPnPorcentajeHoraextraNocturna = $mpPnPorcentajeHoraextraNocturna;

        return $this;
    }

    public function getMpPnPorcentajeHoraextraSuplementaria(): ?float
    {
        return $this->mpPnPorcentajeHoraextraSuplementaria;
    }

    public function setMpPnPorcentajeHoraextraSuplementaria(float $mpPnPorcentajeHoraextraSuplementaria): self
    {
        $this->mpPnPorcentajeHoraextraSuplementaria = $mpPnPorcentajeHoraextraSuplementaria;

        return $this;
    }

    public function getMpPnPorcentajeHoraextraSuplementarianocturna(): ?float
    {
        return $this->mpPnPorcentajeHoraextraSuplementarianocturna;
    }

    public function setMpPnPorcentajeHoraextraSuplementarianocturna(float $mpPnPorcentajeHoraextraSuplementarianocturna): self
    {
        $this->mpPnPorcentajeHoraextraSuplementarianocturna = $mpPnPorcentajeHoraextraSuplementarianocturna;

        return $this;
    }

    public function getMpPnPorcentajeHoraextraExtraordinaria(): ?float
    {
        return $this->mpPnPorcentajeHoraextraExtraordinaria;
    }

    public function setMpPnPorcentajeHoraextraExtraordinaria(float $mpPnPorcentajeHoraextraExtraordinaria): self
    {
        $this->mpPnPorcentajeHoraextraExtraordinaria = $mpPnPorcentajeHoraextraExtraordinaria;

        return $this;
    }

    public function getMpPnUbicacionTransferencia(): ?string
    {
        return $this->mpPnUbicacionTransferencia;
    }

    public function setMpPnUbicacionTransferencia(?string $mpPnUbicacionTransferencia): self
    {
        $this->mpPnUbicacionTransferencia = $mpPnUbicacionTransferencia;

        return $this;
    }

    public function getMpPnArchivoDatos(): ?string
    {
        return $this->mpPnArchivoDatos;
    }

    public function setMpPnArchivoDatos(?string $mpPnArchivoDatos): self
    {
        $this->mpPnArchivoDatos = $mpPnArchivoDatos;

        return $this;
    }

    public function getMpPnBancoTransferencia(): ?int
    {
        return $this->mpPnBancoTransferencia;
    }

    public function setMpPnBancoTransferencia(int $mpPnBancoTransferencia): self
    {
        $this->mpPnBancoTransferencia = $mpPnBancoTransferencia;

        return $this;
    }


}
