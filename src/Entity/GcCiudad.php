<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCiudad
 *
 * @ORM\Table(name="gc_ciudad", indexes={@ORM\Index(name="indice_ciudadpais", columns={"pa_id", "ci_id"})})
 * @ORM\Entity
 */
class GcCiudad
{
    /**
     * @var int
     *
     * @ORM\Column(name="ci_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ciId;

    /**
     * @var int
     *
     * @ORM\Column(name="pa_id", type="bigint", nullable=false)
     */
    private $paId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ci_nombre", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $ciNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ci_observacion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $ciObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ci_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $ciEstado = '\'C\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ci_codigo_area", type="string", length=5, nullable=false, options={"default"="'*'"})
     */
    private $ciCodigoArea = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="zo_id", type="bigint", nullable=false, options={"default"="1"})
     */
    private $zoId = '1';

    public function getCiId(): ?string
    {
        return $this->ciId;
    }

    public function getPaId(): ?string
    {
        return $this->paId;
    }

    public function setPaId(string $paId): self
    {
        $this->paId = $paId;

        return $this;
    }

    public function getCiNombre(): ?string
    {
        return $this->ciNombre;
    }

    public function setCiNombre(string $ciNombre): self
    {
        $this->ciNombre = $ciNombre;

        return $this;
    }

    public function getCiObservacion(): ?string
    {
        return $this->ciObservacion;
    }

    public function setCiObservacion(string $ciObservacion): self
    {
        $this->ciObservacion = $ciObservacion;

        return $this;
    }

    public function getCiEstado(): ?string
    {
        return $this->ciEstado;
    }

    public function setCiEstado(string $ciEstado): self
    {
        $this->ciEstado = $ciEstado;

        return $this;
    }

    public function getCiCodigoArea(): ?string
    {
        return $this->ciCodigoArea;
    }

    public function setCiCodigoArea(string $ciCodigoArea): self
    {
        $this->ciCodigoArea = $ciCodigoArea;

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

    public function getZoId(): ?string
    {
        return $this->zoId;
    }

    public function setZoId(string $zoId): self
    {
        $this->zoId = $zoId;

        return $this;
    }


}
