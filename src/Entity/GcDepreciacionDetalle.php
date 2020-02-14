<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcDepreciacionDetalle
 *
 * @ORM\Table(name="gc_depreciacion_detalle")
 * @ORM\Entity
 */
class GcDepreciacionDetalle
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
     * @ORM\Column(name="de_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $deId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="de_de_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $deDeId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="de_de_fecha", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $deDeFecha = '\'1800-01-01 00:00:01\'';

    /**
     * @var float
     *
     * @ORM\Column(name="de_de_monto", type="float", precision=10, scale=0, nullable=false)
     */
    private $deDeMonto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="de_de_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $deDeEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="co_id", type="bigint", nullable=false)
     */
    private $coId = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="de_de_prioridad_necniif", type="boolean", nullable=false)
     */
    private $deDePrioridadNecniif = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="de_rv_id", type="bigint", nullable=false)
     */
    private $deRvId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="de_de_monto_ajuste_niif", type="float", precision=10, scale=0, nullable=false)
     */
    private $deDeMontoAjusteNiif = '0';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getDeId(): ?string
    {
        return $this->deId;
    }

    public function getDeDeId(): ?string
    {
        return $this->deDeId;
    }

    public function getDeDeFecha(): ?\DateTimeInterface
    {
        return $this->deDeFecha;
    }

    public function setDeDeFecha(\DateTimeInterface $deDeFecha): self
    {
        $this->deDeFecha = $deDeFecha;

        return $this;
    }

    public function getDeDeMonto(): ?float
    {
        return $this->deDeMonto;
    }

    public function setDeDeMonto(float $deDeMonto): self
    {
        $this->deDeMonto = $deDeMonto;

        return $this;
    }

    public function getDeDeEstado(): ?string
    {
        return $this->deDeEstado;
    }

    public function setDeDeEstado(string $deDeEstado): self
    {
        $this->deDeEstado = $deDeEstado;

        return $this;
    }

    public function getCoId(): ?string
    {
        return $this->coId;
    }

    public function setCoId(string $coId): self
    {
        $this->coId = $coId;

        return $this;
    }

    public function getDeDePrioridadNecniif(): ?bool
    {
        return $this->deDePrioridadNecniif;
    }

    public function setDeDePrioridadNecniif(bool $deDePrioridadNecniif): self
    {
        $this->deDePrioridadNecniif = $deDePrioridadNecniif;

        return $this;
    }

    public function getDeRvId(): ?string
    {
        return $this->deRvId;
    }

    public function setDeRvId(string $deRvId): self
    {
        $this->deRvId = $deRvId;

        return $this;
    }

    public function getDeDeMontoAjusteNiif(): ?float
    {
        return $this->deDeMontoAjusteNiif;
    }

    public function setDeDeMontoAjusteNiif(float $deDeMontoAjusteNiif): self
    {
        $this->deDeMontoAjusteNiif = $deDeMontoAjusteNiif;

        return $this;
    }


}
