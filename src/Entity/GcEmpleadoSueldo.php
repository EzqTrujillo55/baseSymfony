<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpleadoSueldo
 *
 * @ORM\Table(name="gc_empleado_sueldo")
 * @ORM\Entity
 */
class GcEmpleadoSueldo
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
     * @ORM\Column(name="ms_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $msId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_id", type="bigint", nullable=false)
     */
    private $mpId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ms_fecha", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $msFecha = '\'1800-01-01 00:00:01\'';

    /**
     * @var float
     *
     * @ORM\Column(name="ms_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $msValor = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ms_fecha_sistema", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $msFechaSistema = '\'1800-01-01 00:00:01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ms_observacion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $msObservacion = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="us_id", type="bigint", nullable=false)
     */
    private $usId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ms_estado", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $msEstado = '\'N\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getMsId(): ?string
    {
        return $this->msId;
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

    public function getMsFecha(): ?\DateTimeInterface
    {
        return $this->msFecha;
    }

    public function setMsFecha(\DateTimeInterface $msFecha): self
    {
        $this->msFecha = $msFecha;

        return $this;
    }

    public function getMsValor(): ?float
    {
        return $this->msValor;
    }

    public function setMsValor(float $msValor): self
    {
        $this->msValor = $msValor;

        return $this;
    }

    public function getMsFechaSistema(): ?\DateTimeInterface
    {
        return $this->msFechaSistema;
    }

    public function setMsFechaSistema(\DateTimeInterface $msFechaSistema): self
    {
        $this->msFechaSistema = $msFechaSistema;

        return $this;
    }

    public function getMsObservacion(): ?string
    {
        return $this->msObservacion;
    }

    public function setMsObservacion(string $msObservacion): self
    {
        $this->msObservacion = $msObservacion;

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

    public function getMsEstado(): ?string
    {
        return $this->msEstado;
    }

    public function setMsEstado(string $msEstado): self
    {
        $this->msEstado = $msEstado;

        return $this;
    }


}
