<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcAtSecuencialTransaccion
 *
 * @ORM\Table(name="gc_at_secuencial_transaccion")
 * @ORM\Entity
 */
class GcAtSecuencialTransaccion
{
    /**
     * @var int
     *
     * @ORM\Column(name="at_tr_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $atTrId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="td_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tdId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="at_st_id", type="string", length=10, nullable=false, options={"default"="'0'"})
     */
    private $atStId = '\'0\'';

    public function getAtTrId(): ?string
    {
        return $this->atTrId;
    }

    public function getTdId(): ?string
    {
        return $this->tdId;
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

    public function getAtStId(): ?string
    {
        return $this->atStId;
    }

    public function setAtStId(string $atStId): self
    {
        $this->atStId = $atStId;

        return $this;
    }


}
