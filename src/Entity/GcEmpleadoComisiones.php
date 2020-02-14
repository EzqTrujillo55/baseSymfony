<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpleadoComisiones
 *
 * @ORM\Table(name="gc_empleado_comisiones")
 * @ORM\Entity
 */
class GcEmpleadoComisiones
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
     * @ORM\Column(name="pc_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pcId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_id", type="bigint", nullable=false)
     */
    private $mpId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pc_tipo", type="integer", nullable=false)
     */
    private $pcTipo = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pc_fecha", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $pcFecha = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pc_fecha_sistema", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $pcFechaSistema = '\'1800-01-01 00:00:01\'';

    /**
     * @var float
     *
     * @ORM\Column(name="pc_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $pcValor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pc_causa", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $pcCausa = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pc_estado", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $pcEstado = '\'N\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pc_fecha_procesado", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $pcFechaProcesado = '\'1800-01-01 00:00:01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="us_id", type="bigint", nullable=false)
     */
    private $usId = '0';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getPcId(): ?string
    {
        return $this->pcId;
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

    public function getPcTipo(): ?int
    {
        return $this->pcTipo;
    }

    public function setPcTipo(int $pcTipo): self
    {
        $this->pcTipo = $pcTipo;

        return $this;
    }

    public function getPcFecha(): ?\DateTimeInterface
    {
        return $this->pcFecha;
    }

    public function setPcFecha(\DateTimeInterface $pcFecha): self
    {
        $this->pcFecha = $pcFecha;

        return $this;
    }

    public function getPcFechaSistema(): ?\DateTimeInterface
    {
        return $this->pcFechaSistema;
    }

    public function setPcFechaSistema(\DateTimeInterface $pcFechaSistema): self
    {
        $this->pcFechaSistema = $pcFechaSistema;

        return $this;
    }

    public function getPcValor(): ?float
    {
        return $this->pcValor;
    }

    public function setPcValor(float $pcValor): self
    {
        $this->pcValor = $pcValor;

        return $this;
    }

    public function getPcCausa(): ?string
    {
        return $this->pcCausa;
    }

    public function setPcCausa(string $pcCausa): self
    {
        $this->pcCausa = $pcCausa;

        return $this;
    }

    public function getPcEstado(): ?string
    {
        return $this->pcEstado;
    }

    public function setPcEstado(string $pcEstado): self
    {
        $this->pcEstado = $pcEstado;

        return $this;
    }

    public function getPcFechaProcesado(): ?\DateTimeInterface
    {
        return $this->pcFechaProcesado;
    }

    public function setPcFechaProcesado(\DateTimeInterface $pcFechaProcesado): self
    {
        $this->pcFechaProcesado = $pcFechaProcesado;

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


}
