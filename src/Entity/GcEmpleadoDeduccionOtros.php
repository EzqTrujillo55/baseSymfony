<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpleadoDeduccionOtros
 *
 * @ORM\Table(name="gc_empleado_deduccion_otros")
 * @ORM\Entity
 */
class GcEmpleadoDeduccionOtros
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
     * @ORM\Column(name="md_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mdId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_id", type="bigint", nullable=false)
     */
    private $mpId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="md_fecha_aplica", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $mdFechaAplica = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="md_fecha_sistema", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $mdFechaSistema = '\'1800-01-01 00:00:01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="md_tipo", type="integer", nullable=false)
     */
    private $mdTipo = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="md_fecha_hasta", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $mdFechaHasta = '\'1800-01-01 00:00:01\'';

    /**
     * @var float
     *
     * @ORM\Column(name="md_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $mdValor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="md_causa", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $mdCausa = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="md_estado", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $mdEstado = '\'N\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="md_fecha_procesado", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $mdFechaProcesado = '\'1800-01-01 00:00:01\'';

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

    public function getMdId(): ?string
    {
        return $this->mdId;
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

    public function getMdFechaAplica(): ?\DateTimeInterface
    {
        return $this->mdFechaAplica;
    }

    public function setMdFechaAplica(\DateTimeInterface $mdFechaAplica): self
    {
        $this->mdFechaAplica = $mdFechaAplica;

        return $this;
    }

    public function getMdFechaSistema(): ?\DateTimeInterface
    {
        return $this->mdFechaSistema;
    }

    public function setMdFechaSistema(\DateTimeInterface $mdFechaSistema): self
    {
        $this->mdFechaSistema = $mdFechaSistema;

        return $this;
    }

    public function getMdTipo(): ?int
    {
        return $this->mdTipo;
    }

    public function setMdTipo(int $mdTipo): self
    {
        $this->mdTipo = $mdTipo;

        return $this;
    }

    public function getMdFechaHasta(): ?\DateTimeInterface
    {
        return $this->mdFechaHasta;
    }

    public function setMdFechaHasta(\DateTimeInterface $mdFechaHasta): self
    {
        $this->mdFechaHasta = $mdFechaHasta;

        return $this;
    }

    public function getMdValor(): ?float
    {
        return $this->mdValor;
    }

    public function setMdValor(float $mdValor): self
    {
        $this->mdValor = $mdValor;

        return $this;
    }

    public function getMdCausa(): ?string
    {
        return $this->mdCausa;
    }

    public function setMdCausa(string $mdCausa): self
    {
        $this->mdCausa = $mdCausa;

        return $this;
    }

    public function getMdEstado(): ?string
    {
        return $this->mdEstado;
    }

    public function setMdEstado(string $mdEstado): self
    {
        $this->mdEstado = $mdEstado;

        return $this;
    }

    public function getMdFechaProcesado(): ?\DateTimeInterface
    {
        return $this->mdFechaProcesado;
    }

    public function setMdFechaProcesado(\DateTimeInterface $mdFechaProcesado): self
    {
        $this->mdFechaProcesado = $mdFechaProcesado;

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
