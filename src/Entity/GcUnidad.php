<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcUnidad
 *
 * @ORM\Table(name="gc_unidad", indexes={@ORM\Index(name="indice_unidad", columns={"em_id", "un_id"})})
 * @ORM\Entity
 */
class GcUnidad
{
    /**
     * @var int
     *
     * @ORM\Column(name="un_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $unId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="un_codigo", type="string", length=50, nullable=true, options={"default"="'*'"})
     */
    private $unCodigo = '\'*\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="un_nombre", type="string", length=255, nullable=true, options={"default"="'*'"})
     */
    private $unNombre = '\'*\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="un_observacion", type="string", length=255, nullable=true, options={"default"="'*'"})
     */
    private $unObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="un_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $unEstado = '\'C\'';

    public function getUnId(): ?string
    {
        return $this->unId;
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

    public function getUnCodigo(): ?string
    {
        return $this->unCodigo;
    }

    public function setUnCodigo(?string $unCodigo): self
    {
        $this->unCodigo = $unCodigo;

        return $this;
    }

    public function getUnNombre(): ?string
    {
        return $this->unNombre;
    }

    public function setUnNombre(?string $unNombre): self
    {
        $this->unNombre = $unNombre;

        return $this;
    }

    public function getUnObservacion(): ?string
    {
        return $this->unObservacion;
    }

    public function setUnObservacion(?string $unObservacion): self
    {
        $this->unObservacion = $unObservacion;

        return $this;
    }

    public function getUnEstado(): ?string
    {
        return $this->unEstado;
    }

    public function setUnEstado(string $unEstado): self
    {
        $this->unEstado = $unEstado;

        return $this;
    }


}
