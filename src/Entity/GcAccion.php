<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcAccion
 *
 * @ORM\Table(name="gc_accion", uniqueConstraints={@ORM\UniqueConstraint(name="UniqueName", columns={"ac_nombre"})})
 * @ORM\Entity
 */
class GcAccion
{
    /**
     * @var int
     *
     * @ORM\Column(name="ac_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $acId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ac_nombre", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $acNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ac_descripcion", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $acDescripcion = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getAcId(): ?string
    {
        return $this->acId;
    }

    public function getAcNombre(): ?string
    {
        return $this->acNombre;
    }

    public function setAcNombre(string $acNombre): self
    {
        $this->acNombre = $acNombre;

        return $this;
    }

    public function getAcDescripcion(): ?string
    {
        return $this->acDescripcion;
    }

    public function setAcDescripcion(string $acDescripcion): self
    {
        $this->acDescripcion = $acDescripcion;

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
