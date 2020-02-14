<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcPerfilProcesoautomatico
 *
 * @ORM\Table(name="gc_perfil_procesoautomatico")
 * @ORM\Entity
 */
class GcPerfilProcesoautomatico
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
     * @ORM\Column(name="pr_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $prId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pn_pa_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pnPaId = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="pr_pa_frecuencia", type="boolean", nullable=false)
     */
    private $prPaFrecuencia = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pr_pa_frecuencia_dias", type="smallint", nullable=false)
     */
    private $prPaFrecuenciaDias = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pr_pa_frecuencia_fecha", type="date", nullable=false, options={"default"="'2001-01-01'"})
     */
    private $prPaFrecuenciaFecha = '\'2001-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pr_pa_hora", type="time", nullable=false, options={"default"="'00:00:01'"})
     */
    private $prPaHora = '\'00:00:01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pr_pa_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $prPaEstado = '\'C\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pr_pa_ejecucion_fecha_hora", type="datetime", nullable=false, options={"default"="'2001-01-01 00:00:01'"})
     */
    private $prPaEjecucionFechaHora = '\'2001-01-01 00:00:01\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getPrId(): ?string
    {
        return $this->prId;
    }

    public function getPnPaId(): ?string
    {
        return $this->pnPaId;
    }

    public function getPrPaFrecuencia(): ?bool
    {
        return $this->prPaFrecuencia;
    }

    public function setPrPaFrecuencia(bool $prPaFrecuencia): self
    {
        $this->prPaFrecuencia = $prPaFrecuencia;

        return $this;
    }

    public function getPrPaFrecuenciaDias(): ?int
    {
        return $this->prPaFrecuenciaDias;
    }

    public function setPrPaFrecuenciaDias(int $prPaFrecuenciaDias): self
    {
        $this->prPaFrecuenciaDias = $prPaFrecuenciaDias;

        return $this;
    }

    public function getPrPaFrecuenciaFecha(): ?\DateTimeInterface
    {
        return $this->prPaFrecuenciaFecha;
    }

    public function setPrPaFrecuenciaFecha(\DateTimeInterface $prPaFrecuenciaFecha): self
    {
        $this->prPaFrecuenciaFecha = $prPaFrecuenciaFecha;

        return $this;
    }

    public function getPrPaHora(): ?\DateTimeInterface
    {
        return $this->prPaHora;
    }

    public function setPrPaHora(\DateTimeInterface $prPaHora): self
    {
        $this->prPaHora = $prPaHora;

        return $this;
    }

    public function getPrPaEstado(): ?string
    {
        return $this->prPaEstado;
    }

    public function setPrPaEstado(string $prPaEstado): self
    {
        $this->prPaEstado = $prPaEstado;

        return $this;
    }

    public function getPrPaEjecucionFechaHora(): ?\DateTimeInterface
    {
        return $this->prPaEjecucionFechaHora;
    }

    public function setPrPaEjecucionFechaHora(\DateTimeInterface $prPaEjecucionFechaHora): self
    {
        $this->prPaEjecucionFechaHora = $prPaEjecucionFechaHora;

        return $this;
    }


}
