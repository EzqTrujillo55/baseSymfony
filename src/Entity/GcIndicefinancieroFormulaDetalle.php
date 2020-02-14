<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcIndicefinancieroFormulaDetalle
 *
 * @ORM\Table(name="gc_indicefinanciero_formula_detalle")
 * @ORM\Entity
 */
class GcIndicefinancieroFormulaDetalle
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
     * @ORM\Column(name="if_de_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ifDeId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="if_id", type="bigint", nullable=false)
     */
    private $ifId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="if_de_campo", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $ifDeCampo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="if_de_tipo", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $ifDeTipo = '\'*\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getIfDeId(): ?string
    {
        return $this->ifDeId;
    }

    public function getIfId(): ?string
    {
        return $this->ifId;
    }

    public function setIfId(string $ifId): self
    {
        $this->ifId = $ifId;

        return $this;
    }

    public function getIfDeCampo(): ?string
    {
        return $this->ifDeCampo;
    }

    public function setIfDeCampo(string $ifDeCampo): self
    {
        $this->ifDeCampo = $ifDeCampo;

        return $this;
    }

    public function getIfDeTipo(): ?string
    {
        return $this->ifDeTipo;
    }

    public function setIfDeTipo(string $ifDeTipo): self
    {
        $this->ifDeTipo = $ifDeTipo;

        return $this;
    }


}
