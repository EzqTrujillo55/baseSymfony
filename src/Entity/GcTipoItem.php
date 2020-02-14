<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcTipoItem
 *
 * @ORM\Table(name="gc_tipo_item", indexes={@ORM\Index(name="indice_tipoitem", columns={"em_id", "ti_id"})})
 * @ORM\Entity
 */
class GcTipoItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="ti_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tiId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ti_codigo", type="string", length=50, nullable=true, options={"default"="'*'"})
     */
    private $tiCodigo = '\'*\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ti_nombre", type="string", length=255, nullable=true, options={"default"="'*'"})
     */
    private $tiNombre = '\'*\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ti_observacion", type="string", length=255, nullable=true, options={"default"="'*'"})
     */
    private $tiObservacion = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="ti_comision", type="float", precision=10, scale=0, nullable=false)
     */
    private $tiComision = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ti_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $tiEstado = '\'C\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ti_tipo", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $tiTipo = '\'*\'';

    public function getTiId(): ?string
    {
        return $this->tiId;
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

    public function getTiCodigo(): ?string
    {
        return $this->tiCodigo;
    }

    public function setTiCodigo(?string $tiCodigo): self
    {
        $this->tiCodigo = $tiCodigo;

        return $this;
    }

    public function getTiNombre(): ?string
    {
        return $this->tiNombre;
    }

    public function setTiNombre(?string $tiNombre): self
    {
        $this->tiNombre = $tiNombre;

        return $this;
    }

    public function getTiObservacion(): ?string
    {
        return $this->tiObservacion;
    }

    public function setTiObservacion(?string $tiObservacion): self
    {
        $this->tiObservacion = $tiObservacion;

        return $this;
    }

    public function getTiComision(): ?float
    {
        return $this->tiComision;
    }

    public function setTiComision(float $tiComision): self
    {
        $this->tiComision = $tiComision;

        return $this;
    }

    public function getTiEstado(): ?string
    {
        return $this->tiEstado;
    }

    public function setTiEstado(string $tiEstado): self
    {
        $this->tiEstado = $tiEstado;

        return $this;
    }

    public function getTiTipo(): ?string
    {
        return $this->tiTipo;
    }

    public function setTiTipo(string $tiTipo): self
    {
        $this->tiTipo = $tiTipo;

        return $this;
    }


}
