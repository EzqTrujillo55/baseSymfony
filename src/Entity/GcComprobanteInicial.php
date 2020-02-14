<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcComprobanteInicial
 *
 * @ORM\Table(name="gc_comprobante_inicial")
 * @ORM\Entity
 */
class GcComprobanteInicial
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
     * @var string
     *
     * @ORM\Column(name="co_periodo", type="string", length=10, nullable=false, options={"default"="''"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $coPeriodo = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="co_id", type="bigint", nullable=false)
     */
    private $coId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="co_fecha", type="datetime", nullable=false, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $coFecha = '\'0000-00-00 00:00:00\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getCoPeriodo(): ?string
    {
        return $this->coPeriodo;
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

    public function getCoFecha(): ?\DateTimeInterface
    {
        return $this->coFecha;
    }

    public function setCoFecha(\DateTimeInterface $coFecha): self
    {
        $this->coFecha = $coFecha;

        return $this;
    }


}
