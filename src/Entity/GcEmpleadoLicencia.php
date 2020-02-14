<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpleadoLicencia
 *
 * @ORM\Table(name="gc_empleado_licencia")
 * @ORM\Entity
 */
class GcEmpleadoLicencia
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
     * @ORM\Column(name="ml_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mlId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_id", type="bigint", nullable=false)
     */
    private $mpId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ml_tipo_licencia", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $mlTipoLicencia = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ml_titulo", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $mlTitulo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ml_grado", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $mlGrado = '\'*\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ml_fecha_emision", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $mlFechaEmision = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ml_fecha_caduca", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $mlFechaCaduca = '\'1800-01-01 00:00:01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ml_lugar_emision", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $mlLugarEmision = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ml_observacion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $mlObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ml_otros", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $mlOtros = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ml_estado", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $mlEstado = '\'*\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getMlId(): ?string
    {
        return $this->mlId;
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

    public function getMlTipoLicencia(): ?string
    {
        return $this->mlTipoLicencia;
    }

    public function setMlTipoLicencia(string $mlTipoLicencia): self
    {
        $this->mlTipoLicencia = $mlTipoLicencia;

        return $this;
    }

    public function getMlTitulo(): ?string
    {
        return $this->mlTitulo;
    }

    public function setMlTitulo(string $mlTitulo): self
    {
        $this->mlTitulo = $mlTitulo;

        return $this;
    }

    public function getMlGrado(): ?string
    {
        return $this->mlGrado;
    }

    public function setMlGrado(string $mlGrado): self
    {
        $this->mlGrado = $mlGrado;

        return $this;
    }

    public function getMlFechaEmision(): ?\DateTimeInterface
    {
        return $this->mlFechaEmision;
    }

    public function setMlFechaEmision(\DateTimeInterface $mlFechaEmision): self
    {
        $this->mlFechaEmision = $mlFechaEmision;

        return $this;
    }

    public function getMlFechaCaduca(): ?\DateTimeInterface
    {
        return $this->mlFechaCaduca;
    }

    public function setMlFechaCaduca(\DateTimeInterface $mlFechaCaduca): self
    {
        $this->mlFechaCaduca = $mlFechaCaduca;

        return $this;
    }

    public function getMlLugarEmision(): ?string
    {
        return $this->mlLugarEmision;
    }

    public function setMlLugarEmision(string $mlLugarEmision): self
    {
        $this->mlLugarEmision = $mlLugarEmision;

        return $this;
    }

    public function getMlObservacion(): ?string
    {
        return $this->mlObservacion;
    }

    public function setMlObservacion(string $mlObservacion): self
    {
        $this->mlObservacion = $mlObservacion;

        return $this;
    }

    public function getMlOtros(): ?string
    {
        return $this->mlOtros;
    }

    public function setMlOtros(string $mlOtros): self
    {
        $this->mlOtros = $mlOtros;

        return $this;
    }

    public function getMlEstado(): ?string
    {
        return $this->mlEstado;
    }

    public function setMlEstado(string $mlEstado): self
    {
        $this->mlEstado = $mlEstado;

        return $this;
    }


}
