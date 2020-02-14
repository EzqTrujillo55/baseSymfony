<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcDepreciacionRealizada
 *
 * @ORM\Table(name="gc_depreciacion_realizada")
 * @ORM\Entity
 */
class GcDepreciacionRealizada
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
     * @ORM\Column(name="dr_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $drId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="dr_tipo", type="string", length=10, nullable=false, options={"default"="'N'"})
     */
    private $drTipo = '\'N\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dr_fecha", type="datetime", nullable=false, options={"default"="'2000-01-01 00:00:01'"})
     */
    private $drFecha = '\'2000-01-01 00:00:01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="dr_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $drEstado = '\'C\'';

    /**
     * @var float
     *
     * @ORM\Column(name="dr_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $drValor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="dr_observacion", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $drObservacion = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="co_id", type="bigint", nullable=false)
     */
    private $coId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="de_id", type="bigint", nullable=false)
     */
    private $deId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="co_id_ajuste_niif", type="bigint", nullable=false)
     */
    private $coIdAjusteNiif = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dr_fecha_inicial", type="date", nullable=false, options={"default"="'1900-01-01'"})
     */
    private $drFechaInicial = '\'1900-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dr_fecha_final", type="date", nullable=false, options={"default"="'1900-01-01'"})
     */
    private $drFechaFinal = '\'1900-01-01\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getDrId(): ?string
    {
        return $this->drId;
    }

    public function getDrTipo(): ?string
    {
        return $this->drTipo;
    }

    public function setDrTipo(string $drTipo): self
    {
        $this->drTipo = $drTipo;

        return $this;
    }

    public function getDrFecha(): ?\DateTimeInterface
    {
        return $this->drFecha;
    }

    public function setDrFecha(\DateTimeInterface $drFecha): self
    {
        $this->drFecha = $drFecha;

        return $this;
    }

    public function getDrEstado(): ?string
    {
        return $this->drEstado;
    }

    public function setDrEstado(string $drEstado): self
    {
        $this->drEstado = $drEstado;

        return $this;
    }

    public function getDrValor(): ?float
    {
        return $this->drValor;
    }

    public function setDrValor(float $drValor): self
    {
        $this->drValor = $drValor;

        return $this;
    }

    public function getDrObservacion(): ?string
    {
        return $this->drObservacion;
    }

    public function setDrObservacion(string $drObservacion): self
    {
        $this->drObservacion = $drObservacion;

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

    public function getDeId(): ?string
    {
        return $this->deId;
    }

    public function setDeId(string $deId): self
    {
        $this->deId = $deId;

        return $this;
    }

    public function getCoIdAjusteNiif(): ?string
    {
        return $this->coIdAjusteNiif;
    }

    public function setCoIdAjusteNiif(string $coIdAjusteNiif): self
    {
        $this->coIdAjusteNiif = $coIdAjusteNiif;

        return $this;
    }

    public function getDrFechaInicial(): ?\DateTimeInterface
    {
        return $this->drFechaInicial;
    }

    public function setDrFechaInicial(\DateTimeInterface $drFechaInicial): self
    {
        $this->drFechaInicial = $drFechaInicial;

        return $this;
    }

    public function getDrFechaFinal(): ?\DateTimeInterface
    {
        return $this->drFechaFinal;
    }

    public function setDrFechaFinal(\DateTimeInterface $drFechaFinal): self
    {
        $this->drFechaFinal = $drFechaFinal;

        return $this;
    }


}
