<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCentroCostoEsquema
 *
 * @ORM\Table(name="gc_centro_costo_esquema", indexes={@ORM\Index(name="indice_centrocostoesquema", columns={"em_id", "ce_id"})})
 * @ORM\Entity
 */
class GcCentroCostoEsquema
{
    /**
     * @var int
     *
     * @ORM\Column(name="ce_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ceId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ce_codigo", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $ceCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ce_nombre", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $ceNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ce_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $ceEstado = '\'C\'';

    public function getCeId(): ?string
    {
        return $this->ceId;
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

    public function getCeCodigo(): ?string
    {
        return $this->ceCodigo;
    }

    public function setCeCodigo(string $ceCodigo): self
    {
        $this->ceCodigo = $ceCodigo;

        return $this;
    }

    public function getCeNombre(): ?string
    {
        return $this->ceNombre;
    }

    public function setCeNombre(string $ceNombre): self
    {
        $this->ceNombre = $ceNombre;

        return $this;
    }

    public function getCeEstado(): ?string
    {
        return $this->ceEstado;
    }

    public function setCeEstado(string $ceEstado): self
    {
        $this->ceEstado = $ceEstado;

        return $this;
    }


}
