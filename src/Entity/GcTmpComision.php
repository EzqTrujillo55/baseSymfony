<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcTmpComision
 *
 * @ORM\Table(name="gc_tmp_comision")
 * @ORM\Entity
 */
class GcTmpComision
{
    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false, options={"default"="1"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $emId = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $faId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_de_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $faDeId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="it_id", type="bigint", nullable=false)
     */
    private $itId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cm_base", type="float", precision=10, scale=0, nullable=false)
     */
    private $cmBase = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cm_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $cmPorcentaje = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cm_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $cmValor = '0';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getFaId(): ?string
    {
        return $this->faId;
    }

    public function getFaDeId(): ?string
    {
        return $this->faDeId;
    }

    public function getItId(): ?string
    {
        return $this->itId;
    }

    public function setItId(string $itId): self
    {
        $this->itId = $itId;

        return $this;
    }

    public function getCmBase(): ?float
    {
        return $this->cmBase;
    }

    public function setCmBase(float $cmBase): self
    {
        $this->cmBase = $cmBase;

        return $this;
    }

    public function getCmPorcentaje(): ?float
    {
        return $this->cmPorcentaje;
    }

    public function setCmPorcentaje(float $cmPorcentaje): self
    {
        $this->cmPorcentaje = $cmPorcentaje;

        return $this;
    }

    public function getCmValor(): ?float
    {
        return $this->cmValor;
    }

    public function setCmValor(float $cmValor): self
    {
        $this->cmValor = $cmValor;

        return $this;
    }


}
