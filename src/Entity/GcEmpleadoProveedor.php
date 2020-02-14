<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpleadoProveedor
 *
 * @ORM\Table(name="gc_empleado_proveedor")
 * @ORM\Entity
 */
class GcEmpleadoProveedor
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
     * @ORM\Column(name="mr_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mrId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_id", type="bigint", nullable=false)
     */
    private $peId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_tipo", type="string", length=1, nullable=false, options={"default"="'P'","fixed"=true})
     */
    private $peTipo = '\'P\'';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_id", type="bigint", nullable=false)
     */
    private $mpId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mr_fecha", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $mrFecha = '\'1800-01-01 00:00:01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="us_id", type="bigint", nullable=false)
     */
    private $usId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mr_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $mrEstado = '\'C\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getMrId(): ?string
    {
        return $this->mrId;
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

    public function getPeTipo(): ?string
    {
        return $this->peTipo;
    }

    public function setPeTipo(string $peTipo): self
    {
        $this->peTipo = $peTipo;

        return $this;
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

    public function getMrFecha(): ?\DateTimeInterface
    {
        return $this->mrFecha;
    }

    public function setMrFecha(\DateTimeInterface $mrFecha): self
    {
        $this->mrFecha = $mrFecha;

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

    public function getMrEstado(): ?string
    {
        return $this->mrEstado;
    }

    public function setMrEstado(string $mrEstado): self
    {
        $this->mrEstado = $mrEstado;

        return $this;
    }


}
