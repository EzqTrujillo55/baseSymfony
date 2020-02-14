<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcPantallaProcesoautomatico
 *
 * @ORM\Table(name="gc_pantalla_procesoautomatico")
 * @ORM\Entity
 */
class GcPantallaProcesoautomatico
{
    /**
     * @var int
     *
     * @ORM\Column(name="pn_pa_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pnPaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pn_pa_nombre", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $pnPaNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pn_pa_proceso", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $pnPaProceso = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pn_pa_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $pnPaEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getPnPaId(): ?string
    {
        return $this->pnPaId;
    }

    public function getPnPaNombre(): ?string
    {
        return $this->pnPaNombre;
    }

    public function setPnPaNombre(string $pnPaNombre): self
    {
        $this->pnPaNombre = $pnPaNombre;

        return $this;
    }

    public function getPnPaProceso(): ?string
    {
        return $this->pnPaProceso;
    }

    public function setPnPaProceso(string $pnPaProceso): self
    {
        $this->pnPaProceso = $pnPaProceso;

        return $this;
    }

    public function getPnPaEstado(): ?string
    {
        return $this->pnPaEstado;
    }

    public function setPnPaEstado(string $pnPaEstado): self
    {
        $this->pnPaEstado = $pnPaEstado;

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
