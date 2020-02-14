<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCargo
 *
 * @ORM\Table(name="gc_cargo", indexes={@ORM\Index(name="indice_cargo", columns={"em_id", "cr_id"})})
 * @ORM\Entity
 */
class GcCargo
{
    /**
     * @var int
     *
     * @ORM\Column(name="cr_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $crId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cr_nombre", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $crNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cr_observacion", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $crObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cr_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $crEstado = '\'C\'';

    public function getCrId(): ?string
    {
        return $this->crId;
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

    public function getCrNombre(): ?string
    {
        return $this->crNombre;
    }

    public function setCrNombre(string $crNombre): self
    {
        $this->crNombre = $crNombre;

        return $this;
    }

    public function getCrObservacion(): ?string
    {
        return $this->crObservacion;
    }

    public function setCrObservacion(string $crObservacion): self
    {
        $this->crObservacion = $crObservacion;

        return $this;
    }

    public function getCrEstado(): ?string
    {
        return $this->crEstado;
    }

    public function setCrEstado(string $crEstado): self
    {
        $this->crEstado = $crEstado;

        return $this;
    }


}
