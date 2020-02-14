<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCierrePeriodo
 *
 * @ORM\Table(name="gc_cierre_periodo", indexes={@ORM\Index(name="indice_cierre_periodo", columns={"em_id", "cp_periodo"})})
 * @ORM\Entity
 */
class GcCierrePeriodo
{
    /**
     * @var int
     *
     * @ORM\Column(name="cp_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cpId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cp_periodo", type="bigint", nullable=false)
     */
    private $cpPeriodo = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cp_mes", type="smallint", nullable=false)
     */
    private $cpMes = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cp_fecha", type="date", nullable=false, options={"default"="'1900-01-01'"})
     */
    private $cpFecha = '\'1900-01-01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $cpEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="co_id", type="bigint", nullable=false)
     */
    private $coId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="co_numero", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $coNumero = '\'*\'';

    public function getCpId(): ?string
    {
        return $this->cpId;
    }

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function setEmId(string $emId): self
    {
        $this->emId = $emId;

        return $this;
    }

    public function getCpPeriodo(): ?string
    {
        return $this->cpPeriodo;
    }

    public function setCpPeriodo(string $cpPeriodo): self
    {
        $this->cpPeriodo = $cpPeriodo;

        return $this;
    }

    public function getCpMes(): ?int
    {
        return $this->cpMes;
    }

    public function setCpMes(int $cpMes): self
    {
        $this->cpMes = $cpMes;

        return $this;
    }

    public function getCpFecha(): ?\DateTimeInterface
    {
        return $this->cpFecha;
    }

    public function setCpFecha(\DateTimeInterface $cpFecha): self
    {
        $this->cpFecha = $cpFecha;

        return $this;
    }

    public function getCpEstado(): ?string
    {
        return $this->cpEstado;
    }

    public function setCpEstado(string $cpEstado): self
    {
        $this->cpEstado = $cpEstado;

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

    public function getCoNumero(): ?string
    {
        return $this->coNumero;
    }

    public function setCoNumero(string $coNumero): self
    {
        $this->coNumero = $coNumero;

        return $this;
    }


}
