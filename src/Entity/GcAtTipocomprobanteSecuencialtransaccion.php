<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcAtTipocomprobanteSecuencialtransaccion
 *
 * @ORM\Table(name="gc_at_tipocomprobante_secuencialtransaccion")
 * @ORM\Entity
 */
class GcAtTipocomprobanteSecuencialtransaccion
{
    /**
     * @var string
     *
     * @ORM\Column(name="at_tc_id", type="string", length=10, nullable=false, options={"default"="'0'"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $atTcId = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="at_st_id", type="string", length=10, nullable=false, options={"default"="'0'"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $atStId = '\'0\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="at_ts_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $atTsEstado = '\'C\'';

    public function getAtTcId(): ?string
    {
        return $this->atTcId;
    }

    public function getAtStId(): ?string
    {
        return $this->atStId;
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

    public function getAtTsEstado(): ?string
    {
        return $this->atTsEstado;
    }

    public function setAtTsEstado(string $atTsEstado): self
    {
        $this->atTsEstado = $atTsEstado;

        return $this;
    }


}
