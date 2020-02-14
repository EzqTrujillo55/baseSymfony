<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcZona
 *
 * @ORM\Table(name="gc_zona")
 * @ORM\Entity
 */
class GcZona
{
    /**
     * @var int
     *
     * @ORM\Column(name="zo_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $zoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="zo_nombre", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $zoNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="zo_observacion", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $zoObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="zo_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $zoEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getZoId(): ?string
    {
        return $this->zoId;
    }

    public function getZoNombre(): ?string
    {
        return $this->zoNombre;
    }

    public function setZoNombre(string $zoNombre): self
    {
        $this->zoNombre = $zoNombre;

        return $this;
    }

    public function getZoObservacion(): ?string
    {
        return $this->zoObservacion;
    }

    public function setZoObservacion(string $zoObservacion): self
    {
        $this->zoObservacion = $zoObservacion;

        return $this;
    }

    public function getZoEstado(): ?string
    {
        return $this->zoEstado;
    }

    public function setZoEstado(string $zoEstado): self
    {
        $this->zoEstado = $zoEstado;

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
