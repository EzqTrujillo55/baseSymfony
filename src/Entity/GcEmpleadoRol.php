<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpleadoRol
 *
 * @ORM\Table(name="gc_empleado_rol")
 * @ORM\Entity
 */
class GcEmpleadoRol
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
     * @ORM\Column(name="mp_rl_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mpRlId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mp_rl_fecha_generacion", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $mpRlFechaGeneracion = '\'2000-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mp_rl_fecha_generacionsistema", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $mpRlFechaGeneracionsistema = '\'2000-01-01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="co_id_generacion", type="bigint", nullable=false)
     */
    private $coIdGeneracion = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mp_rl_fecha_pago", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $mpRlFechaPago = '\'2000-01-01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="us_id", type="bigint", nullable=false)
     */
    private $usId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_rl_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $mpRlEstado = '\'C\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_rl_codigo", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $mpRlCodigo = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_rl_secuencial", type="bigint", nullable=false)
     */
    private $mpRlSecuencial = '0';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getMpRlId(): ?string
    {
        return $this->mpRlId;
    }

    public function getMpRlFechaGeneracion(): ?\DateTimeInterface
    {
        return $this->mpRlFechaGeneracion;
    }

    public function setMpRlFechaGeneracion(\DateTimeInterface $mpRlFechaGeneracion): self
    {
        $this->mpRlFechaGeneracion = $mpRlFechaGeneracion;

        return $this;
    }

    public function getMpRlFechaGeneracionsistema(): ?\DateTimeInterface
    {
        return $this->mpRlFechaGeneracionsistema;
    }

    public function setMpRlFechaGeneracionsistema(\DateTimeInterface $mpRlFechaGeneracionsistema): self
    {
        $this->mpRlFechaGeneracionsistema = $mpRlFechaGeneracionsistema;

        return $this;
    }

    public function getCoIdGeneracion(): ?string
    {
        return $this->coIdGeneracion;
    }

    public function setCoIdGeneracion(string $coIdGeneracion): self
    {
        $this->coIdGeneracion = $coIdGeneracion;

        return $this;
    }

    public function getMpRlFechaPago(): ?\DateTimeInterface
    {
        return $this->mpRlFechaPago;
    }

    public function setMpRlFechaPago(\DateTimeInterface $mpRlFechaPago): self
    {
        $this->mpRlFechaPago = $mpRlFechaPago;

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

    public function getMpRlEstado(): ?string
    {
        return $this->mpRlEstado;
    }

    public function setMpRlEstado(string $mpRlEstado): self
    {
        $this->mpRlEstado = $mpRlEstado;

        return $this;
    }

    public function getMpRlCodigo(): ?string
    {
        return $this->mpRlCodigo;
    }

    public function setMpRlCodigo(string $mpRlCodigo): self
    {
        $this->mpRlCodigo = $mpRlCodigo;

        return $this;
    }

    public function getMpRlSecuencial(): ?string
    {
        return $this->mpRlSecuencial;
    }

    public function setMpRlSecuencial(string $mpRlSecuencial): self
    {
        $this->mpRlSecuencial = $mpRlSecuencial;

        return $this;
    }


}
