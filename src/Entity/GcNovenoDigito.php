<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcNovenoDigito
 *
 * @ORM\Table(name="gc_noveno_digito", uniqueConstraints={@ORM\UniqueConstraint(name="nd_id", columns={"nd_id"})}, indexes={@ORM\Index(name="nd_id_2", columns={"nd_id"})})
 * @ORM\Entity
 */
class GcNovenoDigito
{
    /**
     * @var int
     *
     * @ORM\Column(name="nd_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ndId;

    /**
     * @var float
     *
     * @ORM\Column(name="nd_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $ndValor = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="nd_fecha", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $ndFecha = '\'1800-01-01 00:00:01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getNdId(): ?string
    {
        return $this->ndId;
    }

    public function getNdValor(): ?float
    {
        return $this->ndValor;
    }

    public function setNdValor(float $ndValor): self
    {
        $this->ndValor = $ndValor;

        return $this;
    }

    public function getNdFecha(): ?\DateTimeInterface
    {
        return $this->ndFecha;
    }

    public function setNdFecha(\DateTimeInterface $ndFecha): self
    {
        $this->ndFecha = $ndFecha;

        return $this;
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


}
