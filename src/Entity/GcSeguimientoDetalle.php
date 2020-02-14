<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcSeguimientoDetalle
 *
 * @ORM\Table(name="gc_seguimiento_detalle")
 * @ORM\Entity
 */
class GcSeguimientoDetalle
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
     * @ORM\Column(name="sg_de_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sgDeId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sg_id", type="bigint", nullable=false)
     */
    private $sgId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sa_id", type="bigint", nullable=false)
     */
    private $saId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_id", type="bigint", nullable=false)
     */
    private $mpId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sg_de_fecha", type="date", nullable=false, options={"default"="'2004-01-01'"})
     */
    private $sgDeFecha = '\'2004-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sg_de_Hora_Inicio", type="time", nullable=false, options={"default"="'00:00:01'"})
     */
    private $sgDeHoraInicio = '\'00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sg_de_Hora_Fin", type="time", nullable=false, options={"default"="'00:00:01'"})
     */
    private $sgDeHoraFin = '\'00:00:01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sg_de_incidente", type="string", length=150, nullable=false, options={"default"="'*'"})
     */
    private $sgDeIncidente = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sg_de_solucion", type="string", length=150, nullable=false, options={"default"="'*'"})
     */
    private $sgDeSolucion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sg_de_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $sgDeEstado = '\'C\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getSgDeId(): ?string
    {
        return $this->sgDeId;
    }

    public function getSgId(): ?string
    {
        return $this->sgId;
    }

    public function setSgId(string $sgId): self
    {
        $this->sgId = $sgId;

        return $this;
    }

    public function getSaId(): ?string
    {
        return $this->saId;
    }

    public function setSaId(string $saId): self
    {
        $this->saId = $saId;

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

    public function getSgDeFecha(): ?\DateTimeInterface
    {
        return $this->sgDeFecha;
    }

    public function setSgDeFecha(\DateTimeInterface $sgDeFecha): self
    {
        $this->sgDeFecha = $sgDeFecha;

        return $this;
    }

    public function getSgDeHoraInicio(): ?\DateTimeInterface
    {
        return $this->sgDeHoraInicio;
    }

    public function setSgDeHoraInicio(\DateTimeInterface $sgDeHoraInicio): self
    {
        $this->sgDeHoraInicio = $sgDeHoraInicio;

        return $this;
    }

    public function getSgDeHoraFin(): ?\DateTimeInterface
    {
        return $this->sgDeHoraFin;
    }

    public function setSgDeHoraFin(\DateTimeInterface $sgDeHoraFin): self
    {
        $this->sgDeHoraFin = $sgDeHoraFin;

        return $this;
    }

    public function getSgDeIncidente(): ?string
    {
        return $this->sgDeIncidente;
    }

    public function setSgDeIncidente(string $sgDeIncidente): self
    {
        $this->sgDeIncidente = $sgDeIncidente;

        return $this;
    }

    public function getSgDeSolucion(): ?string
    {
        return $this->sgDeSolucion;
    }

    public function setSgDeSolucion(string $sgDeSolucion): self
    {
        $this->sgDeSolucion = $sgDeSolucion;

        return $this;
    }

    public function getSgDeEstado(): ?string
    {
        return $this->sgDeEstado;
    }

    public function setSgDeEstado(string $sgDeEstado): self
    {
        $this->sgDeEstado = $sgDeEstado;

        return $this;
    }


}
