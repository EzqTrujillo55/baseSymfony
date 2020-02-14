<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcGarantia
 *
 * @ORM\Table(name="gc_garantia", indexes={@ORM\Index(name="IndiceSerie", columns={"em_id", "fa_tipo", "ga_numero_serie", "ga_estado"})})
 * @ORM\Entity
 */
class GcGarantia
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
     * @ORM\Column(name="ga_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $gaId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_id", type="bigint", nullable=false)
     */
    private $peId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_tipo", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $peTipo = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_id", type="bigint", nullable=false)
     */
    private $faId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_tipo", type="string", length=2, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $faTipo = '\'*\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ga_fecha_sistema", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $gaFechaSistema = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ga_fecha_vencimiento_garantia", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $gaFechaVencimientoGarantia = '\'1800-01-01 00:00:01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="it_id", type="bigint", nullable=false)
     */
    private $itId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ga_numero_serie", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $gaNumeroSerie = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ga_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $gaEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_de_id", type="bigint", nullable=false)
     */
    private $faDeId = '0';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getGaId(): ?string
    {
        return $this->gaId;
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

    public function getFaId(): ?string
    {
        return $this->faId;
    }

    public function setFaId(string $faId): self
    {
        $this->faId = $faId;

        return $this;
    }

    public function getFaTipo(): ?string
    {
        return $this->faTipo;
    }

    public function setFaTipo(string $faTipo): self
    {
        $this->faTipo = $faTipo;

        return $this;
    }

    public function getGaFechaSistema(): ?\DateTimeInterface
    {
        return $this->gaFechaSistema;
    }

    public function setGaFechaSistema(\DateTimeInterface $gaFechaSistema): self
    {
        $this->gaFechaSistema = $gaFechaSistema;

        return $this;
    }

    public function getGaFechaVencimientoGarantia(): ?\DateTimeInterface
    {
        return $this->gaFechaVencimientoGarantia;
    }

    public function setGaFechaVencimientoGarantia(\DateTimeInterface $gaFechaVencimientoGarantia): self
    {
        $this->gaFechaVencimientoGarantia = $gaFechaVencimientoGarantia;

        return $this;
    }

    public function getItId(): ?string
    {
        return $this->itId;
    }

    public function setItId(string $itId): self
    {
        $this->itId = $itId;

        return $this;
    }

    public function getGaNumeroSerie(): ?string
    {
        return $this->gaNumeroSerie;
    }

    public function setGaNumeroSerie(string $gaNumeroSerie): self
    {
        $this->gaNumeroSerie = $gaNumeroSerie;

        return $this;
    }

    public function getGaEstado(): ?string
    {
        return $this->gaEstado;
    }

    public function setGaEstado(string $gaEstado): self
    {
        $this->gaEstado = $gaEstado;

        return $this;
    }

    public function getFaDeId(): ?string
    {
        return $this->faDeId;
    }

    public function setFaDeId(string $faDeId): self
    {
        $this->faDeId = $faDeId;

        return $this;
    }


}
