<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpleadoHorasLaboradas
 *
 * @ORM\Table(name="gc_empleado_horas_laboradas")
 * @ORM\Entity
 */
class GcEmpleadoHorasLaboradas
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
     * @ORM\Column(name="hl_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $hlId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_id", type="bigint", nullable=false)
     */
    private $mpId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hl_fecha", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $hlFecha = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hl_fecha_sistema", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $hlFechaSistema = '\'1800-01-01 00:00:01\'';

    /**
     * @var float
     *
     * @ORM\Column(name="hl_horas", type="float", precision=10, scale=0, nullable=false)
     */
    private $hlHoras = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="hl_porcentaje", type="float", precision=10, scale=0, nullable=false, options={"default"="1"})
     */
    private $hlPorcentaje = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="hl_estado", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $hlEstado = '\'N\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hl_fecha_procesado", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $hlFechaProcesado = '\'1800-01-01 00:00:01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="hl_observacion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $hlObservacion = '\'*\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getHlId(): ?string
    {
        return $this->hlId;
    }

    public function getMpId(): ?string
    {
        return $this->mpId;
    }

    public function setMpId(string $mpId): self
    {
        $this->mpId = $mpId;

        return $this;
    }

    public function getHlFecha(): ?\DateTimeInterface
    {
        return $this->hlFecha;
    }

    public function setHlFecha(\DateTimeInterface $hlFecha): self
    {
        $this->hlFecha = $hlFecha;

        return $this;
    }

    public function getHlFechaSistema(): ?\DateTimeInterface
    {
        return $this->hlFechaSistema;
    }

    public function setHlFechaSistema(\DateTimeInterface $hlFechaSistema): self
    {
        $this->hlFechaSistema = $hlFechaSistema;

        return $this;
    }

    public function getHlHoras(): ?float
    {
        return $this->hlHoras;
    }

    public function setHlHoras(float $hlHoras): self
    {
        $this->hlHoras = $hlHoras;

        return $this;
    }

    public function getHlPorcentaje(): ?float
    {
        return $this->hlPorcentaje;
    }

    public function setHlPorcentaje(float $hlPorcentaje): self
    {
        $this->hlPorcentaje = $hlPorcentaje;

        return $this;
    }

    public function getHlEstado(): ?string
    {
        return $this->hlEstado;
    }

    public function setHlEstado(string $hlEstado): self
    {
        $this->hlEstado = $hlEstado;

        return $this;
    }

    public function getHlFechaProcesado(): ?\DateTimeInterface
    {
        return $this->hlFechaProcesado;
    }

    public function setHlFechaProcesado(\DateTimeInterface $hlFechaProcesado): self
    {
        $this->hlFechaProcesado = $hlFechaProcesado;

        return $this;
    }

    public function getHlObservacion(): ?string
    {
        return $this->hlObservacion;
    }

    public function setHlObservacion(string $hlObservacion): self
    {
        $this->hlObservacion = $hlObservacion;

        return $this;
    }


}
