<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcComprobanteUtilidad
 *
 * @ORM\Table(name="gc_comprobante_utilidad")
 * @ORM\Entity
 */
class GcComprobanteUtilidad
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
     * @ORM\Column(name="co_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $coId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="co_fecha", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $coFecha = '\'2000-01-01\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getCoId(): ?string
    {
        return $this->coId;
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
