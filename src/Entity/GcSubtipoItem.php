<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcSubtipoItem
 *
 * @ORM\Table(name="gc_subtipo_item", indexes={@ORM\Index(name="indice_subtipoitem", columns={"em_id", "st_id"})})
 * @ORM\Entity
 */
class GcSubtipoItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="st_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $stId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ti_id", type="bigint", nullable=false)
     */
    private $tiId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="st_codigo", type="string", length=50, nullable=true, options={"default"="'*'"})
     */
    private $stCodigo = '\'*\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="st_nombre", type="string", length=255, nullable=true, options={"default"="'*'"})
     */
    private $stNombre = '\'*\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="st_observacion", type="string", length=255, nullable=true, options={"default"="'*'"})
     */
    private $stObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="st_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $stEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="st_tiempo", type="integer", nullable=false)
     */
    private $stTiempo = '0';

    public function getStId(): ?string
    {
        return $this->stId;
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

    public function getTiId(): ?string
    {
        return $this->tiId;
    }

    public function setTiId(string $tiId): self
    {
        $this->tiId = $tiId;

        return $this;
    }

    public function getStCodigo(): ?string
    {
        return $this->stCodigo;
    }

    public function setStCodigo(?string $stCodigo): self
    {
        $this->stCodigo = $stCodigo;

        return $this;
    }

    public function getStNombre(): ?string
    {
        return $this->stNombre;
    }

    public function setStNombre(?string $stNombre): self
    {
        $this->stNombre = $stNombre;

        return $this;
    }

    public function getStObservacion(): ?string
    {
        return $this->stObservacion;
    }

    public function setStObservacion(?string $stObservacion): self
    {
        $this->stObservacion = $stObservacion;

        return $this;
    }

    public function getStEstado(): ?string
    {
        return $this->stEstado;
    }

    public function setStEstado(string $stEstado): self
    {
        $this->stEstado = $stEstado;

        return $this;
    }

    public function getStTiempo(): ?int
    {
        return $this->stTiempo;
    }

    public function setStTiempo(int $stTiempo): self
    {
        $this->stTiempo = $stTiempo;

        return $this;
    }


}
