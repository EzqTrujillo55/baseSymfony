<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcTablaTransaccion
 *
 * @ORM\Table(name="gc_tabla_transaccion")
 * @ORM\Entity
 */
class GcTablaTransaccion
{
    /**
     * @var int
     *
     * @ORM\Column(name="tb_tr_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tbTrId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tb_tr_tabla", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $tbTrTabla = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false, options={"default"="1"})
     */
    private $emId = '1';

    public function getTbTrId(): ?int
    {
        return $this->tbTrId;
    }

    public function getTbTrTabla(): ?string
    {
        return $this->tbTrTabla;
    }

    public function setTbTrTabla(string $tbTrTabla): self
    {
        $this->tbTrTabla = $tbTrTabla;

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
