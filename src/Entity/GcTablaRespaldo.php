<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcTablaRespaldo
 *
 * @ORM\Table(name="gc_tabla_respaldo")
 * @ORM\Entity
 */
class GcTablaRespaldo
{
    /**
     * @var int
     *
     * @ORM\Column(name="tr_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $trId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tr_tabla", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $trTabla = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="tr_campo_fecha_registro", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $trCampoFechaRegistro = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false, options={"default"="1"})
     */
    private $emId = '1';

    public function getTrId(): ?int
    {
        return $this->trId;
    }

    public function getTrTabla(): ?string
    {
        return $this->trTabla;
    }

    public function setTrTabla(string $trTabla): self
    {
        $this->trTabla = $trTabla;

        return $this;
    }

    public function getTrCampoFechaRegistro(): ?string
    {
        return $this->trCampoFechaRegistro;
    }

    public function setTrCampoFechaRegistro(string $trCampoFechaRegistro): self
    {
        $this->trCampoFechaRegistro = $trCampoFechaRegistro;

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
