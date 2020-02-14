<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpleadoVacaciones
 *
 * @ORM\Table(name="gc_empleado_vacaciones")
 * @ORM\Entity
 */
class GcEmpleadoVacaciones
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
     * @ORM\Column(name="vc_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $vcId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_id", type="bigint", nullable=false)
     */
    private $mpId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vc_fecha_inicio", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $vcFechaInicio = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vc_fecha_fin", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $vcFechaFin = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vc_fecha_sistema", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $vcFechaSistema = '\'1800-01-01 00:00:01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="vc_forma_pago", type="integer", nullable=false)
     */
    private $vcFormaPago = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="vc_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $vcValor = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="vc_tipo_reemplazo", type="integer", nullable=false)
     */
    private $vcTipoReemplazo = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="vc_mp_id_reemplazo", type="bigint", nullable=false)
     */
    private $vcMpIdReemplazo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="vc_nombre", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $vcNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="vc_cedula", type="string", length=20, nullable=false, options={"default"="'*'"})
     */
    private $vcCedula = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="vc_empresa_tercerizadora", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $vcEmpresaTercerizadora = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="vc_estado", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $vcEstado = '\'N\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vc_fecha_procesado", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $vcFechaProcesado = '\'1800-01-01 00:00:01\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getVcId(): ?string
    {
        return $this->vcId;
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

    public function getVcFechaInicio(): ?\DateTimeInterface
    {
        return $this->vcFechaInicio;
    }

    public function setVcFechaInicio(\DateTimeInterface $vcFechaInicio): self
    {
        $this->vcFechaInicio = $vcFechaInicio;

        return $this;
    }

    public function getVcFechaFin(): ?\DateTimeInterface
    {
        return $this->vcFechaFin;
    }

    public function setVcFechaFin(\DateTimeInterface $vcFechaFin): self
    {
        $this->vcFechaFin = $vcFechaFin;

        return $this;
    }

    public function getVcFechaSistema(): ?\DateTimeInterface
    {
        return $this->vcFechaSistema;
    }

    public function setVcFechaSistema(\DateTimeInterface $vcFechaSistema): self
    {
        $this->vcFechaSistema = $vcFechaSistema;

        return $this;
    }

    public function getVcFormaPago(): ?int
    {
        return $this->vcFormaPago;
    }

    public function setVcFormaPago(int $vcFormaPago): self
    {
        $this->vcFormaPago = $vcFormaPago;

        return $this;
    }

    public function getVcValor(): ?float
    {
        return $this->vcValor;
    }

    public function setVcValor(float $vcValor): self
    {
        $this->vcValor = $vcValor;

        return $this;
    }

    public function getVcTipoReemplazo(): ?int
    {
        return $this->vcTipoReemplazo;
    }

    public function setVcTipoReemplazo(int $vcTipoReemplazo): self
    {
        $this->vcTipoReemplazo = $vcTipoReemplazo;

        return $this;
    }

    public function getVcMpIdReemplazo(): ?string
    {
        return $this->vcMpIdReemplazo;
    }

    public function setVcMpIdReemplazo(string $vcMpIdReemplazo): self
    {
        $this->vcMpIdReemplazo = $vcMpIdReemplazo;

        return $this;
    }

    public function getVcNombre(): ?string
    {
        return $this->vcNombre;
    }

    public function setVcNombre(string $vcNombre): self
    {
        $this->vcNombre = $vcNombre;

        return $this;
    }

    public function getVcCedula(): ?string
    {
        return $this->vcCedula;
    }

    public function setVcCedula(string $vcCedula): self
    {
        $this->vcCedula = $vcCedula;

        return $this;
    }

    public function getVcEmpresaTercerizadora(): ?string
    {
        return $this->vcEmpresaTercerizadora;
    }

    public function setVcEmpresaTercerizadora(string $vcEmpresaTercerizadora): self
    {
        $this->vcEmpresaTercerizadora = $vcEmpresaTercerizadora;

        return $this;
    }

    public function getVcEstado(): ?string
    {
        return $this->vcEstado;
    }

    public function setVcEstado(string $vcEstado): self
    {
        $this->vcEstado = $vcEstado;

        return $this;
    }

    public function getVcFechaProcesado(): ?\DateTimeInterface
    {
        return $this->vcFechaProcesado;
    }

    public function setVcFechaProcesado(\DateTimeInterface $vcFechaProcesado): self
    {
        $this->vcFechaProcesado = $vcFechaProcesado;

        return $this;
    }


}
