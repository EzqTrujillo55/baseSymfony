<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcPantallaMenuAccion
 *
 * @ORM\Table(name="gc_pantalla_menu_accion", indexes={@ORM\Index(name="pma_pm_id_2", columns={"pma_pm_id"})})
 * @ORM\Entity
 */
class GcPantallaMenuAccion
{
    /**
     * @var int
     *
     * @ORM\Column(name="pma_pm_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pmaPmId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pma_ac_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pmaAcId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getPmaPmId(): ?string
    {
        return $this->pmaPmId;
    }

    public function getPmaAcId(): ?string
    {
        return $this->pmaAcId;
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
