<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpresaPaisManejo
 *
 * @ORM\Table(name="gc_empresa_pais_manejo")
 * @ORM\Entity
 */
class GcEmpresaPaisManejo
{
    /**
     * @var int
     *
     * @ORM\Column(name="em_pa_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $emPaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="em_pa_ma_nombre", type="string", length=255, nullable=false, options={"default"="''"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $emPaMaNombre = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_pa_ma_rotulo", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $emPaMaRotulo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_pa_ma_tooltip", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $emPaMaTooltip = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getEmPaId(): ?string
    {
        return $this->emPaId;
    }

    public function getEmPaMaNombre(): ?string
    {
        return $this->emPaMaNombre;
    }

    public function getEmPaMaRotulo(): ?string
    {
        return $this->emPaMaRotulo;
    }

    public function setEmPaMaRotulo(string $emPaMaRotulo): self
    {
        $this->emPaMaRotulo = $emPaMaRotulo;

        return $this;
    }

    public function getEmPaMaTooltip(): ?string
    {
        return $this->emPaMaTooltip;
    }

    public function setEmPaMaTooltip(string $emPaMaTooltip): self
    {
        $this->emPaMaTooltip = $emPaMaTooltip;

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
